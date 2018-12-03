CREATE DATABASE clasroombd;

CREATE TABLE Atividade (
    nome varchar(150) NOT NULL,
    dataEntrega date NOT NULL,
    peso numeric NOT NULL,
    codAtividade serial,
    descricao varchar(500) NOT NULL,
    disciplina varchar(150) NOT NULL,
    CONSTRAINT "AtividadePK" PRIMARY KEY(codAtividade)
);

CREATE TABLE Turma (
    ano int NOT NULL,
    codTurma serial,
    nome varchar(150) NOT NULL,
    CONSTRAINT "TurmaPK" PRIMARY KEY(codTurma)
);

CREATE TABLE Aluno (
    nome varchar(150) NOT NULL,
    codAluno serial,
    email varchar(150),
    nota numeric,
    codTurma int,
    CONSTRAINT "AlunoPK" PRIMARY KEY(codAluno)
);

CREATE TABLE Entrega (
    codAluno int,
    codAtividade int,
    nota numeric NOT NULL,
    CONSTRAINT "EntregaPK" PRIMARY KEY (codAluno, codAtividade)
);
 
ALTER TABLE Aluno ADD CONSTRAINT FK_Aluno_1
    FOREIGN KEY (codTurma)
    REFERENCES Turma (codTurma)
    ON UPDATE CASCADE
    ON DELETE SET NULL;
 
ALTER TABLE Entrega ADD CONSTRAINT FK_Entrega_0
    FOREIGN KEY (codAluno)
    REFERENCES Aluno (codAluno)
    ON UPDATE CASCADE
    ON DELETE CASCADE;
 
ALTER TABLE Entrega ADD CONSTRAINT FK_Entrega_1
    FOREIGN KEY (codAtividade)
    REFERENCES Atividade (codAtividade)
    ON UPDATE CASCADE
    ON DELETE CASCADE;