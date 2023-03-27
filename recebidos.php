<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="meu.css">
</head>
<body>
    <div class="container">
        <h1> Recebidos - Tela de Cadastro de Clientes </h1>
        <p>Nome: <?php echo $_GET["bt_Nome"]; ?></p>
        <p>Endereço:<?php echo $_GET["bt_Endereço"]; ?></p>
        <p>Estado:<?php echo $_GET["bt_Estado"]; ?></p>
        <p>Cidade:<?php echo $_GET["bt_Cidade"]; ?></p>    
        <p>País:<?php echo $_GET["bt_País"]; ?></p>
        <a href="cadastro.php"></a>
    </div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</html>