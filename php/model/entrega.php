<?php
include_once('aluno.php');
include_once('atividade.php');
class Entrega {
    private $aluno;
    private $atividade;
    private $nota;

    public function Entrega(float $nota) {
        $this->nota = $nota;
    }

    /**
     * Get the value of aluno
     */ 
    public function getAluno()
    {
        return $this->aluno;
    }

    /**
     * Set the value of aluno
     *
     * @return  self
     */ 
    public function setAluno(Aluno $aluno)
    {
        $this->aluno = $aluno;

        return $this;
    }

    /**
     * Get the value of atividade
     */ 
    public function getAtividade()
    {
        return $this->atividade;
    }

    /**
     * Set the value of atividade
     *
     * @return  self
     */ 
    public function setAtividade(Atividade $atividade)
    {
        $this->atividade = $atividade;

        return $this;
    }

    /**
     * Get the value of nota
     */ 
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set the value of nota
     *
     * @return  self
     */ 
    public function setNota(float $nota)
    {
        $this->nota = $nota;

        return $this;
    }
}
?>