use gimnasio;
insert into persona(nombres,apellidos,cedula,sexo) VALUES
('Cesar Leonardo','Bracho Picado','26279030','M'),
('Rommel Omar','Montoya Rodriguez','25594817','M'),
('Edglis del Carmen','Orozco Hidalgo','27370246','F'),
('Gisell Valentina','Barrios','12345678','F');

insert into estudiante (id_persona,id_departamento,trayecto) VALUES
(2,2,1),
(3,3,2),
(4,4,3),
(5,5,4);

insert into  afiliado (id_persona,tipo_sangre,estatura,peso,fecha_nac) VALUES 
(2,'A+','1.23','71','2040/04/01'),
(3,'O-','1.34','73','2030/03/11'),
(4,'AB-','1.45','75','2020/02/21'),
(5,'AB-','1.56','78','2010/01/31');

insert into usuario(id_persona,usuario,contrasena,permisos,estado) VALUES
(2,'qw','$2y$10$M/rx0pFFvSqwRjJKpbaOaODA/MoajIG8pxX9VAu0w8VufOJ4D06gm','0100',1),
(3,'as','$2y$10$M/rx0pFFvSqwRjJKpbaOaODA/MoajIG8pxX9VAu0w8VufOJ4D06gm','0100',1),
(4,'zx','$2y$10$M/rx0pFFvSqwRjJKpbaOaODA/MoajIG8pxX9VAu0w8VufOJ4D06gm','0010',1),
(5,'12','$2y$10$M/rx0pFFvSqwRjJKpbaOaODA/MoajIG8pxX9VAu0w8VufOJ4D06gm','0001',1);

insert into asistencia (id_afiliado, asistencia) VALUES 
(2,34),
(3,65),
(4,12),
(5,1);

<<<<<<< HEAD
insert into curso (id_departamento, id_usuario, nota) VALUES
(2,2,20),
(3,3,15),
(4,4,10),
(5,5,5);

insert into estudianteCurso (id_estudiante,id_curso) VALUES
=======
insert into curso (id_departamento, id_profesor) VALUES
>>>>>>> e63f92cec78b6f7fcf0aeb0e9b5ab45e2f3deb02
(2,2),
(3,3),
(4,4),
(5,5);

insert into estudianteCurso (id_estudiante,id_curso,nota) VALUES
(2,2,20),
(3,3,15),
(4,4,10),
(5,5,5);