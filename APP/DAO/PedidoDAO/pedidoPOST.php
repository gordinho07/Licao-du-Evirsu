<?php 
   
   function incluir_pedidos($conexao, $u){

        $sql = "INSERT INTO Pedidos (id_cliente, data) VALUES ('$u->id_cliente','$u->data');";
        $res = mysqli_query($conexao, $sql) or die("Erro ao tentar incluir");
        fecharConexao($conexao);
        return $res;
   };

?>