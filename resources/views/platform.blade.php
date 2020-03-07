@extends('layouts.base')

@section('title', 'Acceso al sistema')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/platform.css') }}">
@endsection

@section('scripts')
<script src="{{ asset('js/platform.js') }}" defer></script>
@endsection

@section('content')
<div class="modal" id="signup-modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5>Registro</h5>
			</div>
			<div class="modal-body">
				
			</div>
			<div class="modal-footer">
				
			</div>
		</div>
	</div>
</div>
<div class="modal" id="login-modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5>Inicio de sesión</h5>
			</div>
			<div class="modal-body">
				
			</div>
			<div class="modal-footer">
				
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-4 d-flex justify-content-center">
			<aside class="col-10 my-4 p-4">
				<div class="col-12 px-2 mb-4 text-center">
					<span class="menu-item-title">Acceso</span>
				</div>
				<div class="col-12 px-2 my-2">
					<span class="menu-item" id="menu-item-signup">Registrarme</span>
				</div>
				<div class="col-12 px-2 my-2">
					<span class="menu-item" id="menu-item-login">Ingresar</span>
				</div>
				<div class="col-12 px-2 mb-4 text-center">
					<span class="menu-item-title">Titulo</span>
				</div>
				<div class="col-12 px-2 mb-4 text-center">
					<span class="menu-item-title">Titulo</span>
				</div>
			</aside>
		</div>
	</div>
</div>
@endsection