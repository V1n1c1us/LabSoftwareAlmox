-- TABELA USUARIO
CREATE TABLE usuario
(
  id serial NOT NULL,
  nomeusuario character varying(50),
  siape character varying(20),
  matricula character varying(20),
  email character varying(30),
  codorientador int,
  cpf character varying(12),
  tipo int,
  senha character varying(30),
  sala character varying(10),
  primary key(id),
  foreign key (codorientador) references usuario(id)
  );

