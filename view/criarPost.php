<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Criar post</title>
    <?php view('inc/header'); ?>
</head>
<body>
    <center>
        <form class="" action="criarPost" method="post">
            <label for="">Titulo do post</label><br>
            <input type="title" name="title" size="67"><br>
            <label for="">Descrição</label><br>
            <input type="text" name="description" value="" size="67"><br>
            <label for="">Post</label><br>
            <textarea name="content" rows="25" cols="80"></textarea><br>
            <button type="submit" name="draft" value="1">
                Salvar como rascunho
            </button>
            <button type="submit" name="draft" value="0">
                Publicar
            </button>
        </form>
    </center>
</body>
</html>
