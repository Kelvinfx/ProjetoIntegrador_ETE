
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="login.css">
    <title>Connect Vida - Login</title>

</head>
<body>
    
    <nav class="navbar">
        <div class="logo">
            <h2><a class="logo-btn" href="#">Connect Vida</a></h2>
        </div>

        <div class="menu-btn" onclick="menuShow()">
            <i class="fa fa-bars fa-x2"></i>
        </div>

        <ul class="list">
            <li class="itens-list"><a href="#">Como doar?</a></li>
            <li class="itens-list"><a href="#">Sobre</a></li>
            <li class="itens-list"><a href="cadastrar.php" class="active">Cadastre-se</a></li>
        </ul>
    </nav>
    <script src="/javs/login.js"></script>
  
    <main class="container">
        <div class="left">
            <img src="connectVidaLogo-removebg-preview.png" alt="">
        </div>
        <div class="right">
            <form action="testLogin.php" method="POST">
                <div class="title">
                    <h1>Login</h1>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="email">E-mail:</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu E-Mail" required>
                    </div>
                    <div class="input-box">
                        <label for="password">Senha:</label>
                        <input id="password" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>
                </div>
                <div class="login-btn">
                    <input class="submit" type="submit" name="submit" value="enviar">
                </div>
            </form>
        </div>
    </main>
<script>
    var ul = document.querySelector('nav ul');
    var menuBtn = document.querySelector('.menu-btn i');

    function menuShow() {
    if(ul.classList.contains('open')){
        ul.classList.remove('open');
    }else{
        ul.classList.add('open');
    }
}
</script>
</body>
</html>