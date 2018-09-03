// JavaScript Document
$(document).ready(function() {



    /* FORMULARIO CONTACTO */
    function runOnLoad(f) {
        if (runOnLoad.loaded) f(); // If already loaded, just invoke f() now.
        else runOnLoad.funcs.push(f); // Otherwise, store it for later
    }

    runOnLoad.funcs = []; // The array of functions to call when the document loads
    runOnLoad.loaded = false; // The functions have not been run yet.

    runOnLoad.run = function() {
        if (runOnLoad.loaded) return; // If we've already run, do nothing

        for (var i = 0; i < runOnLoad.funcs.length; i++) {
            try {
                runOnLoad.funcs[i]();
            } catch (e) { /* An exception in one function shouldn't stop the rest */ }
        }

        runOnLoad.loaded = true; // Remember that we've already run once.
        delete runOnLoad.funcs; // But don't remember the functions themselves.
        delete runOnLoad.run; // And forget about this function too!
    };

    // Register runOnLoad.run() as the onload event handler for the window
    if (window.addEventListener)
        window.addEventListener("load", runOnLoad.run, false);
    else if (window.attachEvent) window.attachEvent("onload", runOnLoad.run);
    else window.onload = runOnLoad.run;

    $(function() {
        $('.error').removeClass("show_error");
        $('input.text-input');

        $(".button").click(function() {
            // validate and process form
            // first hide any error messages
            $('.error').removeClass("show_error");

            var nombre = $("input#nombre").val();
            if (nombre == "") {
                $("label#nombre_error").addClass("show_error");
                $("input#nombre").focus();
                return false;
            }

            var empresa = $("input#empresa").val();

            var email = $("input#email").val();
            if (email == "") {
                $("label#email_error").addClass("show_error");
                $("input#email").focus();
                return false;
            }

            var telefono = $("input#telefono").val();
            if (telefono == "") {
                $("label#telefono_error").addClass("show_error");
                $("input#telefono").focus();
                return false;
            }

            var pais = $("input#pais").val();
            if (pais == "") {
                $("label#pais_error").addClass("show_error");
                $("input#pais").focus();
                return false;
            }

            var ciudad = $("input#ciudad").val();
            if (ciudad == "") {
                $("label#ciudad_error").addClass("show_error");
                $("input#ciudad").focus();
                return false;
            }

            var titulo_cliente = $("input#titulo_cliente").val();
            var mensaje_cliente = $("input#mensaje_cliente").val();
            var correo_empresa = $("input#correo_empresa").val();
            var nombre_correo_empresa = $("input#nombre_correo_empresa").val();
            var asunto = $("input#asunto").val();

            var mensaje = $("textarea#mensaje").val();
            if (mensaje == "") {
                $("label#mensaje_error").addClass("show_error");
                $("textarea#mensaje").focus();
                return false;
            }

            var dataString = '&nombre=' + nombre + '&empresa=' + empresa + '&email=' + email + '&telefono=' + telefono + '&pais=' + pais + '&ciudad=' + ciudad + '&titulo_cliente=' + titulo_cliente + '&mensaje_cliente=' + mensaje_cliente + '&correo_empresa=' + correo_empresa + '&nombre_correo_empresa=' + nombre_correo_empresa + '&asunto=' + asunto + '&mensaje=' + mensaje + '&submit=' + $("#submit_btn").addClass('enviando-mensaje');

            $.ajax({

                type: "POST",
                url: "js-solutec/contacto/process.php",
                data: dataString,
                success: function() {

                    $('#contacto_form').html("<div id='message' class='mt-5 mb-5 pt-4 pb-4'></div>");
                    $('#message').html("<div><h2>Mensaje enviado, muchas gracias.</h2><p>Pronto estaremos en contacto!</p></div>")
                        .append("")
                        .hide()
                        .fadeIn(1500, function() {});
                }
            });
            return false;
        });
    });
    /* END FORMULARIO CONTACTO */


});

