<?php
include_once('turma.php');
class Aluno {
    private $nome;
    private $id;
    private $email;
    private $turma;
    private $nota;
    public function Aluno($nome, $email) {
        $this->nome = $nome;
        $this->email = $email;
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
    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function getTurma() {
        return $this->turma;
    }
    public function setTurma($turma) {
        $this->turma = $turma;
    }
    public function getNota() {
        return $this->nota;
    }
    public function setNota($nota) {
        $this->nota = $nota;
    }
}
?>