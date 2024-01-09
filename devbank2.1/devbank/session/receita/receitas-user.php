<?php
include_once('../../configuration/connection.php');

include("../../configuration/user-session.php");

$sql = "SELECT id,valor_entrada,tipo_entrada,data_entrada FROM entrada_valores WHERE ativo=1;";


$resultado = mysqli_query($conexao, $sql);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../../css/receitas-user.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../../css/footer.css">
  <link rel="icon" type="image/x-icon" href="../../src/icons8.png">
  <style>
    .tabela {
      margin-left: 20%;
      margin-right: 20%;
      margin-top: 50px;
      background-color: #164773;
      border-radius: 20px;
    }

    th,
    tr {
      color: white;
    }
  </style>
  <title>Receitas</title>

</head>

<body>


  <header>
    <span id="btnMenu" id="btnClose" class="material-symbols-outlined hamburguer">
      menu
      <a href="../session/dashboard/logout.php">
    </span>

    <a href="../dashboard/logout.php"><span class="material-symbols-outlined"> logout </span></a>
  </header>
  <nav id="menu" class="menu effect">
    <ul>
      <li><a class="menu_link" href="../dashboard/dashboard.php"><i class="bi bi-house-door-fill"></i> Dashboard</a></li>
      <li><a class="menu_link" href="#"><i class="bi bi-cash-stack"></i> Receita</a></li>
      <li><a class="menu_link" href="../despesa/despesas-user.php"><i class="bi bi-cash-stack"></i> Despesas</a></li>
      <li><a class="menu_link" href="../user/list-view-user.php"><i class="bi bi-person-circle"></i> Usuários</a></li>
      <li><a class="menu_link" href="../user/form-create-user.php"><i class="bi bi-person-add"></i> Cadastro</a></li>
      <li><a class="menu_link" href="../suporte/suporte-user.php"><i class="bi bi-sliders"></i> Suporte</a></li>
    </ul>
  </nav>


  <div>
    <h2 class="h2 mt-5 pt-5 fw-bold">Receitas</h2>
    <form action="process-receitas-user.php" method="post" class="formulario">

      <div class="form-label">
        <label for="#">Valor Entrada</label>
        <input type="number" name="valor_entrada" placeholder="digite valor...">
      </div>
      <div>
        <label class="form-label" for="#">Tipo de Receita</label>
        <select class="sltTipo" name="tipo_entrada">
          <option selected>Selecione o tipo de receita</option>
          <option value="Vendas de produtos ou prestação de serviços">Vendas de produtos ou prestação de serviços</option>
          <option value="Acordos comerciais">Acordos comerciais</option>
          <option value="Comissões de vendas">Comissões de vendas</option>
          <option value="Aluguéis de propriedades">Aluguéis de propriedades</option>
          <option value="Taxas de licenciamento">Taxas de licenciamento</option>
          <option value="Publicidade ou parcerias de marketing">Publicidade ou parcerias de marketing</option>
          <option value="Subscrição ou assinatura de serviços">Subscrição ou assinatura de serviços</option>
          <option value="Vendas online ou e-commerce">Vendas online ou e-commerce</option>
          <option value="Exportação de produtos">Exportação de produtos</option>
          <option value="Rendimentos de aplicações financeiras">Rendimentos de aplicações financeiras</option>
          <option value="Outros">Outros</option>
        </select>
      </div>
      <div class="form-label">
        <label for="">Data</label>
        <input type="date" name="data_entrada" id="data_entrada">
      </div>

      <br>
      <input type="submit" name="submit"></input>


    </form>

    <!-- tabela bootstrap -->
    <div class="tabela">
      <table class="table table-responsive light">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Valor de Entrada</th>
            <th scope="col">Tipo de Receita</th>
            <th scope="col">Data</th>
            <th scope="col">Editar</th>
          </tr>
        </thead>
        <tbody>

          <?php
          while ($user_data = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $user_data['id'] . "</td>";
            echo "<td> R$ " .number_format($user_data['valor_entrada'],2) . "</td>";
            echo "<td>" . $user_data['tipo_entrada'] . "</td>";
            echo "<td>" . $user_data['data_entrada'] . "</td>";

            echo "<td>
    <a class='btn btn-success' href='form-edit-receita.php?id=$user_data[id]'>
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
            <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
          </svg>
          </a>
          <a class='btn btn-danger' href='process-delete-receita.php?id=$user_data[id]'>
          <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
        <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z'/>
        <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z'/>
      </svg>
        </td>";
            echo "</tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <footer class="d-flex justify-content-center">
    <div class="menu-footer">
      <h3><a class="menu_link" href="../dashboard/dashboard.php"><i class="bi bi-house-door-fill"></i> Dashboard</a></h3>
      <h3><a class="menu_link" href="#"><i class="bi bi-cash-stack"></i> Receita</a></h3>
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