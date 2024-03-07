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
        <h1>Formulário</h1>
        <hr/>
        <p>Escolha alguns interesses:</p>
        <form action="./destino.php" method="post">
            <div class="row">
                <div class="col-3">
                    <input type="checkbox" id="interesses" name="interesses[]" value="Esportes"/>
                    <label>Esportes</label>
                    <br/>
                    <input type="checkbox" id="interesses" name="interesses[]" value="Futebol"/>
                    <label>Futebol</label>
                    <br/>
                    <input type="checkbox" id="interesses" name="interesses[]" value="Basquete"/>
                    <label>Basquete</label>
                    <br/>
                    <input type="checkbox" id="interesses" name="interesses[]" value="Tênis"/>
                    <label>Tênis</label>
                    <br/>
                    <input type="checkbox" id="interesses" name="interesses[]" value="Taekwondo"/>
                    <label>Taekwondo</label>
                    <br/>
                    <input type="checkbox" id="interesses" name="interesses[]" value="Tecnologia"/>
                    <label>Tecnologia</label>
                </div>
                <div class="col-3">
                    <input type="checkbox" id="interesses" name="interesses[]" value="Cinema"/>
                    <label>Cinema</label>
                    <br/>
                    <input type="checkbox" id="interesses" name="interesses[]" value="Musica"/>
                    <label>Música</label>
                    <br/>
                    <input type="checkbox" id="interesses" name="interesses[]" value="Livros"/>
                    <label>Livros</label>
                    <br/>
                    <input type="checkbox" id="interesses" name="interesses[]" value="Viagens"/>
                    <label>Viagens</label>
                    <br/>
                    <input type="checkbox" id="interesses" name="interesses[]" value="Culinária"/>
                    <label>Culinária</label>
                    <br/>
                    <input type="checkbox" id="interesses" name="interesses[]" value="Moda"/>
                    <label>Moda</label>
                </div>
                <div class="col-3">
                    <input type="checkbox" id="interesses" name="interesses[]" value="Carros"/>
                    <label>Carros</label>
                    <br/>
                    <input type="checkbox" id="interesses" name="interesses[]" value="Motos"/>
                    <label>Motos</label>
                    <br/>
                    <input type="checkbox" id="interesses" name="interesses[]" value="Teatro"/>
                    <label>Teatro</label>
                    <br/>
                    <input type="checkbox" id="interesses" name="interesses[]" value="Dança"/>
                    <label>Dança</label>
                    <br/>
                    <input type="checkbox" id="interesses" name="interesses[]" value="Artes"/>
                    <label>Artes</label>
                    <br/>
                    <input type="checkbox" id="interesses" name="interesses[]" value="Imóveis"/>
                    <label>Imóveis</label>
                </div>
                <div class="col-3">
                    <input type="checkbox" id="interesses" name="interesses[]" value="Investimentos"/>
                    <label>Investimentos</label>
                    <br/>
                    <input type="checkbox" id="interesses" name="interesses[]" value="Negócios"/>
                    <label>Negócios</label>
                    <br/>
                    <input type="checkbox" id="interesses" name="interesses[]" value="Política"/>
                    <label>Política</label>
                    <br/>
                    <input type="checkbox" id="interesses" name="interesses[]" value="Ciência"/>
                    <label>Ciência</label>
                    <br/>
                    <input type="checkbox" id="interesses" name="interesses[]" value="Saúde"/>
                    <label>Saúde</label>
                    <br/>
                    <input type="checkbox" id="interesses" name="interesses[]" value="Educação"/>
                    <label>Educação</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Enviar</button>
            <button type="reset" class="btn btn-warning mt-3">Limpar</button>
            
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>