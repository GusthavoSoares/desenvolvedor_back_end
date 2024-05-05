<?php
// $login = $_GET["login"];
// $senha = $_GET["senha"];

$login = $_POST["login"];
$senha = $_POST["senha"];




if($login != "" && $senha != ""){
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados recebidos</title>
</head>
<body>
    <h1>Meu login é <?php echo $login ?></h1>
    <p> Minha senha é <?php echo $senha ?></p>
</body>
</html>



<?php
}else if($login != '' && $senha == ""){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>O login foi preenchido, mas você deve indicar sua senha! <?php echo $login?> !</h1>
    <a href="form.php">Voltar</a>
</body>
</html>
<?php

}else{
    require_once("erro.php");
}
?>