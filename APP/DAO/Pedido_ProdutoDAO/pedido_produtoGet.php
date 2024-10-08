<?php 
   

   function pegar_pedido_produto($conexao){

    $sql = "SELECT * FROM pedidos_produtos";
    $res = mysqli_query($conexao, $sql) or die("Erro ao tentar consultar");

    $pedido_produto = [];

    while ($registro = mysqli_fetch_array($res)) {
        $id_pedido = utf8_encode( $registro['id_pedido']);
        $id_produto = utf8_encode( $registro['id_produto']);
        $qtd = utf8_encode(  $registro['qtd']);
        
        
        $novo_pedido_produto = new Pedido_Produto($id_pedido, $id_produto, $qtd);
        array_push($pedido_produto ,$novo_pedido_produto);
    };
    
    fecharConexao($conexao);
    return $pedido_produto;
   };

   
?>