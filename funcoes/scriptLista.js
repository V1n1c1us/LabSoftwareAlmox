/**
 * Created by 201221584 on 09/05/2016.
 */


function carregarUsuarios() {

    var usuarios = "", url = "funcoes/dados.php";

    $.ajax({
        url: url,
        cahce: false,
        dataType: "json",
        beforeSend: function () {
            $("h2").html("Carregando...");
        },
        error: function () {
            $("h2").html("Há algum problema com a fonte de dados...");
        },
        success: function (retorno) {
            if (retorno[0].error) {
                $("h2").html(retorno[0].erro);
            }
            else {
                for (var i = 0; i < retorno.length; i++) {
                    usuarios += "<tr>";
                    usuarios += "<td>" + retorno[i].id + "</td>";
                    usuarios += "<td>" + retorno[i].nomeusuario+ "</td>";
                    usuarios += "<td>" + retorno[i].email+ "</td>";
                    usuarios += "<td>" + retorno[i].tipo+ "</td>";
                    usuarios += "</tr>";
                }
                $("#tabelaProdutos").html(usuarios);

                $("h2").html("Carregado");
            }
        }
    });
}