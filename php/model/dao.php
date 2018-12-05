<?php
abstract class DAO {
    protected function getConexao() {
        $scon = "host=localhost port=5432 dbname=classroombd user=postgres password=postgres";
        $con = pg_connect($scon);
        if(!$con){
            throw new Exception('Não foi possível conectar com o bd');
            //poderia gerar um exception
            pg_close($con);
        }
        return $con;
    }
    abstract protected function insert($object);
    abstract protected function delete($object);
    abstract protected function update($object);
    abstract protected function list($limit, $offset);
}
?>