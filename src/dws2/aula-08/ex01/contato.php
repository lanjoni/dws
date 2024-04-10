<?php require_once 'cabecalho.php'; ?>

<div class="inicio">
    <div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Formulário para contato</h1>
    </div>

    <div class="row">
        <div class="col-2"></div>
        <form action="destino.php" method="post" class="col-8">
            <div class="row">
                <div class="mb-3 col">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required placeholder="Digite seu nome">
                </div>
                <div class="mb-3 col">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required placeholder="Digite seu e-mail">
                </div>
            </div>
            <div class="mb-3">
                <label for="mensagem" class="form-label">Mensagem</label>
                <textarea class="form-control" id="mensagem" name="mensagem" required placeholder="Digite uma mensagem"></textarea>
            </div>
            <div class="mb-3  d-flex justify-content-center">
                <button type="submit" class="btn btn-primary m-1">Enviar</button>
                <button type="reset" class="btn btn-warning m-1">Limpar</button>
            </div>
        </form>
        <div class="col-2"></div>
    </div>
</div>

<?php require_once 'rodape.php'; ?>