<?php

include_once 'C:/www/AlfamidiaMVC-Final/app/config/config.php';

class Conexao {

    private static $instance;

    public static function getInstance() {
        if (!isset(self::$instance)) {

            echo 'conect';
            try {

                self::$instance = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

                echo "conectou->" . DB_HOST;
            } catch (PDOException $exc) {
                echo $exc->getMessage();
            }
        }
        return self::$instance;
    }

}
