<?php

namespace App\Controller;

use App\Entity\Libro;
use App\Entity\Reseña;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UsuarioRepository;
use App\Repository\LibroRepository;
use App\Repository\LibroUsuarioRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\NuevaRecomendacionType;


class BiblotecarioController extends AbstractController
{
    private UsuarioRepository $usuarioRepository;
    private LibroRepository $libroRepository;
    private LibroUsuarioRepository $librousuarioRepository;

    public function __construct(UsuarioRepository $usuarioRepository, LibroRepository $libroRepository, LibroUsuarioRepository $librousuarioRepository)
    {
        $this->usuarioRepository = $usuarioRepository;
        $this->libroRepository = $libroRepository;
        $this->librousuarioRepository = $librousuarioRepository;
    }

    #[Route('/biblotecario', name: 'app_biblotecario')]
    public function index(): Response
    {
        // Aquí obtienes los datos de los repositorios
        $query = $this->librousuarioRepository->consultar_prestamos(); 
        $usuarioCount = $this->usuarioRepository->count([]);
        $libroCount = $this->libroRepository->count([]);
        $resultado = $this->libroRepository->lista_libro();

        // Renderiza la vista con los datos obtenidos
        return $this->render('biblotecario/index.html.twig', [
            'controller_name' => 'BiblotecarioController',  
            'usuarioCount' => $usuarioCount,
            'libroCount' => $libroCount,
            'queryCount' => $query,
            'lista_libro' => $resultado,
        ]);
    }

    #[Route("/recomendaciones", name: "recomendaciones")]
    public function recomendacion(): Response
    {
        $libroRepository = $this->libroRepository; // Usar el repositorio ya inyectado
    
        // Obtener libros recomendados (puedes personalizar la lógica aquí)
        $librosRecomendados = $libroRepository->findBy([], ['id' => 'DESC'], 5); // Ejemplo: obtener los 5 libros más recientes
    
        // Renderizar la vista con los libros recomendados
        return $this->render('biblotecario/recomendacion.html.twig', [
            'libros' => $librosRecomendados,
        ]);
    }

    #[Route('/opinion', name: 'app_opinion')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $opinion = new Reseña();
        $form = $this->createForm(NuevaRecomendacionType::class, $opinion);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($opinion);
            $entityManager->flush();

            return $this->redirectToRoute('app_opinion'); // Cambia a tu ruta deseada
        }

        return $this->render('biblotecario/nueva.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
