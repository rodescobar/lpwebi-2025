<?php
    // O método GET envia os dados do formulário anexados à URL.
    // Os dados enviados pelo método GET podem ser acessados através da superglobal $_GET.
    // A superglobal $_GET é um array associativo onde os índices são os nomes dos campos do formulário.
    // Exemplo: Para acessar o valor do campo 'name', usamos $_GET['name'].
    
    echo htmlspecialchars($_GET['name']); 
?>