<?php
include_once('./model/alunoDao.php');
include_once('./model/turmaDao.php');
$turma = new Turma("Turma do Mal", 4);
$turmaDao = new TurmaDao();
$turmaDao->insert($turma);
$aluno = new Aluno("Aluno do Mal", "aluno.do.mal@gmail.com");
$aluno->setTurma($turma);
$aluno->setNota(2);
$alunoDao = new AlunoDao();
$alunoDao->insert($aluno);
$aluno->setNota(5);
$alunoDao->update($aluno);
#$aluno1 = $alunoDao->find(1);
#$alunoDao->delete($aluno1);
var_dump($alunoDao->list(100, 0));
$turma->setNome("Turma da Vilania");
$turmaDao->update($turma);
#$turma1 = $turmaDao->find(1);
#$turmaDao->delete($turma1);
var_dump($turmaDao->list(100, 0));
?>