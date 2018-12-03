<?php
include_once('./model/alunoDao.php');
include_once('./model/aluno.php');
$aluno = new Aluno("Drx Chaotic", "cris.lima.froes@gmail.com");
$alunoDao = new AlunoDao();
$alunoDao->insert($aluno);
?>