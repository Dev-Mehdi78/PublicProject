<?php

$conn = mysqli_connect("localhost", "root", "", "lms");

if (mysqli_connect_errno($conn)) {
    die("no");
}

$result = mysqli_set_charset($conn , 'utf8');
$result = mysqli_query($conn, "SELECT * FROM aval_ir_1__all") or die(mysqli_error($conn));

while ($row = mysqli_fetch_array($result)) {
    echo "<pre>";
    print_r($row[25]);
}



