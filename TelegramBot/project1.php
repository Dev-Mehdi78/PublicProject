<?php


$CSVfp = fopen("avalAll.csv", "r");
if ($CSVfp !== FALSE) {
    while (!feof($CSVfp)) {
        $data = fgetcsv($CSVfp, 10000, ",");
        echo "<pre>";
        print_r($data);
    }
}
fclose($CSVfp);




/*
$res = CallAPI("post", "https://avval.ir/profile/d3142/");
$arr = json_decode($res , true);
$arr = $arr['States'];

echo '<pre>';
print_r($arr);
die();

foreach ($arr as $value) {
    echo $value['Name'] . "<br>";
    $sql = "insert into table shadow (name,family) values(" . $value['name'] . "," . $value['family']  . ")";
}

//var_dump($arr[0]['Name']);
//var_dump($arr);

function CallAPI($method, $url, $data = false)
{
    $curl = curl_init();

    switch ($method) {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);

            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_PUT, 1);
            break;
        default:
            if ($data) {
                $url = sprintf("%s?%s", $url, http_build_query($data));

                }
    }


    // Optional Authentication:
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($curl, CURLOPT_USERPWD, "username:password");

    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl);

    curl_close($curl);

    return $result;
}*/


