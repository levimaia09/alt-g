<html lang="en">
<head>
    <title>ALT-G LOGIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>

<body>


<?php
	include("../php/connection.php");
    include("../php/verify_logins.php");
    session_start();

    verify_login();
?>
	<div class="limiter">
		<div class="container-login100">
			<div style="background-color: rgb(255, 255, 255); width: 28rem;" class="wrap-login100 p-l-40 p-r-40 p-t-30 p-b-15">
				<form name="form1" class="login100-form validate-form flex-sb flex-w" action="../php/functions_account.php" method="post">
					<span class="login100-form-title p-b-20">
						Login de Usuário
					</span>

					<?php
						if(isset($_SESSION['failed'])){
							$username = $_SESSION['username'];
							?>
								<span class="alert login100-form-title p-b-10 m-b-10"><?php echo $_SESSION['failed'];?></span>
								<br>
							<?php
						}
						else{
							$username = "";
						}
						unset($_SESSION['failed'], $_SESSION['username']);
					?>

					<span class="txt1 p-b-6">
						Nome de usuário
					</span>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input style="height: 3rem;" class="input100" type="text" name="username" value="<?php echo $username;?>">
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-6">
						Senha
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input style="height: 3rem;" class="input100" type="password" name="password" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label style="width: 200%;" class="label-checkbox100" for="ckb1">
								Lembrar-me
							</label>
						</div>

						<div class="justify-content-end container-login100-form-btn">
							<input type="submit" value="Logar" name="submit-login" class="login100-form-btn"></input>
						</div>
					</div>

					<div style="width: 100%;" class="row p-t-15">
						<div class="col">
							<a href="#" class="txt3">
								Esqueceu sua senha?
							</a>
						</div>

						<div style="left: 5rem;" class="col">
							<a href="index_register.php" class="txt3">
								Cadastrar-se
							</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>

?>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
