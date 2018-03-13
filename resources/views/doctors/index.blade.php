@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="card">
			<div class="card-header">
				Lista Doktora
				<a href="{{ route('doctors.create') }}" class="btn btn-success btn-sm float-right">Kreiraj doktora</a>
			</div>
			<div class="card-body">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Ime</th>
							<th>Prezime</th>
							<th>Specijalizacija</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach ($doctors as $d)
							<tr>
								<td>{{ $d->first_name }}</td>
								<td>{{ $d->last_name }}</td>
								<td>{{ $d->specialty }}</td>
								<td class="text-right">
									<a href="{{ route('doctors.show', $d->id) }}" class="btn btn-info btn-sm">Detalji</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				{{-- Pagination --}}
				{{ $doctors->links() }}
			
			</div>
		</div>
	</div>
@stop