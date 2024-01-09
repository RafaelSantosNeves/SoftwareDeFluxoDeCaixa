<?php
include('../../configuration/connection.php');

include("../../configuration/user-session.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/button.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/footer.css">
  <link rel="icon" type="image/x-icon" href="../../src/icons8.png">
  <title>Cadastrar</title>
</head>

<body>

  <header>
    <span id="btnMenu" id="btnClose" class="material-symbols-outlined hamburguer">
      menu
      <a href="../session/dashboard/logout.php"></a>
    </span>
    <a href="../dashboard/logout.php"><span class="material-symbols-outlined"> logout </span></a>
  </header>

  <nav id="menu" class="menu effect">
    <ul>
      <li><a class="menu_link" href="../dashboard/dashboard.php"><i class="bi bi-house-door-fill"></i> Dashboard</a></li>
      <li><a class="menu_link" href="../receita/receitas-user.php"><i class="bi bi-cash-stack"></i> Receita</a></li>
      <li><a class="menu_link" href="../despesa/despesas-user.php"><i class="bi bi-cash-stack"></i> Despesas</a></li>
      <li><a class="menu_link" href="../user/list-view-user.php"><i class="bi bi-person-circle"></i> Usuários</a></li>
      <li><a class="menu_link" href="#"><i class="bi bi-person-add"></i> Cadastro</a></li>
      <li><a class="menu_link" href="../suporte/suporte-user.php"><i class="bi bi-sliders"></i> Suporte</a></li>
    </ul>
  </nav>

  <div>
    <!-- Seção que apresentará a mensagem para o usuário -->
    <div class="py-5 text-center">


      <h1 class="text-info fs-4 mt-5">
        <?php
        //Verifica se existe alguma mensagem de retorno.
        if (isset($_SESSION['retorno'])) {

          //Apresenta a mensagem de retorno para o usuário.
          print($_SESSION['retorno']);

          //Deleta a variável de sessão.
          unset($_SESSION['retorno']);
        } else {
        }
        ?></h1>
    </div>

    <main>
      <form class="formulario mb-5" method="post" action="./process-create-user.php">
        <h2 class="titulo_form">Cadastrar</h2>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>

        <label for="senha">Confirmar Senha:</label>
        <input type="password" id="senha" name="confirmarSenha" required>



        <button type="submit" name="submit" id="enviar">
          <div class="arrow-wrapper">
            <div class="arrow"></div>

      </form>

    </main>
  </div>

  <footer class="d-flex justify-content-center">
    <div class="menu-footer">
      <h3><a class="menu_link" href="../dashboard/dashboard.php"><i class="bi bi-house-door-fill"></i> Dashboard</a></h3>
      <h3><a class="menu_link" href="../receita/receitas-user.php"><i class="bi bi-cash-stack"></i> Receita</a></h3>
      <h3><a class="menu_link" href="../despesa/despesas-user.php"><i class="bi bi-cash-stack"></i> Despesas</a></h3>
      <h3><a class="menu_link" href="../user/list-view-user.php"><i class="bi bi-person-circle"></i> Usuários</a></h3>
      <h3><a class="menu_link" href="#"><i class="bi bi-person-add"></i> Cadastro</a></h3>
      <h3><a class="menu_link" href="../suporte/suporte-user.php"><i class="bi bi-sliders"></i> Suporte</a></h3>
    </div>
    <div class="copyright">
      <p>DEVBANK Copyright 2023 © Todos os direitos reservados.</p>
    </div>
  </footer>
  <script src="../../js/script.js"></script>


</body>

</html>