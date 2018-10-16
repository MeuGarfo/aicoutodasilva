<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Criar post</title>
    <?php view('inc/header'); ?>
</head>
<body>
    <table width="100%">
        <tr>
            <td width="25%" valign="top">

            </td>
            <td width="50%" align="center">
                <form class="" action="salvarPost" method="post">
                    <label for="">Titulo do post</label><br>
                    <input type="text" name="title"><br>
                    <label for="">Categoria</label><br>
                    <select class="" name="category_id">
                        <option value="1">Blog</option>
                    </select><br>
                    <label for="">Descrição</label><br>
                    <input type="text" name="description" value=""><br>
                    <label for="">Post</label><br>
                    <textarea name="content" rows="25"></textarea><br>
                </form>
            </td>
            <td width="25%" valign="top">
                <button type="button" name="draft" value="1">
                    Salvar
                </button>
                <button type="button" name="draft" value="0">
                    Publicar
                </button>
                <br>
                <b>Opções</b>
                <ul>
                    <li>
                        <a href="/listaDePosts">Lista de posts</a>
                    </li>
                </ul>
            </td>
        </tr>
    </table>
</body>
</html>
