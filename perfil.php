<?php 
    session_start();
    include_once('config.php');

    $email = $_SESSION['email'];
    $senha = $_SESSION['senha'];
    
    $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

    $result = $conexao->query($sql);

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== BOXICONS ===============-->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
        <link rel="stylesheet" href="perfil_definitivo.css">

        
       

        <title>Meu Perfil - Connect Vida</title>
        <link rel="icon" type="image/x-icon" href="connectVidaLogo-removebg-preview.ico">

    </head>
    <body>

        
           
                <!--=============== NAV ===============-->

                <div class="nav" id="nav">
                    <nav class="nav__content">
                        <div class="nav__toggle" id="nav-toggle">
                            <i class='bx bx-chevron-right' ></i>
                        </div>
                
                        <a href="Connect_vida.php" class="nav__logo">
                            <i class='fas fa-tint' ></i>
                            <span class="nav__logo-name">Connect Vida</span>
                               
                        </a>
                        <div class="nav__list">
                            <a href="Connect_vida.php" class="nav__link active-link">
                                <i class='fas fa-home'></i>
                                <span class="nav__name">Início</span>
                            </a>
                
                            <a href="perfil.php" class="nav__link">
                                <i class='far fa-address-book'></i>
                                <span class="nav_name">Perfil</span>
                            </a>
                
                
                            <a href="fazer_pedido.php" class="nav__link">
                                 <i class='bx bx-plus-medical'></i>
                                <span class="nav__name">Criar pedido</span>
                            </a>
                
                            <a href="contato.html" class="nav__link">
                                <i class='fas fa-question-circle' ></i>
                                <span class="nav__name">Sobre</span>
                            </a>
                            <a href="Pedidos_aceitos.html" class="nav__link">
                                <i class='fas fa-cart-arrow-down' ></i>
                                <span class="nav__name">Pedidos Aceitos</span>
                            </a>
                           <a href="sair.php" class="nav__link">
                                <i class='bx bxs-log-out'></i>
                                <span class="nav__name"><b>SAIR</b></span>
                            </a>
                        </div>
                    </nav>
                </div>
                  
            
                    <!--=============== MAIN JS ===============-->
                    <script src="index.js"></script>
            <br>
            <br>
                    <div class="main">
                      <div class="header">
                        <h2>Bem-Vindo(a) ao Perfil Connect Vida!</h2>
                      </div>
                                 <div class="container-ballonn">
                                  <div class="header-balloonn">
                                      <p>Meu Perfil</p>
                                  </div>

                                 
                                 <div class="dados">
                                      <div class="dados-left">
                                        <div class="divisao">
                                            <figure class="image is-128x128">
                                                <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                                              </figure>
                                          <div class="input-group">
                                          <?php

                                        while($user_data = mysqli_fetch_assoc($result)){              
                                     echo'     <p>Nome:</p>
                                          <input disabled type="text" name="nome" id="nome" placeholder="'.$user_data['nome'].'">
                                          </div>
                                          <div class="input-group">
                                          <p>Email:</p>
                                          <input disabled type="text" name="email" id="email" placeholder="'.$user_data['email'].'">
                                          </div>
                                        </div>
                                        <div class="divisao">
                                          <div class="input-group">
                                          <p>Tipo Sanguineo:</p>
                                          <input disabled type="text" name="tipo_sanguineo" id="tipo_sanguineo" placeholder="'.$user_data['tipo_sanguineo'].'">
                                          </div>
                                          <div class="input-group">
                                          <p>Telefone:</p>
                                          <input disabled type="text" name="celular" id="local" placeholder="'.$user_data['celular'].'">
                                          </div>
                                        </div>  
                                      </div>
                                      <div class="dados-right">
                                          <textarea disabled name="textarea" id="textarea" cols="60" rows="10"></textarea>
                                      </div>
                                  </div>
                            
                                  </div>';
                                }
                        ?>
                                </div>
        

    </body>
</html>