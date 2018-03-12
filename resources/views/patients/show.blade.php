@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="card">
			<div class="card-body">
				<a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-warning btn-sm float-right">Edit</a>
				<h5 class="card-title">Pacijent: {{ $patient->first_name }} {{ $patient->last_name }}</h5>
				<p class="">JMBG: {{ $patient->jmbg }}</p>
				<p class="">Broj osiguranja: {{ $patient->social_number }}</p>
				<p class="card-text">Izabrani lekar: {{ $patient->doctor->first_name }} {{ $patient->doctor->last_name }}</p>
			</div>
			<div class="card-footer">
				<small class="text-muted">created at: {{ $patient->created_at }}</small>
			</div>
		</div>
		<hr>
	</div>
@stop