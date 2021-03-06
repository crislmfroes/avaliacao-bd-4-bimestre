<?php
include_once('dao.php');
include_once('atividadeDao.php');
include_once('turma.php');
include_once('turmaDao.php');

class Atividade {
    private $nome;
    private $id;
    private $dataEntrega;
    private $peso;
    private $descricao;
    private $disciplina;
    public function Atividade(string $nome, DateTime $dataEntrega, float $peso, string $descricao, string $disciplina) {
        $this->nome = $nome;
        $this->dataEntrega = $dataEntrega;
        $this->peso = $peso;
        $this->descricao = $descricao;
        $this->disciplina = $disciplina;
    }

   
    public function getDisciplina()
    {
        return $this->disciplina;
    }


    public function setDisciplina(string $disciplina)
    {
        $this->disciplina = $disciplina;

        return $this;
    }

  
    public function getDescricao()
    {
        return $this->descricao;
    }

	
    public function setDescricao(string $descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

  
    public function getPeso()
    {
        return $this->peso;
    }

    
    public function setPeso(float $peso)
    {
        $this->peso = $peso;

        return $this;
    }

   
    public function getDataEntrega()
    {
        return $this->dataEntrega;
    }

    public function setDataEntrega(DateTime $dataEntrega)
    {
        $this->dataEntrega = $dataEntrega;

        return $this;
    }

   
    public function getId()
    {
        return $this->id;
    }

   
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

   
    public function getNome()
    {
        return $this->nome;
    }

 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }
}

//nome, dataEntrega, peso, disciplina, descricao

?>
