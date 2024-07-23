-- Inserindo  de dados dos filmes do anexo
INSERT INTO codifica.filmes (titulo, titulo_original, classificacao, categoria, ano_lancamento, nota, duracao)
VALUES (
    'Divertida-Mente', 'Inside Out', DEFAULT, 'Animacao, Aventura, Comedia', 2015, 8.1, 95),(
    'Dune - Duna: Parte Dois', 'Dune: Part Two', 14, 'Ação, Aventura, Drama', 2024, 8.6, 166
);

-- Inserindo de dados do .csv
INSERT INTO codifica.filmes (titulo, titulo_original, classificacao, categoria, ano_lancamento, nota, duracao)
VALUES 
('O Senhor dos Anéis: A Sociedade do Anel', 'The Lord of the Rings: The Fellowship of the Ring', 12, 'Aventura, Fantasia', 2001, 8.8, 178),
('O Poderoso Chefão', 'The Godfather', 16, 'Crime, Drama', 1972, 9.2, 175),
('Interestelar', 'Interstellar', 10, 'Aventura, Drama, Sci-Fi', 2014, 8.6, 169),
('Clube da Luta', 'Fight Club', 18, 'Drama', 1999, 8.8, 139),
('Matrix', 'The Matrix', 16, 'Ação, Sci-Fi', 1999, 8.7, 136),
('Cidade de Deus', 'City of God', 18, 'Crime, Drama', 2002, 8.6, 130),
('Parque dos Dinossauros', 'Jurassic Park', 0, 'Aventura, Sci-Fi', 1993, 8.1, 127),
('O Iluminado', 'The Shining', 16, 'Drama, Horror', 1980, 8.4, 146),
('A Origem', 'Inception', 14, 'Ação, Sci-Fi, Thriller', 2010, 8.8, 148);
