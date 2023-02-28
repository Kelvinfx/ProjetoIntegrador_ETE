<!--<?php

if(isset($_POST['submit']))
{
   /* print_r(($_POST['nome']));
    print_r('<br>');
    print_r(($_POST['nasc']));
    print_r('<br>');
    print_r(($_POST['email']));
    print_r('<br>');    
    print_r(($_POST['celular']));
    print_r('<br>');
    print_r(($_POST['senha']));
    print_r('<br>');
    print_r(($_POST['genero']));
    print_r('<br>');
    print_r(($_POST['tipo_sang']));*/
    

    include_once('config.php');

    $nome = $_POST['nome'];
    $data_nasc = $_POST['nasc'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $senha = $_POST['senha'];
    $genero = $_POST['genero'];
    $tipo_sanguineo = $_POST['sangue'];


    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,data_nasc,email,celular,senha,genero,tipo_sanguineo) VALUES ('$nome','$data_nasc','$email','$celular','$senha','$genero','$tipo_sanguineo')");

    header('Location: login.php');
   
   }


?>-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastrar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <title>Connect Vida - Cadastre-se</title>
    
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
            <li class="itens-list"><a href="login.php" class="active">Entrar</a></li>
        </ul>
    </nav>
    <script src="/javs/cadastrar.js"></script>
    <main class="container">
        
        <div class="right">
            <form action="cadastrar.php" method="POST" id="form">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="fullname">Nome completo</label>
                        <input id="fullname" type="text" name="nome" placeholder="Digite seu nome completo" class="inputs required" oninput="nameValidate()">
                        <span class="span-required">Nome deve ter no mínimo 5 caracteres!</span>
                    </div>
                    <div class="input-box">
                        <label for="fullname">Data de Nascimento</label>
                        <input id="date" type="date" name="nasc" placeholder="Digite sua data de nascimento" class="inputs required">
                        <span class="span-required"></span>
                        
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" class="inputs required" oninput="emailValidate()">
                        <span class="span-required">Digite um email válido!</span>
                    </div>

                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input id="number" type="tel" name="celular" placeholder="(xx) xxxx-xxxx" class="inputs required">
                        <span class="span-required"></span>

                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="senha" placeholder="Digite sua senha" class="inputs required" oninput="mainPasswordValidate()">
                        <span class="span-required">A senha deve ter no mínimo 8 caracteres!</span>
                    </div>


                    <div class="input-box">
                        <label for="confirmPassword">Confirme sua Senha</label>
                        <input id="confirmPassword" type="password" name="confirmPassword" placeholder="Digite sua senha novamente" class="inputs required" oninput="comparePassword()">
                        <span class="span-required">As senhas devem ser compatíveis!</span>
                    </div>

                </div>

                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input type="radio" id="female" name="genero" value="Feminino" required>
                            <label for="female">Feminino</label>
                        </div>

                        <div class="gender-input">
                            <input type="radio" id="male" name="genero" value="Masculino" required>
                            <label for="male">Masculino</label>
                        </div>

                        <div class="gender-input">
                            <input type="radio" id="others" name="genero" value="Outros" required>
                            <label for="others">Outros</label>
                        </div>

                    </div>
                </div>

                
                
                <div class="tipe">
                    <label class="blood" for="blood">Tipo Sanguíneo:</label>
                    <select class="option" name="sangue">
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    </select>
                </div>
                <input type="submit" name="submit" id="submit" >
            </form>
        </div>
    </main>
</body>
<script>

    const form = document.getElementById('form');
    const campos = document.querySelectorAll('.required');
    const spans = document.querySelectorAll('.span-required')
    const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

   /*form.addEventListener('submit', (event) => {
        event.preventDefault();
        nameValidate();
        emailValidate();
        mainPasswordValidate()
        comparePassword();
    });*/

    function setError(index){
        campos[index].style.border = '2px solid #e63636';
        spans[index].style.display = 'flex';
    }

    function removeError(index){
        campos[index].style.border = '';
        spans[index].style.display = 'none';
    }

    function nameValidate(){
        if(campos[0].value.length < 3){
            setError(0);
        }else{
            removeError(0);
        }
    }

    function emailValidate(){
        if(!emailRegex.test(campos[2].value)){
            setError(2);
        }
        else{
            removeError(2);
        }
    }

    function mainPasswordValidate(){
        if(campos[4].value.length < 8){
            setError(4);
        }
        else{
            removeError(4);
            comparePassword();
        }
    }

    function comparePassword(){
        if(campos[4].value == campos[5].value && campos[5].value.length >= 8){
            removeError(5);
        }
        else{
            setError(5);
        }
    }

                    /*  nav   */
                        
    var ul = document.querySelector('nav ul');
    var menuBtn = document.querySelector('.menu-btn i');

    function menuShow() {
    if(ul.classList.contains('open')){
        ul.classList.remove('open');
    }else{
        ul.classList.add('open');
    }
}


   $(document).ready(function(){
	//Telefone
	$("#number").mask("(99) 99999-9999");
    });

</script>
</html>