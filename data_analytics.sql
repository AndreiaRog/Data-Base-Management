SELECT categoria, ano, mes, count(*)
FROM f_reposicao NATURAL JOIN d_tempo NATURAL JOIN d_produto
WHERE nif_fornecedor_principal='123455678'
GROUP BY ROLLUP (categoria, ano, mes);
