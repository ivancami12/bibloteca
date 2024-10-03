CREATE TABLE reseña 
(
    id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, 
    id_usuario_id INTEGER NOT NULL, 
    id_libro_id INTEGER NOT NULL, 
    contenido CLOB DEFAULT NULL, 
    publicado DATE DEFAULT NULL, 
    CONSTRAINT FK_58AAFB957EB2C349 FOREIGN KEY (id_usuario_id) 
    REFERENCES usuarios (id) NOT DEFERRABLE INITIALLY IMMEDIATE, 
    CONSTRAINT FK_58AAFB9590F869B7 FOREIGN KEY (id_libro_id) 
    REFERENCES libro (id) NOT DEFERRABLE INITIALLY IMMEDIATE
);

CREATE INDEX IDX_58AAFB957EB2C349 ON reseña (id_usuario_id);
CREATE INDEX IDX_58AAFB9590F869B7 ON reseña (id_libro_id);


INSERT INTO reseña (usuario_id, libro_id, contenido, publicado) 
    VALUES(2, 1, "cartas de amor a los muertos estuvo muy interesante, Me encantó el libro, es de los mejores que he leído hasta ahora, al principio creí que iba a ser un libro fantasioso y ridículo, pero es todo lo contrario.", "08-08-2024");
INSERT INTO reseña (usuario_id, libro_id, contenido, publicado) 
    VALUES (1, 3, "Amo el tipo de literatura del escritor Mario Mendoza, este libro lo leí en 3 días me encantó, que gran historia, en cada capítulo vas conociendo al protagonista, te cuestionas, la historia te lleva por un recorrido de todo tipo de emociones. Ame este libro", "08-08-2024");
INSERT INTO reseña (usuario_id, libro_id, contenido, publicado)
    VALUES (3, 3, "Como siempre Mario Mendoza  sorprendiéndonos  y enganchandonos en sus libros en sus novelas y cabe resaltar  que este libro también fue uno de ellos q te llevan a ese mundo de principio  a fin simplemente  bueno se recomienda  bastante.", "08-05-2024" );
INSERT INTO reseña (usuario_id, libro_id, contenido, publicado) 
    VALUES (1, 10, "Me gusto este libro porque es corto y te mete en el personaje no es algo se puede hacer realidad pero cuando se creo ese libro habian muchas gerras cosas ect . Por eso tiene ese trama me gusta como se dearrolla y como dice cada detalle. Lo recomiendo ya que leer influye mas a la mente.","24-08-2023");
INSERT INTO reseña (usuario_id, libro_id, contenido, publicado)
    VALUES (7, 6,  "Espectacular libro que nos brinda la posibilidad de aprender a adaptarnos al medio en que nuestro destino  nos lleva a vivir, lectura fundamental en la formación de los jóvenes.", "10-07-2024");
INSERT INTO reseña (usuario_id, libro_id, contenido, publicado)
    VALUES (5, 5,  "Es verdad que García Márquez fue un gran escritor, su estilo es único, fue un hombre con mucho conocimiento,  En este libro de cien años de soledad lo demuestra bastante bien.", "20-07-2024");


                                                                                                                                                                                                                        
                                                                                                                                                                                                                       
                                                                                                                                                                                                                        