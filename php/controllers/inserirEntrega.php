<?php
include_once('../model/entregaDao.php');
include_once('../model/alunoDao.php');
include_once('../model/atividadeDao.php');
$entrega = new Entrega((float)$_GET['nota']);
$alunoDao = new AlunoDao();
$entrega->setAluno($alunoDao->find($_GET['aluno']));
$atividadeDao = new AtividadeDao();
$entrega->setAtividade($atividadeDao->find($_GET['atividade']));
$entregaDao = new EntregaDao();
$nota = $entrega->getNota();
$entregas = $entregaDao->list(1000, 0);
foreach ($entregas as $e) {
    $aluno = $e->getAluno();
    if ($aluno->getId() == $_GET['aluno']) {
        $nota += $e->getNota() / $e->getAtividade()->getPeso();
    }
}
$aluno = $entrega->getAluno();
$entregaDao->insert($entrega);
$aluno->setNota($nota);
$alunoDao->update($aluno);


header('Location: ../views/home.php');

?>