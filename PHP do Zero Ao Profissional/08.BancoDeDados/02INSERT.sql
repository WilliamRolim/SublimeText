INSERT INTO usuarios_aula01 SET nome = 'Cicrano', email = 'Cicrano@gmail.com',senha='4i93894', data_nascimento='2010-10-21'; 

ou

--padrão default para todos os tipos de banco sql
INSERT INTO usuarios_aula01 (nome,email,senha,data_nascimento) VALUES('Beltrano','beltrano@hotmail.com','senha123','1982-12-12');

--insert com set
INSERT INTO tabela (coluna1, coluna2,...)VALUES (valor1, valor2,...);
