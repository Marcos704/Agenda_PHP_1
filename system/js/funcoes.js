function debugInfor(msn, msnParams, consoleType, limpar) {
    if (limpar) {
      console.clear();
    } else
      if (consoleType == "info") {
        console.info("[info] - " + msn + "\n" + "{Params} - " + msnParams);
      } else
        if (consoleType == "erro") {
          console.error("[erro] - " + msn + "\n" + "{Params} - " + msnParams);
        } else
          if (consoleType == "log") {
            console.log("[log] - " + msn + "\n" + "{Params} - " + msnParams);
          } else
            if (consoleType == "info") {
              console.info("[info] - " + msn + "\n" + "{Params} - " + msnParams);
            } else
              if (consoleType == "form") {
                console.info("[FormData] - " + msn + "\n" + "{Params} - " + msnParams);
              } else
                if (consoleType == "form") {
                  console.error("[FormData] - " + msn + "\n" + "{Params} - " + msnParams);
                }
  }
  function stopFormRefresh() {
    Array.prototype.forEach.call(document.getElementsByTagName('form'), function (elem) {
      Array.prototype.forEach.call(elem.attributes, function (attr) {
        if (attr.name.indexOf('data-stopformrefresh') != -1) {
          debugInfor("Form reflesh", "desabilitado", "info", false)
          var form = document.getElementById(elem.id);
          function handleForm(event) { event.preventDefault(); }
          form.addEventListener('submit', handleForm);
        }
      });
    });
  }
  function inputAtrr() {
    Array.prototype.forEach.call(document.getElementsByTagName('input'), function (elem) {
      Array.prototype.forEach.call(elem.attributes, function (attr) {
        if (attr.name.indexOf('data-cpf') != -1 && elem.value == "") {
          $(elem).mask('000.000.000-00');
        } else
          if (attr.name.indexOf('data-cnpj') != -1 && elem.value == "") {
            $(elem).mask('00.000.000/0000-00');
          } else
            if (attr.name.indexOf('data-cep') != -1 && elem.value == "") {
              $(elem).mask('00000-000');
            } else
              if (attr.name.indexOf('data-celular') != -1 && elem.value == "") {
                $(elem).mask('(00)0 0000-0000');
              } else
                if (attr.name.indexOf('data-telefone') != -1 && elem.value == "") {
                  $(elem).mask('(00) 0000-0000');
                } else
                  if (attr.name.indexOf('data-rg') != -1 && elem.value == "") {
                    $(elem).mask('000000000000-0');
                  } else
                    if (attr.name.indexOf('data-moeda') != -1 && elem.value == "") {
                      $(elem).keyup(function () {
                        formatarMoeda(elem);
                      });
                    } else
                      if (attr.name.indexOf('data-decimal') != -1 && elem.value == "") {
                        elem.setAttribute('inputmode', 'decimal');
                      } else
                        if (attr.name.indexOf('data-numerico') != -1 && elem.value == "") {
                          elem.setAttribute('inputmode', 'numeric');
                        } else
                          if (attr.name.indexOf('data-texto') != -1 && elem.value == "") {
                            elem.setAttribute('inputmode', 'text');
                          } else
                            if (attr.name.indexOf('data-fone') != -1 && elem.value == "") {
                              elem.setAttribute('inputmode', 'tel');
                            } else
                              if (attr.name.indexOf('data-busca') != -1 && elem.value == "") {
                                elem.setAttribute('inputmode', 'search');
                              } else
                                if (attr.name.indexOf('data-email') != -1 && elem.value == "") {
                                  elem.setAttribute('inputmode', 'email');
                                } else
                                  if (attr.name.indexOf('data-web') != -1 && elem.value == "") {
                                    elem.setAttribute('inputmode', 'url');
                                  }
      });
    });
  }