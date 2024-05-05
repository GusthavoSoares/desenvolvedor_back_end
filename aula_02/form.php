<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form method="post" action="envio.php">
        <fieldset>
            <legend>Cadastro</legend>
            <div>
                <label for="login">Login: </label>
                <input type="email" name="login" placeholder="Insira seu usuário...."  id="login">
            </div>
            <div>
                <label for="senha">Senha: </label>
                <input type="password" name="senha" placeholder="Insira sua senha" id="login">
            </div>
        </fieldset>
        <div style="padding-top:0.5rem">
            <input type="submit" value="Logar">
        </div>
    </form>
</body>
</html>