<?php 
   

   function deletar_produto($conexao, $id){

        $sql = "DELETE FROM Produtos WHERE id = $id;";
        $res = mysqli_query($conexao, $sql) or die("Erro ao tentar deletar");


        fecharConexao($conexao);
        return $res;
   };

   
   
?>