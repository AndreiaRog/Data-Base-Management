drop table reposicao;
drop table evento_reposicao;
drop table planograma;
drop table fornece_sec;
drop table produto;
drop table fornecedor;
drop table constituida;
drop table super_categoria;
drop table categoria_simples;
drop table categoria;
drop table prateleira;
drop table corredor;

create table corredor(
	nro smallint,
	largura numeric(4,2) not null,
	primary key(nro)
);

create table prateleira(
    nro smallint,
    lado varchar(20),
    altura varchar(20),
    primary key(nro, lado, altura),
    foreign key(nro) references corredor(nro),
    check (lado='Esquerdo' or lado='Direito'),
    check (altura='Chao' or altura='Medio' or altura='Superior')
);

create table categoria(
	nome varchar(80),
	primary key (nome)
);

create table categoria_simples(
	nome varchar(80),
    primary key(nome),
	foreign key (nome) references categoria(nome) on delete cascade
);

create table super_categoria(
	nome varchar(80),
    primary key(nome),
	foreign key (nome) references categoria(nome) on delete cascade
);

create table constituida(
   super_categoria varchar(80),
   categoria varchar(80),
   primary key(super_categoria, categoria),
   foreign key (super_categoria) references super_categoria(nome) on delete cascade,
   foreign key (categoria) references categoria(nome) on delete cascade,
   check (super_categoria != categoria)
  );

create table fornecedor(
	nif numeric(9),
	nome varchar(80) not null,
	primary key(nif)
);

create table produto(
	ean numeric(13),
	design varchar(80) not null,
	categoria varchar(80),
	forn_primario numeric(9),
	data date not null,
	primary key(ean),
	foreign key(categoria) references categoria(nome),
	foreign key(forn_primario) references fornecedor(nif)
);

create table fornece_sec(
	nif numeric(9),
	ean numeric(13),
	primary key(nif,ean),
	foreign key(nif) references fornecedor(nif),
	foreign key(ean) references produto(ean) on delete cascade
);

create table planograma(
    ean numeric(13),
    nro smallint,
    lado varchar(20),
    altura varchar(20),
    face integer not null,
    unidades integer not null,
    loc integer not null,
    primary key(ean, nro, lado, altura),
    foreign key(ean) references produto(ean) on delete cascade,
    foreign key(nro, lado, altura) references prateleira(nro, lado, altura)
);

create table evento_reposicao(
    operador varchar(50),
    instante timestamp,
    primary key(operador, instante),
    check (instante <= CURRENT_TIMESTAMP)
);

create table reposicao(
    ean numeric(13),
    nro smallint,
    lado varchar(20),
    altura varchar(20),
    operador varchar(50),
    instante timestamp,
    unidades integer not null,
    primary key(ean, nro, lado, altura, operador, instante),
    foreign key(ean, nro, lado, altura) references planograma(ean, nro, lado, altura) on delete cascade,
    foreign key(operador, instante) references evento_reposicao(operador, instante)
);
