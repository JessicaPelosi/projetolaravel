<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CLiente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Vai exibir todods os clientes 
        // Método GET
        $cliente = Cliente::all();
        return view('cliente.index', compact('cliente'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Mostrar o formulário de cadastro
        // Método GET
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Salvar os dados na tabela
        //Método POST
        Cliente::create([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'telefone' => $request->input('telefone')
        ]);
        return "Registro inserido com sucesso!";
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
        $cliente = Cliente::findOrFail($id);
        return view("cliente.edit", compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Salvar as alterações em um registro
        //Método PUT
        $cliente = Cliente::findOrFail($id);
        $cliente->update([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'telefone' => $request->input('telefone')
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
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return "Registro deletado com sucesso!";
    }

    public function delete(string $id)
    {
        //Método GET
        //Mostrar o formulário com os dados antes de excluir
        $cliente = Cliente::findOrFail($id);
        return view("cliente.delete", compact('cliente'));
    }
}
