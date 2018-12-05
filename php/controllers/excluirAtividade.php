<?php

include_once('../model/atividadeDao.php');



$cod = $_POST['codAtividade'];
$adao = new AtividadeDao();
$atividade=$adao->find(intval($cod));

$adao->delete($atividade);
//var_dump($t);
//header('Location: home.php');
header('Location: ../views/home.php');


?>