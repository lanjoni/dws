$(document).ready(function () {
  $('#btnGravar').on('click', function (e) {
    e.preventDefault();

    var nome = $('#nome').val();
    var email = $('#email').val();

    if (nome === '' || email === '') {
      alert('Por favor, preencha todos os campos.');
      return;
    }

    $.ajax({
      url: 'https://epansani.com.br/2023/dw1s4/ajax/ins.php',
      type: 'POST',
      dataType: 'json',
      data: { nome: nome, email: email },
      success: function (data) {
        if (data) {
          sucesso();
          limparCampos();
          atualizarTabela();
        } else {
          alert('Falha ao gravar os dados.');
        }
      },
      error: function (error) {
        console.error('Erro na requisição:', error);
      }
    });
  });

  $('#btnLimpar').on('click', function (e) {
    e.preventDefault();
    limparCampos();
  });

  $('#btnAtualizar').on('click', function (e) {
    e.preventDefault();
    atualizarTabela();
  });

  function limparCampos() {
    $('#nome').val('');
    $('#email').val('');
  }

  function atualizarTabela() {
    $.ajax({
      url: 'https://epansani.com.br/2023/dw1s4/ajax/list.php',
      type: 'GET',
      dataType: 'json',
      success: function (data) {
        $('#tabela').empty();
        data.forEach(function (item) {
          $('#tabela').append(
            `<tr>
              <td>${item.nome}</td>
              <td>${item.email}</td>
              <td><button class="btn btn-danger btnExcluir" data-id="${item.id}">Apagar</button></td>
            </tr>`
          );
        });

        $('.btnExcluir').on('click', function () {
          let confirmacao = confirm('Deseja realmente apagar o registro?');
          if (!confirmacao) {
            return;
          }

          var id = $(this).data('id');
          excluirRegistro(id);
        });
      },
      error: function (error) {
        console.error('Erro na requisição:', error);
      }
    });
  }

  function excluirRegistro(id) {
    $.ajax({
      url: 'https://epansani.com.br/2023/dw1s4/ajax/rem.php',
      type: 'POST',
      dataType: 'json',
      data: { id: id },
      success: function (data) {
        if (data) {
          alert('Registro excluído com sucesso!');
          atualizarTabela();
        } else {
          alert('Falha ao excluir o registro.');
        }
      },
      error: function (error) {
        console.error('Erro na requisição:', error);
      }
    });
  }

  function sucesso() {
    $('#msg').removeClass('d-none');
    $('#msg').addClass('d-block');
    setTimeout(function () {
      $('#msg').removeClass('d-block');
      $('#msg').addClass('d-none');
    }, 5000);
  }

  atualizarTabela();
});
