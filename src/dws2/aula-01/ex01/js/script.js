function cadastrar() {

    var form = document.getElementById("cadastroForm");
    var tabelaBody = document.getElementById("tabelaBody");
    var nome = form.elements["nome"].value;
    var telefone = form.elements["telefone"].value;
    var email = form.elements["email"].value;
    var estado = form.elements["estado"].value;

    if (nome && telefone && email && estado) {
        var newRow = tabelaBody.insertRow();
        var cell1 = newRow.insertCell(0);
        var cell2 = newRow.insertCell(1);
        var cell3 = newRow.insertCell(2);   
        var cell4 = newRow.insertCell(3);

        cell1.innerHTML = nome;
        cell2.innerHTML = telefone;
        cell3.innerHTML = email;
        cell4.innerHTML = estado;

    } else {
        alert("Por favor, preencha todos os campos do formulário.");
    }
}

function limpaform(){
    var form = document.getElementById("cadastroForm");
    form.reset();
}