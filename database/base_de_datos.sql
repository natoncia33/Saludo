CREATE DATABASE IF NOT EXISTS holamundo;
USE holamundo;

CREATE TABLE persona(
id int (255) auto_increment not null,
nombre varchar(70),
apellido varchar(70),
CONSTRAINT pk_persona PRIMARY KEY(id)
)ENGINE=InnoDb;