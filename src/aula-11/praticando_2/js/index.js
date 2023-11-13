function mask(o, f) {
  setTimeout(function() {
    var v = mphone(o.value);
    if (v != o.value) {
      o.value = v;
    }
  }, 1);
}

function mphone(v) {
  var r = v.replace(/\D/g, "");
  r = r.replace(/^0/, "");
  if (r.length > 10) {
    r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
  } else if (r.length > 5) {
    r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
  } else if (r.length > 2) {
    r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
  } else {
    r = r.replace(/^(\d*)/, "($1");
  }
  return r;
}

function validar(id) {
  let campo = document.getElementById(id);
  let valor = campo.value.trim();

  if (valor === '') {
      campo.classList.remove('is-valid');
      campo.classList.add('is-invalid');
  } else {
      campo.classList.remove('is-invalid');
      campo.classList.add('is-valid');
  }
}

document.getElementById('nome').addEventListener('input', function() {
  validar(this.id);
});

document.getElementById('email').addEventListener('input', function() {
  let emailInput = this.value.trim();
  let emailField = document.getElementById('email');
  let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (emailRegex.test(emailInput)) {
      emailField.classList.remove('is-invalid');
      emailField.classList.add('is-valid');
  } else {
      emailField.classList.remove('is-valid');
      emailField.classList.add('is-invalid');
  }
});

document.getElementById('telefone').addEventListener('input', function() {
  validar(this.id);
});

document.getElementById('idade').addEventListener('input', function() {
  validar(this.id);
});

document.getElementById('observacoes').addEventListener('input', function() {
  validar(this.id);
});