<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
        // dd('Olá mundo');
        $produtos = Produto::all();
        // dd($produtos);
        return view('produtos.index', ['produtos' => $produtos]);
    }
    public function create(){
        return view('produtos.create');
    }
    public function store(Request $request){
        Produto::create($request->all());
        return redirect()->route('produtos-index');

    }
    public function edit($id){
        $produtos = Produto::where('id',$id)->first();
        if(!empty($produtos))
        {
            return view('produtos.edit', ['produtos' => $produtos]);
        }
        else {
            return redirect()->route('produtos-index'); 
        }
        

    }
    public function update(Request $request, $id){
        $data = [
            'nome' => $request->nome,
            'valor' => $request->valor,
            'descricao' => $request->descricao,
        ];
        Produto::where('id',$id)->update($data);
        return redirect()->route('produtos-index');
    }
    public function destroy($id){
        Produto::where('id',$id)->delete();
        return redirect()->route('produtos-index');
    }
}
