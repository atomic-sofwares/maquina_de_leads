$(".logOut").on("click", function () {
    //Post the form data serialized for the proper formatting
    $.post("../sistema/funcoes/sessao.php", {acao : 'sair'}
        //Get the response from process.php
        , function (response) {
            console.log('saiindo');
            //Prepend the response to div id step2

        });
    location.reload();

});