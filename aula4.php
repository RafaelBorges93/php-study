<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./_css/estilo.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - Variáveis</title>
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
      $idade = 30;
      $nome_comp = "Rafael de Almeida Borges";
      echo "$nome_comp tem $idade anos!";
    ?>
  </div>
</body>
</html>