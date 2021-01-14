    <?php
    session_start();
    unset($_SESSION['conexao']);
    session_destroy();
    header('location: index.html');
    exit();
    ?>