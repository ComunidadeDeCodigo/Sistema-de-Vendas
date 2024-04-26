<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Vendas - Página Inicial</title>
    <link rel="shortcut icon" href="../IMG/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/index.css">
</head>
<body>
   <div class="container">
    <div class="container-img">
        <img src="../IMG/logo.png" alt="" class="img-logo">
    </div>
    <div class="container-outin">
        <h1>OUTIN</h1>
        <h5>VENDAS</h5>
        <div class="registrar">
            <button class="btn-registrar">Registrar</button>
        </div>
        <div class="cards">
        <div class="entradas">
            <h2>Entradas</h2>
            <h3 id="entrada">0$</h3>
        </div>
        <div class="saidas">
            <h2>Saídas</h2>
            <h3 id="saida">0$</h3>
        </div>
        <div class="totals">
            <h2>Total</h2>
            <h3 id="total">0$</h3>
        </div>
        </div>
        <div class="filtrar">
            <h4>Filtrando Dados</h4>
            <div class="pesquisar">
                <input type="search" name="pesquisar" class="input-search">
                <button class="btn-search">Pesquisar</button>
            </div>
            <div class="tabela">
                <table class="table">
                    <tr class="linha">
                        <th>Nome</th>
                        <th>Data</th>
                    </tr>
                    <tr>
                    <td>Adolfo Manuel</td>
                    <td>12/09/2000</td>
                    </tr>
                    <tr>
                    <td>Artur Paulo</td>
                    <td>10/01/2024</td>
                </tr>
                </table>
            </div>
        </div>
    </div>
   </div>
</body>
</html>
