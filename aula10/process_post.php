<?php
    // O método POST envia os dados do formulário no corpo da requisição HTTP.
    // Os dados enviados pelo método POST podem ser acessados através da superglobal $_POST.
    // A superglobal $_POST é um array associativo onde os índices são os nomes dos campos do formulário.
    // Exemplo: Para acessar o valor do campo 'email', usamos $_POST['email'].

    echo $_POST['email'];
?>
