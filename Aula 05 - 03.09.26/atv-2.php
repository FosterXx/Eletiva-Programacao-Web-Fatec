<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto API POST</title>
</head>
<body>
    <h2>Enviando Dados</h2>
    <form action="resultado-atv-2.php" method="post">
        <label for="title">Titulo</label><br><br>
        <input type="text" name="title" required>
        <br><br>
        <label for="body">Corpo da Mensagem</label><br><br>
        <input type="text" name="body" required><br>
        <br>
        <label for="userID">ID do Usuário</label><br><br>
        <input type="text" name="userID" id="cep" required>
        <br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
