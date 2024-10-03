CREATE TABLE libro 
(
    id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, 
    titulo VARCHAR(50) DEFAULT NULL, 
    autor VARCHAR(50) DEFAULT NULL, 
    publicado DATE DEFAULT NULL, 
    imagen VARCHAR(255) DEFAULT NULL
);

INSERT INTO libro (titulo, autor, publicado) 
    VALUES ("cartas de amor a los muertos", "Ava Dellaira", "01-04-2014");
INSERT INTO libro (titulo, autor, publicado)
    VALUES ("Satanas", "Mario Mendoza", "01-01-2002");
INSERT INTO libro (titulo, autor, publicado)
    VALUES ("Relato de un asesino", "Mario Mendoza", "01-01-2001");
INSERT INTO libro (titulo, autor, publicado)
    VALUES ("La ciudad de los umbrales", "Mario Mendoza", "01-01-1994");
INSERT INTO libro (titulo, autor, publicado)
    VALUES ("Cien años de soledad", "Gabriel García Márquez", "01-05-1967");
INSERT INTO libro (titulo, autor, publicado)
    VALUES ("La isla misteriosa", "Julio Verne", "01-01-1875");
INSERT INTO libro (titulo, autor, publicado)
    VALUES ("los hijos del capitán Grant", "Julio Verne", "05-12-1867");
INSERT INTO libro (titulo, autor, publicado)
    VALUES ("Dueño del mundo", "Julio Verne", "01-01-1904");
INSERT INTO libro (titulo, autor, publicado)
    VALUES ("De la tierra  a la luna", "Julio Verne", "01-01-1965");
INSERT INTO libro (titulo, autor, publicado)
    VALUES ("El nombre del viento", "Patrick Rothfuss", "01-01-2007"); 
INSERT INTO libro (titulo, autor, publicado)
    VALUES ("Amantes de libros", "Emily Henry", "28-03-2022");
INSERT INTO libro (titulo, autor, publicado)
    VALUES ("La vida como un circo", "Urla Angela Poppe", "07-12-2015");
INSERT INTO libro (titulo, autor, publicado)
    VALUES ("La metamorfosis", "Franz Kafka", "01-01-1915");
INSERT INTO libro (titulo, autor, publicado)
    VALUES ("Que sea amor del bueno", "Marta Martínez Novoa", "01-01-2022");
INSERT INTO libro (titulo, autor, publicado)
    VALUES ("El principito", "Antoine de Saint-Exupéry", "01-01-1943");
INSERT INTO libro (titulo, autor, publicado)
    VALUES ("Ciudadela", "Antoine de Saint-Exupéry", "01-01-1948");
INSERT INTO libro (titulo, autor, publicado)
    VALUES ("Yo, robot", "Isaac Asimov", "01-01-1950");
INSERT INTO libro (titulo, autor, publicado)
    VALUES ("La guerra de los robots", "Francisco Rubio", "01-04-2021");
INSERT INTO libro (titulo, autor, publicado)
    VALUES ( "El amor no duele", "Montse Barderi", "22-08-2016");
INSERT INTO libro (titulo, autor, publicado)
    VALUES ( "El bosque de los susurros", "Aníbal Plazas","01-01-2006");
INSERT INTO libro (titulo, autor, publicado)
    VALUES ("El resplandor", "Stephen King", "01-01-1977");
INSERT INTO libro (titulo, autor, publicado)
    VALUES ("it", "Stephen King", "01-01-1986");
INSERT INTO libro (titulo, autor, publicado)
    VALUES ("Cementerio de animales", "Stephen King", "01-01-1983");
INSERT INTO libro (titulo, autor, publicado)
    VALUES ("El planeta de los simios", "Pierre Boulle", "01-01-1963");
INSERT INTO libro (titulo, autor, publicado) 
    VALUES ("El último hombre", "Mary Shelley", "01-01-1826");
INSERT INTO libro (titulo, autor, publicado)
    VALUES ("Estación Once", "Emily St. Madel", "01-01-2014");