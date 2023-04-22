create database practicaR5;
use practicaR5;

create table usuarios(
                         id_usuario int auto_increment,
                         usuario varchar(30) not null ,
                         contraseña varchar(30) not null,
                         constraint usuarios_pk primary key(id_usuario)
);
create user usuarios@localhost identified by '12345';

grant select, insert, delete, update on usuarios.* to usuarios@localhost;

insert into usuarios (usuario,contraseña) values ('Ana', '123456');
insert into usuarios (usuario,contraseña) values ('Marta', '123456');
insert into usuarios (usuario,contraseña) values ('Sergio', '123456');
insert into usuarios (usuario,contraseña) values ('Jose', '123456');

select * from usuarios;
create table lista(
                      id_lista int auto_increment,
                      tarea varchar(255) not null,
                      id_usuario int,
                      constraint lista_pk primary key(id_lista),
                      constraint lista_fk1 foreign key (id_usuario) references usuarios(id_usuario)
);


select * from lista;