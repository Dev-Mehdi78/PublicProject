<!DOCTYPE html>
<html dir="rtl">
	<head>
		<meta charset="utf-8">
		<title>فرم ثبت نام</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="auth/style/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="auth/style/css/style.css">

        <!-- style bootstrap -->
        <!--<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>-->

    </head>

	<body>

		<div class="wrapper_custom" style="background-image: url('auth/style/images/bg-registration-form-1.png');">
			<div class="inner">
				<form method="post">
					<h3>فرم ثبت نام کاربر</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="full_name">نام و نام خانوادگی:</label>
							<div class="form-holder">
                                <i class="zmdi zmdi-account"></i>
								<input type="text" class="form-control-custom" id="full_name" name="full_name">
							</div>
						</div>
						<div class="form-wrapper">
							<label for="username">نام کاربری:</label>
							<div class="form-holder">
                                <i class="zmdi zmdi-account-circle"></i>
								<input type="text" class="form-control-custom" name="username" id="username">
							</div>
						</div>
					</div>
                    <div class="form-group">
                        <div class="form-wrapper">
                            <label for="num_mobile">شماره همراه:</label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-phone"></i>
                                <input type="text" class="form-control-custom" id="num_mobile" name="num_mobile">
                            </div>
                        </div>
                        <div class="form-wrapper">
                            <label for="email">ایمیل:</label>
                            <div class="form-holder">
                                <i style="font-style: normal; font-size: 15px;">@</i>
                                <input type="text" class="form-control-custom" id="email" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-wrapper">
                            <label for="state">استان:</label>
                            <div class="form-holder select">
                                <select name="state" id="state" class="form-control-custom">
                                    <option selected>لطفا یک گزینه را انخاب کنید</option>
                                    <option value="esf">اصفهان</option>
                                    <option value="teh">تهران</option>
                                    <option value="kar">کرج</option>
                                </select>
                                <i class="zmdi zmdi-pin"></i>
                            </div>
                        </div>
                        <div class="form-wrapper">
                            <label for="gender">جنسیت</label>
                            <div class="form-holder select">
                                <select name="gender" id="gender" class="form-control-custom">
                                    <option selected>لطفا یک گزینه را انتخاب کنید</option>
                                    <option value="male">مرد</option>
                                    <option value="femal">زن</option>
                                </select>
                                <i class="zmdi zmdi-face"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <label for="address">آدرس کامل:</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-nature-people"></i>
                            <textarea type="text" class="form-control-custom" id="address" name="address"></textarea>
                        </div>
                    </div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="password">رمزعبور:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock-outline"></i>
								<input  type="password" class="form-control-custom" placeholder="********" id="password" name="password">
							</div>
						</div>
						<div class="form-wrapper">
							<label for="repeat_pass">تکرار رمزعبور:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="password" class="form-control-custom" placeholder="********" id="repeat_pass" name="repeat_pass">
							</div>
						</div>
					</div>
					<div class="form-end">
						<div class="checkbox">
							<label>
								<input name="condition_site" type="checkbox"> شرایط و قوانین سایت را می پذیرم !
								<span class="checkmark"></span>
							</label>
						</div>
						<div class="button-holder">
                            <button  name="submit" id="submit" style="margin: auto 190px;">ثبت نام</button>
						</div>
					</div>
				</form>
			</div>
		</div>

        <!--<script src="lib/bootstrap/js/popper.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>
-->
    </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>