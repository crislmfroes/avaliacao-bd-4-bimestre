<?php
class Turma {
    private $nome;
    private $id;
    private $ano;
    public function Turma(string $nome="", int $ano = 0) {
        $this->nome = $nome;
        $this->ano = $ano;
    }
    public function getNome() {
        return $this->nome;
    }
    public function setNome(string $nome) {
        $this->nome = $nome;
    }
    public function getId() {
        return $this->id;
    }
    public function setId(int $id) {
        $this->id = $id;
    }
    public function getAno() {
        return $this->ano;
    }
    public function setAno(int $ano) {
        $this->ano = $ano;
    }
}
?>