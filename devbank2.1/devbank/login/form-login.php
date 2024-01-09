<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="../src/icons8.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/button.css">
  <title>Login</title>
</head>

<body>

  <header>
    <span id="btnMenu" id="btnClose" class="material-symbols-outlined hamburguer">
      menu
    </span>
    <a href="form-login.php"><i class="bi bi-person-square"></i></a>
  </header>

  <nav id="menu" class="menu effect">
    <ul>
      <li><a class="menu_link" href="../index.php"><i class="bi bi-house-door-fill"></i> Home</a></li>
      <li><a class="menu_link" href="#"><i class="bi bi-person-square"></i> Login</a></li>
    </ul>
  </nav>
  <div>
  <div class="py-5 text-center">
    <?php
    // //Verifica se existe alguma mensagem de retorno.
    // if(isset($_SESSION['retorno'])){

    //   //Apresenta a mensagem de retorno para o usuário.
    //   print($_SESSION['retorno']);

    //   //Deleta a variável de sessão.
    //   unset($_SESSION['retorno']);
    // }
    ?>
  </div>


  <main>
    <form class="formulario" action="process-login.php" method="post">
      <h2 class="titulo_form fw-bold">Login</h2>
      <label for="email">email:</label>
      <input type="text" id="email" name="email" required>

      <label for="senha">Senha:</label>
      <input type="password" id="senha" name="senha" required>


      <button type="submit" name="submit" id="enviar">
    <div class="arrow-wrapper">
        <div class="arrow"></div>

    </div>
</button>

    

      <p class="text-light text-center mt-5 fs-5">Caso tenha esquecido a senha entre em contato pelo email: <b>suporte.devbank@gmail.com</b></p>

      <br>
      <br>

    </form>


  </main>
  </div>
  <footer class="d-flex justify-content-center">
    <div class="menu-footer">
      <h3><a class="menu_link" href="../index.php"><i class="bi bi-house-door-fill"></i> Home</a></h3>
      <h3><a class="menu_link" href="#"><i class="bi bi-person-square"></i> Login</a></h3>
    </div>
    <div class="copyright">
      <p>DEVBANK Copyright 2023 © Todos os direitos reservados.</p>
    </div>
  </footer>
  <script src="../js/script.js"></script>

</body>

</html>