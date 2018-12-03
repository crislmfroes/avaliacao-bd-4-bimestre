<?php
include_once 'dao.php';
include_once 'turma.php';
class TurmaDao extends Dao
{
    public function insert($turma)
    {
        $vetor = array($turma->getNome(), $turma->getAno());
        $sql = "INSERT INTO Turma (nome, ano) VALUES ($1, $2) returning codTurma";
        $con = $this->getConexao();
        $res = pg_query_params($con, $sql, $vetor);
        $assoc = pg_fetch_assoc($res);
        var_dump($assoc);

        $turma->setId((int)$assoc['codturma']);
        pg_close($con);
    }
    public function update($turma)
    {
        $vetor = array($turma->getNome(), $turma->getAno(),
            $turma->getId());
        $sql = "UPDATE Turma SET nome=$1, ano=$2 WHERE codTurma=$3";
        $con = $this->getConexao();
        $res = pg_query_params($con, $sql, $vetor);
        pg_close($con);

    }

    public function delete($turma)
    {
        $vetor = array($turma->getId());
        $sql = "DELETE FROM Turma WHERE codTurma=$1";
        $con = $this->getConexao();
        $res = pg_query_params($con, $sql, $vetor);
        pg_close($con);
    }

    function list(int $limit, int $offset) {
        $vetor = array($limit, $offset);
        $sql = "SELECT * FROM Turma LIMIT $1 OFFSET $2";
        $con = $this->getConexao();
        $res = pg_query_params($con, $sql, $vetor);
        $turmas = array();
        while ($assoc = pg_fetch_assoc($res)) {
            $turma = new Turma($assoc['nome'], $assoc['ano']);
            $turma->setId($assoc['codturma']);
            array_push($turmas, $turma);
        }
        pg_close($con);
        return $turmas;
    }

    public function find(int $id)
    {
        $vetor = array($id);
        $sql = "SELECT * FROM Turma WHERE codTurma=$1";
        $con = $this->getConexao();
        $res = pg_query_params($con, $sql, $vetor);
        $assoc = pg_fetch_assoc($res);
        $turma = new Turma($assoc['nome'], $assoc['ano']);
        $turma->setId($assoc['codturma']);
        pg_close($con);
        return $turma;
    }
}
