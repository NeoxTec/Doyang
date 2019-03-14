CREATE DATABASE PUMASTKD;
USE PUMASTKD;

CREATE TABLE profesor(
correo varchar(60),
password varchar(50)
);

CREATE TABLE alumno(
id int(3) unsigned auto_increment PRIMARY KEY,
nombre varchar(50) NOT NULL,
apellidos varchar(50) NOT NULL,
grado enum('blanca - 10 kup','naranja - 9 kup', 'amarilla - 8 kup','amarilla avanzada - 7 kup', 'verde - 6 kup','verde avanzada - 5 kup','azul - 4 kup', 'azul avanzada - 3 kup','marron - 2 kup', 'roja - 1 kup','negra 1er. dan','negra 2do. dan','negra 3er. dan','negra 4to. dan', 'negra 5to. dan','negra 6to. dan','negra 7mo. dan') default 'blanca - 10 kup' Not NULL,
edad int(2) unsigned not null,
peso float(4,2) null,
altura float(3,2) null,
fecha_nac date null,
foto blob null,
correo varchar(60) not null,
password varchar(50) not null
);

create table noticia(
    id int(5) unsigned auto_increment primary key,
    fecha timestamp not null,
    archivo blob not null,
    texto varchar(255) not null
);

insert into alumno(nombre,apellidos,grado,edad,peso,altura,fecha_nac,correo,password) values
('Mario Alberto','Nieto López',11,20,49.5,1.62,1999-01-09,'manl_1999@hotmail.com','manl1234'),
('Luis Felipe','Manzano Ramírez',13,16,49.8,1.55,2003-08-023,'luisf@gmail.com','luisfp');
insert into profesor (correo,password) values('Rolandtkd@hotmail.com','pumastul');