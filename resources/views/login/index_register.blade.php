
@extends('layouts.main_login')

@section('title', 'Registro')

@section('content')
	@section('form-title', 'Registrar usuário')

	<label for="image">
	</label>
	<div class="m-b-10 max-width">
		<div class="image_container">
			<img src="../images/img/semfoto.png" alt="Selecione uma imagem" class="imgphoto" id="imgphoto">
			<div class="reset_box"> <div id="reset_btn">Reset</div> </div>
		</div>
		<input type="file" id="flimage" name="imagem" accept="image/*" >
		<input type="hidden" id="value_img" name="value_img" value="initial">
	</div>

	<span class="txt1 p-b-6">
		Email
	</span>
	<div class="wrap-input100 validate-input m-b-10" data-validate = "Email é necessário">
		<input style="height: 3rem;" class="input100" type="text" name="email" value="">
		<span class="focus-input100"></span>
	</div>

	<span class="txt1 p-b-6">
		Nome de usuário
	</span>
	<div class="wrap-input100 validate-input m-b-10" data-validate = "Nome de usuário é necessário">
		<input style="height: 3rem;" class="input100" type="text" name="username" value="">
		<span class="focus-input100"></span>
	</div>
	
	<span class="txt1 p-b-6">
		Senha
	</span>
	<div class="wrap-input100 validate-input m-b-12" data-validate = "Senha é necessário">
		<span class="btn-show-pass">
			<i class="fa fa-eye"></i>
		</span>
		<input style="height: 3rem;" class="input100" type="password" name="password" >
		<span class="focus-input100"></span>
	</div>
	
	@section('redirect-link', 'login')
	@section('redirect', 'Logar-se')
	@section('submit-name', 'Registrar')
	@section('submit-link', 'submit-register')
@endsection

