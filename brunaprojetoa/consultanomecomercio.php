<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleuser.css">
    <title>Consulte sua Empresa</title>
    <link rel="icon" href="img/icon.avif" type="image/x-icon">
    </head>
<body>
    <?php 
    include_once "factory/conexao.php";
    // Verificar se o formulário foi submetido
    if(isset($_POST["cxpesquisa"])) {
        $nome = $_POST["cxpesquisa"];
        $consultar = "SELECT * FROM tbcormecial WHERE comercio = '$nome'";
        $executar = mysqli_query($conn, $consultar);
        $linha = mysqli_fetch_array($executar);
        
        // Verificar se encontrou o comércio
        if($linha) {
    ?>
    <div class="container">
        <h1>Comércio Consultado:</h1>
        <section>
            <label for="">Nome:</label>
            <input type="text" name="" value="<?php echo $linha['nome'] ?>"/>

            <label for="">Empresa:</label>
            <input type="text" name="" value="<?php echo $linha['comercio'] ?>"/>

            <label for="">Telefone:</label>
            <input type="text" name="" value="<?php echo $linha['telefone'] ?>"/>

            <label for="">WhatsApp:</label>
            <input type="text" name="" value="<?php echo $linha['whats'] ?>"/>
        </section>
    </div>
    <?php 
        } else {
            // Se não encontrou o comércio, exibe uma mensagem de feedback destacada
            echo "<div class='mensagem'><h2>Comércio não encontrado. Verifique o nome e tente novamente<h2></div>";
        }
    }
    ?>
</body>
</html>