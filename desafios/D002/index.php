<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 2 - Gerador de números aleatórios</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <main>
    <h1>Trabalhando com números aleatórios</h1>
    <?php
    $num1 = $_REQUEST["num1"];
    $num2 = $_REQUEST["num2"];

    $n = mt_rand($num1, $num2);
    echo "<p>Gerando um número aleatório entre $num1 e $num2</p>";
    echo "O número gerado foi $n";
    ?>
    <button onclick="javascript:document.location.reload()">&#X1F504; Gerar novo</button>
    <button onclick="javascript:history.go(-1)">&#x2b05 Voltar</button>
  </main>
</body>

</html>