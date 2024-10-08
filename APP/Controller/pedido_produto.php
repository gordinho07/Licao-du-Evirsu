<?php
    require 'utilsPedido_Produto.php';
    require_once '../DAO/conexao.php';
    require_once '../DAO/Pedido_ProdutoDAO/pedido_produtoGet.php';
    require_once '../DAO/Pedido_ProdutoDAO/pedido_produtoPost.php';
    require_once '../DAO/Pedido_ProdutoDAO/pedido_produtoPut.php';
    require_once '../DAO/Pedido_ProdutoDAO/pedido_produtoPatch.php';
    require '../DAO/Pedido_ProdutoDAO/pedido_produtoDelete.php';
    require '../Model/Pedido_produto.php';
    require '../Model/Resposta.php';

    $req = $_SERVER;
    $conexao = conectar();
    

     switch ($req["REQUEST_METHOD"]) {
         case 'GET':
            $pedido_produto = json_encode(pegar_pedido_produto($conexao));
            echo $pedido_produto;
             break;


         case 'POST':
            $u = receberDadosPedido_Produto();
            
             $resp = incluir_pedido_produto($conexao, $u);
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
            $id_pedido = $dados->id_pedido;
            $id_produto = $dados->id_produto;
            $u = receberDadosPedido_Produto();
            $resp = editar_pedido_produto($conexao, $u, $id_pedido, $id_produto);
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
                $id_pedido = $dados->id_pedido;
                $resp = editar_pedido_produto_parcialmente($conexao, $campo, $novoValor, $id_pedido);
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
                    $id_pedido_produto = $dados->id_pedido;
                    $resp = deletar_pedido_produto($conexao, $id_pedido_produto);
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