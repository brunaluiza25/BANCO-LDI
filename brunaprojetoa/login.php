<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="img/icon.avif" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
    <section id="cxprincipal">
        <header id="cabecalho">
            <h1>ALPHA <br> SEU MUNDO VIRTUAL</h1>
               
        </header>

        <figure id="cxcadeado">
            <img src="img/foto.png" alt="Cadeado">
        </figure>

        <header id="cxlogin">
            <h1>Login</h1>
            <form action="login.php" method="POST">
                <label for="cxemail">Email:</label><br>
                <input type="email" name="cxemail" id="cxemail"><br>
                <label for="cxsenha">Senha:</label><br>
                <input type="password" name="cxsenha" id="cxsenha"><br>
                <br>
                <input type="submit" value="Acessar">
</br></br></br>
                <a href="telacaduser.php">Não tem conta? Crie uma aqui!</a>
            </form>
        </header>

        <footer id="rodape">
            <div class="footer-content">
                <div class="left">
                    <h2>Acesse sua conta, não perca essa oportunidade!</h2>
                </div>
            </div>
        </footer>
    </section>
</body>
</html>
