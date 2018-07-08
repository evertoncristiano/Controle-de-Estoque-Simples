<?php 
namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use estoque\Produto;
use Request;

class ProdutoController extends Controller {

    public function lista(){
        $produtos = Produto::all();
        return view('produto.listagem')->with('Produtos', $produtos);
    }

    public function mostra($id){
        $produto = Produto::find($id);
        if(empty($produto)){
            return 'Desculpe, este produto não existe...';
        }
        return view('produto.detalhes')->with('produto', $produto);
    }

    public function novo(){
        return view('produto.form');
    }

    public function adiciona(){
        /*
        $produto = new Produto();
        $produto->nome = Request::input('nome');
        $produto->valor = Request::input('valor');
        $produto->descricao = Request::input('descricao');
        $produto->quantidade = Request::input('quantidade');

        $produto->save();

        return redirect()->action('ProdutoController@index')->withInput(Request::only('nome'));
        */
    
        /*
        $params = Request::all();
        $produto = new Produto($params);
        $produto->save();

        return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
        */

        Produto::create(Request::all());
        return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));

    }

    public function edit($id){
        $produto = Produto::find($id);
        if(!empty($produto)){
            return view('produto.edit')->with('produto', $produto);
        }
        return redirect()->action('ProdutoController@lista');
    }

    public function update($id){
        $params = Request::all();
        $produto = Produto::find($id);
        $produto->update($params);
        return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
    }

    public function remove($id){
        Produto::find($id)->delete();
        return redirect()->action('ProdutoController@lista');
    }

    public function json(){
        $produtos = DB::select('SELECT * FROM produtos');
     
        return response()->json($produtos);
        // return $produtos;
    }
}