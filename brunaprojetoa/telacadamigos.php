<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styleuser.css">
    <title> Amigos</title>
    <link rel="icon" href="img/icon.avif" type="image/x-icon">
</head>
<body>
<section>
<h1>Cadastre seu Amigo</h1>
    <form action="inseriramigos.php" method="POST">
         Amigo:
        <input type="text" name="cxamigo"/><br/>
         Email:
        <input type="e-mail" name="cxemail"/><br/>
         Telefone:
        <input type="text" name="cxtelefone"/><br/>
         Whats:
        <input type="text" name="cxwhats"/><br/>
         Data de nascimento:
        <input type="date" name="cxnascimento"/><br/>
        <input type="submit" value="Gravar">
    </form>

    <hr size="10" color="#bd9bf5" widht="50%">
                    <h1>Consulte</h1>
                    <form action="consultanomeamigo.php" method="POST">
                        <div class="container_form__itens">
                            <div class="container_form_itens__inputs">
                                <label for="">Digite o nome completo do amigo:</label></br></br>
                                <input type="text" name="cxpesquisa" id=""/>        
                            </div>
                                
                            <div class="container_form_itens__submit">
                                <input type="submit" value="Pesquisar"/>
                            </div>
                        </div>
                    </form>
</section>
</body>
</html>