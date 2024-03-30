<?php
ini_set("display_errors", 1);
ini_set('error_reporting', E_ERROR);

include_once ("../config.php");

class operation
{
    public function cleaned_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$config = new DataBase();
$data = new operation();

if (isset($_POST['submit'])){
    $full_name = $data->cleaned_input($_POST['full_name']);
    $username = $data->cleaned_input($_POST['username']);
    $num_mobile = $data->cleaned_input($_POST['num_mobile']);
    $email = $data->cleaned_input($_POST['email']);
    $state = $data->cleaned_input($_POST['state']);
    $gender = $data->cleaned_input($_POST['gender']);
    $address = $data->cleaned_input($_POST['address']);
    $password = $data->cleaned_input($_POST['password']);
    $repeat_pass = $data->cleaned_input($_POST['repeat_pass']);
    $condition_site = $data->cleaned_input($_POST['condition_site']);

    if ($full_name == ""){
        $config->redirect( "Index.php?msg=nouser" );
    }
}
