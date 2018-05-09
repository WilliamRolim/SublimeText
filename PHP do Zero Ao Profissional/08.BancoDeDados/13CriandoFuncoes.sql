--DELIMITER 
--remover comentarios
CREATE FUNCTION CONTAR(nome VARCHAR(100))
  RETURNS INT(10)
  BEGIN --AQUI COMEÇOU A FUNÇAO
  	DECLARE qt INT(10);--DECLAREI A VARIAVEL qt
  	SET qt = LENGTH(nome); --Contando a quantidade de chars que estou enviando
  	RETURN qt;
  END $$ --$$DELIMITADOR

SELECT nome, email, CONTAR(nome) as contagem FROM usuarios_aula01;

CREATE FUNCTION SOMAR(x INT(10), y INT(10))
RETURNS INT(10)
BEGIN
 DECLARE r INT(10);
 SET r = x+y;
 return r;
END$$

SELECT SOMAR(5,4) as soma;

-- sistema de restaurante que mostra qual está mais perto de vc
-- calcular a distancia entre vc e o restaurante (altitude e longetude)

