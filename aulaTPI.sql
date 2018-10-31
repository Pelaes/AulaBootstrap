create database aulaTPI;

use aulaTPI;

create table Produto(
id int primary key auto_increment,
imagem varchar(300) not null,
nome varchar(100) not null,
descricao varchar(200) not null,
preco numeric(10,2) not null,
ativo bool not null,
quantidade int not null);

insert into Produto (imagem, nome, descricao, preco, ativo, quantidade) values
('imagens/pc.png', 'Playstation 4', 'O melhor video game da geração atual, vários jogos exclusivos.', 1800.00, 1, 10),
('imagens/pc.png', 'Playstation 4 Pro', 'O melhor video game da geração atual, vários jogos exclusivos, mas a mesma bosta que o outro.', 3000.00, 1, 10);