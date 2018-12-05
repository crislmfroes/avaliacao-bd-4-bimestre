<?php
include_once('../views/criarAtividade.html');
include_once('../model/atividadeDao.php');
include_once('../model/atividade.php');

$cod = $_POST['cod'];
$a = new Atividade($_POST['nomeAtividade'],new DateTime($_POST['dataEntrega']),
$_POST['peso'],$_POST['descricaoAtividade'],$_POST['disciplina']);

$adao = new AtividadeDao();

if($cod!==null){
    $a->setId(intval($cod));
    $adao->update($a);
}
else{
    $adao->insert($a);
}


header('Location: ../views/home.php');
/*
$a = new Atividade($_POST['nomeAtividade'],new DateTime($_POST['dataEntrega']),
$_POST['peso'],$_POST['disciplina'],$_POST['descricaoAtividade']);
$adao = new AtividadeDao();




$adao= new atividadeDao();

$adao->insert($a);
*/



?>