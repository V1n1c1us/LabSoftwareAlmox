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
  -- V2 --
  CREATE TABLE usuario(
	id serial NOT NULL,
	nomeusuario varchar(50),
	siape int UNIQUE,
	matricula int UNIQUE,
	email varchar(30),
	codorientador int UNIQUE,
	cpf varchar(14) UNIQUE,
	tipo int,
	senha varchar(30),
	sala varchar(10),
	PRIMARY KEY (id),
	FOREIGN KEY (codorientador) REFERENCES usuario (id)
);

select * from produto,unidade where produto.codunidade = unidade.codunidade

create table unidade(
	codunidade int,
	unidade text,
	primary key(codunidade)
);

CREATE TABLE movimentacao(
	idMovimentacao serial,
	datahora timestamp,
	tipo text,
	matricula int,
	PRIMARY KEY (idMovimentacao),
	FOREIGN KEY (matricula) REFERENCES usuario (matricula)
);

CREATE TABLE produto
(
  idproduto serial NOT NULL,
  codigoprodutoalmox integer NOT NULL,
  descricaoproduto text,
  quantidade integer,
  codunidade integer,
  codigoalmox integer,
  numerorequisicao integer,
  CONSTRAINT produto_pkey PRIMARY KEY (codigoprodutoalmox),
  CONSTRAINT produto_codunidade_fkey FOREIGN KEY (codunidade)
      REFERENCES unidade (codunidade) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);
ALTER TABLE produto
  OWNER TO postgres;
