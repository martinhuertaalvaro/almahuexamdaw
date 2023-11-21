
CREATE DATABASE IF NOT EXISTS martinhuertaalvaro;
USE martinhuertaalvaro;

CREATE TABLE IF NOT EXISTS mytable (
    nombre VARCHAR(50),
    edad INT,
    estilo VARCHAR(50)
);

INSERT INTO mytable (nombre, edad, estilo) VALUES ('Alvaro', 18, 'Bachata');
INSERT INTO mytable (nombre, edad, estilo) VALUES ('Vicent', 99, 'Hardstyle');


