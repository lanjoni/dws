// Mouse
document.getElementById('lampada').addEventListener('mouseover', function(){
  document.getElementById('lampada').src = "./img/lampada-acesa.png";
  document.body.style.backgroundColor = 'white';
  document.body.style.color = 'black';
  document.getElementById('legenda').innerHTML = 'Lâmpada acesa';
});

document.getElementById('lampada').addEventListener('mouseout', function(){
  document.getElementById('lampada').src = "./img/lampada.png";
  document.body.style.backgroundColor = 'black';
  document.body.style.color = 'white';
  document.getElementById('legenda').innerHTML = 'Lâmpada apagada';
});