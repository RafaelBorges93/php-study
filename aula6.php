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
      //http://localhost:8080/?p=1000&aa=2023
      $preco = $_GET["p"];
      echo "O preço do produto é R$ ". number_format($preco, 2);
      $preco += $preco * 10 / 100;
      echo "<br/><br/>O preço do produto com acrescimo de 10% é R$ ". number_format($preco, 2);
      $ano_atual = $_GET["aa"];
      echo "<br/><br/>O ano atual é $ano_atual e o ano anterior é " . --$ano_atual; 

      $a = 3;
      $b = &$a;
      $b +=5;
      echo "<br/><br/>A variavel A vale $a e a B vale $b";

      $site = "cursoemvideo";
      $$site = "crusoPHP";
      echo "<br/><br/>$site";
      echo "<br/><br/>$cursoemvideo";
    ?>
  </div>
</body>
</html>