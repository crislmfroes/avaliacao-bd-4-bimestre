<?php
include_once('../model/entregaDao.php');
include_once('../model/alunoDao.php');
include_once('../model/atividadeDao.php');
$entrega = new Entrega($_GET['nota']);
$alunoDao = new AlunoDao();
$entrega->setAluno($alunoDao->find($_GET['aluno']));
$atividadeDao = new AtividadeDao();
$entrega->setAtividade($atividadeDao->find($_GET['atividade']));
$entregaDao = new EntregaDao();
$entregas = $entregaDao->list(null, null);
$nota = 0;
$count = 0;
$entregaDao->insert($entrega);
foreach ($entregas as $entrega) {
    $aluno = $entrega->getAluno();
    if ($aluno->getId() == $_GET['aluno']) {
        $count++;
        $nota += $entrega->getNota();
    }
}
if ($count) {
    $aluno->setNota($nota/$count);
    $alunoDao->update($aluno);
}
header('Location: ../views/home.php');

?>