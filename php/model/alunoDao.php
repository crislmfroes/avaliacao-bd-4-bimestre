<?php
include_once('dao.php');
include_once('aluno.php');
include_once('turmaDao.php');
class AlunoDao extends Dao {
    public function insert($aluno) {
        $vetor = array($aluno->getNome(), $aluno->getEmail(),
        $aluno->getTurma()->getId(), $aluno->getNota());
        $sql = "INSERT INTO Aluno (nome, email,
        codTurma, nota) VALUES ($1, $2, $3, $4) returning codAluno";
        $con = $this->getConexao();
        $res = pg_query_params($con, $sql, $vetor);
        $assoc = pg_fetch_assoc($res);
        var_dump($assoc);
        $aluno->setId((int)$assoc['codaluno']);
        pg_close($con);
    }
    public function update($aluno) {
        $vetor = array($aluno->getNome(), $aluno->getEmail(),
        $aluno->getTurma()->getId(), $aluno->getNota(), $aluno->getId());
        $sql = "UPDATE Aluno SET nome=$1, email=$2,
                codTurma=$3, nota=$4 WHERE codAluno=$5";
        $con = $this->getConexao();
        $res = pg_query_params($con, $sql, $vetor);
        pg_close($con);

    }

    public function delete($aluno) {
        $vetor = array($aluno->getId());
        $sql = "DELETE FROM Aluno WHERE codAluno=$1";
        $con = $this->getConexao();
        $res = pg_query_params($con, $sql, $vetor);
        pg_close($con);
    }

    public function list($limit, $offset) {
        $vetor = array($limit, $offset);
        $sql = "SELECT * FROM Aluno LIMIT $1 OFFSET $2";
        $con = $this->getConexao();
        $res = pg_query_params($con, $sql, $vetor);
        $alunos = array();
        while ($assoc = pg_fetch_assoc($res)) {
            $aluno = new Aluno($assoc['nome'], $assoc['email']);
            $aluno->setNota((float) $assoc['nota']);
            $turmaDao = new TurmaDao();
            $turma = $turmaDao->find($assoc['codturma']);
            $aluno->setTurma($turma);
            $aluno->setId($assoc['codaluno']);
            array_push($alunos, $aluno);
        }
        pg_close($con);
        return $alunos;
    }

    public function find($id) {
        $vetor = array($id);
        $sql = "SELECT * FROM Aluno WHERE codaluno=$1";
        $con = $this->getConexao();
        $res = pg_query_params($con, $sql, $vetor);
        $assoc = pg_fetch_assoc($res);
        $aluno = new Aluno($assoc['nome'], $assoc['email']);
        $aluno->setNota((float) $assoc['nota']);
        $turmaDao = new TurmaDao();
        $turma = $turmaDao->find($assoc['codturma']);
        $aluno->setTurma($turma);
        $aluno->setId($assoc['codaluno']);
        pg_close($con);
        return $aluno;
    }
}
?>