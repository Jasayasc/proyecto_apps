{{-- <html>

<head>
    <script>
        // function onchangeInput() {
        //     var value = this.value;
        //     if (value && value.length > 0) {
        //         Exist text in your input
        //         document.getElementById("button").style.visibility = "visible";
        //     } else {
        //         document.getElementById("button").style.visibility = "hidden";
        //     }
        // }

        // window.onload = function() {
        //     document.getElementById("button").style.visibility = "hidden";
        //     var el = document.getElementById("userText");
        //     if (el.addEventListener) {
        //         el.addEventListener("change", onchangeInput, false);
        //     } else {
        //         el.attachEvent('onchange', onchangeInput);
        //     }
        // }
        // $("userText").bind("change", function() {
        //     var value = $(this).val();
        //     if (value && value.length > 0) {
        //         // Exist text in your input
        //         $("button").show();
        //     } else {
        //         $("button").hide();
        //     }
        // });
        function
        changeButton() {
            document.getElementById("button").innerHTML = "Insert text for button";
            document.getElementById("button").removeAttribute("hidden");
        }
    </script>
</head>

<body>
    <input type="button" id="button" name="button" value="New Button" />
    Change the text in Input Box. Then Button will be show<br /><br />
    <input type="text" name="userText" id="userText" onchange="changeButton()"/>
</body>

</html> --}}
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar u ocultar botón según texto de input</title>
    <style>
        #boton {
            display: none;
            /* Por defecto, el botón está oculto */
        }
    </style>
</head>

<body>

    <input type="text" id="inputTexto" value="Hola" oninput="mostrarOcultarBoton()">
    <button id="boton">Mi Botón</button>

    <script>
        function mostrarOcultarBoton() {
            var inputTexto = document.getElementById("inputTexto");
            var boton = document.getElementById("boton");

            // Si el valor del input está vacío, ocultar el botón; de lo contrario, mostrarlo
            if (inputTexto.value.trim() === "Hola") {
                boton.style.display = "none";
            } else {
                boton.style.display = "block";
            }
        }
    </script>

</body>

</html>
