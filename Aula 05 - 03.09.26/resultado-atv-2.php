<?php

    $dadosEnviados = [
        "title" => $_POST["title"],
        "body" => $_POST["body"],
        "userID" => $_POST["userID"]
    ];

    $url = "https://jsonplaceholder.typicode.com/posts";

    $curl = curl_init($url);

    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($dadosEnviados));
    curl_setopt($curl, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($curl);
    curl_close($curl);

    $dadosRetornados = json_decode($response, true);

    echo "<h2>Dados do Postagem: </h2>";
    echo "ID da Postagem: ". $dadosRetornados["id"]."<br><br>";
    echo "Titulo: ". $dadosRetornados["title"]."<br><br>";
    echo "Corpo de Texto: ". $dadosRetornados["body"]."<br><br>";
    echo "ID do usuário: ". $dadosRetornados["userID"]."<br><br>";
    echo "<a href='./index2.php'>Voltar</a>";
?>
