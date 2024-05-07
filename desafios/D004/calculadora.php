<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Calculadora simples</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <main>

    <?php
    $n1 = $_REQUEST["n1"];
    $n2 = $_REQUEST["n2"];
    $operacao = $_REQUEST["op"];
    $resultado = 0;

    echo "<h1>$operacao</h1>";

    switch ($operacao) {
      case 'Adição':
        $resultado = $n1 + $n2;
        echo "O resultado da $operacao entre <b>$n1</b> e <b>$n2</b> é: <b>$resultado</b>";
        break;
      case 'Subtração':
        $resultado = $n1 - $n2;
        echo "O resultado da $operacao entre <b>$n1</b> e <b>$n2</b> é: <b>$resultado</b>";
        break;
      case 'Multiplicação':
        $resultado = $n1 * $n2;
        echo "O resultado da $operacao entre <b>$n1</b> e <b>$n2</b> é: <b>$resultado</b>";
        break;
      case 'Divisão':
        $resultado = $n1 / $n2;
        echo "O resultado da $operacao entre <b>$n1</b> e <b>$n2</b> é: <b>$resultado</b>";
        break;

      default:
        echo "Você não selecionou nenhuma operação";
        break;
    }
    ?>
    <p><button onclick="javascript:history.go(-1)">&#x2b05 Voltar</button></p>

  </main>
</body>

</html>