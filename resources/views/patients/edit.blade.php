@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="card">
			<div class="card-header">
				Promena podataka
			</div>
			<div class="card-body">
				<form action="{{ route('patients.update', $patient->id) }}" method="POST">
					@method('put')
					@csrf
					<div class="form-group">
						<label for="first_name">Ime:</label>
						<input type="text" name="first_name" class="form-control" value={{ $patient->first_name }} required/>
					</div>

					<div class="form-group">
						<label for="last_name">Prezime:</label>
						<input type="text" name="last_name" class="form-control" value={{ $patient->last_name }} required/>
					</div>

					<div class="form-group">
						<label for="specialty">JMBG:</label>
						<input type="text" name="jmbg" class="form-control" value={{ $patient->jmbg}} required />
					</div>

					<div class="form-group">
						<label for="specialty">Broj osiguranja:</label>
						<input type="text" name="jmbg" class="form-control" value={{ $patient->social_number}} required />
					</div>

					<div class="form-group">
						<label for="doctor">Izaberi doktora:</label>
						<select name="doctor_id" id="doctor_id" class="form-control">
							@foreach ($doctors as $d)
								<option value="{{ $patient->doctor->id }}">{{ $patient->doctor->first_name }} {{ $patient->doctor->last_name }}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-success">Promeni podatke</button>
						<a href="{{ route('patients.show', $patient->id) }}" class="btn btn-warning">Cancel</a>
					</div>
				</form>
			</div>
		</div>
	</div>
@stop