--
-- Atualizações
--


CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `subsecoes` AS
SELECT DISTINCT subsecao FROM paginas ORDER BY subsecao;
