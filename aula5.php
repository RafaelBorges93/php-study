<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./_css/estilo.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - Operadores</title>
  <style>
    body {
      display:flex;
      flex-direction: column;
      align-items: center;    
    }
    h1 {
      color: #ccc;
    }
  </style>
</head>
<body>
  <h1>Aulas PHP</h1>
  <div>
    <?php
      $n1 = 3;
      $n2 = 2;
      $n1_url = $_GET['a'];
      $n2_url = $_GET['b'];
      echo "O resultado da soma entre $n1 e $n2 é ". ($n1 + $n2). "!";
      echo "<br/><br/>O resultado da subtração entre $n1 e $n2 é ". ($n1 - $n2). "!";
      echo "<br/><br/>O resultado da multiplicação entre $n1 e $n2 é ". ($n1 * $n2). "!";
      echo "<br/><br/>O resultado da divisão entre $n1 e $n2 é ". ($n1 / $n2). "!";
      echo "<br/><br/>O resultado do módulo entre $n1 e $n2 é ". ($n1 % $n2). "!";
      echo "<br/><br/>O resultado da média entre $n1 e $n2 é ". (($n1 + $n2) / 2). "!";
      echo "<br/><br/>---Resultados vindo da URL <u>http://localhost:8080/?a=$n1_url&b=$n2_url</u>---";
      echo "<br/><br/>O resultado da soma entre $n1_url e $n2_url é ". ($n1_url + $n2_url). "!";
      echo "<br/><br/>O resultado da subtração entre $n1_url e $n2_url é ". ($n1_url - $n2_url). "!";
      echo "<br/><br/>O resultado da multiplicação entre $n1_url e $n2_url é ". ($n1_url * $n2_url). "!";
      echo "<br/><br/>O resultado da divisão entre $n1_url e $n2_url é ". ($n1_url / $n2_url). "!";
      echo "<br/><br/>O resultado do módulo entre $n1_url e $n2_url é ". ($n1_url % $n2_url). "!";
      echo "<br/><br/>O resultado da média entre $n1_url e $n2_url é ". (($n1_url + $n2_url) / 2). "!";

      $v1 = $_GET['x'];
      $v2 = $_GET['y'];

      echo "<h3>Valores recebidos: $v1 e $v2 !</h3>";
      echo "O valor absoluto de $v2 é ". abs($v2);
      echo "<br/><br/>O valor de $v1<sup>$v2</sup> é ". pow($v1, $v2);
      echo "<br/><br/>A raiz de $v1 é ". sqrt($v1);
      echo "<br/><br/>O valor de $v2 arredondado é " . round($v2); // ceil floor
      echo "<br/><br/>A parte inteira de $v2 é ". intval($v2);
      echo "<br/><br/>O valor de $v2 em moeda é R$ ". number_format($v2, 2, "," , ".");
    ?>
  </div>
</body>
</html>