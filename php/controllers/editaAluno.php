<?php
include_once('../model/alunoDao.php');
include_once('../model/turmaDao.php');
var_dump($_POST);
$alunoDao = new AlunoDao();
$aluno = $alunoDao->find((int) $_POST['codigoAluno']);
$turmaDao = new TurmaDao();
$turma = $turmaDao->find((int) $_POST['turmaAluno']);
$aluno->setTurma($turma);
$aluno->setNome($_POST['nomeAluno']);
$aluno->setEmail($_POST['emailAluno']);
$alunoDao->update($aluno);
header('Location: ../views/home.php');
?>