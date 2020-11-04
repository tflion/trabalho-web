//aqui é adicionado o DataTable
$(document).ready(function() {
    $('#tabela').DataTable({
        "language": { //tradução do DataTable
            "lengthMenu": "Exibir _MENU_ dados por página",
            "zeroRecords": "Registros não Encontrados - desculpe",
            "info": "Exibindo página _PAGE_ de _PAGES_",
            "infoEmpty": "Sem registros encontrados",
            "infoFiltered": "(filtrados _MAX_ total de registros)",
            "paginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "search": "Pesquisar:"
        }
    });
});