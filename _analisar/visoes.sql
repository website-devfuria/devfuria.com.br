
-- quantidade de mateŕias por mês
SELECT
CONCAT(year(dtCriacao), "-",  month (dtCriacao)) as pmes,
COUNT(*) as qtd
FROM materias
GROUP BY pmes

/*
2012-10 = 2
2012-6  = 4
2013-1  = 4
2013-12 = 5
2013-4  = 4
2013-6  = 1
2013-7  = 12
2014-1 	= 11
2014-2 	= 4
*/
