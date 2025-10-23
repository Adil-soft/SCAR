
/*usar la base de datos scar:*/
use scar;
drop table Evento;
/*crear tabla de eventos*/
CREATE TABLE Evento(
    id INT PRIMARY KEY AUTO_INCREMENT,
    responsable VARCHAR(50),
    nombre VARCHAR(100) NOT NULL,
    fecha DATE NOT NULL,
    direccion VARCHAR(100),
    descripcion TEXT,
    publicarsino BOOLEAN DEFAULT 0
);

INSERT INTO Evento(responsable,nombre, fecha,direccion, descripcion)
VALUES ('jose','Mi Evento', '2023-08-24', 'cordoba','Descripción del evento');
INSERT INTO Evento (responsable,nombre, fecha,direccion, descripcion)
VALUES ('maria','Mi Evento2', '2023-08-24', 'sevilla','Descripción del evento');
