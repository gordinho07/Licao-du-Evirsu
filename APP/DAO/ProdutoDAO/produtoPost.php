<?php 
   
   function incluir_produto($conexao, $u){

        $sql = "INSERT INTO Produtos (Nome, Descricao, qtd, Marca, Preco, Validade) VALUES ('$u->nome', '$u->descricao','$u->qtd', '$u->marca', '$u->preco','$u->validade');";
        $res = mysqli_query($conexao, $sql) or die("Erro ao tentar incluir");
        fecharConexao($conexao);
        return $res;
   };

?>