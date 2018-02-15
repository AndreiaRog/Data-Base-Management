\\ SQL a) \\

select nome
from fornecedor
	natural join (
		select nif, categoria
		from produto
			natural join (
				select *
				from fornece_sec
					union
					select forn_primario as nif, ean
					from produto) F) C
group by nome
having count(distinct categoria)>=all (
	select count(distinct categoria)
	from fornecedor natural join (
		select nif, categoria
		from produto
			natural join (
				select *
				from fornece_sec
					union
					select forn_primario as nif, ean
					from produto) F) C
    group by nome);

\\ SQL b) \\

select nif, nome
from fornecedor
	natural join (
		select forn_primario as nif, categoria
		from produto) F
    natural join (
        select nome as categoria
        from categoria_simples) C
group by nif, nome
having count(distinct categoria) = (
	select count(*)
	from categoria_simples);

\\ SQL c) \\

select ean
from produto
where ean not in (
    select ean
    from reposicao);

\\ SQL d) \\

select ean
from fornece_sec
group by ean
having count(*) > 10;

\\ SQL e) \\

select ean
from reposicao
group by ean
having count(distinct operador)=1;
