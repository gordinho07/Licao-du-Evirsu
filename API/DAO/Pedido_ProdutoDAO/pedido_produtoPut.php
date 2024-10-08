<?php 
   
   function editar_pedido_produto($conexao, $u, $id_pedido, $id_produto){

        $sql = "UPDATE pedidos_produtos SET qtd = '$u->qtd'  WHERE id_pedido = $id_pedido AND id_produto = $id_produto;";
        $res = mysqli_query($conexao, $sql) or die("Erro ao tentar incluir");
        fecharConexao($conexao);
        return $res;
   };

?>