<?php 
   
    include_once('connection.php');
    $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);

    $result = "INSERT INTO login_cliente(email, passwordSenha) 
    VALUES('$email', '$password')";

    mysqli_query($conn, $result);
    //header("LayoutInitial.html");
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Conecte-se conosco Amigo!</title>
    <link rel="stylesheet" href="LoginOceanSmart.css" />
  </head>
  <body>
    <div class="page">
      <form method="POST" action="LayoutInitial.html" class="formLogin">
        <h1>Login</h1>
        <p>Digite os seus dados de acesso no campo abaixo.</p>
        <label for="email">E-mail</label>
        <input
          type="email"
          id="email"
          placeholder="Digite seu e-mail"
          autofocus="true"
        />
        <label for="password">Senha</label>
        <input type="password" id="password" placeholder="Digite sua senha" />
        <a href="/">Esqueci minha senha</a>
        <input type="submit" value="Acessar" class="btn" />
      </form>
    </div>
  </body>
</html>
