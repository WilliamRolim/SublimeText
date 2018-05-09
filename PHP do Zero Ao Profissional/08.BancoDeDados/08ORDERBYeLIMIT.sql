--ORDER BY Limitar o resultado
--Ex: Existe 1000 usuarios só quero 10 deles.

--Selecionando data_nascimento em ordem crescente
SELECT * FROM usuarios_aula01 ORDER BY data_nascimento ASC;
--ACS ASCENDENTE
--DESC DESCRECENTE

--ordem alfabetica
SELECT * FROM usuarios_aula01 ORDER BY nome ASC;

--ordem decrescente;
SELECT * FROM usuarios_aula01 ORDER BY nome DESC;

--LIMIT Ordem alfabetica mas só quero os 2 primeiros

SELECT * FROM usuarios_aula01 ORDER BY nome ASC LIMITE 3;

SELECT * FROM usuarios_aula01 LIMIT 1, 4;
-- LIMIT PULA UM E RETORNA 4 ELEMENTOS
--LIMIT DEPOIS TUDO