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
         <h1>Tela de Cadastro de Clientes </h1>
    </div>
    <div class="container">
        <form action="recebidos.php" methoud="get">
        <div class="mb-3">
            <label for="">Nome:</label>
            <input type="text" name="bt_Nome">
    </div> 



    <div class="mb-3">
        <label for=""> Estado: </label>
        <input type="text" name="bt_Estado" >
    </div>  
    
    

    <div class="mb-3">
        <label for=""> Endereço: </label>
        <input type="text" name="bt_Endereço">
    </div> 



    <div class="mb-3">
        <label for=""> Cidade: </label>
        <input type="text" name="bt_Cidade">
    </div>



    <div class="mb-3">
        <label for=""> País: </label>
        <input type="text" name="bt_País">
    </div>


    <div class="mb-3">
        <input type="submit" class="btn btn-success">
        <button type="button" class="btn btn-danger"> Cancelar</button>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</html>