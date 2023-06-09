<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use App\Http\Requests\CategoriaRequest;

class CategoriaController extends Controller
{
    public function index(){

        $categorias = Categoria::paginate(5);
        $contadorInicial = ($categorias->currentPage()-1) * $categorias->perPage(); //"Adaptação" para contar itens da paginação kkk
        return view('cadCateg', compact('categorias', 'contadorInicial'));
    } 

    public function store(CategoriaRequest $request){
       
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

    public function update(CategoriaRequest $request){
        Categoria::findOrfail($request->id)->update($request->all());
        return redirect('cadastro-categoria')->with('msgCadCategoria', "Categoria atualizada com sucesso!");
    }
}
