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
$entregaDao->insert($entrega);
?>