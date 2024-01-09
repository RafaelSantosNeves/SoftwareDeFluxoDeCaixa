<?php
include("../../configuration/user-session.php");

include_once('../../configuration/connection.php');
//Instrução SQL de seleção dos usuários.
//Resgatar o id da despesa no backend
$id = $_GET['id'];
$sql = "SELECT id,valor_saida,tipo_saida,data_saida FROM saida_valores WHERE id='$id';";

$resultado = mysqli_query($conexao, $sql);

$sqlDespesa = "SELECT valor_saida,tipo_saida,data_saida FROM saida_valores WHERE id='$id';";

$resultadoDespesa = mysqli_query($conexao, $sqlDespesa);

$despesa = mysqli_fetch_assoc($resultadoDespesa);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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

    .h2 {
      margin-top: 80px;

    }

    .vazio {
      background-color: #164773;
      margin: auto;
    }
  </style>
  <title>Editar Despesas</title>
</head>

<body>

  <header>
    <span id="btnMenu" id="btnClose" class="material-symbols-outlined hamburguer">
      menu
    </span>
    <a href="../dashboard/logout.php"><span class="material-symbols-outlined"> logout </span></a>
  </header>

  <nav id="menu" class="menu effect">
    <ul>
      <li><a class="menu_link" href="../dashboard/dashboard.php"><i class="bi bi-house-door-fill"></i> Dashboard</a></li>
      <li><a class="menu_link" href="../receita/receitas-user.php"><i class="bi bi-cash-stack"></i> Receita</a></li>
      <li><a class="menu_link" href="#"><i class="bi bi-cash-stack"></i> Despesas</a></li>
      <li><a class="menu_link" href="../user/list-view-user.php"><i class="bi bi-person-circle"></i> Usuários</a></li>
      <li><a class="menu_link" href="../user/form-create-user.php"><i class="bi bi-person-add"></i> Cadastro</a></li>
      <li><a class="menu_link" href="../suporte/suporte-user.php"><i class="bi bi-sliders"></i> Suporte</a></li>
    </ul>
  </nav>
  <div>
    <div class="row align-itens-center">
      <div class="text-center">
        <?php
        //Verifica se existe alguma mensagem de retorno.
        if (isset($_SESSION['retorno'])) {

          //Apresenta a mensagem de retorno para o usuário.
          print($_SESSION['retorno']);

          //Deleta a variável de sessão.
          unset($_SESSION['retorno']);
        }
        ?>
      </div>
    </div>

    <h2 class="h2">Despesas</h2>
    <form action="process-edit-despesas.php?id=<?php print($id); ?>" method="post" class="formulario">

      <div class="form-label">
        <label for="valor_saida">Valor Saida</label>
        <input type="number" name="valor_saida" placeholder="digite valor..." value="<?php print($despesa['valor_saida']); ?>">
      </div>
      <div>
        <label class="form-label" for="tipo_saida">Tipo de despesa</label>
        <select class="sltTipo" name="tipo_saida">
        <option selected value="<?php print($despesa["tipo_saida"]); ?>"><?php print($despesa["tipo_saida"]); ?></option>
          <option value="Produção de mercadorias ou serviços">Produção de mercadorias ou serviços</option>
          <option value="Salários e encargos trabalhistas">Salários e encargos trabalhistas</option>
          <option value="Aluguel ou financiamento de imóveis comerciais">Aluguel ou financiamento de imóveis comerciais</option>
          <option value="Compra de matéria-prima ou de produtos">Compra de matéria-prima ou de produtos</option>
          <option value="Marketing e publicidade">Marketing e publicidade</option>
          <option value="Compra de insumos">Compra de insumos</option>
          <option value="Energia elétrica, água e telefone">Energia elétrica, água e telefone</option>
          <option value="Transporte e logística">Transporte e logística</option>
          <option value="Manutenção de equipamentos e instalações">Manutenção de equipamentos e instalações</option>
          <option value="Juros e taxas bancárias">Juros e taxas bancárias</option>
          <option value="outros">Outros</option>
        </select>
      </div>

      <div class="form-label">
        <label for="data_saida">Data de Saída</label>
        <input type="date" name="data_saida" id="data_saida" value="<?php print($despesa['data_saida']); ?>">
      </div>
      <div>
        <button class="btn btn-success btn-sm mt-1 ms-1" type="submit" name="submit">Salvar</button>
      </div>


    </form>




    <!-- tabela bootstrap -->
    
  </div>
  <footer class="d-flex justify-content-center">
    <div class="menu-footer">
      <h3><a class="menu_link" href="../dashboard/dashboard.php"><i class="bi bi-house-door-fill"></i> Dashboard</a></h3>
      <h3><a class="menu_link" href="../receita/receitas-user.php"><i class="bi bi-cash-stack"></i> Receita</a></h3>
      <h3><a class="menu_link" href="#"><i class="bi bi-cash-stack"></i> Despesas</a></h3>
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