<?php
ini_set("display_errors", 1);
ini_set('error_reporting', E_ERROR);

$question = array(
    "1" => "کیفیت کار؛، کار را به درستی بر اساس فرآیند ها و رویه های واحدانجام می دهد.",
    "2" => "دانش شغلی؛،درک کاملی از نقش و مسئولیت های خود در واحد دارد.",
    "3" => "دانش شغلی؛، در شغل خود متخصص هست و به درستی مسِولیت های خود را انجام می دهد.",
    "4" => "بهروری؛،کار را بر اساس زمانبندی، ویژگی ها و جزئیات تعهد شده انجام می دهد.",
    "5" => "مهارت های ارتباطی؛،به صورت شفاف با دیگران تعامل می کندو به طور منظم بازخورد می دهد.",
    "6" => "خلاقیت؛،خلاق هست.",
    "7" => "خلاقیت؛،از ایده های جدید استقبال می کند.",
    "8" => "تعهد؛،به شغل خود و شرکت متعهد و علاقه مند است",
    "9" => "تحقق اهداف؛،همواره اهداف کاری را محقق می سازد.",
    "10" => "احترام؛،در برقراری و حفظ روابط کاری مناسب با همکاران بسیار حرفه ای عمل می کند.",
    "11" => "احترام؛،همواره شان و مقام افراد و مشتریان را رعایت می کند و مطابق اصول و ارزشهای اخلاقی رفتار می کند.",
    "12" => "مسئولیت پذیری؛، همواره در پر نمودن خلا حضور همکاران به صورت داوطلبانه مشارکت می کند.",
    "13" => "مسئولیت پذیری؛، مسئولیت کار های انجام شده را میپذیرد ودر جهت انجام مناسب تر وظایف تلاش می کند.",
    "14" => "توسعه فردی؛،در هنگام مواجه شدن با مشکلات کاری یا مشتریان عصبان، آرامش خود را حفظ و حرفه ای رفتار می کند.",
    "15" => "به عمل کرد کلی چه امتیزی می دهید.",
    "16" => "نقاط قوت را در چه مواردی میدانید؟(دستاورد های شاخص وی را نیز ذکر کنید)",
    "17" => "نقاط طضعف را در چه مواردی می دانید؟(پیشنهاد هایی برای بهبود عملکرد ارائه دهید)",
);

end($question);
$last_key = key($question);

?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <title>Contact V2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="form_style/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="form_style/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="form_style/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="form_style/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="form_style/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="form_style/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="form_style/css/util.css">
    <link rel="stylesheet" type="text/css" href="form_style/css/main.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css" crossorigin="anonymous">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="rating/css/rating.css" crossorigin="anonymous">

</head>
<style>

    .table th,
    .table td {
        font-family: "AP Yekan bold";
        direction: rtl;
        text-align: right;
    }

    .table tr,
    .table td {
        font-family: "AP Yekan bold";
        direction: rtl;
        text-align: right;
    }


</style>
<body>
<script type="text/javascript" src="validation.js"></script>
<div class="bg-contact2">
    <div class="container-contact2">
        <div class="wrap-contact2">
            <form name="form_data" class="contact2-form validate-form" method="post" action="operation.php" enctype="multipart/form-data" onsubmit="return validate_form()">
					<span class="contact2-form-title">
                        <h1><small>فرم ارزیابی اعضای تیم واحد</small></h1>
					</span>

                <div class="row">
                    <div class="col-md-12">
                        <div class="wrap-input2 validate-input">
                            <h1>
                                <small style="font-family: Poppins-Bold;font-size: 17px;color: black;font-family: 'AP Yekan bold'">مشخصات
                                    ارزیابی شونده</small></h1>
                        </div>
                    </div>
                </div>

                <input type="hidden" name="last_key" value="<?php echo $last_key ?>">

                <div class="row" style="font-family: 'AP Yekan bold';" >
                    <div class="col-md-4">
                        <div class="form-group has-success">
                            <label class="control-label" for="inputSuccess1">نام و نام خانوادگی<span style="color: red">*</span></label>
                            <input id="full_name_evaluated" class="full_name_evaluated form-control" type="text" name="fullname_to_be_evaluated">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group has-success">
                            <label class="control-label" for="inputSuccess1">سمت شغلی <span style="color: red">*</span></label>
                            <input id="job_side_evaluated" class="job_side_evaluated form-control" type="text" name="job_side_to_be_evaluated">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group has-success">
                            <label class="control-label" for="inputSuccess1">دوره اررزیابی <span style="color: red">*</span></label>
                            <input id="period_assessment" class="period_assessment form-control" type="text" name="perio_to_be_evaluated">
                        </div>
                    </div>
                </div>
                <div class="row" style="font-family: 'AP Yekan bold';" >
                    <div class="col-md-4"></div>

                    <div class="col-md-4">
                        <div class="form-group has-success">
                            <label class="control-label" for="inputSuccess1">واحد<span style="color: red">*</span></label>
                            <input class="form-control" type="text" name="unit_to_be_evaluated">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group has-success">
                            <label class="control-label" for="inputSuccess1">تاریخ<span style="color: red">*</span></label>
                            <input class="form-control" type="text" name="date">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="wrap-input2 validate-input">
                            <h1>
                                <small style="font-family: Poppins-Bold;font-size: 17px;color: black;font-family: 'AP Yekan bold'">مشخصات
                                    ارزیابی کننده</small></h1>
                        </div>
                    </div>
                </div>

                <div class="row" style="font-family: 'AP Yekan bold';" >
                    <div class="col-md-4">
                        <div class="form-group has-success">
                            <label class="control-label" for="inputSuccess1">نام و نام خانوادگی<span style="color: red">*</span></label>
                            <input class="form-control" type="text" name="fullname_assessor">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group has-success">
                            <label class="control-label" for="inputSuccess1">سمت شغلی <span style="color: red">*</span></label>
                            <input class="form-control" type="text" name="job_side_assessor">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group has-success">
                            <label class="control-label" for="inputSuccess1">واحد <span style="color: red">*</span></label>
                            <input class="form-control" type="text" name="unit_assessor">
                        </div>
                    </div>
                </div>

                <span class="contact2-form-title">
                        <h1><small>ارزیابی همکاران مستقر در تیم</small></h1>
                </span>
                <hr>

                <!-- Table Scoring -->

                <table class="table table-condensed">
                    <thead>
                    <tr>
                        <th>ردیف</th>
                        <th>پرسش</th>
                        <th>امتیاز (5 بیشترین - 0 کمترین)</th>
                        <th>توضیحات</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    $item = 1 ;
                    foreach ($question as $key => $value) {
                        echo('
                        <tr>
                            <td><input size="1px" name="row_'.$item.'" type="text" value="' . $key . '" readonly></td>
                            <td><input size="72px" name="ind_assessment_'.$item.'" type="text" value="' . $value . '" readonly></td>');

                        if ($key == 16 || $key == 17 ){
                            echo ('
                                <td><input name="score_'.$item.'" value="0"></td>
                            ');
                        }else{
                            echo ('
                                <td>
                                <input class="fieldValue" name="score_'.$item.'" value="0">
                                </td>
                            ');
                        }
                        echo ('
                            <td id="td_description"><textarea id="description" name="description_'.$item.'" placeholder="توضیحات..."></textarea></td>
                        </tr>
                        ');
                    $item++;
                    }
                    ?>
                    </tbody>
                </table>

                <div class="container-contact2-form-btn">
                    <div class="wrap-contact2-form-btn">
                        <div class="contact2-form-bgbtn"></div>
                        <!--<button style="font-family: 'AP Yekan bold'" type="button" class="btn btn-primary btn-lg">ارسال</button>-->
                        <input type="submit" name="save" value="ارسال" style="font-family: 'AP Yekan bold'" class="btn btn-primary btn-lg">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<!--===============================================================================================-->
<script src="form_style/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="form_style/vendor/bootstrap/js/popper.js"></script>
<script src="form_style/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="form_style/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="form_style/js/main.js"></script>
<!--===============================================================================================-->
<script src="bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="rating/js/rating.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->

<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-23581568-13');

    jQuery(jQuery('.fieldValue')).rating({'readonly': false, 'emotion': false, 'listview': false});

</script>

</body>
</html>
