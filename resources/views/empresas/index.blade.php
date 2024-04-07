@extends('layouts.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center alert alert-info">Empresas</h1>
            </div>
        </div>
        <div class="row">
        
            <div class="col-12">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Business Name</th>
                            <th scope="col">Nit</th>
                            <th scope="col">Verification Digit</th>
                            <th scope="col">Corporate Email</th>
                            <th scope="col">City</th>
                            <th scope="col">Address</th>
                            <th scope="col">Number Employees</th>
                            <th scope="col">Registration Date</th>
                            <th scope="col">Exporter</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Show</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Empresas as $empresa)
                            
                            <tr>
                                <th scope="row">{{ $empresa->id }}</th>
                                <td>{{ $empresa->business_name }}</td>
                                <td>{{ $empresa->nit }}</td>
                                <td>{{ $empresa->verification_digit }}</td>
                                <td>{{ $empresa->corporate_email }}</td>
                                <td>{{ $empresa->city }}</td>
                                <td>{{ $empresa->address }}</td>
                                <td>{{ $empresa->number_employees }}</td>
                                <td>{{ $empresa->registration_Date }}</td>
                                <td>{{ $empresa->exporter }}</td>
                               {{-- <td><a href="{{ route('empresas.edit', $empresa->id) }}" class="btn btn-info">Editar</a></td> --}}
                               <td>
                            <a href="/empresas/{{ $empresa->id}}/edit/" 
                            class="btn btn-outline-success">Edit</a>
                            </td>
                            <td>
                            <a href="/empresas/{{ $empresa->id}}" 
                            class="btn btn-outline-success">Show</a>
                            </td>
                            <td>
                            <form
                                method="post"
                                action="{{route('empresas.destroy', $empresa)}}"
                            >
                            @csrf
                            @method('DELETE')
                            <button
                                type="submit"
                                class = "btn btn-outline-danger"
                                onclick="return confirm('Are you sure you want to delete this empresas?')"
                            >Delete</button>
                            </form>
                            </td>
                            </tr>
                            
                        @endforeach
                    </tbody>
                </table>
             </div>
            <div class="col-12 mt-3">
                <a href="{{ route('empresas.create') }}" class="btn btn-info">
                    Crear nueva empresa
                </a>
            </div>
        </div>
    </div>
@endsection
