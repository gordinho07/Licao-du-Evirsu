<?php 
         function criarResposta($status, $msg){
            $resp = new Resposta($status, $msg);
     
            return $resp;
         }
    
         function receberDadosPedido_Produto(){
            $dados = json_decode(file_get_contents('php://input'));
            $id_pedido = $dados->id_pedido;
            $id_produto = $dados->id_produto;
            $qtd = $dados->qtd;
    
            $user = new Pedido_Produto($id_pedido, $id_produto, $qtd);
            return $user;
        }

       
?>