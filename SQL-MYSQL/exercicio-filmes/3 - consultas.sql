-- 1. Listar apenas o nome do filme em inglês e a nota, ordenados por ordem do mais bem avaliado para o mais mal avaliado
SELECT titulo_original, nota
FROM codifica.filmes
ORDER BY nota DESC;

-- 2. Exibir apenas um filme, o mais longo da lista
SELECT *
FROM codifica.filmes
ORDER BY duracao DESC
LIMIT 1;

-- 3. Listar apenas o título (em pt-br), duração e classificação, dos três filmes mais curtos, com classificação menor ou igual a 16 anos
SELECT titulo, duracao, classificacao
FROM codifica.filmes
WHERE classificacao <= 16
ORDER BY duracao ASC
LIMIT 3;

-- 4. Listar os filmes, do mais antigo para o mais atual, e caso empatados, ordenar por avaliação, do mais bem avaliado para o mais mal avaliado
SELECT *
FROM codifica.filmes
ORDER BY ano_lancamento ASC, nota DESC;

-- 5. Listar filmes que contenham a palavra “Drama” na categoria
SELECT *
FROM codifica.filmes
WHERE categoria LIKE '%drama%';

-- 6. Exibir o total de registros da tabela
SELECT COUNT(*) AS total_registros
FROM codifica.filmes;

-- 7. Exibir o total de registros agrupados por classificação
SELECT classificacao, COUNT(*) AS total_registros
FROM codifica.filmes
GROUP BY classificacao
ORDER BY classificacao;

-- 8. Desafio: Exibir o total de registros, a soma da duração, a nota média, agrupados por classificação 
SELECT 
    classificacao,
    COUNT(*) AS total_registros,
    SUM(duracao) AS soma_duracao,
    AVG(nota) AS nota_media
FROM codifica.filmes
GROUP BY classificacao
ORDER BY classificacao;