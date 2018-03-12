@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="card">
			<div class="card-body">
				<a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-warning btn-sm float-right">Edit</a>
				<h5 class="card-title">Doktor: {{ $doctor->first_name }} {{ $doctor->last_name }}</h5>
				<p class="card-text">Doktor specijalista {{ $doctor->specialty }}</p>
			</div>
			<div class="card-footer">
				<small class="text-muted">created at: {{ $doctor->created_at }}</small>
			</div>
		</div>
		<hr>
		<div class="card">
			<div class="card-header">Lista Pacijenata</div>
			<div class="card-body">
				<ul>
					@foreach ($doctor->patients as $p)
						<li>
							<a href="{{ route('patients.show', $p->id) }}">{{ $p->first_name }} {{ $p->last_name }}</a>
						</li>
					@endforeach
				</ul>
				
			</div>
		</div>
	</div>
@stop