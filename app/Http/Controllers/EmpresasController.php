<?php

namespace App\Http\Controllers;

use App\Models\Empresas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EmpresasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'empresas.index',
            [
                'Empresas' => Empresas::all()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Log::debug('EmpresasController@create');
        return view('empresas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $empresas = new Empresas($request->all());

        $empresas->save();
        log::debug($request->all());

        return redirect()->route('empresas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Encuentra la empresa por su ID
        $empresa = Empresas::findOrFail($id);
        return view('empresas.show', compact('empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $empresa = Empresas::find($id);
        return view('empresas.edit', compact('empresa'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Valida los datos del formulario
        $request->validate([
            'business_name' => 'required|string|max:255',
            'nit' => 'required|string|max:255',
            'verification_digit' => 'required|string|max:255',
            'corporate_email' => 'required|email|max:255',
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'number_employees' => 'required|integer',
            'registration_date' => 'required|date',
            'exporter' => 'required|string|max:255',
        ]);

        // Obtiene la empresa a editar
        $empresa = Empresas::findOrFail($id);

        // Actualizar los datos de la empresa con los datos del formulario
        $empresa->update([
            'business_name' => $request->business_name,
            'nit' => $request->nit,
            'verification_digit' => $request->verification_digit,
            'corporate_email' => $request->corporate_email,
            'city' => $request->city,
            'address' => $request->address,
            'number_employees' => $request->number_employees,
            'registration_date' => $request->registration_date,
            'exporter' => $request->exporter,
        ]);

        // Redireccionar a la vista de empresas.index
        return redirect()->route('empresas.index')->with('success', 'Empresa actualizada correctamente.');
    }


    public function destroy(Empresas $empresa)
    {
        $empresa->delete();
        return back();
    }
}
