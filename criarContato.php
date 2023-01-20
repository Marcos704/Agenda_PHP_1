
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
</head>

<body>
    <div class="container">
        <nav class="navbar fixed-top navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">
                <i class="fa-solid fa-xmark"></i>
                <span class="tituloPagina">Criar contatos</span>
            </a>
        </nav>
        <br>
        <hr>
        <div id="retorno"></div>
        <div class="row">
            <div class="col-12 mt-4 text-center">
                <button class="img-buttom">
                    <i class="fa-solid fa-image"></i>
                </button>
            </div>
            <div class="col-12 mt-4 text-center">
                <span class="text-1">Adicionar imagem</span>
            </div>
        </div>
        <div class="container-sm mt-4">
            <form method="POST" id="form-cadastrar-contato" data-stopformrefresh>
                <div class="form-row">
                    <div class="col-12">
                        <label class="sr-only" for="nomeContato">Nome</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa-solid fa-user text-withe"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control custom-form-control" id="nomeContato" name="nomeContato" placeholder="Nome">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-12">
                        <label class="sr-only" for="enderecoContato">Endereço</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa-solid fa-house-user"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control custom-form-control" id="enderecoContato" name="enderecoContato" placeholder="Endereço">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-12">
                        <label class="sr-only" for="telefoneContato">Telefone</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control custom-form-control" id="telefoneContato" name="telefoneContato" placeholder="Telefone" data-celular>
                        </div>
                    </div>
                </div>
                <div class="form-row pt-3">
                    <div class="col-12 text-right">
                        <button type="submit" id="salvar-contato" class="btn-salvar">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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