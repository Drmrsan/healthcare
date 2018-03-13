@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="card">
			<div class="card-header">
				Kreiranje novog doktora
			</div>
			<div class="card-body">
				<form action="{{ route('doctors.store') }}" method="POST">
					@csrf
					<div class="form-group">
						<label for="first_name">Ime:</label>
						<input type="text" name="first_name" class="form-control" required/>
					</div>

					<div class="form-group">
						<label for="last_name">Prezime:</label>
						<input type="text" name="last_name" class="form-control" required/>
					</div>

					<div class="form-group">
						<label for="specialty">Specijalizacija:</label>
						<input type="text" name="specialty" class="form-control" required/>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-success">Kreiraj Doktora</button>
						<a href="{{ route('doctors.index') }}" class="btn btn-warning">Odustani</a>
					</div>
				</form>
			</div>
		</div>
	</div>
@stop