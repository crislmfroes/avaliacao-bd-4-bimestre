<?php
class Turma {
    private $nome;
    private $id;
    private $ano;
    public function Turma($nome="", $ano = 0) {
        $this->nome = $nome;
        $this->ano = $ano;
    }
    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function getAno() {
        return $this->ano;
    }
    public function setAno($ano) {
        $this->ano = $ano;
    }
}
?>