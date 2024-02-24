use appPlataforma;
create procedure insertarEmpresa 
@nombre varchar(max),
@sector varchar(max),
@correo varchar(max),
@password varchar(max),
@ubicacion varchar(max),
@telefono varchar(max)
as
begin
	insert into TBL_EMPRESA values(@nombre,@sector,@correo,@password,@ubicacion,@telefono,GETDATE())
end;


insertarEmpresa 'nomemporesa','agropevcuario','@gmail','1234','acapulco','234349090'


select * from TBL_EMPRESA
DELETE FROM TBL_EMPRESA;

use appPlataforma
go
select * from TBL_PASANTE


ALTER TABLE TBL_PASANTE
ADD correo varchar(max),
    direccion varchar(max);
