
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        # Set o cookie com o nome/id 'cor_usuario', o valor que é cor e o tempo para expirar que é 1 hora (3600 seg);
        setcookie("cor_usuario", $_POST["cor"], time()+3600);
        # Volta para a pagina index.php;
        header("Location: index.php");
        exit();
    }   

    $cor_fundo = isset($_COOKIE["cor_usuario"]) ? $_COOKIE["cor_usuario"] : "FFFFFF"
    # Defino Variavel - isset verifica se existe valor no cookie - ? é tipo SE FOR VERDADEIRO retorna o cookie e : SE FOR FALSO retorna FFFFFF (Preto);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Cokies</title>
</head>
<body style="background-color: <?php echo $cor_fundo ?>">
    <h1>Bem-Vindo</h1>
    <h2>Preferências do Usuário</h2>
    <form method="POST" action="">
        <label for="cor">Escolha a Cor Desejada: </label>
        <input type="color" name="cor" value="<?php echo $cor_fundo ?>">
        <br>
        <br>
        <button type="submit">Aplicar</button>
    </form>
    <br>
    <br>
    <a href="limpar.php">Restaurar</a>
</body>
</html>
