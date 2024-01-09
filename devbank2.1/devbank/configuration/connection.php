
  <?php
    //Define o padrão de formatação dos caracteres.
    header("Content-Type: text;html; charset=utf-8");

    //Variaveis de conexão com a base de dados.
    $host = "localhost";
    $user = "root";
    $password = "root";
    $database = "devbank";

    //Comando de conexão com o banco de dados MySQL.
    $conexao = mysqli_connect($host, $user, $password, $database);

    //Retorna o código do erro de conexão com a base de dados.
    if(!$conexao){
      print("Falha na conexão com a base de dados... Código do erro: " . mysqli_connect_errno());
    }
  ?>
