Create schema Seguridad;

CREATE TABLE `Grupos` (
  `cod_grupo` varchar(10) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `estado` bit(1) NOT NULL,
  PRIMARY KEY (`cod_grupo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


create table Usuarios(
  usuario varchar(16) not null primary key,
  pass varchar(60) not null,
  nombre varchar(80) not null,
  apellido varchar(80) not null,
  email varchar(120) not null, 
  estado bit not null			
 );

create table Usuarios_grupos(
usuario varchar(16) not null,
cod_grupo varchar(10) not null, 
foreign key(usuario) references Usuarios(usuario),
foreign key(cod_grupo) references Grupos(cod_grupo),
primary key(usuario,cod_grupo)
);


create table Permisos(
cod_permiso varchar(10) primary key,
descripcion varchar(100) not null
);

create table Modulos(
cod_modulo varchar(10) primary key,
descripcion varchar(100) not null

);


create table Formularios(
cod_formulario varchar(10) primary key,
descripcion varchar(100) not null,
cod_modulo varchar(10) not null,
foreign key(cod_modulo) references Modulos(cod_modulo)
);

create table Perfiles(
cod_grupo varchar(10),
cod_formulario varchar(10),	
cod_permiso varchar(10),
primary key(cod_grupo,cod_formulario,cod_permiso),
foreign key(cod_grupo) references Grupos(cod_grupo),
foreign key(cod_formulario) references Formularios(cod_formulario),
foreign key(cod_permiso) references Permisos(cod_permiso)
);

create table Permisos_Formulario(
cod_formulario varchar(10),
cod_permiso  varchar(10),
primary key(cod_formulario,cod_permiso),
foreign key(cod_formulario) references Formularios(cod_formulario),
foreign key(cod_permiso) references Permisos(cod_permiso)

);







