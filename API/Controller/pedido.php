<?php
    require 'utilsPedidos.php';
    require_once '../DAO/conexao.php';
    require_once '../DAO/PedidoDAO/pedidoGET.php';
    require_once '../DAO/PedidoDAO/pedidoPOST.php';
    require_once '../DAO/PedidoDAO/pedidoPut.php';
    require_once '../DAO/PedidoDAO/pedidoPatch.php';
    require '../DAO/PedidoDAO/pedidoDelete.php';
    require '../Model/Pedido.php';
    require '../Model/Resposta.php';

    $req = $_SERVER;
    $conexao = conectar();
    

     switch ($req["REQUEST_METHOD"]) {
         case 'GET':
            $pedidos = json_encode(pegar_pedido($conexao));
            echo $pedidos;
             break;


         case 'POST':
            $u = receberDadosPedido();
            
             $resp = incluir_pedidos($conexao, $u);
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
                $u = receberDadosPedido();
                $resp = editar_pedido($conexao, $u, $id_pedido);
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
                    $resp = editar_pedido_parcialmente($conexao, $campo, $novoValor, $id_pedido);
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
            $id_pedido = $dados->id_pedido;
            $resp = deletar_pedido($conexao, $id_pedido);
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