<?php

ini_set("display_errors", 1);
ini_set('error_reporting', E_ERROR);

$question = array(
    "کمیت انجام کار" => array(
        "تعیین اولویت برای انجام کارها",
        "انجام وظایف و برنامه های محوله به نحو مطلوب",
        "انجام امور طی بازه های زمانی تعیین شده",
        array(3 , 3 , 4 , 10 )
    ),

    "کیفیت انجام کار" => array(
        "دقت در انجام امور محوله",
        "پیگیری کامل کارها و وظایف  محوله تا انتها",
        "یافتن روشهایی جهت ارائه بهتر خدمات",
        "تبعیت از الزامات تعیین شده و استفاده  از روشهای استاندارد و بروز جهت ارائه بهتر خدمات",
        "در دسترس بودن و پاسخگویی به موقع به مسئولین",
        array(4, 4, 4, 4, 4, 20)
    ),

    "دانش ، اطلاعات و مهارتهای شغلی" => array(
        "درک موقعیت و شرایط موجود و توانایی در انجام وظایف و مسئولیتها",
        "بررسی و حل مسائل و مشکلات و ارائه راهکار",
        "دارا بودن اطلاعات  و مهارت های لازم مرتبط با وظایف شغلی",
        "بکارگیری وسائل و تجهیزات شغلی به طور مناسب",
        "توسعه و بروز رسانی اطلاعات و مهارت های شغلی",
        array(2, 2, 2, 2, 2, 10)

    )
);

$assessment = array(
    "خلاقیت" => array(
        "-مشاركت با مدير  بالادستي در ارتباط با استقرار نظام برنامه‌ريزي(معيارهايي مانند؛ پايش مستمر اهداف واحد ، تهيه وتنظيم به موقع اهداف شغل)( با نظر مدير ؛ عالي تا 5 امتياز، خوب تا 3 امتياز، متوسط تا 2 امتياز)",
        "-استفاده از فناوري‌هاي نوين و نرم‌افزارهاي كاربردي در انجام وظايف( با نظر مدير مستقيم؛ عالي تا 5 امتياز، خوب تا 3 امتياز، متوسط تا 2 امتياز)",
        "-توانايي در تقسيم كار و گروه‌بندي فعاليت‌ها(با نظر مدير ؛ عالي تا 5 امتياز، خوب تا 3 امتياز، متوسط تا 2 امتياز)",
        15,

    ),

    "آموزش" => array(
        "-آموزش ضمن خدمت  (تا 5 امتیاز )",
        5
    ),

    "رضایتمندی" => array(
        "-رعایت نظم و انضباط اداری (با نظر مدیر و در نظر گرفتن معیارهای : رعایت سلسله مراتب اداری ، حضور فعال در محل کار ، حضور در مواقع اظطراری جهت انجام وظایف محوله ، پذیرش مسئولیت کارهای انجام شده و تلاش جهت انجام مناسب تر وظایف ، پر نمودن خلا حضور همکاران به صورت داوطلبانه ) (عالی تا 15 امتیاز ، خوب تا 10 امتیاز ، متوسط 5 امتیاز )",
        "-تطابق با تغییر و پذیرش روشهای جدید جهت انجام کارها ( با نظر مدیر و در نظر گرفتن معیارهای : سازگاری با هر تغییری در وظایف ، روشها ، مدیران و سرپرستان یا محیط کاری،توجه به انتقادات سازنده و پیشنهادات موثر در راستای بهبود کار ، تطابق با درخواستها ئ تقاظاهای مختلف ، حفظ آرامش در هنگام مواجه شدن با مشکلات  کاری) (عالی تا 15 امتیاز ، خوب تا 10 امتیاز ، متوسط 5 امتیاز)",
        "-رضایت همکاران (برقراری و حفظ روابط کاری مناسب با همکاران /سایر کارکنان / مدیران / ارباب رجوع ، درک و رسیدگی به مشکلات همکاران ، احترام گذاشتن و در نظر گرفتن شان و مقام افراد ، رفتار کردن مطابق اصول و ارزشهای اخلاقی ) (عالی تا 10 امتیاز ، خوب تا 7 امتیاز ، متوسط تا 4 امتیاز )",
        40
    ),

);

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

</head>
<style>

    .table th,
    .table td {
        font-family: "AP Yekan bold";
        direction: rtl;
        text-align: center;
    }

    .table tr,
    .table td {
        font-family: "AP Yekan bold";
        direction: rtl;
        text-align: center;
    }

    .table tr,
    .table td,
    .table input{
        font-family: "AP Yekan bold";
        direction: rtl;
        text-align: center;
    }


</style>
<body>
<script type="text/javascript" src="validation.js"></script>
<div class="bg-contact2">
    <div class="container-contact2">
        <div class="wrap-contact2">
            <form name="form_data" id="data" class="contact2-form" method="post" enctype="multipart/form-data" action="operation.php" onsubmit="return validate_form()">
					<span class="contact2-form-title">
                        <h1><small>محورها و شاخص‌های اختصاصی ارزیابی عملكرد</small></h1>
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

                <div class="row" style="font-family: 'AP Yekan bold';" >
                    <div class="col-md-4">
                        <div class="form-group has-success">
                            <label class="control-label" for="inputSuccess1">نام و نام خانوادگی<span style="color: red">*</span></label>
                            <input id="full_name_evaluated" class="full_name_evaluated form-control" type="text" name="full_name_evaluated">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group has-success">
                            <label class="control-label" for="inputSuccess1">عنوان شغلی <span style="color: red">*</span></label>
                            <input id="job_side_evaluated" class="job_side_evaluated form-control" type="text" name="job_side_evaluated">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group has-success">
                            <label class="control-label" for="inputSuccess1">دوره ارزیابی <span style="color: red">*</span></label>
                            <input id="period_assessment" class="period_assessment form-control" type="text" name="period_assessment">
                        </div>
                    </div>
                </div>


                <input type="hidden" name="user_creator" class="user_creator">
                <input type="hidden" name="user_assign" class="user_assign">

                <span class="contact2-form-title">
                        <h1><small>شاخص های عمومی</small></h1>
                </span>
                <hr>

                <!-- Table Scoring -->

                <table class="table table-bordered" style="margin-left: -40px">

                    <thead>
                    <tr>
                        <th style="width: 10%;">محور عملکرد</th>
                        <th style="width: 30%;">شاخصهای ارزیابی</th>
                        <th style="width: 10%;">سقف امتیاز شاخص</th>
                        <th style="width: 10%;">امتیاز مکتسبه</th>
                        <th style="width: 10%;">سقف امتیاز محوره</th>
                        <th style="width: 10%;">امتیاز نهایی</th>
                        <th style="width: 20%;">توضیحات</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    $item = 1;
                    foreach ($question as $key => $value) {
                        $co = count($value);
                        if ($co == 4) {
                            echo('
                                <tr class="row_' . $item . '">
                                    <td class="axis_performance" rowspan="3" ><input size="22px" name="axis_performance_'.$item.'" value="' . $key . '" readonly></td>
                                    <td class="assesmeent_indicator[]"><input maxlength="200px" size="65px" name="assesmeent_indicator[]" type="text" value="' . $value[0] . '" readonly></td>
                                    <td class="max_score_1" ><input size="1px" name="max_score[]" value="' . $value[3][0] . '" readonly></td>
                                    <td><input min="0" max="3" size="8px" name="score[]" type="number"  class="score_inp inp_' . $item . '"  placeholder="امتیاز" value="0"></td>
                                    <td rowspan="3" class="max_finals_score" ><input size="1px" name="max_finals_score_'.$item.'" type="text" value="' . $value[3][3] . '" readonly></td>
                                    <td rowspan="3"><input size="1px" name="score_finals_'.$item.'" class="final_score_quantity final_' . $item . '" type="text" value="0"  readonly></td>
                                    <td rowspan="3"><textarea style="max-height: 100%" name="des_assessment_'.$item.'" class="des_assessment" placeholder="توضیحات..."></textarea></td>
                                    <tr>
                                        <td class="assesmeent_indicator" ><input size="65px" name="assesmeent_indicator[]" type="text" value="' . $value[1] . '"readonly></td>
                                        <td class="max_score_2" ><input size="1px" name="max_score[]" value="' . $value[3][1] . '" readonly></td>
                                        <td><input min="0" max="3" size="8px" name="score[]" type="number"  class="score_inp inp_' . $item . '"  placeholder="امتیاز" value="0"></td>
                                    </tr>
                                    <tr>
                                        <td class="assesmeent_indicator" ><input maxlength="200px" size="65px" name="assesmeent_indicator[]" type="text" value="' . $value[2] . '" readonly></td>
                                        <td class="max_score_3" ><input size="1px" name="max_score[]" value="' . $value[3][2] . '" readonly></td>
                                        <td><input min="0" max="4" size="8px" name="score[]" type="number"  class="score_inp inp_' . $item . '"  placeholder="امتیاز"  value="0"></td>
                                    </tr>
                                </tr>
                            ');
                            $item++;
                        } elseif ($co == 6) {
                            if ($item ==2){
                                echo('
                                <tr class="row_' . $item . '">
                                    <td rowspan="5" class="axis_performance" ><input size="22px" name="axis_performance_'.$item.'" value="' . $key . '" readonly></td>
                                    <td class="assesmeent_indicator_1" ><input size="65px" name="assesmeent_indicator[]" type="text" value="' . $value[0] . '" readonly></td>
                                    <td class="max_score_1" ><input size="1px" name="max_score[]" value="' . $value[5][0] . '" readonly></td>
                                    <td ><input min="0" max="4" size="8px" name="score[]" type="number"placeholder="امتیاز" class="score_inp inp_' . $item .'" value="0"></td>
                                    <td rowspan="5" class="max_finals_score"  ><input size="1px" name="max_finals_score_'.$item.'" type="text" value="' . $value[5][5] . '" readonly></td>
                                    <td rowspan="5"><input size="1px" name="score_finals_'.$item.'" class="final_score_quantity  final_' . $item . '" type="text" value="0"  readonly></td>
                                    <td rowspan="5"><textarea style="width: 100%" class="des_assessment" name="des_assessment_'.$item.'" placeholder="توضیحات..."></textarea></td>
                                    <tr>
                                        <td class="assesmeent_indicator_2" ><input maxlength="200px" size="65px" name="assesmeent_indicator[]" type="text" value="' . $value[1] . '" readonly></td>
                                        <td class="max_score_2" ><input size="1px" name="max_score[]" value="' . $value[5][1] . '" readonly></td>
                                        <td ><input min="0" max="4" size="8px" type="number" class="score_inp inp_' . $item . '" placeholder="امتیاز" name="score[]" value="0"></td>
                                    </tr>
                                    <tr>
                                        <td class="assesmeent_indicator_3" ><input maxlength="200px" size="65px" name="assesmeent_indicator[]" type="text" value="' . $value[2] . '" readonly></td>
                                        <td class="max_score_3" ><input size="1px" name="max_score[]" value="' . $value[5][2] . '" readonly></td>
                                        <td><input min="0" max="4" size="8px" type="number" class="score_inp inp_' . $item . '" placeholder="امتیاز" name="score[]" value="0"></td>
                                    </tr>
                                    <tr>
                                        <td class="assesmeent_indicator_4" ><input maxlength="200px" size="65px" name="assesmeent_indicator[]" type="text" value="' . $value[3] . '" readonly></td>
                                        <td class="max_score_4" ><input size="1px" name="max_score[]" value="' . $value[5][3] . '" readonly></td>
                                        <td><input min="0" max="4" size="8px" type="number"placeholder="امتیاز" class="score_inp inp_' . $item . '" name="score[]" value="0"></td>
                                    </tr>
                                    <tr>
                                        <td class="assesmeent_indicator_5" ><input maxlength="200px" size="65px" name="assesmeent_indicator[]" type="text" value="' . $value[4] . '" readonly></td>
                                        <td class="max_score_5" ><input size="1px" name="max_score[]" value="' . $value[5][4] . '" readonly></td>
                                        <td ><input min="0" max="4" size="8px" type="number"placeholder="امتیاز" class="score_inp inp_' . $item . '" name="score[]" value="0"></td>
                                    </tr>     
                                </tr>
        
                            ');
                                $item++;
                            }elseif ($item == 3){
                                echo('
                                <tr class="row_' . $item . '">
                                    <td rowspan="5" class="axis_performance" ><input size="22px" name="axis_performance_'.$item.'" value="' . $key . '" readonly></td>
                                    <td class="assesmeent_indicator_1" ><input size="65px" name="assesmeent_indicator[]" type="text" value="' . $value[0] . '" readonly></td>
                                    <td class="max_score_1" ><input size="1px" name="max_score[]" value="' . $value[5][0] . '" readonly></td>
                                    <td ><input min="0" max="2" size="8px" name="score[]" type="number"placeholder="امتیاز" class="score_inp inp_' . $item .'" value="0"></td>
                                    <td rowspan="5" class="max_finals_score"  ><input size="1px" name="max_finals_score_'.$item.'" type="text" value="' . $value[5][5] . '" readonly></td>
                                    <td rowspan="5"><input size="1px" name="score_finals_'.$item.'" class="final_score_quantity  final_' . $item . '" type="text" value="0"  readonly></td>
                                    <td rowspan="5"><textarea style="width: 100%" class="des_assessment" name="des_assessment_'.$item.'" placeholder="توضیحات..."></textarea></td>
                                    <tr>
                                        <td class="assesmeent_indicator_2" ><input maxlength="200px" size="65px" name="assesmeent_indicator[]" type="text" value="' . $value[1] . '" readonly></td>
                                        <td class="max_score_2" ><input size="1px" name="max_score[]" value="' . $value[5][1] . '" readonly></td>
                                        <td ><input min="0" max="2" size="8px" type="number" class="score_inp inp_' . $item . '" placeholder="امتیاز" name="score[]" value="0"></td>
                                    </tr>
                                    <tr>
                                        <td class="assesmeent_indicator_3" ><input maxlength="200px" size="65px" name="assesmeent_indicator[]" type="text" value="' . $value[2] . '" readonly></td>
                                        <td class="max_score_3" ><input size="1px" name="max_score[]" value="' . $value[5][2] . '" readonly></td>
                                        <td><input min="0" max="2" size="8px" type="number" class="score_inp inp_' . $item . '" placeholder="امتیاز" name="score[]" value="0"></td>
                                    </tr>
                                    <tr>
                                        <td class="assesmeent_indicator_4" ><input maxlength="200px" size="65px" name="assesmeent_indicator[]" type="text" value="' . $value[3] . '" readonly></td>
                                        <td class="max_score_4" ><input size="1px" name="max_score[]" value="' . $value[5][3] . '" readonly></td>
                                        <td><input min="0" max="2" size="8px" type="number"placeholder="امتیاز" class="score_inp inp_' . $item . '" name="score[]" value="0"></td>
                                    </tr>
                                    <tr>
                                        <td class="assesmeent_indicator_5" ><input maxlength="200px" size="65px" name="assesmeent_indicator[]" type="text" value="' . $value[4] . '" readonly></td>
                                        <td class="max_score_5" ><input size="1px" name="max_score[]" value="' . $value[5][4] . '" readonly></td>
                                        <td ><input min="0" max="2" size="8px" type="number"placeholder="امتیاز" class="score_inp inp_' . $item . '" name="score[]" value="0"></td>
                                    </tr>     
                                </tr>
        
                            ');
                                $item++;
                            }

                        }
                    }
                    ?>

                    <tr>
                        <td colspan="2" rowspan="1">جمع شاخصهای عمومی</td>
                        <td>40</td>
                        <td>&nbsp;</td>
                        <td>40</td>
                        <td class="showSumOfFinals" name="showSumOfFinals"></td>
                        <td>&nbsp;</td>
                    </tr>
                    </tbody>
                </table>
                <hr>

                <!-- table 2 -->
                <span class="contact2-form-title">
                    <h1><small>محورها و شاخص‌های عمومی ارزیابی عملكرد کارکنان</small></h1>
                </span>
                <span class="contact2-form-title">
                    <h1><small>شاخص های اختصاصی</small></h1>
                </span>
                <hr>

                <!-- Table Scoring -->
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>محورها</th>
                        <th>شاخصهای ارزیابی</th>
                        <th>سقف امتیاز</th>
                        <th>امتیاز عملكرد</th>
                        <th>امتیاز مكتسبه</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    $item = 1;
                    foreach ($assessment as $key => $value) {
                        $co = count($value);
                        if ($co == 4) {
                            if ($item == 1){
                                echo('
                                <tr class="row_tb2_' . $item . '">
                                    <td rowspan="3" class="axes"><input size="8px" name="axes_'.$item.'" value="' . $key . '" type="text" readonly></td>
                                    <td class="ind_assessment_1" ><textarea style="width: 100%" size="100px" name="ind_assessment[]"  readonly>' . $value[0] . '</textarea></td>
                                    <td class="max_scoring_finals_tb2" rowspan="3"><input size="1px" name="max_scoring_finals_tb2_'.$item.'" value="' . $value[3] . '" readonly></td>
                                    <td><input min="0" max="5" size="8px" class="score_inp_tb2 inp_tb2_' . $item . '" type="number"placeholder="امتیاز" name="scoretbl2[]" value="0"></td>
                                    <td rowspan="3"><input style="text-align: center" class="final_score_quantity_tb2 final_tb2_' . $item . '" type="text" name="score_finals_tb2_'.$item.'" readonly value="0"></td>
                                    <tr>
                                        <td class="ind_assessment_2" ><textarea style="width: 100%" size="70px" name="ind_assessment[]"   readonly>' . $value[1] . '</textarea></td>
                                        <td><input min="0" max="5" size="8px" class="score_inp_tb2 inp_tb2_' . $item . '" type="number"placeholder="امتیاز" name="scoretbl2[]" value="0"></td>
                                    </tr>
                                    <tr>
                                        <td class="ind_assessment_3" ><textarea style="width: 100%" size="70px" name="ind_assessment[]"  readonly>' . $value[2] . '</textarea></td>
                                        <td><input min="0" max="5" size="8px" class="score_inp_tb2 inp_tb2_' . $item . '" type="number"placeholder="امتیاز" name="scoretbl2[]" value="0"></td>
                                    </tr> 
                                </tr>
                            ');
                                $item++;
                            }else{
                                echo('
                                <tr class="row_tb2_' . $item . '">
                                    <td rowspan="3" class="axes"><input size="8px" name="axes_'.$item.'" value="' . $key . '" type="text" readonly></td>
                                    <td class="ind_assessment_1" ><textarea style="width: 100%" size="100px" name="ind_assessment[]"  readonly>' . $value[0] . '</textarea></td>
                                    <td class="max_scoring_finals_tb2" rowspan="3"><input size="1px" name="max_scoring_finals_tb2_'.$item.'" value="' . $value[3] . '" readonly></td>
                                    <td><input min="0" max="15" size="8px" class="score_inp_tb2 inp_tb2_' . $item . '" type="number"placeholder="امتیاز" name="scoretbl2[]" value="0"></td>
                                    <td rowspan="3"><input style="text-align: center" class="final_score_quantity_tb2 final_tb2_' . $item . '" type="text" name="score_finals_tb2_'.$item.'" readonly value="0"></td>
                                    <tr>
                                        <td class="ind_assessment_2" ><textarea style="width: 100%" size="70px" name="ind_assessment[]"   readonly>' . $value[1] . '</textarea></td>
                                        <td><input min="0" max="15" size="8px" class="score_inp_tb2 inp_tb2_' . $item . '" type="number"placeholder="امتیاز" name="scoretbl2[]" value="0"></td>
                                    </tr>
                                    <tr>
                                        <td class="ind_assessment_3" ><textarea style="width: 100%" size="70px" name="ind_assessment[]"  readonly>' . $value[2] . '</textarea></td>
                                        <td><input min="0" max="10" size="8px" class="score_inp_tb2 inp_tb2_' . $item . '" type="number"placeholder="امتیاز" name="scoretbl2[]" value="0"></td>
                                    </tr> 
                                </tr>
                            ');
                                $item++;
                            }

                        } else {
                            echo('
                            
                                <tr class="row_tb2_' . $item . '">
                                    <td class="axes"><input size="8px" name="axes_'.$item.'" value="' . $key . '" type="text" readonly></td>
                                    <td class="ind_assessment_1" ><textarea style="width: 100%"  size="100px" name="ind_assessment[]"  readonly>' . $value[0] . '</textarea></td>
                                    <td class="max_scoring_finals_tb2" ><input size="1px" name="max_scoring_finals_tb2_'.$item.'" value="' . $value[1] . '" readonly></td>
                                    <td id="td_description"><input min="0" max="5" size="8px" class="score_inp_tb2 inp_tb2_' . $item . '" type="number"placeholder="امتیاز" name="scoretbl2[]" value="0"></td>
                                    <td class="td_max_score"><input style="text-align: center" class="final_score_quantity_tb2 final_tb2_' . $item . '" type="text" name="score_finals_tb2_'.$item.'" readonly value="0"></td>
                                </tr>
                            
                            ');
                            $item++;
                        }
                    } ?>

                    <tr>
                        <td colspan="2" rowspan="1">جمع شاخص های اختصاصی</td>
                        <td>60</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2" rowspan="1">
                            <div class="row">
                                <div class="col-md-4">
                                    جمع شاخص های اختصاصی<input  style="text-align: center" class="SumLike ShowTotalPrivate" type="text"name="ShowTotalPrivate" readonly value="0">
                                </div>
                                <div class="col-md-4">
                                    جمع شاخص های عمومی<input style="text-align: center" class="SumLike ShowTotalPublic" type="text"name="ShowTotalPublic" readonly value="0">
                                </div>
                                <div class="col-md-4">
                                    جمع امتیاز نهایی<input style="text-align: center" class="ShowTotalFinalPubAndPri"name="ShowTotalFinalPubAndPri" readonly value="0">
                                </div>
                            </div>
                        </td>
                        <td>100</td>
                        <td>&nbsp;</td>
                        <td class="showSumOfFinalsTbl2" name="showSumOfFinalsTbl2">&nbsp;</td>
                    </tr>

                    </tbody>
                </table>

                <hr id="hr_final">
                <div class="container-contact2-form-btn">
                    <div class="wrap-contact2-form-btn">
                        <div class="contact2-form-bgbtn"></div>
                        <input id="btnSubmit" style="font-family: 'AP Yekan bold'" name="save" type="submit" class="btn btn-success" value=ارسال>
                        <!--<button id="btnSubmit" style="font-family: 'AP Yekan bold'" name="send" type="button" class="btn btn-success">ارسال</button>-->
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
<script type="text/javascript" src="customJS.js"></script>
</body>
</html>
