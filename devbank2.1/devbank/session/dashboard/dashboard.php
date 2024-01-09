<?php
// ligando com o banco de dados
include("../../configuration/connection.php");
include("mes.php");

// inicia sessão
session_start();
if(!isset($_SESSION['email']) == true  and(!isset($_senha) == true )){
  header('Location: ../../login/form-login.php');
}
?>

<?php

// fazendo a soma das receitas 
$SQLReceita = "SELECT DATE_FORMAT(data_entrada, '%m') AS mes, SUM(valor_entrada) AS totalentrada FROM entrada_valores WHERE ativo = 1 AND DATE_FORMAT(data_entrada, '%Y') = 2023 GROUP BY DATE_FORMAT(data_entrada, '%m');";
// fazendo a consulta no bando de dados
$ConsultaReceita = mysqli_query($conexao, $SQLReceita);

$MesesEntrada = array(
  1 => 0,
  2 => 0,
  3 => 0,
  4 => 0,
  5 => 0,
  6 => 0,
  7 => 0,
  8 => 0,
  9 => 0,
  10 => 0,
  11 => 0,
  12 => 0,
);

$MesesSaida = array(
  1 => 0,
  2 => 0,
  3 => 0,
  4 => 0,
  5 => 0,
  6 => 0,
  7 => 0,
  8 => 0,
  9 => 0,
  10 => 0,
  11 => 0,
  12 => 0,
);


while($ValorReceita = mysqli_fetch_assoc($ConsultaReceita)){
  // somando os valores de entranda
  $Receita = $Receita + $ValorReceita['totalentrada'];
  
  //colocando os valores dos meses em um Array
  $MesesEntrada[number_format($ValorReceita['mes'])] += $ValorReceita['totalentrada'];
}

// fazer a soma das despesas
$SQLDespesa  = "SELECT DATE_FORMAT(data_saida, '%m') AS mes, SUM(valor_saida) AS totalsaida FROM saida_valores WHERE ativo = 1 AND DATE_FORMAT(data_saida, '%Y') = 2023 GROUP BY DATE_FORMAT(data_saida, '%m');";
// Fazendo a Consulta no Banco de dados
$ConsultaDespesa = mysqli_query($conexao ,$SQLDespesa);

while($ValorDespesa = mysqli_fetch_assoc($ConsultaDespesa)){
  // pegando os valores da dispesas
  $Despesa = $Despesa - $ValorDespesa["totalsaida"];

// colocando os valores dos meses em uma Array
  $MesesSaida[number_format($ValorDespesa['mes'])] += $ValorDespesa['totalsaida'];

}



?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="../../css/dashboard2.css">
  <link rel="icon" type="image/x-icon" href="../../src/icons8.png">

  <title>Dashboard</title>


</head>

<body>

  <header>
    <span id="btnMenu" id="btnClose" class="material-symbols-outlined hamburguer">
      menu
      <a href="logout.php">
    </span>
    <a href="./logout.php"><span class="material-symbols-outlined"> logout </span></a>
  </header>

  <!-- navegação menu -->
  <nav id="menu" class="menu effect">

    <ul>
    <li><a class="menu_link" href="#"><i class="bi bi-house-door-fill"></i> Dashboard</a></li>
      <li><a class="menu_link" href="../receita/receitas-user.php"><i class="bi bi-cash-stack"></i> Receita</a></li>
      <li><a class="menu_link" href="../despesa/despesas-user.php"><i class="bi bi-cash-stack"></i> Despesas</a></li>
      <li><a class="menu_link" href="../user/list-view-user.php"><i class="bi bi-person-circle"></i> Usuários</a></li>
      <li><a class="menu_link" href="../user/form-create-user.php"><i class="bi bi-person-add"></i> Cadastro</a></li>
      <li><a class="menu_link" href="../suporte/suporte-user.php"><i class="bi bi-sliders"></i> Suporte</a></li>
    </ul>
  </nav>


  <div>

    <section class="stnDinheiro">
      <section>
        <article class="artDinheiroNome">
          <h3>Receita</h3>
        </article>
        <article class="artDinheiro">
          <p class="rs">R$</p>
          <h3 id="pDinheiroPositico"><?php print(number_format($Receita, 2));?></h3>
        </article>
      </section>

      <section>
        <article class="artDinheiroNome">
          <h3>Despesa</h3>
        </article>
        <article class="artDinheiro">
          <p class="rs">R$</p>
          <h3 id="pDinheiroNevativo"><?php print(number_format($Despesa, 2));?></h3>
        </article>
      </section>

      <section>
        <article class="artDinheiroNome">
          <h3>Total</h3>
        </article>
        <article class="artDinheiro">
          <p class="rs">R$</p>
          <h3 id="pDinheiroTotal"><?php  print(number_format($Receita + $Despesa, 2)); ?></h3>
        </article>
      </section>


    </section>

    <div class="tabela">
      <table class="table table-responsive light">
        <thead>
          <tr>
            <th scope="col">Mês</th>
            <th scope="col">Receita</th>
            <th scope="col">Despesa</th>
            <th scope="col">Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          <th scope="row">Janeiro</th>
            <td id="JanEntrada" class="text-primary fw-bold">R$ <?php print(number_format($MesesEntrada[1],2)); ?></td>
            <td id="JanSaida"class="text-danger fw-bold">R$ <?php print(number_format($MesesSaida[1],2)); ?></td>
            <td id="JanTotal" class="fw-bold">R$ <?php print(number_format($MesesEntrada[1] - $MesesSaida[1],2))?></td>
          </tr>
          <tr>
            <th scope="row">Fevereiro</th>
            <td id="FerEntrada" class="text-primary fw-bold">R$ <?php print(number_format($MesesEntrada[2],2)); ?></td>
            <td id="FerSaida"class="text-danger fw-bold">R$ <?php print(number_format($MesesSaida[2],2)); ?></td>
            <td id="FerTotal" class="fw-bold">R$ <?php print(number_format($MesesEntrada[2] - $MesesSaida[2],2))?></td>
          </tr>
          <tr>
            <th scope="row">Março</th>
            <td id="MarEntrada"class="text-primary fw-bold">R$ <?php print(number_format($MesesEntrada[3],2)); ?></td>
            <td id="MarSaida" class="text-danger fw-bold">R$ <?php print(number_format($MesesSaida[3],2)); ?></td>
            <td id="MarTotal" class="fw-bold">R$ <?php print(number_format($MesesEntrada[3] - $MesesSaida[3],2))?></td>
          </tr>
          <tr>
            <th scope="row">Abril</th>
            <td id="AbriEntrada" class="text-primary fw-bold">R$ <?php print(number_format($MesesEntrada[4],2)); ?></td>
            <td id="AbriSaida" class="text-danger fw-bold">R$ <?php print(number_format($MesesSaida[4],2)); ?></td>
            <td id="AbriTotal" class="fw-bold">R$ <?php print(number_format($MesesEntrada[4] - $MesesSaida[4],2))?></td>
          </tr>
          <tr>
            <th scope="row">Maio</th>
            <td id="MaioEntrada" class="text-primary fw-bold">R$ <?php print(number_format($MesesEntrada[5],2)); ?></td>
            <td id="MaioSaida" class="text-danger fw-bold">R$ <?php print(number_format($MesesSaida[5],2)); ?></td>
            <td id="MaioTotal" class="fw-bold">R$ <?php print(number_format($MesesEntrada[5] - $MesesSaida[5],2))?></td>
          </tr>
          <tr>
            <th scope="row">Junho</th>
            <td id="JunEntrada" class="text-primary fw-bold">R$ <?php print(number_format($MesesEntrada[6],2)); ?></td>
            <td id="JunSaida" class="text-danger fw-bold">R$ <?php print(number_format($MesesSaida[6],2)); ?></td>
            <td id="JunTotal" class="fw-bold">R$ <?php print(number_format($MesesEntrada[6] - $MesesSaida[6],2))?></td>
          </tr>
          <tr>
            <th scope="row">Julho</th>
            <td id="JulEntrada" class="text-primary fw-bold">R$ <?php print(number_format($MesesEntrada[7],2)); ?></td>
            <td id="JulSaida" class="text-danger fw-bold">R$ <?php print(number_format($MesesSaida[7],2)); ?></td>
            <td id="JulTotal" class="fw-bold">R$ <?php print(number_format($MesesEntrada[7] - $MesesSaida[7],2))?></td>
          </tr>
          <tr>
            <th scope="row">Agosto</th>
            <td id="AgoEntrada" class="text-primary fw-bold">R$ <?php print(number_format($MesesEntrada[8],2)); ?></td>
            <td id="AgoSaida" class="text-danger fw-bold">R$ <?php print(number_format($MesesSaida[8],2)); ?></td>
            <td id="AgoTotal" class="fw-bold">R$  <?php print(number_format($MesesEntrada[8] - $MesesSaida[8],2))?></td>
          </tr>
          <tr>
            <th scope="row">Setembro</th>
            <td id="SetEntrada" class="text-primary fw-bold">R$ <?php print(number_format($MesesEntrada[9],2)); ?></td>
            <td id="SetSaida" class="text-danger fw-bold">R$ <?php print(number_format($MesesSaida[9],2)); ?></td>
            <td id="SetTotal" class="fw-bold">R$ <?php print(number_format($MesesEntrada[9] - $MesesSaida[9],2))?></td>
          </tr>
          <tr>
            <th scope="row">Outubro</th>
            <td id="OutEntrada" class="text-primary fw-bold">R$ <?php print(number_format($MesesEntrada[10],2)); ?></td>
            <td id="OutSaida" class="text-danger fw-bold">R$ <?php print(number_format($MesesSaida[10],2)); ?></td>
            <td id="OutTotal" class="fw-bold">R$ <?php print(number_format($MesesEntrada[10] - $MesesSaida[10],2))?></td>
          </tr>
          <tr>
            <th scope="row">Novembro</th>
            
            <td id="NovEntrada" class="text-primary fw-bold">R$ <?php print(number_format($MesesEntrada[11],2)); ?></td>
            <td id="NovSaida" class="text-danger fw-bold">R$ <?php print(number_format($MesesSaida[11],2)); ?></td>
            <td id="NovTotal" class="fw-bold">R$ <?php print(number_format($MesesEntrada[11] - $MesesSaida[11],2))?></td>
          </tr>
          <tr>
            <th scope="row">Dezembro</th>
            <td id="DezEntrada" class="text-primary fw-bold">R$ <?php print(number_format($MesesEntrada[12],2)); ?></td>
            <td id="DezSaida" class="text-danger fw-bold">R$ <?php print(number_format($MesesSaida[12],2)); ?></td>
            <td id="DezTotal" class="fw-bold">R$ <?php print(number_format($MesesEntrada[12] - $MesesSaida[12],2))?></td>
          </tr>

        </tbody>
      </table>
    </div>


    <div class="d-flex justify-content-center">

      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
        // puxando os valores no front-end
        

        google.charts.load('current', {
          'packages': ['bar']
        });
        google.charts.setOnLoadCallback(drawChart);

        
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ['Mês', 'Receitas', 'Despesas', 'Total'],
            ['Jan', <?php echo $MesesEntrada[1] .','. $MesesSaida[1] .',' . $Total = $MesesEntrada[1] - $MesesSaida[1] ;?>],
            ['Fev', <?php echo $MesesEntrada[2] .','. $MesesSaida[2] .',' . $Total = $MesesEntrada[2] - $MesesSaida[2] ;?>], 
            ['Mar', <?php echo $MesesEntrada[3] .','. $MesesSaida[3] .',' . $Total = $MesesEntrada[3] - $MesesSaida[3] ;?>],
            ['Abr', <?php echo $MesesEntrada[4] .','. $MesesSaida[4] .',' . $Total = $MesesEntrada[4] - $MesesSaida[4] ;?>],
            ['Maio', <?php echo $MesesEntrada[5] .','. $MesesSaida[5] .',' . $Total = $MesesEntrada[5] - $MesesSaida[5] ;?>],
            ['Jun', <?php echo $MesesEntrada[6] .','. $MesesSaida[6] .',' . $Total = $MesesEntrada[6] - $MesesSaida[6] ;?>],
            ['Jul', <?php echo $MesesEntrada[7] .','. $MesesSaida[7] .',' . $Total = $MesesEntrada[7] - $MesesSaida[7] ;?>],
            ['Ago', <?php echo $MesesEntrada[8] .','. $MesesSaida[8] .',' . $Total = $MesesEntrada[8] - $MesesSaida[8] ;?>],
            ['Set', <?php echo $MesesEntrada[9] .','. $MesesSaida[9] .',' . $Total = $MesesEntrada[9] - $MesesSaida[9] ;?>],
            ['Out', <?php echo $MesesEntrada[10] .','. $MesesSaida[10] .',' . $Total = $MesesEntrada[10] - $MesesSaida[10] ;?>],
            ['Nov', <?php echo $MesesEntrada[11] .','. $MesesSaida[11] .',' . $Total = $MesesEntrada[11] - $MesesSaida[11] ;?>],
            ['Dez', <?php echo $MesesEntrada[12] .','. $MesesSaida[12] .',' . $Total = $MesesEntrada[12] - $MesesSaida[12] ;?>],
          ]);

          var options = {
            chart: {
              title: 'Performance de fluxo de caixa',
              subtitle: 'Receitas, Despesas e meses',
            }
          };

          var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

          chart.draw(data, google.charts.Bar.convertOptions(options));
        }
      </script>
    </div>

    <div id="columnchart_material" class="mx-auto mb-5"></div>
    </div>
  </div>




  <footer class="d-flex justify-content-center">
    <div class="menu-footer">
    <h3><a class="menu_link" href="#"><i class="bi bi-house-door-fill"></i> Dashboard</a></h3>
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