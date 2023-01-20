<?php
require_once("system/ui/ui.php");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="vendor/css/styles.css">
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/617ef9b753.js" crossorigin="anonymous"></script>
    <!-- Jquery -->
    <script src="system/js/jquery/jquery.min.js"></script>
    <title>Agenda Eletronica</title>
</head>

<body>
    <div class="container">
        <nav class="navbar fixed-top navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">
                <i class="fa-solid fa-arrow-left"></i>
                <span class="tituloPagina"></span>
            </a>
            <a href="editarContato.php?idContato="<?php echo lerDadosContato($_GET["idContato"], "idContato")?> class="mr-3"><i class="fa-solid fa-pen text-white"></i></a>
        </nav>
        <br>
        <hr>
        <div class="row">
            <div class="col-12 mt-4 text-center">
                <span class="icon-long-circle">
                    <?php echo obterLetra($_GET["idContato"]) ?>
                </span>
            </div>
            <div class="col-12 mt-4 text-center">
                <span class="text-2"><?php echo lerDadosContato($_GET["idContato"], "nomeContato")?></span>
            </div>
        </div>
    </div>
    <hr>
    <div class="container-sm">
        <div class="row">
            <div class="col-4 text-center">
                <a class="navbar-brand" href="#">
                    <i class="fa-solid fa-phone"></i>
                </a>
                <br>
                <span class="text-3">Ligar</span>
            </div>
            <div class="col-4 text-center">
                <a class="navbar-brand" href="#">
                    <i class="fa-solid fa-message"></i>
                </a>
                <br>
                <span class="text-3">Enviar SMS</span>
            </div>
            <div class="col-4 text-center">
                <a class="navbar-brand" href="#">
                    <i class="fa-solid fa-video"></i>
                </a>
                <br>
                <span class="text-3">Videochamada</span>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="container-dados">
            <div class="row">
                <div class="col-12">
                    <h5 class="text-4">Dados de contato</h5>
                </div>
                <div class="col-12">
                    <span class="text-white"><?php echo lerDadosContato($_GET["idContato"], "telefoneContato")?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <span class="text-white"><?php echo lerDadosContato($_GET["idContato"], "enderecoContato")?></span>
                </div>
            </div>
        </div>
    </div>
    <!-- Script Mascars -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Jquery -->
    <script src="system/js/jquery/jquery.min.js"></script>
    <!-- Script Mascars -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <!-- Optional JavaScript -->
    <script src="system/js/funcoes.js"></script>
    <script src="system/js/formCrud.js"></script>
    <script src="system/js/main.js"></script>
    <script src="system/js/requisicoes.js"></script>
</body>

</html>