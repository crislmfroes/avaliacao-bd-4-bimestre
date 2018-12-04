<?php


include_once('../model/turmaDao.php');
include_once('../model/turma.php');
include_once('../views/alteraTurma.php');


$t = new Turma($_POST['nomeTurma'],$_POST['anoTurma']);
$cod = $_POST['codigo'];
$t->setId($cod);


$tdao = new turmaDao();

//var_dump($t);
$tdao->update($t);
//header('Location: home.php');





?>