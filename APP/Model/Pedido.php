<?php 

    class Pedido{
        public $id_pedido;
        public $id_cliente;
        public $data;

        function __construct($idPedido_informado, $idCliente_informado, $data_informado){
            $this->id_pedido = $idPedido_informado;
            $this->id_cliente = $idCliente_informado;
            $this->data = $data_informado;
        }

        
    }

    
?>
