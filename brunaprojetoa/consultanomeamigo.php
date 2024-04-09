<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleuser.css">
    <title>Consulta Amigo</title>
    <link rel="icon" href="img/icon.avif" type="image/x-icon">
</head>
<body>
    <?php
        include_once "factory/conexao.php";
        $nome = $_POST["cxpesquisa"];
        $consultar = "select * from tbamigos where amigo = '$nome'";
        $executar = mysqli_query($conn, $consultar);

        $linha = mysqli_fetch_array($executar);
    ?>



<div class="container">
<h1>Amigo(a) Consultado(a):</h1>
        <section>
            <label for="">Nome:</label>
            <input type="text" name="" value="<?php echo $linha['amigo'] ?>"/>

            <label for="">E-mail:</label>
            <input type="e-mail" name="" value="<?php echo $linha['email'] ?>"/>

            <label for="">Telefone:</label>
            <input type="text" name="" value="<?php echo $linha['telefone'] ?>"/>

            <label for="">WhatsApp:</label>
            <input type="text" name="" value="<?php echo $linha['whats'] ?>"/>

            <label for="">Data de Nascimento:</label>
            <input type="date" name="" value="<?php echo $linha['datanasc'] ?>"/>
        </section>
    </div>

</body>
</html>