<?php

namespace App\Http\Controllers;

use App\Models\Cadastros;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\DescriptionFactory;
use SebastianBergmann\Environment\Console;

class CadastrosController extends Controller
{
    public function create(){
        return view('cadastros');
    }
    public function store(Request $request){
        //dd($request->all());
        Cadastros::create([
            'nome'=>$request->nome,
            'cpf'=>$request->cpf,
            'descricao'=>$request->descricao,
            'valor'=>$request->valor,
        ]);
        return "Cadastro efetuado com sucesso";
    }

    public function show($id){

        $cadastros = Cadastros::findOrFail($id);
        return view('show', ['cadastros'=> $cadastros]);

    }

    public function editar($id){
        $cadastros = Cadastros::findOrFail($id);
        return view('editar', ['cadastros'=> $cadastros]);
    }
    public function update(Request $request, $id){


        $cadastros = Cadastros::findOrFail($id);

        $cadastros->update([

            'nome'=>$request->nome,
            'cpf'=>$request->cpf,
            'descricao'=>$request->descricao,
            'valor'=>$request->valor,
            
        ]);
        
        return "Cadastro alterado com sucesso";

    }

    public function delete($id){

        $cadastros = Cadastros::findOrFail($id);
        return view('delete', ['cadastros'=> $cadastros]);
    }

    public function destroi($id){

        $cadastros = Cadastros::findOrFail($id);
        $cadastros->delete();
        return "excluido";
    }
}
