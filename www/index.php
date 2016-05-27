<?php
echo "view<br/>";
$clientes = $_REQUEST['clientes'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MVC Basico</title>

        <style>
            table,tr,th,td{border: 1px solid black;};
            input[type="text"]{width: 175px;float: left;}
            select{width: 175px;float: left;}
        </style>
    </head>
    <body>
        <?php if (count($clientes) > 0) { ?>
            <h1>Listagem</h1>
            <hr/>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                </tr>
                <?php
                foreach ($clientes as $cliente) {

                    if ($cliente->nome != "") {
                        ?>

                        <tr>
                            <td><?php echo $cliente->id_cliente; ?></td>
                            <td><?php echo $cliente->nome; ?></td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </table>
            <?php
        } else {
            echo '<hr><h4>Não há registros para listagem</h4><br/><hr> ';
        }
        ?>
        <article>
            <hr>
            <h2>Salvar</h2>
            <hr>

            <form action="view/controller.php" method="post">
                <table>
                    <tr>
                        <td><label for="id_cliente">Id Cliente</label><br/>
                            <select id="id_cliente" name="id_cliente">
                                <option selected="" value="0">SELECIONE</option>
                                <?php
                                foreach ($clientes as $cliente) {

                                    if ($cliente->id_cliente >= 0) {
                                        ?>

                                        <option  value="<?php echo $cliente->id_cliente; ?>"><?php echo $cliente->id_cliente; ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </td>
                        <td>
                            <label for="nome">Nome Cliente</label><br/>
                            <input type="text" id="nome" name="nome"/>
                        </td>
                    <tr/>
                    <tr>
                        <td> <input type="submit" value="Salvar" id="1"/></td>
                    <tr/>
                </table>
            </form>
        </article>
    </body>
</html>
