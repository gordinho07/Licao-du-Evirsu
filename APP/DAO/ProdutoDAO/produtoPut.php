<?php 
   
   function editar_produto($conexao, $u, $id){

        $sql = "UPDATE Produtos SET Nome = '$u->nome', Descricao = '$u->descricao', qtd = '$u->qtd', Marca = '$u->marca', Preco='$u->preco', Validade = '$u->validade' WHERE ID = $id;";
        $res = mysqli_query($conexao, $sql) or die("Erro ao tentar incluir");
        fecharConexao($conexao);
        return $res;
   };

?>