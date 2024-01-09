<?php
include('../../configuration/connection.php');
//Chamada para o arquivo que verifica se o usuário está logado.
include("../../configuration/user-session.php");

$ID = $_GET['id'];
//resgatar id do usuário

$sql = "SELECT id, nome,cpf,email FROM usuario WHERE id = '$ID';";
$resultado = mysqli_query($conexao, $sql);
$usuario = mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="icon" type="image/x-icon" href="../../src/icons8.png">
    <title>Editar Usuario</title>
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
      <li><a class="menu_link" href="../user/form-create-user.php"><i class="bi bi-person-add"></i> Cadastro</a></li>
      <li><a class="menu_link" href="../suporte/suporte-user.php"><i class="bi bi-sliders"></i> Suporte</a></li>
    </ul>
  </nav>

    <div>
        <!-- Seção que apresentará a mensagem para o usuário -->
        <div class="py-5 text-center">

            <!-- //Apresenta uma mensagem.
              //Apresenta o usuário e resgatar a partir do id do usuário com um select e buscar pelo nome
           -->


        </div>

        <main>

            <form class="formulario" method="POST" action="process-edit-user.php?id=<?php print($usuario["id"]); ?>">
                <h2 class="titulo_form">Usuário<!--Colocar um php para mostrar o nome do usuário--></h2>
                <label for="">ID</label>
                <input type="text" name="id" value="<?php print($usuario["id"]); ?>" readonly>
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" value="<?php print($usuario["nome"]); ?>">

                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" value="<?php print($usuario['cpf']); ?>">

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php print($usuario['email']); ?>">

                <br>
                <br>

                <div class="d-flex flex-row justify-content-end">
                    <a href="list-view-user.php"><button class="btn btn-success">Salvar</button></a>
                </div>
            </form>
        </main>
    </div>
    <footer class="d-flex justify-content-center">
        <div class="menu-footer">
            <h3><a class="menu_link" href="../dashboard/dashboard.php"><i class="bi bi-house-door-fill"></i> Dashboard</a></h3>
            <h3><a class="menu_link" href="../receita/receitas-user.php"><i class="bi bi-cash-stack"></i> Receita</a></h3>
            <h3><a class="menu_link" href="../despesa/despesas-user.php"><i class="bi bi-cash-stack"></i> Despesas</a></h3>
            <h3><a class="menu_link" href="../user/list-view-user.php"><i class="bi bi-person-circle"></i> Usuários</a></h3>
            <h3><a class="menu_link" href="../user/form-create-user.php"><i class="bi bi-person-add"></i> Cadastro</a></h3>
            <h3><a class="menu_link" href="../suporte/suporte-user.php"><i class="bi bi-sliders"></i> Suporte</a></h3>
        </div>
        <div class="copyright">
            <p>DEVBANK Copyright 2023 © Todos os direitos reservados.</p>
        </div>
    </footer>
    <script src="../../js/script.js"></script>


</body>

</html>