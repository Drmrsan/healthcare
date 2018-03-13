@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="card">
			<div class="card-header">
				Lista Pacijenata
				<a href="{{ route('patients.create') }}" class="btn btn-success btn-sm float-right">Kreiraj pacijenta</a>
			</div>
			<div class="card-body">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Ime</th>
							<th>Prezime</th>
							<th>JMBG</th>
							<th>Broj osiguranja</th>
							<th>Izabrani doktor</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($patients as $p)
							<tr>
								<td>{{ $p->first_name }}</td>
								<td>{{ $p->last_name }}</td>
								<td>{{ $p->jmbg }}</td>
								<td>{{ $p->social_number }}</td>
								<td>{{ $p->doctor->first_name }} {{ $p->doctor->last_name }}</td>
								<td class="text-right">
									<a href="{{ route('patients.show', $p->id) }}" class="btn btn-info btn-sm">Detalji</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				{{-- Pagination --}}
				{{ $patients->links() }}
			
			</div>
		</div>
	</div>
@stop