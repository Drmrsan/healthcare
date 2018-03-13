@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="card">
			<div class="card-body">
				<a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-primary btn-sm float-right">Izmeni podatke</a>
				<a href="{{ route('doctors.index') }}" class="btn btn-info btn-sm float-right" style="margin-right:10px;">Lista Doktora</a>
				<h4 class="card-title">Doktor: {{ $doctor->first_name }} {{ $doctor->last_name }}</h4>
				<p class="card-text">Doktor specijalista {{ $doctor->specialty }}</p>

			</div>
			<div class="card-footer">
				<small class="text-muted">created at: {{ date('M j, Y, H:i', strtotime($doctor->created_at)) }}</small>
			</div>
		</div>
		<hr>
		<div class="card">
			<div class="card-header">
				Lista Pacijenata
				<a href="#" class="btn btn-success btn-sm float-right">Zakazi laboratorijski pregled za pacijenta</a>
			</div>
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