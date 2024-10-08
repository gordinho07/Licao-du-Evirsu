<?php 
   

   function deletar_pedido_produto($conexao, $id_pedido_produto){

        $sql = "DELETE FROM pedidos_produtos WHERE id_pedido = $id_pedido_produto;";
        $res = mysqli_query($conexao, $sql) or die("Erro ao tentar deletar");


        fecharConexao($conexao);
        return $res;
   };

   
   
?>