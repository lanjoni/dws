let nome = prompt("Qual é o seu nome?");
document.getElementById("nome").innerHTML = nome;

// Adicionar um parágrafo novo com texto
// dentro da div container
function adiciona(){
    let paragrafo = document.createElement("p");
    paragrafo.innerHTML = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porttitor nunc sit amet ante efficitur, sed feugiat sem condimentum. Mauris ut ante rutrum sem aliquam laoreet. Donec sem ipsum, mollis ut odio non, cursus ornare sapien. Vestibulum sit amet augue mattis, tincidunt diam quis, commodo quam. Suspendisse rutrum, turpis cursus venenatis porta, erat nunc fringilla ipsum, sed ultrices est ligula eget erat. Donec eget odio dolor. Vestibulum quis ligula a diam volutpat faucibus. Fusce volutpat enim sit amet dui feugiat tristique. Nulla non fringilla urna. Nam et sem imperdiet, aliquam tellus a, viverra justo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam rutrum mi eu tortor pulvinar, ultrices sollicitudin nisl elementum. Cras molestie blandit ultricies. Maecenas vulputate erat ipsum, sed accumsan erat euismod porttitor.";
    document.getElementById("container").appendChild(paragrafo);
}

// function adiciona(){
//     let paragrafo = document.createElement("p");
//     paragrafo.innerHTML = "Texto do parágrafo";
//     document.body.appendChild(paragrafo);
// }

// Remover todos os parágrafos
function remove(){
    let paragrafos = document.querySelectorAll("p");
    for(let i = 0; i < paragrafos.length; i++){
        document.getElementById("container").removeChild(paragrafos[i]);
    }
}