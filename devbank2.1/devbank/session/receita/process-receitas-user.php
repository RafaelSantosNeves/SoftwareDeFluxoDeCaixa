<?php 
// name table entrada_valores
// bd = ID/ valor_entrada / tipo_entrada / data_entrada
include_once('../../configuration/connection.php');
include('../../configuration/user-session.php');
session_start();

// if(isset($conexao)){
//     echo "ola";
// }
    $valor_entrada = $_POST['valor_entrada'];
    $tipo_entrada = $_POST['tipo_entrada'];
    $data_entrada = $_POST['data_entrada'];

    $sql = "INSERT INTO entrada_valores(
        valor_entrada,
        tipo_entrada,
        data_entrada
    )   VALUES (
        '" . $valor_entrada ."',
        '" . $tipo_entrada ."',
        '" . $data_entrada ."'
    );"; 
    // print_r($sql);
   
    if(mysqli_query($conexao,$sql)){
       

        echo "<h1>good</h1>";

        header("Location: receitas-user.php");
    }else{
        header('Location: ../dashboard/dashboard.php');
    }

    // process
    
?>