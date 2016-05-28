<?php
include_once 'C:/www/AlfamidiaMVC-Final/app/controller/ClienteController.php';


$clienteController = new ClienteController();
$clientes = $clienteController->listar();

if (isset($_REQUEST['clientes'])) {

    $clientes = $_REQUEST['clientes'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="_assets/bootstrap-3.3.6-dist/css/bootstrap.min.css"/>
        <script src="_assets/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <title>MVC Final</title>

    </head>
    <body>
        <section>
            <article>
                <h1>Listagem</h1>
                <?php
                if ($clientes != "") {
                    if (count($clientes) > 0) {
                        ?>

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
                        }
                        ?>
                    </table>
                    <?php
                } else {
                    echo '<hr><h4>Não há registros para listagem</h4><br/><hr> ';
                }
                ?>
            </article>
        </section>
        <section>
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
        </section>
    </body>
</html>
