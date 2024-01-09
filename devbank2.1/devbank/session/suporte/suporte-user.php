<?php
include("../configuration/user-session.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Suporte</title>
   <link rel="stylesheet" href="../../css/contato.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="../../css/suporte.css">
  <link rel="stylesheet" href="../../css/footer.css">
  <link rel="icon" type="image/x-icon" href="../../src/icons8.png">
</head>

<body>


  <header>
    <span id="btnMenu" id="btnClose" class="material-symbols-outlined hamburguer">
      menu
      <a href="../dashboard/logout.php">
    </span>

    <span class="material-symbols-outlined logout"> logout </span>

    <!-- <a href="./login/form-login.php">
          <i class="bi bi-person-square">
            
          </i>Logout</a>    -->

  </header>

  <nav id="menu" class="menu effect">
    <!-- <div style="text-align: right;">
                <button id="btnClose">X</button>
            </div> -->
    <ul>

      <li><a class="menu_link" href="../dashboard/dashboard.php"><i class="bi bi-house-door-fill"></i> Dashboard</a></li>
      <li><a class="menu_link" href="../receita/receitas-user.php"><i class="bi bi-cash-stack"></i> Receita</a></li>
      <li><a class="menu_link" href="../despesa/despesas-user.php"><i class="bi bi-cash-stack"></i> Despesas</a></li>
      <li><a class="menu_link" href="../user/list-view-user.php"><i class="bi bi-person-circle"></i> Usuários</a></li>
      <li><a class="menu_link" href="../user/form-create-user.php"><i class="bi bi-person-add"></i> Cadastro</a></li>
      <li><a class="menu_link" href="#"><i class="bi bi-sliders"></i> Suporte</a></li>
    </ul>
  </nav>

  <!-- partial:index.partial.html -->
  <div class="cards">

    <div class="card">
      <div class="card__image-holder">
        <img class="card__image" src="../../src/Isa.jpg" alt="wave" />
      </div>
      <div class="card-title">
        <a href="#" class="toggle-info btn">
          <span class="left"></span>
          <span class="right"></span>
        </a>
        <h2>
          Maria Isabelli
          <small>mariaisabellipinto@gmail.com</small>
        </h2>
      </div>
      <div class="card-flap flap1">
        <div class="card-description">
        Meu nome é Isabelli, tenho 20 anos, futura Técnica em Desenvolvimento de Sistema e Analista de Sistemas.
        </div>
        <div class="card-flap flap2">
          <div class="card-actions">

          </div>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card__image-holder">
        <img class="card__image" src="../../src/jesus.jpg" alt="wave" />
      </div>
      <div class="card-title">
        <a href="#" class="toggle-info btn">
          <span class="left"></span>
          <span class="right"></span>
        </a>
        <h2>
          Vitor Gabriel Duarte
          <small>vitorgabriel@gmail.com</small>
        </h2>
      </div>
      <div class="card-flap flap1">
        <div class="card-description">
        Meu nome é Vitor, tenho 20 anos, futuro Técnico em Desenvolvimento de Sistema.
        </div>
        <div class="card-flap flap2">
          <div class="card-actions">
          </div>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card__image-holder">
        <img class="card__image" src="../../src/Rafa.jpg" alt="wave" />
      </div>
      <div class="card-title">
        <a href="#" class="toggle-info btn">
          <span class="left"></span>
          <span class="right"></span>
        </a>
        <h2>
          Rafael Santos
          <small>rafael@gmail.com</small>
        </h2>
      </div>
      <div class="card-flap flap1">
        <div class="card-description">
        Meu nome é Rafael, tenho 18 anos, futuro Técnico em Desenvolvimento de Sistema.
        </div>
        <div class="card-flap flap2">
          <div class="card-actions">
          </div>
        </div>
      </div>
    </div>


    <div class="card">
      <div class="card__image-holder">
        <img class="card__image" src="../../src/Rai.jpeg" alt="wave" />
      </div>
      <div class="card-title">
        <a href="#" class="toggle-info btn">
          <span class="left"></span>
          <span class="right"></span>
        </a>
        <h2>
          Rai Pereira
          <small>rai@gmail.com</small>
        </h2>
      </div>
      <div class="card-flap flap1">
        <div class="card-description">
          Meu nome é Raí, tenho 20 anos, futuro Técnico em Desenvolvimento de Sistema.
        </div>
        <div class="card-flap flap2">
          <div class="card-actions">
          </div>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card__image-holder">
        <img class="card__image" src="../../src/Glauciara.jpeg" alt="wave" />
      </div>
      <div class="card-title">
        <a href="#" class="toggle-info btn">
          <span class="left"></span>
          <span class="right"></span>
        </a>
        <h2>
          Glauciara Corrêa
          <small>glauciara.correa@gmail.com</small>
        </h2>
      </div>
      <div class="card-flap flap1">
        <div class="card-description">
        Meu nome é Glauciara, tenho 17 anos, futura Técnica em Desenvolvimento de Sistema.
        </div>
        <div class="card-flap flap2">
          <div class="card-actions">
          </div>
        </div>
      </div>
    </div>


    <form class="form">
    <div class="title">Contate-nos</div>
    <input type="text" placeholder="Your email" class="input">
    <textarea placeholder="Your message"></textarea>
     
    <button>Submit</button>
</form>


<!-- Footer--> 
  </div>
  <footer class="d-flex justify-content-center">
    <div class="menu-footer">
    <h3><a class="menu_link" href="../dashboard/dashboard.php"><i class="bi bi-house-door-fill"></i> Dashboard</a></h3>
      <h3><a class="menu_link" href="../receita/receitas-user.php"><i class="bi bi-cash-stack"></i> Receita</a></h3>
      <h3><a class="menu_link" href="../despesa/despesas-user.php"><i class="bi bi-cash-stack"></i> Despesas</a></h3>
      <h3><a class="menu_link" href="../user/list-view-user.php"><i class="bi bi-person-circle"></i> Usuários</a></h3>
      <h3><a class="menu_link" href="../user/form-create-user.php"><i class="bi bi-person-add"></i> Cadastro</a></h3>
      <h3><a class="menu_link" href="#"><i class="bi bi-sliders"></i> Suporte</a></h3>
    </div>
    <div class="copyright">
      <p>DEVBANK Copyright 2023 © Todos os direitos reservados.</p>
    </div>
  </footer>
  <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script>
  <script src="../../js/suporte.js"></script>
  <script src="../../js/script.js"></script>

</body>

</html>