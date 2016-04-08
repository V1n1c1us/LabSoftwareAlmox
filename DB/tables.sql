-- TABELA USUARIO
create table usuario(
	id serial not null,
	nomeUsuario varchar(50),
	siape varchar(20),
	matricula varchar(20),
	email varchar(30),
	orientador varchar(50),
	cpf varchar(12),
	tipo varchar(30),
	senha varchar(30),
	sala varchar(10),
	primary key(id),
	foreign key(id) references usuario(id)
);

