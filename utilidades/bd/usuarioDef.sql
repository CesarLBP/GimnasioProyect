create table etusuario(
	
    id int not null AUTO_INCREMENT,
    usuario varchar(20) UNIQUE,
    contrasena varchar(255),
    permisos varchar(4),
    estado int not null,
    PRIMARY KEY(id)
    
);
insert into etusuario(usuario,contrasena,permisos,estado) values('root','$2y$10$M/rx0pFFvSqwRjJKpbaOaODA/MoajIG8pxX9VAu0w8VufOJ4D06gm','1111',1)

DROP DATABASE Pruebas;

CREATE DATABASE Pruebas;

use Pruebas;

CREATE TABLE prueba (fecha DATETIME NOT NULL);

INSERT INTO prueba (fecha) VALUES ('2013-11-24 17:15:10');

SELECT DATE_FORMAT(fecha, '%d-%m-%Y %H:%I:%S') AS fecha FROM prueba WHERE 1;
