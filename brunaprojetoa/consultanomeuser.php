<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleuser.css">
    <title>Consulta Usuario</title>
    <link rel="icon" href="img/icon.avif" type="image/x-icon">
</head>
<body>
<?php 
    include_once "factory/conexao.php";
    // Verificar se o formulário foi submetido
    if(isset($_POST["cxpesquisa"])) {
        $nome = $_POST["cxpesquisa"];
        $consultar = "SELECT * FROM tbusuario WHERE nome = '$nome'";
        $executar = mysqli_query($conn, $consultar);
        $linha = mysqli_fetch_array($executar);
        
        // Verificar se encontrou um usuário
        if($linha) {
    ?>

       

<div class="container">
<h1>Usuário Consultado:</h1>
    <section>
    <label for="">Nome:</label>
    <input type="text" name="" value="<?php echo $linha ['nome'] ?>"/>

    <label for="">E-mail:</label>
    <input type="e-mail" name="" value="<?php echo $linha ['email'] ?>"/>

    <label for="">Senha:</label>
    <input type="password" name="" value="<?php echo $linha ['senha'] ?>"/>

</section>
</div>

<?php 
        } else {
            // Se não encontrou o usuário, exibe uma mensagem de feedback
            echo "<div class='mensagem'><h2>Usuário não encontrado. Verifique o nome e tente novamente.</h2></div>";
        }
    }
    ?>

</body>
</html>