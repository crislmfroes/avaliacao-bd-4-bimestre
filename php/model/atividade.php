<?php

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

    /**
     * Get the value of disciplina
     */ 
    public function getDisciplina()
    {
        return $this->disciplina;
    }

    /**
     * Set the value of disciplina
     *
     * @return  self
     */ 
    public function setDisciplina($disciplina)
    {
        $this->disciplina = $disciplina;

        return $this;
    }

    /**
     * Get the value of descricao
     */ 
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @return  self
     */ 
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of peso
     */ 
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set the value of peso
     *
     * @return  self
     */ 
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get the value of dataEntrega
     */ 
    public function getDataEntrega()
    {
        return $this->dataEntrega;
    }

    /**
     * Set the value of dataEntrega
     *
     * @return  self
     */ 
    public function setDataEntrega($dataEntrega)
    {
        $this->dataEntrega = $dataEntrega;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }
}

//nome, dataEntrega, peso, disciplina, descricao
$a = new Atividade('nome1',new DateTime('12/12/2018'), 10,'disciplina2','descricao2');


//$d=new DateTime(['12/12/2018']);
//$a->setDataEntrega($d);


print_r($a);
echo $a->getNome();

?>
