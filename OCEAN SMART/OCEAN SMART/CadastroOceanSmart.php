<?php
    header("LayoutInitial.html");
    include_once('connection.php');
    $name = filter_input(INPUT_POST,"name",FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_SPECIAL_CHARS);
    //$telephone = filter_input(INPUT_POST,"telephone",FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);



    $result = "INSERT INTO cadastrar_cliente(nameUser, email, passwordSenha) 
    VALUES('$name', '$email', '$password')";

    mysqli_query($conn, $result);
   
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CadastroOceanSmart.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title> Faça parte da família! </title>
    <style>
        .box {
            display: flex;
            justify-content: space-between;
            align-items: flex-start; /* Alterado para alinhar os itens no topo */
        }

        .img-box {
            flex: 1;
            max-width: 390px; /* Defina a largura máxima para o carrossel */
            height: 610px /* Adicione um espaçamento à direita */
        }

        .form-box {
            flex: 1;
            height: 610px;
        }

        @media (max-width: 768px) {
            .box {
                flex-direction: column;
                align-items: center;
            }

            .img-box {
                max-width: 100%; /* Altere a largura máxima para ocupar toda a largura */
                margin-right: 0; /* Remova o espaçamento à direita */
                margin-bottom: 15px; /* Adicione um espaçamento inferior */
            }
        }
        
    </style>
</head>

<body>
    <div class="box">
        <div class="img-box">
            <div id="carouselExampleControls" class="carousel slide vertical" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="fans-carousel.jpg" class="d-block" alt="Slide 1">
                    </div>
                    <div class="carousel-item">
                        <img src="Motherboard-carousel.jpg" class="d-block" alt="Slide 2">
                    </div>
                    <div class="carousel-item">
                        <img src="oceansmart-carousel.jpg" class="d-block" alt="Slide 3">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="form-box">
            <h2><b>OCEAN SMART</h2></b>
            <p> Já é um membro? <a href="LoginOceanSmart.html"> Login </a> </p>
            <form method="post">
                <div class="input-group">
                    <label for="nome"> Nome Completo</label>
                    <input type="text" id="nome" name="name" placeholder="Digite o seu nome completo" required>
                </div>

                <div class="input-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="Digite o seu email" required>
                </div>

                <div class="input-group">
                    <label for="telefone">Telefone</label>
                    <input type="tel" maxlength="9" id="telefone" name="telephone" placeholder="Digite o seu telefone" required>
                </div>

                <div class="input-group w50">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="password" placeholder="Digite sua senha" required>
                </div>

                <div class="input-group w50">
                    <label for="Confirmarsenha">Confirmar Senha</label>
                    <input type="password" id="Confirmarsenha" name="confPass" placeholder="Confirme a senha" required>
                </div>

                <div class="input-group">
                    <button> Cadastrar </button>
                </div>

            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>