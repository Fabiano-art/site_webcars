<<<<<<< HEAD
create table pagina (
	id_pagina int auto_increment,
=======
create database web_cars_db;
use web_cars_db;

create table pagina (
	id int auto_increment,
>>>>>>> 843d0aedf78f5ee95b854812daf2926ebafb7f69
	titulo varchar(256),
    descricao varchar(1000),
    banner_principal varchar(1000),
    
<<<<<<< HEAD
    primary key (id_pagina)
);

create table carro (
	id_carro int auto_increment,
    nome varchar(100),
    foto varchar(1000),
    preco double(10,2),
    potencia varchar(4),
    combustivel varchar(50),
    tipo varchar(20),
    pagina_id_fk int,
    
    primary key(id_carro),
    foreign key(pagina_id_fk) references pagina(id_pagina)
);
=======
    primary key (id)
);
>>>>>>> 843d0aedf78f5ee95b854812daf2926ebafb7f69
