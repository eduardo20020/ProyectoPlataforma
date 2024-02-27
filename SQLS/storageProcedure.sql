use [23feb-database];

alter procedure registrarPasante 
    @usuario varchar (30),
    @correo varchar (50),
    @password VARCHAR (50),
    ----tabla de pasante----
    @nombre varchar (50),
    @apellidos varchar (50),
    @telefono varchar (20),
    @carrera varchar (50)
    as 
BEGIN
    insert into USUARIOS values (@usuario,@correo,@password,'pasante',GETDATE())
    insert into PASANTE values (@nombre,@apellidos,@telefono,@carrera,@usuario)
END;



create procedure registrarEmpresa
    @usuario varchar (30),
    @correo varchar (50),
    @password VARCHAR (50),
    ----tabla de la empresa----
    @nombre varchar (50),
    @telefono varchar (20),
    @sector varchar (50),
    @direccion varchar (100)
    as 
BEGIN
    insert into USUARIOS values (@usuario,@correo,@password,'empresa',GETDATE())
    insert into EMPRESA values (@nombre,@telefono,@sector,@direccion,@usuario)
END;


exec registrarEmpresa 'pepsi','pepsi@gmail','12345','pepsico','232323','alimentos','monterrey'




