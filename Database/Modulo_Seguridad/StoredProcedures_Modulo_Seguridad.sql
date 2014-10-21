
delimiter $$
drop procedure if exists NuevoUsuario$$
create procedure NuevoUsuario(P_user varchar(60),
							  P_pass varchar(60),
                              P_nombre varchar(80),
                              P_apellido varchar(80),
                              P_email varchar(80)
                              )
begin

insert into Usuarios(usuario,pass,nombre,apellido,email,estado)
values(P_user,P_pass,P_nombre,P_apellido,P_email,true);

end$$
delimiter ;


delimiter $$
drop procedure if exists ModificarUsuario$$
create procedure ModificarUsuario(P_user varchar(60),
                                  P_nombre varchar(80),
                                  P_apellido varchar(80),
                                  P_email varchar(80),
                                  P_estado bit
                                 )
begin

update Usuarios
set nombre= P_nombre,
	apellido = P_apellido,
    email = P_email,
    estado = P_estado
where usuario = P_user;   
end$$
delimiter ;


delimiter $$
drop procedure if exists ObtenerUsuarios$$
create procedure ObtenerUsuarios()								
begin
SELECT * FROM Usuarios;  
end$$
delimiter ;





