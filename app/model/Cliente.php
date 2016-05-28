<?php


include_once 'C:/www/AlfamidiaMVC-Final/app/DAO/pdoDAO.php';

class Cliente implements IDAO {

    private $id_cliente;
    private $nome;

    function __construct() {
        $this->id_cliente;
        $this->nome;
    }

    function __get($propriedade) {
        return $this->$propriedade;
    }

    //intercepta atribuições
    function __set($propriedade, $valor) {

        if ($propriedade == 'id_cliente') {
            if (is_numeric($valor)) {
                $this->$propriedade = $valor;
            } else {
                throw new Exception("Id não é numérico", 1);
            }
        }

        $this->$propriedade = $valor;
    }

    public function salvar($obj) {

        $clienteDAO = new pdoDAO();
        return $clienteDAO->salvar($obj);
    }

    public function listar() {
        $clienteDAO = new pdoDAO();
        return $clienteDAO->listar();
    }

    public function atualizar($obj) {
        
    }

    public function excluir($id) {

        $clienteDAO = new pdoDAO();
        $clienteDAO->excluir($id);
    }

}
