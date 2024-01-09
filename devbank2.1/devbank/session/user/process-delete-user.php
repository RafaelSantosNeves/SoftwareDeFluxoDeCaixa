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

        h2 {
            background-color: aqua;

        }
    </style>
    <title>Deletar Receitas</title>

</head>

<body>


    <header>
        <span id="btnMenu" id="btnClose" class="material-symbols-outlined hamburguer">
            menu
            <a href="../session/dashboard/logout.php">
        </span>

        <span class="material-symbols-outlined"> logout </span>

    </header>
    
    <?php
    include("../../configuration/connection.php");


    $id = $_GET["id"];

    $SQL = "UPDATE usuario SET ativo = 0 WHERE id = $id;";

    

    if (mysqli_query($conexao, $SQL)) {

        echo "saindo";

        session_start();


        session_destroy();
    

    // jogando como a pagina index
    header('Location: ../../login/form-login.php');
    exit;   

        //Fecha a conexão com o BD.
        mysqli_close($conexao);


    ?>
        <!--Retorna a mensagem para o usuário-->
        <style>
            .divText {
                height: 90vh;
            }
            .imgSVG{
                width: 20vw;
            }
        </style>
        <div class="text-center d-flex justify-content-center align-items-center divText">
            <h1 class="text-success text-uppercase fw-bold"><?php print("Deletado com sucesso !!"); ?></h1>
            <img src="../../src/certo.svg" class="imgSVG" alt="">
        </div>
    <?php

   
       


    } else {
        //Fecha a conexão com o BD.
        mysqli_close($conexao);

    ?>

        <!--Retorna a mensagem para o usuário-->
        <div class="text-center d-flex justify-content-center align-items-center divText">
            <h1 class="text-danger text-uppercase fw-bold"><?php print("Não foi possível deletar!!"); ?></h1>
            <img src="../../src/errado.svg" class="imgSVG" alt="">
        </div>
    <?php
        //Redireciona o usuário.
        header("refresh: 1; URL=list-view-user.php");
    }
    ?>
    <script src="../../js/script.js"></script>
</body>

</html>