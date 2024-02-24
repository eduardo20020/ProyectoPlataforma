create database appPlataforma;
use appPlataforma;

create table TBL_PASANTE(
	idEstudiante int identity(1,1) primary key,
	nombre varchar(max),
	apellidos varchar(max),
	carrera varchar(max),
	correo varchar(max),
	[password] varchar(max),
	telefono varchar(max),
	fecha date
);

create table TBL_EMPRESA(
	idEmpresa int identity(1,1) primary key,
	nombre varchar(max),
	sector varchar(max),
	correo varchar(max),
	[password] varchar(max),
	ubicacion varchar(max),
	telefono varchar(max),
	fecha date
);


create table TBL_OFERTAS(
	idOferta int identity(1,1) primary key,
	idEmpresa int,
	titulo  varchar(max),
	descripcion varchar(max),
	requisitos varchar(max),
	duracion varchar(max),
	fecha date,

	FOREIGN KEY (idEmpresa) REFERENCES TBL_EMPRESA(idEmpresa)
);

create table TBL_POSTULACIONES(
	idPostulacion int identity(1,1) primary key,
	idEstudiante int,
	idOferta int,
	estado varchar(max),
	fecha date,

	FOREIGN KEY (idEstudiante) REFERENCES TBL_PASANTE(idEstudiante),
	FOREIGN KEY (idOferta) REFERENCES TBL_OFERTAS(idOferta)
);