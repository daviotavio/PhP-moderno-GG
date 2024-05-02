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
    $n = mt_rand(1, 100);
    echo "<p>Gerando um número aleatório entre 1 e 100</p>";
    echo "O número gerado foi $n";
    ?>
    <button onclick="javascript:document.location.reload()">&#X1F504; De novo</button>
  </main>
</body>

</html>