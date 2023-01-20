var btnCadastrarContato = document.getElementById("btn-cadastrarContato");
var btnBackPage = document.getElementById("backPage");
var btnSalvarContato = document.getElementById("salvar-contato");
var btnEditarContato = document.getElementById("editar-contato");


if (btnCadastrarContato) {
    btnCadastrarContato.onclick = function () {
        window.location.href = "criarContato.php";
    }
}
if (btnBackPage) {
    btnBackPage.onclick = function () {
        history.back();
    }
}

if (btnSalvarContato) {
    btnSalvarContato.onclick = function(){
        formCRUD("#form-cadastrar-contato", "system/requisicao/requisicoes.php?funcao=salvar", "#retorno");
    }
}
if (btnEditarContato) {
    btnEditarContato.onclick = function(){ console.log("a");
        formCRUD("#form-editar-contato", "system/requisicao/requisicoes.php?funcao=editar", "#retorno");
    }
}
