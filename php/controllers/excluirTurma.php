<?php

include_once('../model/turmaDao.php');
include_once('../model/turma.php');
$t = new Turma();
$cod = $_POST['excluirTurma'];
$t->setId($cod);


$tdao = new turmaDao();

//var_dump($t);
$tdao->delete($t);
//header('Location: home.php');


?>