<?php




class clMysql{
    var $host = 'mysql';
    var $login = 'root';
    var $password = 'qwerty';
    var $dbName = 'phpLesson';

    var $connection;

    var $r;

    function connectDB(){
        $this->connection = mysqli_connect(
            $this->host,
           $this->login,
           $this->password,
           $this->dbName
        );
    }



    function query($sql)
    {
        $result= mysqli_query($this->connection, $sql);
        return new Result($result);
    }


    function getAutoIncNumber(){
        return mysqli_insert_id($this->connection);
    }


}



class Result{

    var $q;

    function Result($result)
    {
       $this->q = $result;
    }

    function getRow()
    {
        return mysqli_fetch_object($this->q);
    }


    function rowCount(){
        return mysqli_num_rows($this->q);
    }



}
?>