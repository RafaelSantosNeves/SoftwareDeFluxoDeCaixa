<!--PROCCESS-CREATE-DESPESAS-->
<?php 
include_once("../../configuration/connection.php");


// if(!isset($conexao)){
//     echo "error, log!!";
    
$redireciona == header("Location: despesas-user.php");


// capturar os valores das variaveis de despesas-user
$valor_saida = $_POST['valor_saida'];
$tipo_saida = $_POST['tipo_saida'];
$data_saida = $_POST['data_saida'];

// inserção dos valores no BD atrávez do INSERT
$sql = "INSERT INTO saida_valores (
    valor_saida,
    tipo_saida,
    data_saida
) VALUES (
    '". $valor_saida."',
    '". $tipo_saida ."',
    '". $data_saida ."'
);";
// verifica se está sendo enviado com valores vázios
if(empty($valor_saida) || empty($tipo_saida) || empty($data_saida)){
    
// print(" \n \n valores vazios");
    exit;
}
// executa a variavel SQL 
if(mysqli_query($conexao, $sql)){
    // echo "<h1>good</h1>";
    header("Location:despesas-user.php");
 
}
    
else{
    header('Location: ../dashboard/dashboard.php');
}
?>