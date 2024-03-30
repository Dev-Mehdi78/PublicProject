<?php
require_once ("conectDB.php");

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

ini_set('display_errors', 'on');
error_reporting(E_ERROR); // STRICT DEVELOPMENT

$ob_operation = new operation();
$db = new Conn_DB();
$conn = $db->get_link();
mysqli_set_charset($conn, 'utf8');

if (isset($_POST['save'])) {

    $id = $ob_operation->cleaned_input($_POST['assesment_id']);
    $fullname_to_be_evaluated = $ob_operation->cleaned_input($_POST['fullname_to_be_evaluated']);
    $job_side_to_be_evaluated = $ob_operation->cleaned_input($_POST['job_side_to_be_evaluated']);
    $perio_to_be_evaluated = $ob_operation->cleaned_input($_POST['perio_to_be_evaluated']);
    $unit_to_be_evaluated = $ob_operation->cleaned_input($_POST['unit_to_be_evaluated']);
    $fullname_assessor = $ob_operation->cleaned_input($_POST['fullname_assessor']);
    $job_side_assessor = $ob_operation->cleaned_input($_POST['job_side_assessor']);
    $unit_assessor = $ob_operation->cleaned_input($_POST['unit_assessor']);
    $last_key = $ob_operation->cleaned_input($_POST['last_key']);
    $date = date("Y-m-d");

    $ins_sql_user = "INSERT INTO `user_assess`
                            (
                            `fullname_evaluated`, `job_side_evaluated`, `perio_evaluated`, `unit_evaluated`,
                            `fullname_assessor`, `job_side_assessor`, `unit_assessor`,
                             `date_create`
                            )
                            VALUES 
                            (
                             '$fullname_to_be_evaluated' , '$job_side_to_be_evaluated' , '$perio_to_be_evaluated' , '$unit_to_be_evaluated' ,
                             '$fullname_assessor' , '$job_side_assessor' , '$unit_assessor' ,
                             '$date'
                             )";
    mysqli_query($conn, $ins_sql_user);
    $resArray[] = array();
    $select_id = $conn->insert_id;
    $item = 1;
    for ($i = 1 ; $i <= $last_key ; $i++){
        $arr = array(
            'آیتم' => $ob_operation->cleaned_input($_POST['row_'.$item]),
            'پرسش' => $ob_operation->cleaned_input($_POST['ind_assessment_'.$item]),
            'امتیاز' => $ob_operation->cleaned_input($_POST['score_'.$item]),
            'توضیحات' => $ob_operation->cleaned_input($_POST['description_'.$item])
        );
        array_push($resArray , $arr);
        $item++;
    }

}

$json_data = json_encode($resArray , JSON_UNESCAPED_UNICODE );

$scoring = "INSERT INTO `assessment`
                            (
                            `user_id`, `data_assessment`
                            )
                            VALUES 
                            (
                             '$select_id' , '$json_data' 
                             )";
mysqli_query($conn, $scoring);
mysqli_close($conn);
header('Location: index.php');