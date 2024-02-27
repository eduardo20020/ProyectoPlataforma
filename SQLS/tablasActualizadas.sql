use [23feb-database];


create table USUARIOS(
	usuario varchar(30) primary key,
	correo varchar (50),
	[password] varchar (50),
	rol varchar (20),
	fecha date
)

create table PASANTE(
    idPasante int identity(1,1) primary key,
    nombre varchar (50),
    apellidos varchar (50),
    telefono varchar (20),
    carrea varchar (50),
    usuario varchar(30)

    foreign key (usuario) references USUARIOS(usuario)
)

create table EMPRESA(
    idEmpresa int identity(1,1) primary key,
    nombre varchar (50),
    telefono varchar (20),
    sector varchar (50),
    direccion varchar (100),
    usuario varchar (30)

        foreign key (usuario) references USUARIOS(usuario)
)

create table OFERTAS (
    idOferta int identity(1,1) primary key,
    titulo varchar (50),
    descripcion varchar (500),
    ubicacion varchar (100),
    tiempo varchar (50),
    idEmpresa int

    foreign key (idEmpresa) references EMPRESA(idEmpresa)
)

create table POSTULACIONES(
    idPostulaciones int identity(1,1) primary key,
    idOferta int,
    idPasante int,
    estado varchar (20),
    fecha DATE

    foreign key (idOferta) references OFERTAS(idOferta),
    foreign key (idPasante) references PASANTE(idPasante),
)