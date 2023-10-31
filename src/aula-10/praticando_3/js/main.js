// Salvando cor atual
var corAtual = 'white';

// Cliques
document.getElementById('btn').addEventListener('click', function(){
    document.body.style.backgroundColor = 'white';
    corAtual = 'white';
});

document.getElementById('red').addEventListener('click', function(){
    document.body.style.backgroundColor = 'red';
    corAtual = 'red';
});

document.getElementById('green').addEventListener('click', function(){
    document.body.style.backgroundColor = 'green';
    corAtual = 'green';
});

document.getElementById('blue').addEventListener('click', function(){
    document.body.style.backgroundColor = 'blue';
    corAtual = 'blue';
});

document.getElementById('yellow').addEventListener('click', function(){
    document.body.style.backgroundColor = 'yellow';
    corAtual = 'yellow';
});

document.getElementById('magenta').addEventListener('click', function(){
    document.body.style.backgroundColor = 'magenta';
    corAtual = 'magenta';
});

// Mouse
document.getElementById('red').addEventListener('mouseover', function(){
    document.body.style.backgroundColor = 'red';
    document.getElementById('preview').style.visibility = 'visible';
});

document.getElementById('green').addEventListener('mouseover', function(){
    document.body.style.backgroundColor = 'green';
    document.getElementById('preview').style.visibility = 'visible';
});

document.getElementById('blue').addEventListener('mouseover', function(){
    document.body.style.backgroundColor = 'blue';
    document.getElementById('preview').style.visibility = 'visible';
});

document.getElementById('yellow').addEventListener('mouseover', function(){
    document.body.style.backgroundColor = 'yellow';
    document.getElementById('preview').style.visibility = 'visible';
});

document.getElementById('magenta').addEventListener('mouseover', function(){
    document.body.style.backgroundColor = 'magenta';
    document.getElementById('preview').style.visibility = 'visible';
});

document.getElementById('red').addEventListener('mouseout', function(){
    document.body.style.backgroundColor = corAtual;
    document.getElementById('preview').style.visibility = 'hidden';
});

document.getElementById('green').addEventListener('mouseout', function(){
    document.body.style.backgroundColor = corAtual;
    document.getElementById('preview').style.visibility = 'hidden';
});

document.getElementById('blue').addEventListener('mouseout', function(){
    document.body.style.backgroundColor = corAtual;
    document.getElementById('preview').style.visibility = 'hidden';
});

document.getElementById('yellow').addEventListener('mouseout', function(){
    document.body.style.backgroundColor = corAtual;
    document.getElementById('preview').style.visibility = 'hidden';
});

document.getElementById('magenta').addEventListener('mouseout', function(){
  document.body.style.backgroundColor = corAtual;
  document.getElementById('preview').style.visibility = 'hidden';
});