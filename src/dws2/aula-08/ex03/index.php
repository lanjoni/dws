<?php

$nome = "";
$telefone = "";
$email = "";
$cpf = "";
$data = "";
$cep = "";

if (isset($_COOKIE) && !empty($_COOKIE)) {
  $nome = $_COOKIE['nome'] ?? "";
  $telefone = $_COOKIE['telefone'] ?? "";
  $email = $_COOKIE['email'] ?? "";
  $cpf = $_COOKIE['cpf'] ?? "";
  $data = $_COOKIE['data'] ?? "";
  $cep = $_COOKIE['cep'] ?? "";

  setcookie('nome', $nome, time() + 3600);
  setcookie('telefone', $telefone, time() + 3600);
  setcookie('email', $email, time() + 3600);
  setcookie('cpf', $cpf, time() + 3600);
  setcookie('data', $data, time() + 3600);
  setcookie('cep', $cep, time() + 3600);
}

if (isset($_POST) && !empty($_POST)) {
  $nome = ($_POST['nome'] && !empty($nome)) ? $_POST['nome'] : $nome;
  $telefone = ($_POST['telefone'] && !empty($telefone)) ? $_POST['telefone'] : $telefone;
  $email = ($_POST['email'] && !empty($email)) ? $_POST['email'] : $email;
  $cpf = ($_POST['cpf'] && !empty($cpf)) ? $_POST['cpf'] : $cpf;
  $data = ($_POST['data'] && !empty($data)) ? $_POST['data'] : $data;
  $cep = ($_POST['cep'] && !empty($cep)) ? $_POST['cep'] : $cep;

  setcookie('nome', $nome, time() + 3600);
  setcookie('telefone', $telefone, time() + 3600);
  setcookie('email', $email, time() + 3600);
  setcookie('cpf', $cpf, time() + 3600);
  setcookie('data', $data, time() + 3600);
  setcookie('cep', $cep, time() + 3600);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
      <h1>Formulário de cadastro</h1>
      <hr/>
      <div class="row">
        <form>
          <div class="mb-3">
            <label for="nome" class="form-label">Nome completo:</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?= $nome ?>">
          </div>
          <div class="row mb-3">
            <div class="col-4">
              <label for="telefone" class="form-label">Telefone:</label>
              <input type="number" class="form-control" id="telefone" name="telefone" placeholder="(DD) XXXXX-XXXX" value="<?= $telefone ?>">
            </div>
            <div class="col-8">
              <label for="email" class="form-label">E-mail:</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email" value="<?= $email ?>">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-4">
              <label for="cpf" class="form-label">CPF:</label>
              <input type="number" class="form-control" id="cpf" name="cpf" placeholder="XXX.XXX.XXX-XX" value="<?= $cpf ?>">
            </div>
            <div class="col-4">
              <label for="data" class="form-label">Data de nascimento:</label>
              <input type="date" class="form-control" id="data" name="data" value="<?= $data ?>">
            </div>
            <div class="col-4">
              <label for="cep" class="form-label">CEP:</label>
              <input type="number" class="form-control" id="cep" name="cep" placeholder="XX.XXX-XXX" value="<?= $cep ?>">
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Cadastrar</button>
          <button type="reset" class="btn btn-warning">Limpar</button>
        </form> 
      </div>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$("#nome").on('change', function(){
  // making a post request to register the name on cookie 
  var nome = $(this).val();
  $.post('index.php', {nome: nome}, function(data){
    console.log("Nome registrado no cookie: " + nome);
  });
});

$("#telefone").on('change', function(){
  var telefone = $(this).val();
  console.log(telefone); 
  $.post('index.php', {telefone: telefone}, function(data){
    console.log("Telefone registrado no cookie: " + telefone);
  });
});

$("#email").on('change', function(){
  var email = $(this).val();
  console.log(email); 
  $.post('index.php', {email: email}, function(data){
    console.log("Email registrado no cookie: " + email);
  });
});

$("#cpf").on('change', function(){
  var cpf = $(this).val();
  console.log(cpf); 
  $.post('index.php', {cpf: cpf}, function(data){
    console.log("CPF registrado no cookie: " + cpf);
  });
});

$("#data").on('change', function(){
  var data = $(this).val();
  console.log(data); 
  $.post('index.php', {data: data}, function(data){
    console.log("Data de nascimento registrada no cookie: " + data);
  });
});

$("#cep").on('change', function(){
  var cep = $(this).val();
  console.log(cep); 
  $.post('index.php', {cep: cep}, function(data){
    console.log("CEP registrado no cookie: " + cep);
  });
});
</script>
</body>
</html>
