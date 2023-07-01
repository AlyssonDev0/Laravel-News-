<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use App\Http\Requests\CategoriaStoreRequest;

class CategoriaController extends Controller
{
    public function index(){

        $categorias = Categoria::all();
        return view('cadCateg', ['categorias' => $categorias]);
    } 

    public function store(CategoriaStoreRequest $request){
       
        $categoria = new Categoria;
        $categoria->nome = $request->nome;
        $categoria->save();

        return redirect('/cadastro-categoria')->with('msgCadCategoria', 'Categoria Salva com Sucesso!');
    }

    public function destroy($id){
        
        Categoria::findOrFail($id)->delete();
        return redirect('/cadastro-categoria')->with('msgCadCategoria', "Categoria Deletada com Sucesso!");
    }

    public function createUpdate($id){
        $categoria = Categoria::findOrFail($id);
        return view('/editCategoria', ['categoria' => $categoria]);
    }
}
