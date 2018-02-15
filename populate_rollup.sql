insert into corredor values ('1', '10');
insert into corredor values ('2', '20');

insert into prateleira values ('1', 'Esquerdo', 'Superior');
insert into prateleira values ('1', 'Esquerdo', 'Chao');
insert into prateleira values ('2', 'Direito', 'Medio');
insert into prateleira values ('2', 'Direito', 'Superior');
insert into prateleira values ('2', 'Direito', 'Chao');
insert into prateleira values ('1', 'Direito', 'Superior');
insert into prateleira values ('2', 'Esquerdo', 'Chao');

insert into categoria values ('Lacticinios');
insert into categoria values ('Queijos');
insert into categoria values ('Iogurtes');
insert into categoria values ('Iogurtes Gregos');
insert into categoria values ('Iogurtes de Fruta');

insert into categoria_simples values ('Iogurtes Gregos');
insert into categoria_simples values ('Iogurtes de Fruta');
insert into categoria_simples values ('Queijos');

insert into super_categoria values ('Lacticinios');
insert into super_categoria values ('Iogurtes');

insert into constituida values ('Lacticinios', 'Queijos');
insert into constituida values ('Lacticinios', 'Iogurtes');
insert into constituida values ('Iogurtes', 'Iogurtes Gregos');
insert into constituida values ('Iogurtes', 'Iogurtes de Fruta');

insert into fornecedor values ('111111111', 'Manuel');
insert into fornecedor values ('111111112', 'Adagio');
insert into fornecedor values ('111111113', 'Maria');
insert into fornecedor values ('111111114', 'Mimosa');
insert into fornecedor values ('111111115', 'Danone');
insert into fornecedor values ('111111116', 'Yogi');
insert into fornecedor values ('111111117', 'Nestle');
insert into fornecedor values ('111111118', 'Terra Nostra');
insert into fornecedor values ('111111119', 'Auchan');
insert into fornecedor values ('111111110', 'Marca Branca');
insert into fornecedor values ('111111100', 'Mae Joana');
insert into fornecedor values ('111111000', 'Leitaria');

insert into produto values ('1111111111111', 'Queijo Fresco', 'Queijos', '111111111', '2017-11-01');
insert into produto values ('1111111111112', 'Iogurte Grego Caramelo', 'Iogurtes Gregos', '111111112', '2017-11-02');
insert into produto values ('1111111111113', 'Leite Magro', 'Lacticinios', '111111113', '2017-11-03');
insert into produto values ('1111111111114', 'Iogurte Natural', 'Iogurtes', '111111114', '2017-11-05');
insert into produto values ('1111111111115', 'Iogurte Manga', 'Iogurtes de Fruta', '111111114', '2017-11-06');
insert into produto values ('1111111111116', 'Iogurte Grego Morango', 'Iogurtes Gregos', '111111111', '2017-11-05');
insert into produto values ('1111111111117', 'Iogurte coco', 'Iogurtes de Fruta','111111111', '2017-11-07');
insert into produto values ('1111111111118', 'Iogurte ananas', 'Iogurtes de Fruta','111111111', '2017-01-07');
insert into produto values ('1111111111119', 'Iogurte banana', 'Iogurtes de Fruta','111111111', '2017-01-07');
insert into produto values ('1111111111120', 'Iogurte cereja', 'Iogurtes de Fruta','111111111', '2017-03-07');
insert into produto values ('1111111111121', 'Iogurte laranja', 'Iogurtes de Fruta','111111111', '2017-01-07');
insert into produto values ('1111111111122', 'Iogurte kiwi', 'Iogurtes de Fruta','111111111', '2017-12-07');
insert into produto values ('1111111111123', 'Iogurte Grego Pessego', 'Iogurtes Gregos', '111111111', '2017-01-05');
insert into produto values ('1111111111124', 'Iogurte Grego Manga', 'Iogurtes Gregos', '111111111', '2017-05-05');




insert into fornece_sec values ('111111112', '1111111111111');
insert into fornece_sec values ('111111113', '1111111111111');
insert into fornece_sec values ('111111113', '1111111111112');
insert into fornece_sec values ('111111114', '1111111111113');
insert into fornece_sec values ('111111111', '1111111111115');
insert into fornece_sec values ('111111111', '1111111111112');
insert into fornece_sec values ('111111114', '1111111111112');
insert into fornece_sec values ('111111115', '1111111111112');
insert into fornece_sec values ('111111116', '1111111111112');
insert into fornece_sec values ('111111117', '1111111111112');
insert into fornece_sec values ('111111118', '1111111111112');
insert into fornece_sec values ('111111119', '1111111111112');
insert into fornece_sec values ('111111110', '1111111111112');
insert into fornece_sec values ('111111100', '1111111111112');
insert into fornece_sec values ('111111000', '1111111111112');
insert into fornece_sec values ('111111112', '1111111111116');
insert into fornece_sec values ('111111113', '1111111111117');
insert into fornece_sec values ('111111113', '1111111111118');
insert into fornece_sec values ('111111113', '1111111111119');
insert into fornece_sec values ('111111113', '1111111111120');
insert into fornece_sec values ('111111113', '1111111111121');
insert into fornece_sec values ('111111113', '1111111111122');
insert into fornece_sec values ('111111113', '1111111111123');
insert into fornece_sec values ('111111113', '1111111111124');





insert into planograma values ('1111111111111', '1', 'Esquerdo', 'Superior', '5', '20', '1');
insert into planograma values ('1111111111112', '1', 'Esquerdo', 'Chao', '5', '12', '1');
insert into planograma values ('1111111111113', '2', 'Direito', 'Medio', '5', '10', '1');
insert into planograma values ('1111111111114', '2', 'Direito', 'Superior', '5', '10', '1');
insert into planograma values ('1111111111115', '2', 'Direito', 'Chao', '5', '5', '1');
insert into planograma values ('1111111111116', '1', 'Direito', 'Superior', '5', '15', '1');
insert into planograma values ('1111111111117', '2', 'Esquerdo', 'Chao', '5', '10', '1');
insert into planograma values ('1111111111118', '2', 'Esquerdo', 'Chao', '5', '10', '1');
insert into planograma values ('1111111111119', '2', 'Esquerdo', 'Chao', '5', '10', '1');
insert into planograma values ('1111111111120', '2', 'Esquerdo', 'Chao', '5', '10', '1');
insert into planograma values ('1111111111121', '2', 'Esquerdo', 'Chao', '5', '10', '1');
insert into planograma values ('1111111111122', '2', 'Esquerdo', 'Chao', '5', '10', '1');
insert into planograma values ('1111111111123', '2', 'Esquerdo', 'Chao', '5', '10', '1');
insert into planograma values ('1111111111124', '2', 'Esquerdo', 'Chao', '5', '10', '1');



insert into evento_reposicao values ('A', '2017-11-05 08:13:45');
insert into evento_reposicao values ('B', '2017-11-06 11:13:45');
insert into evento_reposicao values ('B', '2017-11-07 19:13:45');
insert into evento_reposicao values ('C', '2017-11-05 08:13:45');
insert into evento_reposicao values ('B', '2017-11-05 08:16:45');
insert into evento_reposicao values ('A', '2020-11-29 11:11:11');
insert into evento_reposicao values ('B', '2017-01-05 08:16:45');
insert into evento_reposicao values ('E', '2017-02-05 08:16:45');
insert into evento_reposicao values ('F', '2017-02-05 08:16:45');
insert into evento_reposicao values ('G', '2017-03-05 08:16:45');
insert into evento_reposicao values ('H', '2017-03-05 08:16:45');
insert into evento_reposicao values ('I', '2017-03-05 08:16:45');
insert into evento_reposicao values ('J', '2017-05-05 08:16:45');
insert into evento_reposicao values ('I', '2017-07-05 08:16:45');
insert into evento_reposicao values ('BK', '2017-07-05 08:16:45');
insert into evento_reposicao values ('BL', '2017-12-05 08:16:45');
insert into evento_reposicao values ('BP', '2017-09-05 08:16:45');

insert into reposicao values ('1111111111111', '1', 'Esquerdo', 'Superior', 'A', '2017-11-05 08:13:45', '10');
insert into reposicao values ('1111111111112', '1', 'Esquerdo', 'Chao', 'B', '2017-11-06 11:13:45', '12');
insert into reposicao values ('1111111111113', '2', 'Direito', 'Medio', 'B', '2017-11-07 19:13:45', '3');
insert into reposicao values ('1111111111114', '2', 'Direito', 'Superior', 'C', '2017-11-05 08:13:45', '1');
insert into reposicao values ('1111111111111', '1', 'Esquerdo', 'Superior', 'B', '2017-11-05 08:16:45', '5');
insert into reposicao values ('1111111111117', '2', 'Esquerdo', 'Chao', 'B', '2017-01-05 08:16:45', '5');
insert into reposicao values ('1111111111117', '2', 'Esquerdo', 'Chao', 'E', '2017-02-05 08:16:45', '2');
insert into reposicao values ('1111111111118', '2', 'Esquerdo', 'Chao', 'F', '2017-02-05 08:16:45', '5');
insert into reposicao values ('1111111111119', '2', 'Esquerdo', 'Chao', 'G', '2017-03-05 08:16:45', '5');
insert into reposicao values ('1111111111120', '2', 'Esquerdo', 'Chao', 'H', '2017-03-05 08:16:45', '5');
insert into reposicao values ('1111111111121', '2', 'Esquerdo', 'Chao', 'I', '2017-03-05 08:16:45', '5');
insert into reposicao values ('1111111111122', '2', 'Esquerdo', 'Chao', 'J', '2017-05-05 08:16:45', '5');
insert into reposicao values ('1111111111123', '2', 'Esquerdo', 'Chao', 'I', '2017-07-05 08:16:45', '5');
insert into reposicao values ('1111111111123', '2', 'Esquerdo', 'Chao', 'BK', '2017-07-05 08:16:45', '5');
insert into reposicao values ('1111111111123', '2', 'Esquerdo', 'Chao', 'BL', '2017-12-05 08:16:45', '5');
insert into reposicao values ('1111111111124', '2', 'Esquerdo', 'Chao', 'BP', '2017-09-05 08:16:45', '5');