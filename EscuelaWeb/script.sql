Create database EscuelaBD;
use EscuelaBD;
create table NombredelaEscuela(Id int PRIMARY KEY, Clave varchar(50), Nombre varchar(100), NombredelDirector varchar(100), Ubicacion varchar(100));
create table NumerodeAlumnos(Id int PRIMARY KEY, Matricula varchar(50),Nombre varchar(100), IdNombredelaEscuela Int,Foto varchar(100),FOREIGN KEY (IdNombredelaEscuela) REFERENCES NombredelaEscuela(Id));;
create table NiveldeAprovechamiento(Id int PRIMARY KEY, NiveldeAprovechamiento varchar(50);

Insert into  NombredelaEscuela(Id, Clave, Nombre, NombredelDirector, Ubicacion)values(1, '0001', 'Escuela secundaria tecnica industrial n°103', 'jose maria perez perez','calle malpaso n°2005');
Insert into  NombredelaEscuela(Id, Clave, Nombre, NombredelDirector, Ubicacion)values(2, '0002', 'Escuela primaria club rotario', 'carlos mario gomez gonzales','col.casitas 1 secc.');
Insert into  NombredelaEscuela(Id, Clave, Nombre, NombredelDirector, Ubicacion)values(3, '0003', 'Centro de bachillerato tecnologico industrial y de servicios n°144', 'marco antonio villa corzo', 'col.24 de junio');
Insert into  NombredelaEscuela(Id, Clave, Nombre, NombredelDirector, Ubicacion)values(4, '0004', 'universidad autonoma de chiapas', 'enrique velazco cal y mayor', 'col.24 de junio');

insert into NumerodeAlumnos(id, Matricula, Nombre)values(1, 'a253472', 'Pedro Jimenez Perez');
insert into NumerodeAlumnos(id, Matricula, Nombre)values(2, 'a675298', 'Mia Guadalupe Lopez Cruz');
insert into NumerodeAlumnos(id, Matricula, Nombre)values(3, 'a134690', 'Alexzander Pereyra Martinez');
insert into NumerodeAlumnos(id, Matricula, Nombre)values(4, 'a345697', 'Alicia Gomez Morales');

insert into NiveldeAprovechamiento(id, Nombre)values (1,'Secundaria');
insert into NiveldeAprovechamiento(id, Nombre)values (2,'Primaria');
insert into NiveldeAprovechamiento(id, Nombre)values (3,'Preparatoria');
insert into NiveldeAprovechamiento(id, Nombre)values (,4'universidad');