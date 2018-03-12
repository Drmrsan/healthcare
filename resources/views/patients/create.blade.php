@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="card">
			<div class="card-header">
				Kreiranje novog pacijenta
			</div>
			<div class="card-body">
				<form action="{{ route('patients.store') }}" method="POST">
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
						<label for="specialty">JMBG:</label>
						<input type="text" name="jmbg" class="form-control" required/>
					</div>

					<div class="form-group">
						<label for="specialty">Broj osiguranja:</label>
						<input type="text" name="social_number" class="form-control" required/>
					</div>

					<div class="form-group">
						<label for="doctor">Izaberi doktora:</label>
						<select name="doctor_id" id="doctor_id" class="form-control">
							@foreach ($doctors as $d)
								<option value="{{ $d->id }}">{{ $d->first_name }} {{ $d->last_name }}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-success">Kreiraj Pacijenta</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@stop