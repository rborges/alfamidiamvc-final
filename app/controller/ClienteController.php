<?php

include_once 'C:/www/AlfamidiaMVC-Final/app/model/Cliente.php';

class ClienteController {

    public function listar() {

        $obj = new Cliente;
        $clientes = $obj->listar();

        $_REQUEST['clientes'] = $clientes;

        include_once 'C:/www/AlfamidiaMVC-Final/www/index.php';
    }

    public function salvar($obj) {

        $cliente = new Cliente;
        $cliente->salvar($obj);

        include_once 'C:/www/AlfamidiaMVC-Final/www/index.php';
    }

    public function excluir($id_cliente) {

        $cliente = new Cliente();
        $cliente->excluir($id_cliente);
    }

    public function atualizar() {
        
    }

}
