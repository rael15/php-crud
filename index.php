<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <H1>FORMULÁRIO DE CADASTRO</H1><hr>
    <?php 
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
    <form action="core/script.php" method="post">
    <label for="">Nome</label><br>
    <input type="text" name="nome"><p></p>
    <label for="">Email</label><br>
    <input type="text" name="email"><hr>
    <input type="submit" value="Enviar">
    
    
    </form>
</body>
</html>