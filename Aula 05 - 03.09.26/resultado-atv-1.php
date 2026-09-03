<?php
    $cep = $_POST["cep"];
    $urlAPI = "https://viacep.com.br/ws/$cep/json/";

    $curl = curl_init($urlAPI);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($curl);
    curl_close($curl);

    $dadosRetornados = json_decode($response, true);

    echo "<h2>Dados do CEP: </h2> <br><br>";
    echo "CEP: ". $dadosRetornados["cep"]."<br><br>";
    echo "Logradouro: ". $dadosRetornados["logradouro"]."<br><br>";
    echo "Bairro: ". $dadosRetornados["bairro"]."<br><br>";
    echo "Localidade: ". $dadosRetornados["localidade"]."<br><br>";
    echo "Estado: ". $dadosRetornados["estado"]."<br><br>";
    echo "<a href='./index2.php'>Voltar</a>";
?>
