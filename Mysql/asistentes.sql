/* crear tabla de matriculados en eventos del sistema scar:*/
use scar;
CREATE TABLE Matriculados(
    id INT AUTO_INCREMENT PRIMARY KEY,
    dni_nie_pasaporte VARCHAR(100),
    nombre VARCHAR(50),
    apellido VARCHAR(50),
    profesion VARCHAR(50),
    edad VARCHAR(3),
    sexo ENUM('Mujer', 'Hombre'),
    correo VARCHAR(100),
    foto VARCHAR(300),
    acceso ENUM('permitido','denegado','lista de acceso prohibido')
);