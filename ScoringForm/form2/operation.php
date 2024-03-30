<?php
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
require_once("connect_DB.php");
$ob_operation = new operation();
$db = new Conn_DB();
$conn = $db->get_link();
mysqli_set_charset($conn, 'utf8');
$response = array(
    'status' => 0,
    'message' => 'Form submission failed, please try again.'
);

if (isset($_POST['save'])) {
    $id = $ob_operation->cleaned_input($_POST['assesment_id']);
    $fullname_evaluated = $ob_operation->cleaned_input($_POST['full_name_evaluated']);
    $title_job = $ob_operation->cleaned_input($_POST['job_side_evaluated']);
    $period_assess = $ob_operation->cleaned_input($_POST['period_assessment']);
    $date = date("Y-m-d");
    $usercreatore = $ob_operation->cleaned_input($_POST['user_creator']);
    $user_assign = $ob_operation->cleaned_input($_POST['user_assign']);
    $show_total_public = $ob_operation->cleaned_input($_POST['ShowTotalPublic']);
    $show_total_private = $ob_operation->cleaned_input($_POST['ShowTotalPrivate']);
    $show_total_finals = $ob_operation->cleaned_input($_POST['ShowTotalFinalPubAndPri']);
    $ins_sql_user = "INSERT INTO `user_assessment`
                            (
                            `fullname_evaluated`, `title_job`, `period_assess`, `user_creatore`, `user_assign`,
                            `total_assessment_public`, `total_assessment_private`, `total_finals`, `date_create`
                            )
                            VALUES 
                            (
                             '$fullname_evaluated' , '$title_job' , '$period_assess' , '$usercreatore' , '$user_assign' ,
                             '$show_total_public' , '$show_total_private' , '$show_total_finals' , '$date'
                            )";
    mysqli_query($conn, $ins_sql_user);

    $item = 1;
    $select_id = $conn->insert_id;
    $resArray_pub[] = array();
    $resArray_pri[] = array();
    for ($i = 0; $i < 3; $i++) {

        if ($item == 1) {
            for ($a = 0; $a <= 2; $a++) {
                $arr_pub = array(
                    'محور عملکرد' => $ob_operation->cleaned_input($_POST['axis_performance_' . $item]),
                    'شاخص ارزیابی' => $ob_operation->cleaned_input($_POST['assesmeent_indicator'][$a]),
                    'سقف امتیاز شاخص' => $ob_operation->cleaned_input($_POST['max_score'][$a]),
                    'امتیاز مکتسبه' => $ob_operation->cleaned_input($_POST['score'][$a]),
                    'سقف امتیاز محور' => $ob_operation->cleaned_input($_POST['max_finals_score_' . $item]),
                    'امتیاز نهایی' => $ob_operation->cleaned_input($_POST['score_finals_' . $item]),
                    'توضیحات' => $ob_operation->cleaned_input($_POST['des_assessment_' . $item]),
                );
                $arr_pri = array(
                    'محورها' => $ob_operation->cleaned_input($_POST ['axes_' . $item]),
                    'شاخصهای ارزیابی' => $ob_operation->cleaned_input($_POST ['ind_assessment'][$a]),
                    'سقف امتیاز' => $ob_operation->cleaned_input($_POST ['max_scoring_finals_tb2_' . $item]),
                    'امتیاز عملكرد' => $ob_operation->cleaned_input($_POST ['scoretbl2'][$a]),
                    'امتیاز مكتسبه' =>  $ob_operation->cleaned_input($_POST ['score_finals_tb2_' . $item])
                );
                array_push($resArray_pub , $arr_pub);
                array_push($resArray_pri , $arr_pri);
            }
            $item++;
        }elseif ($item == 2) {
            $s = 0;
            for ($b = 3; $b <= 7; $b++) {
                $arr_pub = array(
                    'محور عملکرد' => $ob_operation->cleaned_input($_POST['axis_performance_' . $item]),
                    'شاخص ارزیابی' => $ob_operation->cleaned_input($_POST['assesmeent_indicator'][$b]),
                    'سقف امتیاز شاخص' => $ob_operation->cleaned_input($_POST['max_score'][$b]),
                    'امتیاز مکتسبه' => $ob_operation->cleaned_input($_POST['score'][$b]),
                    'سقف امتیاز محور' => $ob_operation->cleaned_input($_POST['max_finals_score_' . $item]),
                    'امتیاز نهایی' => $ob_operation->cleaned_input($_POST['score_finals_' . $item]),
                    'توضیحات' => $ob_operation->cleaned_input($_POST['des_assessment_' . $item])
                );
                array_push($resArray_pub , $arr_pub);

                if ($s == 0) {
                    $arr_pri = array(
                        'محورها' => $ob_operation->cleaned_input($_POST ['axes_' . $item]),
                        'شاخصهای ارزیابی' => $ob_operation->cleaned_input($_POST ['ind_assessment'][3]),
                        'سقف امتیاز' => $ob_operation->cleaned_input($_POST ['max_scoring_finals_tb2_' . $item]),
                        'امتیاز عملكرد' => $ob_operation->cleaned_input($_POST ['scoretbl2'][3]),
                        'امتیاز مكتسبه' => $ob_operation->cleaned_input($_POST ['score_finals_tb2_' . $item])
                    );
                    array_push($resArray_pri , $arr_pri);
                    $s++;
                }
            }
            $item++;
        }elseif ($item == 3) {

            $s = 0;
            $d = 4;
            for ($b = 8; $b <= 12; $b++) {
                $arr_pub = array(
                    'محور عملکرد' => $ob_operation->cleaned_input($_POST['axis_performance_' . $item]),
                    'شاخص ارزیابی' => $ob_operation->cleaned_input($_POST['assesmeent_indicator'][$b]),
                    'سقف امتیاز شاخص' => $ob_operation->cleaned_input($_POST['max_score'][$b]),
                    'امتیاز مکتسبه' => $ob_operation->cleaned_input($_POST['score'][$b]),
                    'سقف امتیاز محور' => $ob_operation->cleaned_input($_POST['max_finals_score_' . $item]),
                    'امتیاز نهایی' => $ob_operation->cleaned_input($_POST['score_finals_' . $item]),
                    'توضیحات' => $ob_operation->cleaned_input($_POST['des_assessment_' . $item])
                );
                array_push($resArray_pub , $arr_pub);

                if ($s == 0 || $s == 1 || $s == 2) {
                    $arr_pri = array(
                        'محورها' => $ob_operation->cleaned_input($_POST ['axes_' . $item]),
                        'شاخصهای ارزیابی' => $ob_operation->cleaned_input($_POST ['ind_assessment'][$d]),
                        'سقف امتیاز' => $ob_operation->cleaned_input($_POST ['max_scoring_finals_tb2_' . $item]),
                        'امتیاز عملكرد' => $ob_operation->cleaned_input($_POST ['scoretbl2'][$d]),
                        'امتیاز مكتسبه' => $ob_operation->cleaned_input($_POST ['score_finals_tb2_' . $item])
                    );
                    array_push($resArray_pri , $arr_pri);
                    $d++;
                    $s++;
                }
            }
            $item++;
        }
    }
}

$json_data_pub = json_encode($resArray_pub , JSON_UNESCAPED_UNICODE );
$json_data_pri = json_encode($resArray_pri , JSON_UNESCAPED_UNICODE);

/*echo "<pre>";
print_r("json public:" . $json_data_pub . "<br>" . "json private:" . $json_data_pri );*/

$ins_sql = "INSERT INTO `data_score`
                            (
                             `user_id`, `indicator_public` , `indicator_private`
                            )
                            VALUES 
                            (
                             '$select_id','$json_data_pub','$json_data_pri'
                            )";

if (mysqli_query($conn, $ins_sql)) {
    $response['status'] = 1;
    $response['message'] = 'Form data submitted successfully!';
} else {
    echo "<pre>";
    print_r("Error:" . $ins_sql . ":" . mysqli_error($conn) . "<br>");
}

mysqli_close($conn);
header('Location: index.php');




