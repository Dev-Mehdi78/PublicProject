<?php

class Conn_DB
{

    protected $databaseLink;

    function __construct()
    {
        $this->database = "localhost";
        $this->mysql_user = "root";
        $this->mysql_pass = "";
        $this->db_name = 'scoring_form';
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

$sql_tbl1 = "CREATE TABLE IF NOT EXISTS user_assessment(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fullname_evaluated varchar(100),
    title_job varchar(100),
    period_assess varchar(100) ,
    user_creatore varchar(100),
    user_assign varchar(100),
    total_assessment_public numeric ,
    total_assessment_private numeric ,
    total_finals numeric ,
    date_create date
     )";
$sql_tbl2 = "CREATE TABLE IF NOT EXISTS data_score(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id int,
    indicator_public text,
    indicator_private text
     )";

$db = new Conn_DB();
$conn = $db->get_link();

mysqli_query($conn, $sql_tbl1);
mysqli_query($conn, $sql_tbl2);

