drop table f_reposicao;
drop table d_produto;
drop table d_tempo;

create table f_reposicao(
	cean numeric(13) not null,
    nro smallint not null,
    lado varchar(20) not null,
    altura varchar(20) not null,
    operador varchar(50) not null,
    unidades integer not null,
    tempo_id integer not null
);

-- popular tabela f_reposicao com valores de tabela reposicao mudificando o instante para tempo_id
insert into f_reposicao
    select ean as cean, nro, lado, altura, operador, unidades, (extract (year from instante))*10000 + (extract(month from instante))*100 + (extract(day from instante))
    from reposicao;

create table d_produto(
	cean numeric(13) not null,
	categoria varchar(80) not null,
	nif_fornecedor_principal numeric(9) not null,
    primary key(cean)
);

-- popular a tabela d_produto com os valores da tabela produto

insert into d_produto (cean, categoria, nif_fornecedor_principal)
select ean as cean, categoria, forn_primario as nif_fornecedor_principal
from produto;

drop table d_tempo;

CREATE TABLE d_tempo(
    tempo_id integer not null,
    dia integer not null,
    mes integer not null,
    ano integer not null,
    primary key (tempo_id)
);

-- procedure para popular a tabela d_tempo com os valores de todas as datas possiveis do ano e criando tempo_id;

create or replace function load_d_tempo()
    returns void as $$

declare
        data_inicial date := '2017-01-01';
        data_final date := '2017-12-31';
        data date := data_inicial;
        tempo_id integer;
        dia integer;
        mes integer;
        ano integer;

begin
    while (data <= data_final) loop
        select extract (day from data) into dia;
        select extract (month from data) into mes;
        select extract (year from data) into ano;
        select ano * 10000 + mes * 100 + dia into tempo_id;
        insert into d_tempo values(tempo_id, dia, mes, ano);
        select data + interval '1 day' into data;
    end loop;

end;
$$ language plpgsql;
