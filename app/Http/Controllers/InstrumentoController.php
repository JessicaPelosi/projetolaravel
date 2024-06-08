<?php

namespace App\Http\Controllers;

use App\Models\Instrumento;
use Illuminate\Http\Request;

class InstrumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Vai exibir todods os instrumentos 
        // Método GET
        $instrumento = Instrumento::all();
        return view('instrumento.index', compact('instrumento'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Mostrar o formulário de cadastro
        // Método GET
        return view('instrumento.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Salvar os dados na tabela
        //Método POST
        Instrumento::create([
            'tipo' => $request->input('tipo'),
            'nome' => $request->input('nome'),
            'preco' => $request->input('preco')
        ]);
        return redirect()->back()->with('success', 'Instrumento inserido com sucesso!');   
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Método GET
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Mostrar o formulário de edição
        //Método GET
        $instrumento = Instrumento::findOrFail($id);
        return view("instrumento.edit", compact('instrumento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Salvar as alterações em um registro
        //Método PUT
        $instrumento = Instrumento::findOrFail($id);
        $instrumento->update([
            'tipo' => $request->input('tipo'),
            'nome' => $request->input('nome'),
            'preco' => $request->input('preco')
        ]);
        return "Registro alterado com sucesso!";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Método DELETE
        //Excluir o registro
        $instrumento = Instrumento::findOrFail($id);
        $instrumento->delete();
        return "Registro alterado com sucesso!";
    }

    public function delete(string $id)
    {
        //Método GET
        //Mostrar o formulário com os dados antes de excluir
        $instrumento = Instrumento::findOrFail($id);
        return view("instrumento.delete", compact('instrumento'));
    }
}
