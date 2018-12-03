SELECT * FROM Atividade;
SELECT * FROM Turma;
SELECT * FROM Aluno;
SELECT * FROM Entrega;

INSERT INTO Atividade(nome, dataEntrega, peso, disciplina, descricao) VALUES ('dominar o mundo', now(), 10, 'Geopolítica I', 'Qualquer ccoisa...');

INSERT INTO Turma(ano, nome) VALUES (2019, 'Turma do Mal');

INSERT INTO Aluno(nome, email, codTurma) VALUES ('Cris Lima Froes', 'cris.lima.froes@gmail.com', (SELECT codTurma FROM Turma WHERE nome like '%mal%' LIMIT 1));

INSERT INTO Entrega(codAluno, codAtividade, nota) VALUES ((SELECT codAluno FROM Aluno WHERE lower(nome) like '%cris%' LIMIT 1),(SELECT codAtividade from Atividade WHERE lower(nome) like '%mundo%' LIMIT 1), 10);

UPDATE Aluno SET nota = (SELECT sum(Entrega.nota) FROM Entrega INNER JOIN Aluno ON(Entrega.codAluno = Aluno.codAluno)) WHERE lower(nome) like '%cris%';

/*UPDATE Aluno SET nota = 0 WHERE lower(nome) like '%cris%'; NUNCA!!!*/