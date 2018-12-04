<?php
include_once 'dao.php';
include_once 'alunoDao.php';
include_once 'atividadeDao.php';
include_once 'entrega.php';
class EntregaDao extends Dao
{
    public function insert($entrega)
    {
        $vetor = array($entrega->getAluno()->getId(), $entrega->getAtividade()->getId(), $entrega->getNota());
        $sql = "INSERT INTO Entrega (codaluno, codatividade, nota) VALUES ($1, $2, $3)";
        $con = $this->getConexao();
        $res = pg_query_params($con, $sql, $vetor);
        $assoc = pg_fetch_assoc($res);
        pg_close($con);
    }
    public function update($entrega)
    {
        $vetor = array($entrega->getNota(), $entrega->getAluno()->getId(),
            $entrega->getAtividade()->getId());
        $sql = "UPDATE Entrega SET nota=$1 WHERE codAluno = $2 AND codAtividade=$3";
        $con = $this->getConexao();
        $res = pg_query_params($con, $sql, $vetor);
        $assoc = pg_fetch_assoc($res);
        pg_close($con);
    }

    public function delete($entrega)
    {
        $vetor = array($entrega->getAluno()->getId(), $entrega->getAtividade()->getId());
        $sql = "DELETE FROM Entrega WHERE codAluno=$1 AND codEntrega=$2";
        $con = $this->getConexao();
        $res = pg_query_params($con, $sql, $vetor);
        pg_close($con);
    }

    function list(int $limit, int $offset) {
        $vetor = array($limit, $offset);
        $sql = "SELECT * FROM Entrega LIMIT $1 OFFSET $2";
        $con = $this->getConexao();
        $res = pg_query_params($con, $sql, $vetor);
        $entregas = array();
        while ($assoc = pg_fetch_assoc($res)) {
            $entrega = new Entrega($assoc['nota']);
            $atividadeDao = new AtividadeDao();
            $alunoDao = new AlunoDao();
            $entrega->setAluno($alunoDao->find($assoc['codaluno']));
            $entrega->setAtividade($atividadeDao->find($assoc['codatividade']));
            $entrega->setNota($assoc['nota']);
            array_push($entregas, $entrega);
        }
        pg_close($con);
        return $entregas;
    }

    public function find(int $idAluno, int $idAtividade)
    {
        $vetor = array($idAluno, $idAtividade);
        $sql = "SELECT * FROM Entrega WHERE codaluno=$1 AND codatividade=$2";
        $con = $this->getConexao();
        $res = pg_query_params($con, $sql, $vetor);
        $entrega = new Entrega($assoc['nota']);
        $atividadeDao = new AtividadeDao();
        $alunoDao = new AlunoDao();
        $entrega->setAluno($alunoDao->find($assoc['codaluno']));
        $entrega->setAtividade($atividadeDao->find($assoc['codatividade']));
        $entrega->setNota($assoc['nota']);
        pg_close($con);
        return $entrega;
    }
}
