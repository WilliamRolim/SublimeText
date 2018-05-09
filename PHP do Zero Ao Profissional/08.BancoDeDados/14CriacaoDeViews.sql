--view tabela falsa, tabela virtual
CREATE VIEW usuariosprimeirafaixa AS
	SELECT * FROM usuarios_aula01 WHERE faixa_salarial = '1';

	--constultando a view
	SELECT * FROM usuariosprimeirafaixa;
	SELECT * FROM usuariosprimeirafaixa WHERE id = '1';

	-- lista de restaurantes do mundo inteiro
	-- posso criar uma view só de sp e posso fazer consultas de forma mais rapido
	-- aconselhado quando tenho um grande número de informações