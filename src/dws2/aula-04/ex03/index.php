<?php

$clique = filter_input(INPUT_GET, 'clique', FILTER_SANITIZE_SPECIAL_CHARS);
$ultimos = filter_input(INPUT_GET, 'ultimos', FILTER_SANITIZE_SPECIAL_CHARS);

if ($clique) {
  switch ($clique) {
    case 'jacare':
      $animal = 'Jacaré';
      $curiosidade = 'Os jacarés são animais ecologicamente importantes, pois fazem o controle biológico de outras espécies de animais, pois se alimentam dos animais mais velhos e fracos que não conseguem escapar de seu ataque. Além disso, suas fezes servem de alimento a peixes e outros seres vivos aquáticos.';
      $ultimos .= "Jacaré,";
      break;
    case 'tartaruga':
      $animal = 'Tartaruga';
      $curiosidade = 'As tartarugas são animais que vivem em média 100 anos, mas algumas espécies podem viver até 200 anos. A tartaruga mais velha do mundo é a tartaruga gigante das ilhas Galápagos, que viveu 152 anos.';
      $ultimos .= "Tartaruga,";
      break;
    case 'panda':
      $animal = 'Panda Vermelho';
      $curiosidade = 'O panda-vermelho é um animal solitário e noturno, que passa a maior parte do tempo dormindo. Ele é um animal muito tímido e raramente é visto em seu habitat natural.';
      $ultimos .= "Panda Vermelho,";
      break;
    case 'chinchila':
      $animal = 'Chinchila';
      $curiosidade = 'As chinchilas são animais que vivem em média 15 anos, mas algumas espécies podem viver até 20 anos. Elas são animais muito ativos e brincalhões, que adoram pular e escalar.';
      $ultimos .= "Chinchila,";
      break;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    .bloco {
      display: flex;
      justify-content: space-around;
      align-items: center;
      flex-wrap: wrap;
    }

    img:hover {
      transform: scale(1.1);
      border: 2px solid red;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Praticando 3 - Animais</h1>
    <hr/>
    <div class="bloco">
      <a href="index.php?clique=jacare&ultimos=<?= $ultimos ?>"><img src="https://static.poder360.com.br/2021/11/reptile-gb24a72f57_1920.jpg" width="300" height="200" alt="Jacaré"></a>
      <a href="index.php?clique=tartaruga&ultimos=<?= $ultimos ?>"><img src="https://img.olhardigital.com.br/wp-content/uploads/2022/06/jonathan-tartaruga.jpg" width="300" height="200" alt="Tartaruga"></a>
      <a href="index.php?clique=panda&ultimos=<?= $ultimos ?>"><img src="https://static.mundoeducacao.uol.com.br/mundoeducacao/2023/03/panda-vermelho-arvore.jpg" width="300" height="200" alt="Panda Vermelho"></a>
      <a href="index.php?clique=chinchila&ultimos=<?= $ultimos ?>"><img src="https://upload.wikimedia.org/wikipedia/commons/5/5f/Standardchinchilla.jpg" width="300" height="200" alt="Chinchila"></a>
    </div>
    <br/>
    <div>
      <?php 
      
      if ($clique):
      ?>
      <p>
        Você clicou no <b><?= $animal ?></b>.
      </p>
      <p>
        <?= $curiosidade ?>
      </p>
      <p>
        <a href="index.php">Limpar tudo</a>
      </p>

      <?php
      endif;

      if ($ultimos && (substr_count($ultimos, ',') > 1)):
      ?>

      <p>
        Últimos animais clicados:
      </p>

      <?php
      $arrDividido = explode(',', $ultimos);
      $i = 0;
      $cont = substr_count($ultimos, ',');
      $cont -= 1;
      foreach($arrDividido as $strDiv) {
        if ($i < $cont){
          echo '<b>' . $strDiv . '</b><br />';
        }
        $i++;
      }
      endif;
      ?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>