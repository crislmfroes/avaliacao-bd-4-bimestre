<?php
include_once('dao.php');
include_once('aluno.php');
include_once('atividade.php');
class AtividadeDao extends Dao {
    public function insert($atividade) {
        $vetor = array($atividade->getNome(), $atividade->getDataEntrega()->format('Y/m/d'),$atividade->getPeso(),
        $atividade->getDisciplina(), $atividade->getDescricao());
        
        $sql = "INSERT INTO Atividade(nome, dataEntrega, peso, disciplina, descricao) 
        VALUES ($1, $2, $3, $4, $5) returning codAtividade";
        $con = $this->getConexao();
        $res = pg_query_params($con, $sql, $vetor);
        $assoc = pg_fetch_assoc($res);
        $atividade->setId($assoc['codatividade']);
        pg_close($con);
    }

    public function update($atividade) {
        $vetor = array($atividade->getNome(), $atividade->getDataEntrega(),$atividade->getPeso(),
        $atividade->getDisciplina(), $atividade->getDescricao(), $atividade->getId());
        $sql = "UPDATE Atividade SET nome=$1, dataEntrega=$2,
                peso=$3, disciplina=$4, descricao=$5 WHERE id=$5";
        $con = $this->getConexao();
        $res = pg_query_params($con, $sql, $vetor);
        pg_close($con);

    }

    public function delete($atividade) {
        $vetor = array($atividade->getId());
        $sql = "DELETE Atividade WHERE id=$1";
        $con = $this->getConexao();
        $res = pg_query_params($con, $sql, $vetor);
        pg_close($con);
    }

    public function list(int $limit, int $offset) {
        $vetor = array($limit, $offset);
        $sql = "SELECT * FROM Atividade LIMIT $1 OFFSET $2";
        $con = $this->getConexao();
        $res = pg_query_params($con, $sql, $vetor);
        $atividades = array();

        $m->setId(intval($linha['id']));
			
			array_push($listMetas,$m);

        while ($assoc = pg_fetch_assoc($res)) {
            $atividades = new Atividade($assoc['nome'], $assoc['dataEntrega'], $assoc['peso'], 
            $assoc['disciplina'], $assoc['descricao']);
            
            $atividade->setId($assoc['codatividade']);
            array_push($atividades, $atividade);
        }
        pg_close($con);
        return $atividades;
    }

    public function find(int $id) {

    }
}












?>