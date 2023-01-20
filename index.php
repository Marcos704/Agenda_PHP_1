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
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <title>Agenda Eletronica</title>
</head>

<body>
    <div class="main-fixed">
        <nav class="navbar fixed-top navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <img src="vendor/img/icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
                Agenda Eletrônica
            </a>
        </nav>
        <br>
        <hr>
        <div id="container-1">
            <?php
                listViewContatos();
            ?>
        </div>
        <div class="fab">
            <button class="main" id="btn-cadastrarContato">
            </button>
        </div>

        <br>
        <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark">
            <div class="container ml-1">
                <a class="navbar-brand text-primary text-center m-0" href="#">
                    <i class="fa-solid fa-user text-primary"></i><br> <span class="infor">Contatos</span>
                </a>
                <a class="navbar-brand text-primary text-center " href="#">
                    <i class="fa-solid fa-bookmark"></i><br> <span class="infor">Destaques</span>
                </a>
                <a class="navbar-brand text-primary text-center m-0" href="#">
                    <i class="fa-solid fa-sliders"></i><br> <span class="infor">Opções</span>
                </a>

            </div>
        </nav>
    </div>
    <!-- Script Mascars -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <!-- Optional JavaScript -->
    <script src="system/js/requisicoes.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>