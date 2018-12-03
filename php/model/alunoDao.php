<?php
include_once('dao.php');
include_once('aluno.php');
class AlunoDao extends Dao {
    public function insert(Aluno $aluno) {
        $vetor = array($aluno->getNome(), $aluno->getEmail(),
        $aluno->getTurma()->getId());
        $sql = "INSERT INTO Aluno (nome, email,
        codTurma) VALUES ($1, $2, $3) RETURN codAluno";
        $con = getConexao();
        $res = pg_query_params($con, $sql, $vetor);
        $assoc = pg_fetch_assoc($res);
        $aluno->setId($assoc['codAluno']);
        pg_close($con);
    }
    public function update(Aluno $aluno) {
        $vetor = array($aluno->getNome(), $aluno->getEmail(),
        $aluno->getTurma()->getId(), $aluno->getId());
        $sql = "UPDATE Aluno SET nome=$1, email=$2,
                codTurma=$3 WHERE id=$4";
        $con = getConexao();
        $res = pg_query_params($con, $sql, $vetor);
        pg_close($con);

    }

    public function delete(Aluno $aluno) {
        $vetor = array($aluno->getId());
        $sql = "DELETE Aluno WHERE id=$1";
        $con = getConexao();
        $res = pg_query_params($con, $sql, $vetor);
        pg_close($con);
    }

    public function list(int $limit, int $offset) {
        $vetor = array($limit, $offset);
        $sql = "SELECT * FROM Aluno LIMIT $1 OFFSET $2";
        $con = getConexao();
        $res = pg_query_params($con, $sql, $vetor);
        $alunos = array();
        while ($assoc = pg_fetch_assoc($res)) {
            $aluno = new Aluno($assoc['nome'], $assoc['email']);
            $aluno->setNota($assoc['nota']);
            $turmaDao = new TurmaDao();
            $turma = $turmaDao->find($assoc['codTurma']);
            $aluno->setTurma($turma);
            $aluno->setId($assoc['codAluno']);
            array_push($alunos, $aluno);
        }
        pg_close($con);
        return $alunos;
    }

    public function find(int $id) {

    }
}
?>