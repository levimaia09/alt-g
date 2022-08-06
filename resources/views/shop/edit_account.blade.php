@extends('layouts.main_login')

@section('title', 'Editar conta')

@section('content')
    <div class="limiter">
		<div class="container-login100">
			<div style="background-color: rgb(255, 255, 255); width: 28rem;" class="wrap-login100 p-l-40 p-r-40 p-t-30 p-b-15">
				<form name="form1" class="login100-form validate-form flex-sb flex-w" action="../php/functions_account.php" method="post" enctype="multipart/form-data">
					<span class="login100-form-title p-b-40">
						Atualizar dados
                    </span>

					<label for="image">
					</label>
					<div class="m-b-10 max-width">
						<div class="image_container">
							<img src="" alt="Selecione uma imagem" class="imgphoto" id="imgphoto">
						</div>
						<input type="file" id="flimage" name="imagem" accept="image/*" >
						<input type="hidden" id="value_img" name="value_img" value="initial">
						<div class="reset_box"> <div id="reset_btn">Reset</div> </div>
					</div>

					<label for="email" class="txt1 p-b-6">
						Email
					</label>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Email é necessário">
                        <input style="height: 3rem;" class="input100" type="text" name="email" value="">
						<span class="focus-input100"></span>
					</div>

                    <label for="username" class="txt1 p-b-6">
						Nome de usuário
					</label>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username é necessário">
                        <input style="height: 3rem;" class="input100" type="text" name="username" value="">
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
@endsection
