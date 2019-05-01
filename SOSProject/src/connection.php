<?php
$username = "root";
$password = "";
$hostname = "127.0.0.1";
$db_name="sos";

//connection to the database
$con=mysqli_connect("$hostname", "$username", "$password","$db_name") or die("cannot connect");

?>

<?php

class Database extends pdo {

    private $dbtype; 
    private $host;     
    private $user;
    private $pass; 
    private $database; 

    public function __construct(){ 
        $this->dbtype = 'mysql'; 
        $this->host = 'localhost'; 
        $this->user = 'root'; 
        $this->pass = ''; 
        $this->database = 'sos'; 
        $dns = $this->dbtype.':dbname='.$this->database.";host=".$this->host; 
        parent::__construct( $dns, $this->user, $this->pass ); 
    }     
}

$database = new Database();
$db =& $database;

?>