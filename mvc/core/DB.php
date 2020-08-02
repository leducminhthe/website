<?php

class DB{

    public $con2;
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname2 = "locknlock";

    function __construct(){

        $this->con2 = mysqli_connect($this->servername, $this->username, $this->password);
        mysqli_select_db($this->con2, $this->dbname2);
        mysqli_query($this->con2, "SET NAMES 'utf8'");
    }

}

?>