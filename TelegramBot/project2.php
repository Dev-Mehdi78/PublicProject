<?php


$CSVfp = fopen("avalAll.csv", "r");
if ($CSVfp !== FALSE) {
    while (!feof($CSVfp)) {
        $data = fgetcsv($CSVfp, 10000, ",");
       /* echo "<pre>";*/
        echo $data[7] . "<br>" . $data[2];
       /*print_r($data) ;*/
    }
}
fclose($CSVfp);


/*    $data = array(
        array("First Name" => "Natly", "Last Name" => "Jones", "Email" => "natly@gmail.com", "Message" => "Test message by Natly"),
        array("First Name" => "Codex", "Last Name" => "World", "Email" => "info@codexworld.com", "Message" => "Test message by CodexWorld"),
        array("First Name" => "John", "Last Name" => "Thomas", "Email" => "john@gmail.com", "Message" => "Test message by John"),
        array("First Name" => "Michael", "Last Name" => "Vicktor", "Email" => "michael@gmail.com", "Message" => "Test message by Michael"),
        array("First Name" => "Sarah", "Last Name" => "David", "Email" => "sarah@gmail.com", "Message" => "Test message by Sarah")
    );
    function filterData(&$str)
    {
        $str = preg_replace("/\t/", "\\t", $str);
        $str = preg_replace("/\r?\n/", "\\n", $str);
        if (strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
    }

    // file name for download
    $fileName = " project" . date('Ymd') . ".xls";
    // headers for download
    header("Content-Disposition: attachment; filename=\"$fileName\"");
    header("Content-Type: application/vnd.ms-excel");
    $flag = false;
    foreach ($data as $row) {
        if (!$flag) {
    // display column names as first row
            echo implode("\t", array_keys($row)) . "\n";
            $flag = true;
        }
    // filter data
        array_walk($row, 'filterData');
        echo implode("\t", array_values($row)) . "\n";
    }
    exit;
    */?>