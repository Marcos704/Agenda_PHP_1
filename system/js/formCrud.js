//$(document).ready(function () {
    stopFormRefresh();
    function formCRUD(formId, urlPOST, retornoID) {

        $(formId).submit(function () {
            //event.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: urlPOST,
                type: 'POST',
                data: formData,

                success: function (retorno) {
                    $(retornoID).removeClass();
                    if (retornoID != null) {
                        if (retorno.trim().includes("SQL INFOR PASS")) {
                            location.href = document.referrer;

                        } else {
                            $(retornoID)
                                .addClass('alert alert-danger')
                                .html('<strong class="pt-4">Ops... Erro ao salvar os dados, contate o suporte.</strong>');
                            console.log("Erro\n"+retorno);
                        }
                    }
                },
                error: function (retorno) {
                    console.log("erro no ajax");
                    if (retorno.trim().includes("Fatal error")) {
                        console.log("Fatal erro");
                    }
                    $(retornoID)
                        .addClass('alert alert-danger')
                        .html('<strong>Falha ao realizar tarefa!</strong><span>Contate o administrador do sistema</span>');
                },
                cache: false,
                contentType: false,
                processData: false,
                xhr: function () {
                    var myXhr = $.ajaxSettings.xhr();
                    if (myXhr.upload) {
                        myXhr.upload.addEventListener('progress',
                            function () {
                                // progresso de upload
                            }, false);
                    }
                    return myXhr;
                }
            });
        });
        $(document).ajaxError(function () {
            alert("An error occured!");
        });
    }
//}