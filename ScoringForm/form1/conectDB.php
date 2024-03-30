<?php
class Conn_DB
{

    protected $databaseLink;

    function __construct()
    {
        $this->database = "localhost";
        $this->mysql_user = "root";
        $this->mysql_pass = "";
        $this->db_name = 'scoring_form_2';
        $this->openConnection_DB();
    }

    function openConnection_DB()
    {
        $this->databaseLink = new mysqli($this->database, $this->mysql_user, $this->mysql_pass, $this->db_name);
        if ($this->databaseLink->connect_error) {
            die("Connection failed: " . $this->databaseLink->connect_error);
        }
    }

    function get_link()
    {
        return $this->databaseLink;
    }
}


$sql_tbl1 = "CREATE TABLE IF NOT EXISTS assessment(
    assesment_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id int,
    data_assessment text 
    )";

$sql_tbl2 = "CREATE TABLE IF NOT EXISTS user_assess(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fullname_evaluated varchar(100),
    job_side_evaluated varchar(100),
    perio_evaluated varchar(100) ,
    unit_evaluated varchar(100),
    fullname_assessor varchar(100),
    job_side_assessor varchar(100),
    unit_assessor varchar(100),
    date_create date
     )";

$db = new Conn_DB();
$conn = $db->get_link();

mysqli_query($conn, $sql_tbl1);
mysqli_query($conn, $sql_tbl2);
