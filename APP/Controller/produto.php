<?php
    require 'utilsProdutos.php';
    require_once '../DAO/conexao.php';
    require_once '../DAO/ProdutoDAO/produtoGet.php';
    require_once '../DAO/ProdutoDAO/produtoPost.php';
    require_once '../DAO/ProdutoDAO/produtoPut.php';
    require_once '../DAO/ProdutoDAO/produtoPatch.php';
    require '../DAO/ProdutoDAO/produtoDelete.php';
    require '../Model/Produto.php';
    require '../Model/Resposta.php';

    $req = $_SERVER;
    $conexao = conectar();
    
    
     switch ($req["REQUEST_METHOD"]) {
         case 'GET':
            $produtos = json_encode(pegar_produto($conexao));
            echo $produtos;
             break;


         case 'POST':
            $u = receberDadosProduto();
             $resp = incluir_produto($conexao, $u);
             $in = new Resposta('', '');
                if($resp){
                   $in = criarResposta('200', 'Incluso com sucesso');
                } else {
                  $in = criarResposta('400', 'não incluso');
                }
             echo json_encode($in);
             break;


         case 'PUT':
            $dados = json_decode(file_get_contents('php://input'));
            $id = $dados->id;
            $u = receberDadosProduto();
            $resp = editar_produto($conexao, $u, $id);
            $in = new Resposta('', '');
                if($resp){
                   $in = criarResposta('204', 'Atualizado com sucesso');
                } else {
                  $in = criarResposta('400', 'Não atualizado');
                }
            echo json_encode($in);
             break;


         case 'PATCH':
            $dados = json_decode(file_get_contents('php://input'));
            $id = $dados->id;
            $resp = editar_produto_parcialmente($conexao, $campo, $novoValor, $id);
            $resposta = new Resposta('','');
            if($resp){
                $resposta = criarResposta('204', 'Atualizado com sucesso');
            } else{
               $resposta = criarResposta('400', 'Não atualizado');
            }
            echo json_encode($resposta);
             break;


         case 'DELETE':
            $dados = json_decode(file_get_contents('php://input'));
            $id = $dados->id;
            $resp = deletar_produto($conexao, $id);
            $resposta = new Resposta('', '');
            if($resp){
                $resposta = criarResposta('204', 'Excluido com suceso');
            } else {
                $resposta = criarResposta('400', 'Não excluido');
            }
             echo json_encode($resposta);
             break;
             
             
         default:
             break;
     }





?>