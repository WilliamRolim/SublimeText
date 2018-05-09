SELECT * FROM usuarios_aula01 WHERE nome LIKE 'Will%';
--% Tudo que vem depois do texto pode ser ignorado (qualquer coisa)
-- selecione da tabela onde NOME começa com Will
SELECT * FROM usuarios_aula01 WHERE email LIKE '%Rolim';

SELECT * FROM usuarios_aula01 WHERE nome LIKE '%tana'

SELECT * FROM usuarios_aula01 WHERE email LIKE '%mail%';
--Não sei o começo %mail% o fim tbém indefinido
SELECT * FROM usuarios_aula01 WHERE nome LIKE '%Rolim%'

--BETWEEN

SELECT * FROM usuarios_aula01 WHERE data_nascimento BETWEEN '1949-01-01' AND '1983-12-12';
--Pegar usuarios que nasceram entre essas datas 1949 e 1983;

--IN
SELECT * FROM usuarios_aula01 WHERE id IN(1,3);
--SELECIONE TODOS OS CAMPOS DE USUARIO ONDE O ID ESTÁ DENTRO DESSA LISTA 

