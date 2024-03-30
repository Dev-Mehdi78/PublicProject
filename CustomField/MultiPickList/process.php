<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // دریافت مقادیر انتخاب شده
    $selectedOptions = $_POST['options'];

    // پردازش مقادیر انتخاب شده
    foreach ($selectedOptions as $option) {
        echo $option . "<br/>";
    }
}
?>