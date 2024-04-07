@extends('layouts.base')
@section('content')
@section('title','Create a new Task')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center alert alert-info">Crear Empresa</h1>
        </div>
    </div>
    <div class="row">

    </div>
    <form class="row shadow m-3 p-3" method="post" action="{{route ('empresas.store')}}">
        @csrf
        <div class="col-md-6 mt-2">
            <label for="task_due_date" class="form-label"> Business Name</label>
            <input type="text"  class="form-control" id="business_name" name="business_name" placeholder="Empresa Business Name">
        </div>
        <div class="col-md-6 mt-2">
            <label for="task_priority" class="form-label" > Nit</label>
            <input type="number" class="form-control" id="business_name" name="nit" placeholder="Empresa Nit">
        </div>
        <div class="col-md-4 mt-2">
            <label for="task_description" class="form-label"> Verification Digit</label>
            <input type="number" class="form-control" id="verification_digit" name="verification_digit" placeholder="Empresa Description"></textarea>
        </div>
                <div class="col-md-8 mt-2">
            <label for="task_description" class="form-label">Corporate Email</label>
            <input type="text"  class="form-control" id="corporate_email" name="corporate_email" placeholder="Empresa Corporate Email"></textarea>
        </div>
                <div class="col-md-6 mt-2">
            <label for="task_description" class="form-label"> City</label>
            <input type="text"  class="form-control" id="city" name="city" placeholder="Empresa City"></textarea>
        </div>
        <div class="col-md-6 mt-2">
            <label for="task_description" class="form-label"> Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Empresa Address"></textarea>
        </div>
        <div class="col-md-4 mt-2">
            <label for="task_description" class="form-label">Number Employees</label>
            <input type="number" class="form-control" id="number_employees" name="number_employees" placeholder="Empresa Number Employees"></textarea>
        </div>
        <div class="col-md-4 mt-2">
            <label for="task_description" class="form-label">Registration Date</label>
             <input type="datetime-local" class="form-control" id="registration_date" name="registration_date" placeholder="Empresa Registration Date">
        </div>
        <div class="col-md-4 mt-2">
            <label for="task_description" class="form-label">Exporter</label>
            <input type="text" class="form-control" id="exporter" name="exporter" placeholder="Empresa Exporter"></textarea>
        </div>
        <div class="row">
        <div class="col-12 mt-2">
            <a href="{{ route('empresas.index') }}" class="btn btn-info">Back</a>
            <button type="submit" class="btn btn-info">Save</button>
        </div>
    </form>
</div>
@endsection
