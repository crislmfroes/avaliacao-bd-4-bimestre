<?php

include_once('../model/atividadeDao.php');
include_once('../model/atividade.php');

var_dump($_POST);
$a = new Atividade($_POST['nomeAtividade'],new DateTime($_POST['dataEntrega']),
$_POST['peso'],$_POST['descricao'],$_POST['disciplina']);

$cod = $_POST['codigoAtividade'];
$a->setId((int) $cod);


$adao = new atividadeDao();
$adao->update($a);
header('Location: ../views/listaAtividades.php');
//header('Location: ../views/home.php');






?>







?>