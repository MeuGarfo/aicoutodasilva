<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Entrar</title>
</head>
<body>
    <h1>Entrar</h1>
    <?php
    if(isset($_GET['erro'])){
        print '<p><b>Erro:</b> Dados incorretos</p>';
    }
    ?>
    <form class="" action="entrar" method="post">
        <label for="email">Email</label><br>
        <input type="email" name="email" value=""><br>
        <label for="password">Senha</label><br>
        <input type="password" name="password" value=""><br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
