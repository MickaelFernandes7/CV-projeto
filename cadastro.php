<?php

    //Declaração das variaveis para conexão ao banco de dados na pagina de cadastro
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //Conexão ao banco de dados    
    $strcon = mysqli_connect('localhost', 'root', 'root', 'projeto2');
    if (!$strcon) {
        die('Não foi possível conectar ao MySQL');
        }

    //Inserção de dados ao Banco de dados
    $sql = "INSERT INTO tbl_usuario(nome_usuario, email, senha)
    VALUES ('$nome', '$email', '$senha')";

    //Exectando a declaração no banco de dados
    $resultado = mysqli_query($strcon, $sql) or die ("Erro ao executar a inserção de dados");
    mysqli_close($strcon);

    //Mensagem de Cadastro concluído
    echo ("<script>
    alert('Usuário Cadastrado com Sucesso!');
    window.location.href='cadastro-login.html';
    </script>");
    ?>