create database imobiliaria;
use imobiliaria;

create table usuario(
	id int(4) auto_increment primary key,
    login varchar(10),
    senha varchar(100),
    permissao char(1)
);

create table imovel(
	id int(4) auto_increment primary key,
    descricao varchar(200),
    foto varchar(30),
    valor decimal(9,2),
    tipo char(1)
);

create table visualizacao(
	id int(4) auto_increment primary key,
    idUsuario int(4) not null,
    idImovel int (4) not null,
    data date,
    hora time,
    foreign key(idUsuario) references Usuario(id),
    foreign key(idImovel) references Imovel(id)
);