CREATE TABLE accessoAPPIAM(
    id_clave INT PRIMARY KEY AUTO_INCREMENT,
    clave VARCHAR(5),
    nombre_usuario VARCHAR(30),
    id_clave_persona INT,
    FOREIGN KEY (id_clave_persona) REFERENCES Matriculados(id)
);
