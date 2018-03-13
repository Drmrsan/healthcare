@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="card">
			<div class="card-header">
				Promena podataka
			</div>
			<div class="card-body">
				<form action="{{ route('doctors.update', $doctor->id) }}" method="POST">
					@method('put')
					@csrf
					<div class="form-group">
						<label for="first_name">Ime:</label>
						<input type="text" name="first_name" class="form-control" value={{ $doctor->first_name }} required/>
					</div>

					<div class="form-group">
						<label for="last_name">Prezime:</label>
						<input type="text" name="last_name" class="form-control" value={{ $doctor->last_name }} required/>
					</div>

					<div class="form-group">
						<label for="specialty">Specijalizacija:</label>
						<input type="text" name="specialty" class="form-control" value={{ $doctor->specialty}} required/>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-success">Promeni podatke</button>
						<a href="{{ route('doctors.show', $doctor->id) }}" class="btn btn-warning">Odustani</a>
					</div>
				</form>
			</div>
		</div>
	</div>
@stop