<?php

include_once 'IDAO.php';

class pdoDAO implements IDAO {

    const MYSQL_HOST = 'localhost';
    const MYSQL_USER = 'root';
    const MYSQL_PASSWORD = '';
    const MYSQL_DB_NAME = 'loja';

    public function __construct() {
        
    }

    public function atualizar($obj) {
        try {
            $conn = new PDO('mysql:host=' . self::MYSQL_HOST . ';dbname=' . self::MYSQL_DB_NAME, self::MYSQL_USER, self::MYSQL_PASSWORD);

            $conn->exec("UPDATE cliente SET nome = '$obj->nome' WHERE id_cliente = $obj->id_cliente");
        } catch (PDOException $exc) {
            echo "Erro ao atualizar cliente:" . $exc->getMessage();
        } finally {
            $conn = null;
        }
    }

    public function excluir($id) {
        try {
            $conn = new PDO('mysql:host=' . self::MYSQL_HOST . ';dbname=' . self::MYSQL_DB_NAME, self::MYSQL_USER, self::MYSQL_PASSWORD);

            $conn->exec("DELETE FROM cliente WHERE id_cliente = $id");
        } catch (PDOException $exc) {
            echo "Erro ao excluir cliente:" . $exc->getMessage();
        } finally {
            $conn = null;
        }
    }

    public function listar() {
        try {
            $row = array();

            $conn = new PDO('mysql:host=' . self::MYSQL_HOST . ';dbname=' . self::MYSQL_DB_NAME, self::MYSQL_USER, self::MYSQL_PASSWORD);

            $result = $conn->query("SELECT id_cliente, nome FROM cliente");

            if ($result) {
                while ($row[] = $result->fetch(PDO::FETCH_OBJ)) {
                    
                }
            }

            return $row;
        } catch (PDOException $exc) {
            echo "Erro ao listar: " . $exc->getMessage();
        } catch (Exception $exc) {
            echo "Erro ao listar: " . $exc->getMessage();
        } finally {
            $conn = null;
        }
    }

    public function salvar($obj) {

        try {
            $conn = new PDO('mysql:host=' . self::MYSQL_HOST . ';dbname=' . self::MYSQL_DB_NAME, self::MYSQL_USER, self::MYSQL_PASSWORD);


            $conn->exec("INSERT INTO loja.cliente(nome) VALUES('$obj->nome')");
        } catch (PDOException $exc) {
            echo "Erro ao inserir cliente:" . $exc->getMessage();
        } finally {
            $conn = null;
        }
    }

//put your code here
}
