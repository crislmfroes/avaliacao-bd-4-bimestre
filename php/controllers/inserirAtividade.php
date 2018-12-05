<?php
include_once('../views/criarAtividade.html');
include_once('../model/atividadeDao.php');
include_once('../model/atividade.php');



$a = new Atividade($_POST['nomeAtividade'],new DateTime($_POST['dataEntrega']),
$_POST['peso'],$_POST['disciplina'],$_POST['descricaoAtividade']);
//$a = new Atividade('rolosso',new DateTime('12/12/2018'), 5,'artes','tem nada pra ver aqui');


//$d=new DateTime(['12/12/2018']);
//$a->setDataEntrega($d);


//print_r($a);



$adao= new atividadeDao();

$adao->insert($a);
header('Location: ../views/home.php');




?>