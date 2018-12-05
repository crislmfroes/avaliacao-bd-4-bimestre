<?php

include_once('../model/alunoDao.php');

$cod = $_GET['codigoAluno'];
$adao = new AlunoDao();
$aluno = $adao->find(intval($cod));

$adao->delete($aluno);
//var_dump($t);
//header('Location: home.php');
header('Location: ../views/home.php');
