<?php 
   $conexao = conectar();
   function editar_pedido_parcialmente($conexao, $campo, $novoValor, $id_pedido){
        $valor = "'$novoValor'";
        $sql = "UPDATE Pedidos SET $campo = $valor WHERE id_pedido = $id_pedido";
        $res = mysqli_query($conexao, $sql) or die("Erro ao tentar incluir");
        fecharConexao($conexao);
        return $res;
   };
   if ($_SERVER['REQUEST_METHOD'] === 'PATCH') {
      $input = file_get_contents('php://input');
      $dados = json_decode($input, true);
  
      $id_pedido = $dados['id_pedido'];
      $campo = $dados['campo'];
      $novoValor = $dados['novoValor'];
  
      $resp = editar_pedido_parcialmente($conexao, $campo, $novoValor, $id_pedido);
  
      return $resp;
   }
?>