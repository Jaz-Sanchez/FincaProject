@extends('layouts.app')
@include('layouts.nav')

@section('content')
	<div class="col-md-4 col-md-offset-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h1 class="panel-title">Bienvenido {{ auth()->user()->name }}</h1>
			</div>
			<div>
				<div class="panel-body">
					<strong>Email: </strong> {{ auth()->user()->email}}
				</div>	
				<div class="panel-footer">
					<form method="POST" action="{{ route('logout') }}">
						{{ csrf_field() }}
						<button class="btn btn-danger btn-xs btn-block">Cerrar sesion</button>
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection
