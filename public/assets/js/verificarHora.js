$(document).on('change','#fecha',function() {
        recargarListaHora();
});

function recargarListaHora() {
    var fecha = document.getElementById('fecha').value;
    $.ajax({
        type: 'GET',
        url: '/cita/list/hora',
        data: {
            fecha:fecha,
            doctor: $('#doctor').val(),
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Aquí se agrega el token
        },
        success: function(r) {
            $('#containerHora').html(r);
        }
    });
}