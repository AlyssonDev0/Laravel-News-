<?php

namespace App\Http\Controllers;
use App\Http\Requests\CategoriaStoreRequest;
use App\Http\Requests\NoticiaEditRequest;
use App\Http\Requests\NoticiaStoreRequest;
use App\Models\Categoria;
use App\Models\Noticia;

class NoticiaController extends Controller
{
    public function index(){
    
        $search = request('search');
        
        if($search){
            
            $noticias = Noticia::where('titulo', 'like', '%' .$search. '%'           
            )->orWhere('categoria', 'like', '%' .$search. '%')->orderBy('created_at', 'desc')->get();
            
        }else{
                $noticias = Noticia::all()->sortByDesc('created_at');
        }

        return view('welcome', ['noticias' => $noticias, 'search' => $search]);
       
    }

    public function cadCateg(){
        $categorias = Categoria::all();
        return view('cadCateg', ['categorias' => $categorias]);
    } 

    public function cadNoticia(){
        $categorias = Categoria::all();
        return view('cadNoticia', ['categorias' => $categorias]);
    }

    public function storeCategoria(CategoriaStoreRequest $request){
       
        $categoria = new Categoria;
        $categoria->nome = $request->nome;
        $categoria->save();

        return redirect('/cadastro-categoria')->with('msgCadCategoria', 'Categoria Salva com Sucesso!');
    }

    public function storeNoticia(NoticiaStoreRequest $request){

        $noticia = new Noticia;
        $noticia->titulo = $request->titulo;
        $noticia->categoria = $request->categoria;
        $noticia->conteudo = $request->conteudo;
        $noticia->save();

        return redirect('/cadastro-noticia')->with('msgCadNoticia', 'Notícia Postada com Sucesso!');
    }

    public function destroyCategoria($id){
        
        Categoria::findOrFail($id)->delete();
        return redirect('/cadastro-categoria')->with('msgCadCategoria', "Categoria Deletada com Sucesso!");

    }

    public function editNoticia($id){

        $categorias = Categoria::all();
        $noticia = Noticia::findOrFail($id);
        return view('/editNoticia', ['noticia' => $noticia, 'categorias' => $categorias]);
    }

    public function updateNoticia(NoticiaEditRequest $request){

        Noticia::findOrfail($request->id)->update($request->all());
        return redirect('/')->with('msgNoticias', "Notícia Atualizada com Sucesso!");

    }

    public function destroyNoticia($id){

        Noticia::findOrFail($id)->delete();
        return redirect('/')->with('msgNoticias', "Notícia Deletada com Sucesso!");

    }

    
}
