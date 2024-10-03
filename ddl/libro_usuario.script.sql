
CREATE TABLE libro_usuario 
(
    id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, 
    id_usuario_id INTEGER DEFAULT NULL, 
    id_libro_id INTEGER NOT NULL, 
    prestamo DATE DEFAULT NULL, 
    devolucion DATE DEFAULT NULL, 
    CONSTRAINT FK_6417C9DE7EB2C349 FOREIGN KEY (id_usuario_id) 
    REFERENCES usuarios (id) NOT DEFERRABLE INITIALLY IMMEDIATE, 
    CONSTRAINT FK_6417C9DE90F869B7 FOREIGN KEY (id_libro_id) 
    REFERENCES libro (id) NOT DEFERRABLE INITIALLY IMMEDIATE
);

CREATE UNIQUE INDEX UNIQ_6417C9DE7EB2C349 ON libro_usuario (id_usuario_id);
CREATE UNIQUE INDEX UNIQ_6417C9DE90F869B7 ON libro_usuario (id_libro_id);


INSERT INTO libro_usuario (usuario_id, libro_id, prestamo, devolucion) 
    VALUES(1, 1, "2024-02-21", "2024-03-21");
INSERT INTO libro_usuario (usuario_id, libro_id, prestamo) 
    VALUES(2, 2, "2024-05-24");
INSERT INTO libro_usuario (usuario_id, libro_id, prestamo, devolucion) 
    VALUES(3, 3, "2024-05-20", "2024-06-21");
INSERT INTO libro_usuario (usuario_id, libro_id, prestamo, devolucion) 
    VALUES(4, 4, "2024-03-05", "2024-04-06");
INSERT INTO libro_usuario (usuario_id, libro_id, prestamo, devolucion) 
    VALUES(5, 5, "2024-05-19", "2024-05-24");
INSERT INTO libro_usuario (usuario_id, libro_id, prestamo, devolucion) 
    VALUES(6, 12, "2024-04-12", "2024-05-24");
INSERT INTO libro_usuario (usuario_id, libro_id, prestamo) 
    VALUES(7, 10, "2024-05-24");
INSERT INTO libro_usuario (usuario_id, libro_id, prestamo, devolucion) 
    VALUES(8, 6, "2024-04-23", "2024-05-24");
INSERT INTO libro_usuario (usuario_id, libro_id, prestamo, devolucion) 
    VALUES(9, 7, "2024-04-24", "2024-05-24");
INSERT INTO libro_usuario (usuario_id, libro_id, prestamo) 
    VALUES(10, 8, "2024-05-15");
INSERT INTO libro_usuario (usuario_id, libro_id, prestamo) 
    VALUES(11, 9, "2024-05-24");
INSERT INTO libro_usuario (usuario_id, libro_id, prestamo) 
    VALUES(12, 11, "2024-05-24");
INSERT INTO libro_usuario (usuario_id, libro_id, prestamo, devolucion) 
    VALUES(13, 13, "2024-05-30", "2024-06-5");
INSERT INTO libro_usuario (usuario_id, libro_id, prestamo, devolucion) 
    VALUES(14, 14, "2024-05-30", "2024-06-5");