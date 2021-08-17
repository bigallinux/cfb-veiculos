use cfbveiculos;

create table tb_colaboradores(
id_colaborador int auto_increment not null primary key,
nome varchar(40),
username varchar(20),
senha varchar(20),
acesso int
);