<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title>Cadastro usuario</title>
    <link rel="icon" href="img/icon.avif" type="image/x-icon">
</head>
<body>
    <section>     
    <h1>Cadastro de Usuário</h1>
    <form action="inseriruser.php" method="POST">
         Nome:
        <input type="text" name="cxnome"/><br/>
         Email:
        <input type="e-mail" name="cxemail"/><br/>
         Senha:
        <input type="password" name="cxsenha"/><br/>
        <input type="submit" value="Gravar">
    </form>

<hr size="10" color="#bd9bf5" widht="50%">
<h1>Consulte</h1>
                    <form action="consultanomeuser.php" method="POST">
                        <div class="container_form__itens">
                            <div class="container_form_itens__inputs">
                                <label for="">Digite o nome completo do usuário:</label></br></br>
                                <input type="text" name="cxpesquisa" id=""/>
                            </div>

                                <input type="submit" value="Pesquisar"/>
                            </div>
                        </div>
                    </form>
</section>

<footer id="rodape">
    <div class="footer-content">
        <div class="left">
            <h2>Bruna Luiza Paixão</h2>
        </div>
        <div class="right">
            <p>GU3024628 &copy 3°INFO</p>
        </div>
    </div>
</footer>
    </section>
<script src="js/script.js"></script>

</body>
</html>