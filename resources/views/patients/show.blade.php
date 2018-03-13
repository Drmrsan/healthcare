@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="card">
			<div class="card-body">
				<a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-primary btn-sm float-right">Izmeni Podatke</a>
				<a href="{{ route('doctors.index') }}" class="btn btn-info btn-sm float-right" style="margin-right:10px;">Lista Pacijenata</a>
				<h4 class="card-title">Pacijent: {{ $patient->first_name }} {{ $patient->last_name }}</h4>
				<hr>
				<p>JMBG: {{ $patient->jmbg }}</p>
				<p>Broj osiguranja: {{ $patient->social_number }}</p>
				<h4>Izabrani lekar: 
					<a href="{{ route('doctors.show', $patient->doctor->id) }}">
						{{ $patient->doctor->first_name }} {{ $patient->doctor->last_name }}		
					</a>
				</h4>
			</div>
			<div class="card-footer">
				<small class="text-muted">created at: {{ date('M j, Y, H:i', strtotime($patient->created_at)) }}</small>
			</div>
		</div>
		<hr>
	</div>
@stop