<?php
require_once '../../model/Cliente.php';


class ClienteController {

    public function listar() {

        $obj = new Cliente;
        $clientes = $obj->listar();

        $_REQUEST['clientes'] = $clientes;

        require_once './view/ClienteView.php';
    }

    public function salvar($obj) {

        $cliente = new Cliente;
        $cliente->salvar($obj);

        require_once './view/ClienteView.php';
    }

    public function excluir($id_cliente) {

        $cliente = new Cliente();
        $cliente->excluir($id_cliente);
    }

    public function atualizar() {
        
    }

}
