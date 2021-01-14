    <?php
    //verificandoo se o usuario veio sem conteúdo
    if(!empty($_POST['email']) && !empty($_POST['senha'])) //&& significa - e - and
    {
        //se n estiver vazio, o usuario preencheu todas as informações
        $email=$_POST['email'];
        $senha=$_POST['senha'];

    }
    else{
        echo ("<script>alert('Usuário ou senha incorretos!');
        window.location.href='cadastro-login.html'; </script>");
    }

    //criação de string para consultar se o usuario esta cadastrado
    $sql="SELECT * FROM tbl_usuario WHERE email='$email' AND senha='$senha'";

    //conectar ao banco de dados
    include('login.php');

    //executando o comando sql no banco de dados
    $resultado=mysqli_query($strcon,$sql);

    $linha=mysqli_fetch_array($resultado);
    mysqli_close($strcon);
    if(!$linha) {
        //não encontrou o usuario, dar a mensagem, e vai pro cadastro.html
        echo ("<script>
        alert('Usuário não cadastrado!');
        window.location.href='cadastro-login.html';
        </script>");

    }
    else {
        session_start();
        $_SESSION['conexao']=$linha['nome_usuario'];
        //Futuro link da pg de logado do site(ainda falta a pagina de logado do site, realizar os testes com o conteúdo absrovido)
        echo ("<script>window.location.href='index.php';</script>");
    }
    ?>