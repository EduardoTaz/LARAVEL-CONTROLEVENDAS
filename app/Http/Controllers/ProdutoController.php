<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    public function criar(Request $request) {
        $produto = new Produto;
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
       

        $produto->save();
        return redirect('/listar_produtos');
    }

    public function formCriarProduto() {
        return view("cadastro_produto");
    }

    public function listar() {
        $produtos = Produto::all();

        return view("produtos", ["produtos"=>$produtos]);
    }

    public function formDeletarProduto($id) {
        $produto = new Produto; // instancia produto
        
        /* estava dando erro ao excluir o produto por que estava tentando excluir diretamente, ele não deixava excluir por que
        estava sendo usado por outra tabela pedido_produtos, que é referenciado como chave estrangeira */

        // Excluir registros relacionados em pedido_produtos
        // DB::table()  método do Laravel que permite acessar uma tabela diretamente
        // 'pedido_produtos' é o nome da tabela no banco de dados que queremos acessar
        // where()  filtra os registros para encontrar apenas aqueles onde a coluna produto_id seja igual ao valor de $id
        // entao por causa disso produto_id deve ser igual ao $id do produto que estamos tentando excluir
        // 
        \DB::table('pedido_produtos')->where('produto_id', $id)->delete();
        
        $produto -> find($id) -> delete(); // deleta o cadastro

        return redirect('/listar_produtos');
    }
}
