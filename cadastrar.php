<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de nascimento de Bebes</title>

 <link rel="stylesheet" href="style.css">
    <script src=""></script>

</head>
<body>

<?php
require 'connect.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dataNascimento = $_POST['data_Nascimento'];
    $tipoParto = $_POST['tipo_Parto'];
    $nomeMae = $_POST['nome_Mae'];
    $endereco = $_POST['residencia'];
    $contacto = $_POST['contacto'];
    $nomePai = $_POST['nome_Pai'];
    $nomeRecemNascido
    

   
    $sql = $pdo->prepare("INSERT INTO pacientes (codBebe, dataNascimento, tipoParto, situacaoMedica, nomeMae, endereco, contacto, nomePai, enderecop, contactop) VALUES  (:codBebe, :dataNascimento, :tipoParto, :situacaoMedica, :nomeMae, :endereco, :contacto, :nomePai, :enderecop, :contactop)");
    $sql->bindParam(':codBebe', $codBebe);
    $sql->bindParam(':dataNascimento', $dataNascimento);
    $sql->bindParam(':tipoParto', $tipoParto);
    $sql->bindParam(':situacaoMedica', $situacaoMedica);
    $sql->bindParam(':nomeMae', $nomeMae);
    $sql->bindParam(':endereco', $endereco);
    $sql->bindParam(':contacto', $contacto);
    $sql->bindParam(':nomePai', $nomePai);
    $sql->bindParam(':enderecop', $enderecop);
    $sql->bindParam(':contactop', $contactop);
    $sql->execute();

   
    if ($sql->rowCount() > 0) {
    header("Location:index.php");
    } else {
        echo "Erro ao inserir os dados no banco de dados.";
    }
}
?>
