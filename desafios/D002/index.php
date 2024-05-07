<!DOCTYPE html>
<html lang="pt-br">

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

    if ($num1 < $num2) {
      $n = mt_rand($num1, $num2);
      echo "<p>Gerando um número aleatório entre <b>$num1</b> e <b>$num2</b></p>";
      echo "O número gerado foi: <b>$n</b>";
    } elseif ($num1 == $num2) {
      echo "<p>Você digitou $num1 e $num2, o valor do primeiro número não pode ser igual ao segundo, ele deve ser menor.</p>";
    } else {
      echo "<p>O valor do primeiro número não pode ser maior que do segundo número.</p>";
    }
    ?>
    <button onclick="javascript:document.location.reload()">&#X1F504; Gerar novo</button>
    <button onclick="javascript:history.go(-1)">&#x2b05 Voltar</button>
  </main>
</body>

</html>