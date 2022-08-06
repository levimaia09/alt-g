@extends('layouts.main_login')

@section('title', 'Login')

@section('content')
	@section('form-title', 'Login de usuário')

	<label for="email" class="txt1 p-b-6" :value="old('email')">
		Email
	</label>
	<div class="wrap-input100 validate-input m-b-10" data-validate = "Email is required">
		<input style="height: 3rem;" class="input100" id="email" type="email" name="email" :value="old('email')" required autofocus>
		<span class="focus-input100"></span>
	</div>
	
	<label for="password" class="txt1 p-b-6" :value="old('password')">
		Senha
	</label>
	<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
		<span class="btn-show-pass">
			<i class="fa fa-eye"></i>
		</span>
		<input style="height: 3rem;" class="input100" id="password" type="password" name="password" required autocomplete="current-password">
		<span class="focus-input100"></span>
	</div>
	@section('redirect-link', 'register')
	@section('redirect', 'Registrar-se')
	@section('submit-name', 'Logar')
	@section('submit-link', 'submit-login')
@endsection
