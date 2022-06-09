<html>
<head lang=en>

    <title>CONTA ALT-G</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="../login/css/util.css">
	<link rel="stylesheet" type="text/css" href="../login/css/main.css">
	<link rel="stylesheet" type="text/css" href="../all.css">
<!--===============================================================================================-->
</head>

<body>

<?php

$urlphp = "../php/";
$urladmin = "../admin/";
$urluser = "../user/";

include("../php/connection.php");
include("../php/verify_logins.php");
session_start();

verify_unlogin();


$id = $_SESSION['id'];
$result = mysqli_query($mysqli, "SELECT * FROM login WHERE id=$id");
$row = mysqli_fetch_assoc($result);

$email = $row['email'];
$username = $row['username'];
$imgurl = "../images/img_perfil/";	

?>
    <div class="limiter">
		<div class="container-login100">
			<div style="background-color: rgb(255, 255, 255); width: 28rem;" class="wrap-login100 p-l-40 p-r-40 p-t-30 p-b-15">
				<form name="form1" class="login100-form validate-form flex-sb flex-w" action="../php/functions_account.php" method="post" enctype="multipart/form-data">
					<span class="login100-form-title p-b-40">
						Atualizar dados
                    </span>

                    <?php
						if(isset($_SESSION['failed'])){
							$username = $_SESSION['username'];
                            $email = $_SESSION['email'];
							?>
								<span class="alert login100-form-title p-b-10 m-b-10"><?php echo $_SESSION['failed'];?></span>
								<br>
							<?php
						}

						unset($_SESSION['failed'], $_SESSION['username']);
					?>

					
					<label for="image">
					</label>
					<div class="m-b-10 max-width">
						<div class="image_container">
							<img src="<?php echo $imgurl.$row['image'];?>" alt="Selecione uma imagem" class="imgphoto" id="imgphoto">
						</div>
						<input type="file" id="flimage" name="imagem" accept="image/*" >
						<input type="hidden" id="value_img" name="value_img" value="initial">
						<div class="reset_box"> <div id="reset_btn">Reset</div> </div>
					</div>

					<label for="email" class="txt1 p-b-6">
						Email
					</label>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Email é necessário">
                        <input style="height: 3rem;" class="input100" type="text" name="email" value="<?php echo $email;?>">
						<span class="focus-input100"></span>
					</div>

                    <label for="username" class="txt1 p-b-6">
						Nome de usuário
					</label>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username é necessário">
                        <input style="height: 3rem;" class="input100" type="text" name="username" value="<?php echo $username;?>">
						<span class="focus-input100"></span>
					</div>

                    <label for="password" class="txt1 p-b-6">
						Nova Senha
					</label>
					<div class="wrap-input100 m-b-12">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input style="height: 3rem;" class="input100" type="password" name="password" value="">
						<span class="focus-input100"></span>
					</div>

                    <label for="confirm_password" class="txt1 p-b-6">
                        Senha antiga
                    </label>
                    <div class="wrap-input100 m-b-12">
                        <span class="btn-show-pass">
                            <i class="fa fa-eye"></i>
                        </span>
                        <input placeholder="confirme sua antiga senha" style="height: 3rem;" class="input100" type="password" name="oldpassword" value="">
                        <span class="focus-input100"></span>
                    </div>
			
                    
					<div class="container-login100-form-btn">
						<input type="submit" name="update" value="Update" class="login100-form-btn"></input>
					
						<input type="submit" name="delete" value="Delete" onClick="return confirm('Tem certeza que quer deletar?')" class="login100-form-btn input_ input_delete"></input>
                    </div>


				</form>
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="../login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../login/vendor/bootstrap/js/popper.js"></script>
	<script src="../login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../login/vendor/daterangepicker/moment.min.js"></script>
	<script src="../login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../login/js/main.js"></script>

</body>
</html>