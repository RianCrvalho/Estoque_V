create database banco;

use banco;

create table produto(
 id_pro int not null auto_increment,
 nome varchar(80) not null,
 quant int not null,
 valor float(6) not null,
 primary key (id_pro)
	);

--Inserções no banco 
insert into produto(nome,quant,valor) values ("arroz","30","5.50");