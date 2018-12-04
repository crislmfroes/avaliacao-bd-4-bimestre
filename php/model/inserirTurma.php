<?php

include_once('turma.php');
include_once('turmaDao.php');
include_once('criarTurma.html');


//$t= new Turma('3c',2);

$t=new Turma($_POST['nomeTurma'],$_POST['anoTurma']);

print_r($t);

$tdao=new turmaDao();
$tdao->insert($t);





?>