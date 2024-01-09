<?php
include_once('../../configuration/connection.php');

include("../../configuration/user-session.php");
//Resgatar o ID da Despesa 
$id = $_GET["id"];

$sqlReceita = "SELECT valor_entrada, tipo_entrada, data_entrada FROM entrada_valores WHERE id='$id';";

$resultadoReceita = mysqli_query($conexao, $sqlReceita);

$receita = mysqli_fetch_assoc($resultadoReceita);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="../../src/icons8.png">
  <link rel="stylesheet" href="../../css/receitas-user.css">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../../css/footer.css">

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
  <title>Editar Receitas</title>

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
    <h2 class="h2 mt-5 pt-5">Receitas</h2>
    <form action="process-edit-receita.php?id=<?php print($id); ?>" method="post" class="formulario">

      <div class="form-label">
        <label for="#">Valor Entrada</label>
        <input type="text" name="valor_entrada" value="<?php print($receita['valor_entrada']); ?>">
      </div>
      <div>
        <label class="form-label" for="#">Tipo de Receita</label>
        <select class="sltTipo" name="tipo_entrada">
          <option selected value="<?php print($receita["tipo_entrada"]); ?>"><?php print($receita["tipo_entrada"]); ?></option>
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
        <input type="date" name="data_entrada" id="data_entrada" value="<?php print($receita["data_entrada"]); ?>">
      </div>

      <div>
        <button class="btn btn-success mt-1 ms-1" type="submit" name="submit">Salvar</button>
      </div>


    </form>


    <?php

    while ($resultado  = mysqli_fetch_assoc($resultado)) {
      echo "<tr>";
      echo "<td>" . $resultado['id'] . "</td>";
      echo "<td>" . $resultado['valor_entrada'] . "</td>";
      echo "<td>" . $resultado['tipo_entrada'] . "</td>";
      echo "<td>" . $resultado['data_entrada'] . "</td>";
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