drop database gimnasio;

create database gimnasio;

use gimnasio;

create table departamento(
    id int not null AUTO_INCREMENT,
    nombre varchar(30),
    primary key (id)

);
insert into departamento(nombre)
values('Informatica'),('Electricidad'),('Electronica'),('Telecomunicaciones'),('Quimica'),('Procesos Quimicos'),('Administracion'),('Contaduria Pública'),('Tecnologia de los Materiales'),('Mecatronica'),('Mecanica Industrial'),('Construccion Civil');

create table persona(
    id int not null AUTO_INCREMENT,
    nombres varchar(30),
    apellidos varchar(30),
    cedula varchar(10),
    sexo char,
    
    primary key(id)
);
insert into persona(nombres,apellidos,cedula,sexo) values('root','root','1','M');

create table usuario(
    
    id int not null AUTO_INCREMENT,
    id_persona int,
    usuario varchar(20) UNIQUE,
    contrasena varchar(255),
    permisos varchar(4),
    estado int not null,
    

    FOREIGN KEY(id_persona) REFERENCES persona(id),
    PRIMARY KEY(id)
    
);
insert into usuario(id_persona,usuario,contrasena,permisos,estado) values(1,'root','$2y$10$M/rx0pFFvSqwRjJKpbaOaODA/MoajIG8pxX9VAu0w8VufOJ4D06gm','1111',1);

create table estudiante(
    id int not null AUTO_INCREMENT,
    id_persona int not null,
    id_departamento int not null,
    trayecto char,
    
    primary key (id),
    foreign key (id_persona) references persona(id),
    foreign key (id_departamento) references departamento (id)
    
);
insert into estudiante(id,id_persona,id_departamento,trayecto) values(1,1,1,'1');

create table afiliado
(
    id int not null AUTO_INCREMENT,
    id_persona int not null,
    tipo_sangre varchar(3),
    estatura varchar(4),
    peso varchar(4),
    fecha_nac date,
    
    PRIMARY KEY (id),
    FOREIGN KEY (id_persona) REFERENCES persona(id)
);
insert into afiliado(id,id_persona,tipo_sangre,estatura,peso,fecha_nac) values (1,1,'A+-','0.00','0.00','0001-01-01');


CREATE TABLE asistencia
(
    id int not null AUTO_INCREMENT,
    id_afiliado int not null,
    asistencia int,
    fecha date,
    hora_entrada time,
    hora_salida time,
    
    PRIMARY KEY (id),
    FOREIGN KEY (id_afiliado) REFERENCES afiliado(id)
);

INSERT INTO asistencia (id, id_afiliado, asistencia) VALUES (1,1,0);

<<<<<<< HEAD
=======
create table profesor(
    id int not null  AUTO_INCREMENT,
    id_persona int not null,
    id_usuario int not null,

    PRIMARY KEY (id)
);

INSERT INTO profesor (id, id_persona, id_usuario) VALUES (1,1,1);

>>>>>>> e63f92cec78b6f7fcf0aeb0e9b5ab45e2f3deb02
create table curso
(
    id int not null AUTO_INCREMENT,
    id_departamento int not null,
<<<<<<< HEAD
    id_usuario int not null,
    nota int(2),
=======
    id_profesor int not null,
>>>>>>> e63f92cec78b6f7fcf0aeb0e9b5ab45e2f3deb02
    
    PRIMARY KEY (id),
    FOREIGN KEY (id_usuario) REFERENCES usuario(id),
    FOREIGN KEY (id_departamento) REFERENCES departamento(id)
);
<<<<<<< HEAD
INSERT INTO curso (id, id_departamento, id_usuario, nota) VALUES (1,1,1,0);
=======

INSERT INTO curso(id, id_departamento, id_profesor) VALUES (1,1,1);
>>>>>>> e63f92cec78b6f7fcf0aeb0e9b5ab45e2f3deb02

CREATE TABLE estudianteCurso(
    id int not null AUTO_INCREMENT,
    id_estudiante int not null,
    id_curso int not null,
    nota int(2),

    PRIMARY KEY (id),
    FOREIGN KEY (id_estudiante) REFERENCES estudiante(id),
    FOREIGN KEY (id_curso) REFERENCES curso(id)
);
INSERT INTO estudianteCurso(id, id_estudiante, id_curso, nota) values (1,1,1,0);
