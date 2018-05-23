--Banco de dados
--posts
 -- titulo
 -- data que foi criado
 -- corpo da postagem
 -- autor
 -- id (identificar qual é a postagem)

 INSERT INTO posts SET titulo = 'Titulo de Teste', data_criado = '2018-05-11 06:49:00', corpo = 'Texto qualquer', autor = 'William Rolim';

 -- insira na tabela post os seguintes dados

 SELECT * FROM posts WHERE autor = 'William Rolim'

 --ATUALIZAR na tabela post e set os seguintes dados
 UPDATE posts SET titulo = "Crepusculo Dourado" WHERE id = 2;

--Deletando dados
 DELETE  FROM posts WHERE autor = "William Rolim";