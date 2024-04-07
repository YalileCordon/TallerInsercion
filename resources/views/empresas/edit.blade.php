@extends('layouts.base')
@section('content')
    <form class="row shadow m-3 p-3" method="post" action="{{ route('empresas.update', $empresa->id) }}">

    @csrf
    @method('PUT')

        <div class="row">
        <div class="col-12">
            <h1 class="text-center alert alert-info">Editar Empresa</h1>
        </div>
    </div>

    <div class="col-md-6 mt-2">
        <label for="business_name" class="form-label">Business Name</label>
        <input type="text" class="form-control" id="business_name" name="business_name" value="{{ $empresa->business_name }}" placeholder="Empresa Business Name">
    </div>
    <div class="col-md-6 mt-2">
        <label for="nit" class="form-label">NIT</label>
        <input type="number" class="form-control" id="nit" name="nit" value="{{ $empresa->nit }}" placeholder="Empresa Nit">
    </div>
    <div class="col-md-4 mt-2">
        <label for="verification_digit" class="form-label">Verification Digit</label>
        <input type="number" class="form-control" id="verification_digit" name="verification_digit" value="{{ $empresa->verification_digit }}" placeholder="Empresa Verification Digit">
    </div>
    <div class="col-md-8 mt-2">
        <label for="corporate_email" class="form-label">Corporate Email</label>
        <input type="email" class="form-control" id="corporate_email" name="corporate_email" value="{{ $empresa->corporate_email }}" placeholder="Empresa Corporate Email">
    </div>
    <div class="col-md-6 mt-2">
        <label for="city" class="form-label">City</label>
        <input type="text" class="form-control" id="city" name="city" value="{{ $empresa->city }}" placeholder="Empresa City">
    </div>
    <div class="col-md-6 mt-2">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control" id="address" name="address" value="{{ $empresa->address }}" placeholder="Empresa Address">
    </div>
    <div class="col-md-4 mt-2">
        <label for="number_employees" class="form-label">Number Employees</label>
        <input type="number" class="form-control" id="number_employees" name="number_employees" value="{{ $empresa->number_employees }}" placeholder="Empresa Number Employees">
    </div>
    <div class="col-md-4 mt-2">
        <label for="registration_date" class="form-label">Registration Date</label>
        <input type="datetime-local" class="form-control" id="registration_date" name="registration_date" value="{{ date('Y-m-d\TH:i', strtotime($empresa->registration_date)) }}" placeholder="Empresa Registration Date">
    </div>
    <div class="col-md-4 mt-2">
        <label for="exporter" class="form-label">Exporter</label>
        <input type="text" class="form-control" id="exporter" name="exporter" value="{{ $empresa->exporter }}" placeholder="Empresa Exporter">
    </div>
    <div class="col-12 mt-2">
        <a href="{{ route('empresas.index') }}" class="btn btn-info">Back</a>
        <button type="submit" class="btn btn-info">Guardar Cambios</button>
    </div>
</form>

@endsection
