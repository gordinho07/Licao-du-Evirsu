<?php 
         function criarResposta($status, $msg){
            $resp = new Resposta($status, $msg);
     
            return $resp;
         }
    
         function receberDadosPedido(){
            $dados = json_decode(file_get_contents('php://input'));
            $id_cliente = $dados->id_cliente;
            $data = $dados->data;
    
            $user = new Pedido("", $id_cliente, $data);
            return $user;
        }

       
?>