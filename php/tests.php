<?php
include_once('./model/alunoDao.php');
include_once('./model/turmaDao.php');
include_once('./model/atividadeDao.php');
include_once('./model/entregaDao.php');
$turma = new Turma("Turma do Mal", 4);
$turmaDao = new TurmaDao();
$turmaDao->insert($turma);
$aluno = new Aluno("Aluno do Mal", "aluno.do.mal@gmail.com");
$aluno->setTurma($turma);
$aluno->setNota(2);
$alunoDao = new AlunoDao();
$alunoDao->insert($aluno);
$aluno->setNota(5);
$alunoDao->update($aluno);
#$aluno1 = $alunoDao->find(1);
#$alunoDao->delete($aluno1);
var_dump($alunoDao->list(100, 0));
$turma->setNome("Turma da Vilania");
$turmaDao->update($turma);
#$turma1 = $turmaDao->find(1);
#$turmaDao->delete($turma1);
var_dump($turmaDao->list(100, 0));
$atividade = new Atividade('nome1',new DateTime('12/12/2018'), 10,'disciplina2','descricao2');
$atividadeDao = new AtividadeDao();
$atividadeDao->insert($atividade);
$entregaDao = new EntregaDao();
$entrega = new Entrega(4);
$entrega->setAluno($aluno);
$entrega->setAtividade($atividade);
$entregaDao->insert($entrega);
$entrega->setNota(5);
$entregaDao->update($entrega);
var_dump($entregaDao->list(100, 0));
$t = new Turma();
var_dump($alunoDao->listByName('%hat%', 100, 0));
?>