<?php

include_once('../model/AtividadeDao.php');
include_once('../model/atividade.php');



$cod = $_POST['codAtividade'];
$adao = new atividadeDao();
$atividade=$adao->find(intval($cod));

$adao->delete($atividade);
//var_dump($t);
//header('Location: home.php');
header('Location: ../views/home.php');


?>