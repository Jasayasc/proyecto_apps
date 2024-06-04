document.addEventListener('DOMContentLoaded', function () {
    console.log('validateDate.js cargado correctamente');
    var fechaInput = document.getElementById('fecha');

    if (fechaInput) {
        var currentFecha = new Date(fechaInput.value);
    
        // Establecer el atributo min con la fecha actual de la cita
        fechaInput.setAttribute('min', currentFecha.toISOString().split('T')[0]);
    
        // Validar en tiempo real
        fechaInput.addEventListener('change', function () {
            var selectedFecha = new Date(this.value);
            if (selectedFecha < currentFecha) {
                alert('No puedes seleccionar una fecha anterior a la actual de la cita');
                this.value = currentFecha.toISOString().split('T')[0];
            }
        });
    }
});