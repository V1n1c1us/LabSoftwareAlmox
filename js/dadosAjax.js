/**
 * Created by Vinicius on 19/04/2016.
 */
$(document).ready(function () {

    $('#formServidor').submit(function (e) {
        e.preventDefault();

        var data = $(this).serializeArray();

        var nomeusuario = document.getElementById('nomeusuario');
        var siape = document.getElementById('siape');
        var email = document.getElementById('email');
        var cpf = document.getElementById('cpf');
        var senha = document.getElementById('senha');
        var sala = document.getElementById('sala');

        data.push('nomeusuario='+nomeusuario+'siape='+siape+'email='+email+'cpf='+cpf+'senha='+senha+'sala='+sala);

        $.ajax({
                url: 'funcoes/cadastraUsuario.php',
                type: 'post',
                dataType: 'json',
                data: data,
                beforeSend: function () {
                    $('.fa').css('display', 'inline');
                }
            })
            .done(function () { //true
                $('span').html("Cadastro efetuado com sucesso");
                console.log("success");
            })
            .fail(function () { //false
                $('span').html("Erro ao cadastrar");
                console.log("error");
            })
            .always(function(){
                setTimeout(function(){
                    $('.fa').hide();
                },5000);
            });
    });
});