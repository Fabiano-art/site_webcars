create table pagina (
	id_pagina int auto_increment,
	titulo varchar(256),
    descricao varchar(1000),
    banner_principal varchar(1000),
    
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
