<?php 

$titulo = filter_input(INPUT_GET, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
$corpo = filter_input(INPUT_GET, 'corpo', FILTER_SANITIZE_SPECIAL_CHARS);
$cor_texto = filter_input(INPUT_GET, 'cor_texto', FILTER_SANITIZE_SPECIAL_CHARS);
$url_imagem = filter_input(INPUT_GET, 'url_imagem', FILTER_SANITIZE_SPECIAL_CHARS);
$url_link = filter_input(INPUT_GET, 'url_link', FILTER_SANITIZE_SPECIAL_CHARS);
$cor_fundo = filter_input(INPUT_GET, 'cor_fundo', FILTER_SANITIZE_SPECIAL_CHARS);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: <?php echo $cor_fundo; ?>;
        color: <?php echo $cor_texto; ?>;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1><?php echo $titulo; ?></h1>
      <hr/>
      <div class="row">
        <p><?php echo $corpo; ?></p>
      </div>
      <div class="row">
        <img src="<?php echo $url_imagem; ?>" alt="Imagem" class="img-fluid">
      </div>
      <div>
        <a href="<?php echo $url_link; ?>" target="_blank" class="btn btn-primary ms-2 mb-2 mt-2">Clique aqui</a>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>
