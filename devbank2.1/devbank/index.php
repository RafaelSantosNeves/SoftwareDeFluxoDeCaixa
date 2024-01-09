<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="icon" type="image/x-icon" href="src/icons8.png">
    <title>Index</title>
</head>

<body>

    <header>
        <span id="btnMenu" id="btnClose" class="material-symbols-outlined hamburguer">
            menu
        </span>
        <a href="./login/form-login.php"><i class="bi bi-person-square"></i></a>

    </header>

    <nav id="menu" class="menu effect">
        <ul>
            <li><a class="menu_link" href="index.php"><i class="bi bi-house-door-fill"></i> Home</a></li>
            <li><a class="menu_link" href="./login/form-login.php"><i class="bi bi-person-square"></i> Login</a></li>
        </ul>
    </nav>

    <main class="col-9 m-auto mt-5">
        <section class="container mt-5 ms-5">
            <div id="carouselExampleCaptions" class="div-relativa carousel slide" data-bs-ride="false">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="src/euro80.jpg" class="d-block w-100" alt="Tela inicial de consulta">
                        <div class="carousel-caption d-none d-md-block bg-dev">
                            <h5>Fluxo de Caixa</h5>
                            <p>Em Finanças, o fluxo de caixa refere-se ao fluxo do dinheiro no caixa da empresa, ou seja, ao montante de caixa recolhido e gasto por uma empresa durante um período de tempo definido, algumas vezes ligado a um projeto específico.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="src/calculator.jpg" class="d-block w-100" alt="Receita">
                        <div class="carousel-caption d-none d-md-block bg-dev">
                            <h5>Receitas e Despesas</h5>
                            <p>As receitas (dinheiro que entra) e despesas (o que sai) da empresa em um determinado período. O objetivo é mostrar os resultados da empresa e a variação do capital de giro. Em outras palavras, a diferença entre o dinheiro disponível em caixa e a soma das despesas.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="src/money.jpg" class="d-block w-100" alt="despesa">
                        <div class="carousel-caption d-none d-md-block bg-dev">
                            <h5>Vamos Lá</h5>
                            <p>Software desenvolvido para ajudar a administrar as Entradas (Receitas) e Saídas (Despesas) de recursos financeiros do fluxo de caixa da sua organização, visando a organização, segurança e a saúde financeira.</p>
                        </div>
                    </div>
                </div>
                <button class="btn-meio carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="btn-meio carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    </main>


    <footer class="d-flex justify-content-center">
        <div class="menu-footer">
            <h3><a class="menu_link" href="index.php"><i class="bi bi-house-door-fill"></i> Home</a></h3>
            <h3><a class="menu_link" href="./login/form-login.php"><i class="bi bi-person-square"></i> Login</a></h3>
        </div>
        <div class="copyright">
            <p>DEVBANK Copyright 2023 © Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="./js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>