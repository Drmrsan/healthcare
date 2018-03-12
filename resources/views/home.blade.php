@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Administracija</div>
                <div class="card-body text-center">
                    <a href="{{ route('doctors.index') }}" class="btn btn-success">Doktor</a>
                    <a href="{{ route('patients.index') }}" class="btn btn-info">Pacijent</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
