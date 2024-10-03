CREATE TABLE usuario 
(
    id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, 
    id_direccion_id INTEGER NOT NULL, 
    nombre VARCHAR(50) DEFAULT NULL, 
    apellido VARCHAR(50) DEFAULT NULL, 
    correo VARCHAR(70) DEFAULT NULL, 
    CONSTRAINT FK_EF687F22ECB0EA5 FOREIGN KEY 
    (id_direccion_id) REFERENCES direccion (id) 
    NOT DEFERRABLE INITIALLY IMMEDIATE
);

CREATE UNIQUE INDEX UNIQ_EF687F22ECB0EA5 ON usuario (id_direccion_id);


INSERT INTO usuario (direccion_id, nombre, apellido) 
    VALUES(1, "Camilo", "Hernandez");
INSERT INTO usuario (direccion_id, nombre, apellido) 
    VALUES (2, "Duvan", "Hernandez");
INSERT INTO usuario (direccion_id, nombre, apellido) 
    VALUES (3, "Daniel", "Tafur");
INSERT INTO usuario (direccion_id, nombre, apellido) 
    VALUES (4, "Daniela", "Vega");
INSERT INTO usuario (direccion_id, nombre, apellido) 
    VALUES (5, "Camila", "Cano");
INSERT INTO usuario (direccion_id, nombre, apellido) 
    VALUES (6, "Ximena", "Viuche");
INSERT INTO usuario (direccion_id, nombre, apellido) 
    VALUES (7, "Rosa", "Lopez");
INSERT INTO usuario (direccion_id, nombre, apellido) 
    VALUES (8, "Ivan", "Tafur");
INSERT INTO usuario (direccion_id, nombre, apellido) 
    VALUES (9, "Emma", "Cano");
INSERT INTO usuario (direccion_id, nombre, apellido) 
    VALUES (10, "Maick", "Contreras");
INSERT INTO usuario (direccion_id, nombre, apellido) 
    VALUES (11, "Henry", "Mendez");
INSERT INTO usuario (direccion_id, nombre, apellido) 
    VALUES (12, "Edisson", "Espitia");
INSERT INTO usuario (direccion_id, nombre, apellido) 
    VALUES (13, "Joan", "Sanchez");
INSERT INTO usuario (direccion_id, nombre, apellido) 
    VALUES (14, "Nora", "Mendez");
