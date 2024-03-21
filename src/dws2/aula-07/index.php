<?php

use Claudsonm\CepPromise\CepPromise;

require 'vendor/autoload.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
      <h1>Exemplo CEP com Composer</h1>
      <form class="row g-3" action="" method="POST">
          <div class="col-3">
              <div class="mb-2">
                  <label for="cep">CEP:</label>
                  <input class="form-control" type="number" name="cep" id="cep" required autofocus placeholder="Somente números">
              </div>
          </div>
          <div class="col-4">
              <div class="mt-4">
                  <button type="submit" class="btn btn-primary">Enviar</button>
                  <button type="reset" class="btn btn-warning">Limpar</button>
              </div>
          </div>
      </form>
      <?php 
        set_error_handler("warning_handler", E_WARNING);
        dns_get_record(...);
        restore_error_handler();

        function warning_handler($errno, $errstr) { 
          // do something
        }

    
        if (isset($_POST["cep"])) {
          try {
            $cep = $_POST["cep"];
            $address = CepPromise::fetch($cep);
            echo "<h2>Endereço</h2>";
            echo "<p><strong>CEP:</strong> {$address->zipCode}</p>";
            echo "<p><strong>Logradouro:</strong> {$address->street}</p>";
            echo "<p><strong>Bairro:</strong> {$address->district}</p>";
            echo "<p><strong>Cidade:</strong> {$address->city}</p>";
            echo "<p><strong>Estado:</strong> {$address->state}</p>";
          } catch (Exception $e) {
            echo "<h2>Erro</h2>";
            echo "<p>{$e->getMessage()}</p>";
          }
        }
      ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<body>
</html>
