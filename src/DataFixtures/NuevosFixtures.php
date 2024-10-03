<?php

namespace App\DataFixtures;

use App\Entity\Usuario;
use App\Entity\Direccion;
use App\Entity\Libro;
use App\Entity\Reseña;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory as FakerFactory;

class NuevosFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Crear Faker
        $faker = FakerFactory::create();
        
        $usuarios = [];
        $libros = [];

        // Generar y persistir datos para Direccion y Usuario
        for ($i = 0; $i < 10; $i++) {
            // Crear dirección ficticia
            $direccion = new Direccion();
            $direccion->setDireccion($faker->streetAddress);
            $direccion->setLocalidad($faker->state);
            $direccion->setCiudad($faker->city);
            $manager->persist($direccion);

            // Crear usuario ficticio
            $usuario = new Usuario();
            $usuario->setNombre($faker->firstName);
            $usuario->setApellido($faker->lastName);
            $usuario->setCorreo($faker->email);
            $usuario->setDireccion($direccion);
            $manager->persist($usuario);

            // Guardar el usuario para usarlo más tarde en las reseñas
            $usuarios[] = $usuario;

            // Crear libro ficticio
            $libro = new Libro();
            $libro->setTitulo($faker->sentence(3));
            $libro->setAutor($faker->name);
            $libro->setPublicado($faker->dateTimeBetween('-10 years', 'now'));
            $libro->setImagen($faker->imageUrl(640, 480, 'books', true));
            $manager->persist($libro);

            // Guardar el libro para usarlo más tarde en las reseñas
            $libros[] = $libro;
        }

        // Generar y persistir reseñas
        for ($i = 0; $i < 9; $i++) {
            $reseña = new Reseña();
            $reseña->setUsuario($faker->randomElement($usuarios));
            $reseña->setLibro($faker->randomElement($libros));
            $reseña->setContenido($faker->paragraph);
            $reseña->setPublicado($faker->dateTimeBetween('-2 years', 'now'));
            $manager->persist($reseña);
        }

        // Persistir todos los cambios en la base de datos
        $manager->flush();

        echo "Datos generados y guardados correctamente.\n";
    }
}

//comando para generar 'php bin/console doctrine:fixtures:load'
//comando para ejecutar phpstan 'vendor/bin/phpstan analyse'
