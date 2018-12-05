<?php

include_once('../model/turma.php');
include_once('../model/turmaDao.php');
include_once('../model/alunoDao.php');


//$t= new Turma('3c',2);

$t=new Turma($_POST['nomeTurma'],$_POST['anoTurma']);
$tdao = new turmaDao();
$tdao->insert($t);
$nomes=$_POST['aluno'];
$emails=$_POST['email'];
$alunoDao = new AlunoDao();
for ($i=0; $i < count($nomes); $i++) { 
    $aluno = new Aluno($nomes[$i], $emails[$i]);
    $aluno->setTurma($t);
    $alunoDao->insert($aluno);
}
header('Location: ../views/home.php');

//print_r($t);







?>