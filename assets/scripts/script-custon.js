$("#dados-usuarios").css("display", "none");
$("#lista-usuarios").css("display", "none");

$("#dados-fornecedores").css("display", "none");
$("#lista-fornecedores").css("display", "none");

$("#dados-clientes").css("display", "contents");
$("#lista-clientes").css("display", "contents");

$("#nome-tabela").text("Clientes");

// SCRIPT PARA POPULAR A TABELA USUARIO

$("#btn-usuario").click(function() {

    $("#dados-clientes").css("display", "none");
    $("#lista-clientes").css("display", "none");

    $("#dados-fornecedores").css("display", "none");
    $("#lista-fornecedores").css("display", "none");

    $("#dados-usuarios").css("display", "contents");
    $("#lista-usuarios").css("display", "contents");

    $("#nome-tabela").text("Usuários");

});
$(document).ready(function() {
    $.ajax({
        url: 'getUsuarios.php',
        type: 'POST',
        dataType: 'json',
        success: function(data) {
            $('#dados-usuarios').append(
                '<div class="table-responsive ">' +
                '<table class="table table-hover">' +
                '<thead >' +
                '<th>Nome</th>' +
                '<th>CPF</th>' +
                '<th>Endereço</th>' +
                '<th>Telefone</th>' +
                '<th>Usuario </th>' +
                '</tr>' +
                '</thead>' +
                '<tbody id="lista-usuarios"></tbody>' +
                '</table>' +
                '</div>'
            );
            data.forEach(function(usuario) {
                $('#lista-usuarios').append(
                    '<tr>' +
                    '<td>' + usuario.nome + '</td>' +
                    '<td>' + usuario.cpf + '</td>' +
                    '<td>' + usuario.endereco + '</td>' +
                    '<td>' + usuario.telefone + '</td>' +
                    '<td>' + usuario.usuario + '</td>' +
                    '</tr>'

                );
            });
        },
        error: function(error) {
            console.error(error);
        }
    });
});

// FIM SCRIPT PARA POPULAR A TABELA USUARIO 

// SCRIPT PARA POPULAR A TABELA USUARIO 

$("#btn-cliente").click(function() {

    $("#dados-fornecedores").css("display", "none");
    $("#lista-fornecedores").css("display", "none");

    $("#dados-usuarios").css("display", "none");
    $("#lista-usuarios").css("display", "none");

    $("#dados-clientes").css("display", "contents");
    $("#lista-clientes").css("display", "contents");


    $("#nome-tabela").text("Clientes")

});
$(document).ready(function() {
    $.ajax({
        url: 'getClientes.php',
        type: 'POST',
        dataType: 'json',
        success: function(data) {

            $('#dados-clientes').append(
                '<div class="table-responsive ">' +
                '<table class="table table-hover">' +
                '<thead >' +
                '<th>Nome</th>' +
                '<th>CPF</th>' +
                '<th>Endereço</th>' +
                '<th>Telefone</th>' +
                '<th>Email </th>' +
                '</tr>' +
                '</thead>' +
                '<tbody id="lista-clientes"></tbody>' +
                '</table>' +
                '</div>'
            );
            data.forEach(function(cliente) {
                $('#lista-clientes').append(
                    '<tr>' +
                    '<td>' + cliente.nome + '</td>' +
                    '<td>' + cliente.cpf + '</td>' +
                    '<td>' + cliente.endereco + '</td>' +
                    '<td>' + cliente.telefone + '</td>' +
                    '<td>' + cliente.email + '</td>' +
                    '</tr>'

                );
            });
        },
        error: function(error) {
            console.error(error);
        }
    });
});

// FIM SCRIPT PARA POPULAR A TABELA CLIENTE 



// SCRIPT PARA POPULAR A TABELA FORNECEDORES 

$("#btn-fornecedor").click(function() {

    $("#dados-usuarios").css("display", "none");
    $("#lista-usuarios").css("display", "none");

    $("#dados-clientes").css("display", "none");
    $("#lista-clientes").css("display", "none");

    $("#dados-fornecedores").css("display", "contents");
    $("#lista-fornecedores").css("display", "contents");

    $("#nome-tabela").text("Fornecedores");

});
$(document).ready(function() {
    $.ajax({
        url: 'getFornecedores.php',
        type: 'POST',
        dataType: 'json',
        success: function(data) {

            $('#dados-fornecedores').append(
                '<div class="table-responsive ">' +
                '<table class="table table-hover">' +
                '<thead >' +
                '<th>Nome</th>' +
                '<th>CPF</th>' +
                '<th>Cidade</th>' +
                '<th>Email </th>' +
                '</tr>' +
                '</thead>' +
                '<tbody id="lista-fornecedores"></tbody>' +
                '</table>' +
                '</div>'
            );
            data.forEach(function(fornecedor) {
                $('#lista-fornecedores').append(
                    '<tr>' +
                    '<td>' + fornecedor.nome + '</td>' +
                    '<td>' + fornecedor.cpf + '</td>' +
                    '<td>' + fornecedor.cidade + '</td>' +
                    '<td>' + fornecedor.email + '</td>' +
                    '</tr>'

                );
            });
        },
        error: function(error) {
            console.error(error);
        }
    });
});
// FIM SCRIPT PARA POPULAR A TABELA FORNECEDORES 


// SETANDO A COR DE FUNDO DA TABELA INICIANDO COM #27a9e3
document.getElementById('lista').style = 'background: #27a9e3';

document.getElementById('btn-cliente').onclick = corTabelaClientes;

function corTabelaClientes() {
    event.preventDefault();
    var corCliente = document.getElementById('card-cliente');
    var estiloCliente = window.getComputedStyle(corCliente);
    var corDeFundoCliente = estiloCliente.background;
    document.getElementById('lista').style = 'background: ' + corDeFundoCliente + ' !important';
}


document.getElementById('btn-usuario').onclick = corTabelaUsuarios;

function corTabelaUsuarios() {
    event.preventDefault();
    var corUsuario = document.getElementById('card-usuario');
    var estiloUsuario = window.getComputedStyle(corUsuario);
    var corDeFundoUsuario = estiloUsuario.background;
    document.getElementById('lista').style = 'background: ' + corDeFundoUsuario + ' !important';
}


document.getElementById('btn-fornecedor').onclick = corTabelaFornecedores;

function corTabelaFornecedores() {
    event.preventDefault();
    var corFornecedor = document.getElementById('card-fornecedor');
    var estiloFornecedor = window.getComputedStyle(corFornecedor);
    var corDeFundoFornecedor = estiloFornecedor.background;
    document.getElementById('lista').style = 'background: ' + corDeFundoFornecedor + ' !important';
}