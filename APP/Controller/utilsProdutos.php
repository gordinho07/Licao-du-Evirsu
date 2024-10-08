<?php

function criarResposta($status, $msg){
    $resp = new Resposta($status, $msg);

    return $resp;
 }

function receberDadosProduto(){
         $dados = json_decode(file_get_contents('php://input'));
         $nome = $dados->nome;
         $descricao = $dados->descricao;
         $qtd = $dados->qtd;
         $marca = $dados->marca;
         $preco = $dados->preco;
         $validade = $dados->validade;
 
         $user = new Produto("", $nome, $descricao, $qtd, $marca, $preco, $validade);
         return $user;
     }
     ?>