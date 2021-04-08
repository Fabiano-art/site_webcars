create database web_cars_db;
use web_cars_db;

create table pagina (
	id int auto_increment,
	titulo varchar(256),
    descricao varchar(1000),
    banner_principal varchar(1000),
    
    primary key (id)
);