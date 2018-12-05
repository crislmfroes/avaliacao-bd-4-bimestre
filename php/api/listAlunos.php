<?php
include_once('../model/alunoDao.php');
$alunoDao = new AlunoDao();
$alunos = $alunoDao->listByName($_GET['nome'], $_GET['limit'], $_GET['offset']);
$array_json = array();
foreach ($alunos as $aluno) {
    array_push($array_json, array('nome'=>$aluno->getNome(), 'email'=>$aluno->getEmail(), 'codigo'=>$aluno->getId()));
}
echo json_encode($array_json);
?>