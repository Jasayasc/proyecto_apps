$(document).ready(function() {
    $('#tipo').change(function() {
        recargarLista();
    })
})

function recargarLista() {
    $.ajax({
        type: 'GET',
        url: '/cita/list/doctor',
        data: {
            id_tipo: $('#tipo').val(),
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Aquí se agrega el token
        },
        success: function(r) {
            $('#doctor').html(r);
        }
    });
}