$(document).on('change','#doctor',function() {
    recargarListaFecha();
});

function recargarListaFecha() {
$.ajax({
    type: 'GET',
    url: '/cita/list/fecha',
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Aquí se agrega el token
    },
    success: function(r) {
        $('#containerFecha').html(r);
    }
});
}