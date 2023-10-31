function soma(){
    let n1 = document.getElementById("n1").value;
    let n2 = document.getElementById("n2").value;
    let soma = parseInt(n1) + parseInt(n2);
    document.getElementById("resultado").value = soma;
}

function subtracao(){
    let n1 = document.getElementById("n1").value;
    let n2 = document.getElementById("n2").value;
    let subtracao = parseInt(n1) - parseInt(n2);
    document.getElementById("resultado").value = subtracao;
}

function multiplicacao(){
    let n1 = document.getElementById("n1").value;
    let n2 = document.getElementById("n2").value;
    let multiplicacao = parseInt(n1) * parseInt(n2);
    document.getElementById("resultado").value = multiplicacao;
}

function divisao(){
    let n1 = document.getElementById("n1").value;
    let n2 = document.getElementById("n2").value;
    let divisao = parseInt(n1) / parseInt(n2);
    document.getElementById("resultado").value = divisao;
}