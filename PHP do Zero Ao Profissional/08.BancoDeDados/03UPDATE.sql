UPDATE usuarios_aula01 SET senha = '999' ;
-- CUIDADO: Se executar do jeito que está todAs Senhas da tabela serão atualizados

UPDATE usuarios_aula01 SET senha = '999' WHERE id='1';

UPDATE usuarios_aula01 SET nome = 'fulano berreta' WHERE senha='4i93894';
