<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 3 - Conversor de moedas</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <main>
    <h1>Conversor de moedas simples</h1>
    <?php
    $real = $_REQUEST["num"] ?? 0;
    $dol = 5.1117;
    $conversao = $real / $dol;
    echo "<p>Seus R$: $real equivalem a U$: $conversao dólares</p>";
    ?>
    <button onclick="javascript:history.go(-1)">&#x2b05 Voltar</button>
  </main>
</body>

</html>