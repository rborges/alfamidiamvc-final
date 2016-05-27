<?php

/* Arquivo CONFIG é  para criar uma instancia de conexão com o BD
 * utilizando o PADRÃO SINGLETON */

header("Content-type: text/html; charset=iso-8859-1");
date_default_timezone_set("Brazil/East");

ini_set('allow_url_fopen', 1);

if ($_SERVER['SERVER_NAME'] == "localhost") {

    ini_set('display_errors', '1');

    //Dados para a conexão
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'loja');
    define('DB_HOST', 'localhost');

    echo "local<br/>";
} else {

    ini_set('display_errors', '0');

    //Dados para a conexão
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'loja');
    define('DB_HOST', 'localhost');

    echo "server<br/>";
}
