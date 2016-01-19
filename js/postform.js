function postform() {}

function form1() {

    var nombre = $("#name").val();
    var correo = $("#mail").val();
    var contrasena = $("#pass").val();

    var phpPost = "nombre=" + nombre + "&correo=" + correo + "&contrasena=" + contrasena;

    $.ajax({scriptCharset: "utf-8",
        contentType: "application/x-www-form-urlencoded;charset=utf-8",
        cache: false,
        type: "POST",
        data: phpPost + "&ID_pantalla=01",
        dataType: "text",
        url: "class/PostInfo.php",
        success: function (info) {
            if (info == "1") {
                $("#btnSiguiente").show();
                notifyMe();
                $("#btn_form1").hide();
            }
        },
        error: function (error) {
            console.log(error);
        }
    });
}

function notifyMe(phpPost) {

    // Comprobar que el browser soporta notificaciones.
    if (!("Notification" in window)) {
        alert("This browser does not support desktop notification");
    }

    // COmprobar si el usuario acepta notificaciones
    else if (Notification.permission === "granted") {
    // Si acepta, se crea la notificación;
        var notification = new Notification("Los datos se almacenaron con éxito");
    }

      // Si no acepta, debemos pedirle permiso para su uso
    else if (Notification.permission !== 'denied') {
        Notification.requestPermission(function (permission) {
            // Si acepta, se crea la notificación;
            if (permission === "granted") {
                var notification = new Notification("Hi there!");
            }
        });
    }
}

    //**** FUNCIONES DE VALIDACION DE CAMPOS ******

    $.fn.numerosDecimales = function(){
    $(this).keypress(function(tecla){
         if(tecla.charCode >= 48 && tecla.charCode <= 57 || tecla.charCode == 0 || tecla.charCode == 46 ) {
            return true;
        }
        else{
            return false;
        }
    });
    };

    $.fn.numerosEnteros = function(){
    $(this).keypress(function(tecla){
         if(tecla.charCode >= 48 && tecla.charCode <= 57 || tecla.charCode == 0 ) {
            return true;
        }
        else{
            return false;
        }
    });
    };

$.fn.soloLetrasyEspacio = function(){
    $(this).keypress(function(tecla){
         if(tecla.charCode >= 65 & tecla.charCode <= 90 || tecla.charCode >= 97 & tecla.charCode <= 122 || tecla.charCode == 32  || tecla.charCode == 0) {
            return true;
        }
        else{
            return false;
        }
    });
};

$.fn.rangoPorcentaje=function(){ // VALIDACION PORCENTAJE DE  0 A 100
    $.caja = $(this);
    $(this).keyup(function(tecla){
        if(parseFloat($.caja.val()) < 0 || parseFloat($.caja.val()) > 100 ){
            $.caja.val("");
        }
    });
};

$.fn.noEmpty = function(){
    var valida = 0;
    var last_index=0;

    $.formulario = $(this).parents(".step").children(".row").children("div").children("input,textarea");
    $.formulario.each(function(indice,elemento){
        if($(elemento).val() != ""){
            valida++;
        }
        last_index = indice;
    });
    if(valida == (last_index + 1)){
       return true;
    }
    else{
        alert("No puede haber campos vacios")
       return false;
    }
};


$(document).ready(function () {

    $("#btnSiguiente").hide();

    $("#btnSiguiente").click(function () {
        $("#btnSiguiente").hide();
    });


    //pantalla 01
    $("#btn_form1").click(function () {
        if($("#btn_form1").noEmpty()){
            form1();
        }
    }); 

});
    // ejemplo de validaciones
    /* Estas funciones son bajo keypress asi que borrara todo lo que no sea permitido en automatico
        $("#id").soloLetrasyEspacio();
        $("#id").soloEnteros();
        $("#id").numerosDecimales();
        $("#id").rangoPorcentaje();
        La funcion que sigue valida todos los input y text area que esten detro de div.step well > div.row > div > input,textarea
        tengo entendio que todos pusiero nsus forms en esa estructura asi que debe servir para todos y regresa un booleano,como
        ven funcina a partir de selccionar el boton del div donde estemos ya que de ahi va seleccionando su padre y este a lso input, se usa asi
        $("#btnDefinirProy").click(function () {
            if($("#btnDefinirProy").noEmpty()){
                defeinicionProyecto01();
            }
        });

         esta es importante por que por l oque veo la BD permite nulos y se peude neviuar un formulario totalmente vacio
    */
