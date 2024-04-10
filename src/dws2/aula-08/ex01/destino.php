<?php require_once 'cabecalho.php'; 

$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];
$data = date("d/m/Y");
$hora = date("H:i:s");

$nome_arquivo = "contatos/Contato_" . date("d_m_Y") . "_" . date("Hi") . ".txt";

$conteudo_arquivo = "Contato via site:

Data: $data - $hora

Nome: $nome
Email: $email
Mensagem: $mensagem

------------------------------------";

file_put_contents($nome_arquivo, $conteudo_arquivo);

?>

<div class="inicio">
    <div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Formulário para contato</h1>
    </div>

    <p>
        Nome informado: <?= $nome ?>
    </p>
    <p>
        Email: <?= $email ?>
    </p>
    <p>
        Mensagem: <?= $mensagem ?>
    </p>
    <p>
        Data: <?= $data ?> - <?= $hora ?>
    </p>
</div>

<?php require_once 'rodape.php'; ?>
