(function() {
    "use strict";

    var regalo = document.getElementById('regalo'); 
      
    document.addEventListener('DOMContentLoaded', function(){
 
        if(document.getElementById('mapa')){
            
            var map = L.map('mapa').setView([-24.789209, -65.410318], 16);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            L.marker([-24.789209, -65.410318]).addTo(map)
                .bindPopup('Proyecto GS, Salta Argentina')
                .openPopup(); 
        };


        //variables: Campos Datos de Usuario
        var nombre = document.getElementById('nombre');
        var apellido = document.getElementById('apellido');
        var email = document.getElementById('email');

        //Variables: Campos Pases
        var pase_dia = document.getElementById('pase_dia');
        var pase_dosdias = document.getElementById('pase_dosdias');
        var pase_completo = document.getElementById('pase_completo');

        //Variables: Botones & Divs
        var errorDiv = document.getElementById('error');
        var calcular = document.getElementById('calcular');
        var botonRegistro = document.getElementById('btnRegistro');
        var lista_productos = document.getElementById('lista-productos');
        var suma = document.getElementById('suma-total');

        //Variables Extras
        var camisas = document.getElementById('camisa_evento');
        var etiqueta = document.getElementById('etiqueta');

        //EVENTS LISTENERS
        if(document.getElementById('calcular')){
            calcular.addEventListener('click', calcularMontos)
        };          
        
        if(document.getElementById('pase_dia')){
            pase_dia.addEventListener('change', mostrarDias)
        };

        if(document.getElementById('pase_dosdias')){
            pase_dosdias.addEventListener('change', mostrarDias)
        };

        if(document.getElementById('pase_completo')) {
            pase_completo.addEventListener('change', mostrarDias)
        };

        if(document.getElementById('nombre')) {
            nombre.addEventListener('blur', validarCampos)
        };

        if(document.getElementById('apellido')) {
            apellido.addEventListener('blur', validarCampos)
        };

        if(document.getElementById('email')) {
            email.addEventListener('blur', validarCampos)
            email.addEventListener('blur', validarMail)
        };

        
        // FUNCIONES

        function validarCampos (){
            if(this.value == ''){
                errorDiv.style.display = 'block';
                errorDiv.innerHTML ="Este campo es obligatorio";
                this.style.border = '1px solid red';
                errorDiv.style.border = '1px solid red';
            }else {
                errorDiv.style.display = 'none';
                this.style.border = '';
            }
        }
        
        function validarMail (){
            if(this.value.indexOf("@")>-1) {
                errorDiv.style.display = 'none';
                this.style.border = '';  
            } else {
                errorDiv.style.display = 'block';
                errorDiv.innerHTML ="Mail invalido";
                this.style.border = '1px solid red';
                errorDiv.style.border = '1px solid red';  
            }
        }

        function calcularMontos(event){
            event.preventDefault();
            if (regalo.value === ''){
                alert ("Debes elegir un regalo");
                regalo.focus();
            } else {
                var boletosDia = parseInt(pase_dia.value, 10)|| 0,
                    boletos2Dias = parseInt(pase_dosdias.value, 10)|| 0,
                    boletoCompleto = parseInt(pase_completo.value, 10)|| 0,
                    cantCamisas = parseInt(camisas.value, 10)|| 0,
                    cantEtiquetas = parseInt(etiqueta.value, 10)|| 0;

                var totalPagar = (boletosDia * 30) + (boletos2Dias * 45) + (boletoCompleto * 50) + ((cantCamisas * 10) * .93) + (cantEtiquetas * 2);

                var listadoProductos = [];
                
                if(boletosDia >= 1){
                    listadoProductos.push(boletosDia + ' Pases por día');
                }
                if(boletos2Dias >= 1){
                    listadoProductos.push(boletos2Dias + ' Pases por 2 días');
                }
                if(boletoCompleto >= 1){
                    listadoProductos.push(boletoCompleto + ' Pases completos');
                }

                if(cantCamisas >= 1){
                    listadoProductos.push(cantCamisas + ' Camisas');
                }

                if(cantEtiquetas >= 1){
                    listadoProductos.push(cantEtiquetas + ' Etiquetas');
                }

                lista_productos.style.display = "block";
                lista_productos.innerHTML = '';
                for(var i = 0; i < listadoProductos.length; i++){
                    lista_productos.innerHTML += listadoProductos[i] + '<br/>';
                }
                
                suma.innerHTML = "$ " + totalPagar.toFixed(2);

            }
        } // calcularMontos

        function mostrarDias(){
            var boletosDia = parseInt(pase_dia.value, 10)|| 0,
                boletos2Dias = parseInt(pase_dosdias.value, 10)|| 0,
                boletoCompleto = parseInt(pase_completo.value, 10)|| 0;

            var diasElegidos = [];

                if (boletosDia > 0) {
                    diasElegidos.push('viernes');
                } else {
                    viernes.style.display = 'none';
                }

                if (boletos2Dias > 0){
                    diasElegidos.push('viernes', 'sabado');
                } else {
                    sabado.style.display = 'none';
                }

                if (boletoCompleto > 0) {
                    diasElegidos.push('viernes', 'sabado', 'domingo');
                } else {
                    domingo.style.display = 'none';
                }

                for (var i = 0; i < diasElegidos.length; i++) {
                    document.getElementById(diasElegidos[i]).style.display = 'block';
                }

        }

    }); //DOM Content Loaded
})();

//PROGRAMA EVENTO - INDEX
$(function() {

    $('.ocultar').hide();
    $('.programa-evento .info-curso:first').show();
    $('.navegacion-programa a:first').addClass('activo');

    $('.navegacion-programa a').on('click', function(){
        $('.navegacion-programa a').removeClass('activo');
        $(this).addClass('activo');
        $('.ocultar').hide();
        var enlace = $(this).attr('href');
        $(enlace).fadeIn(1000);

        return false;
    });

});

//EFECTO SCROLL
var windowHeight = $(window).height();
var barraAltura = $('.barra').innerHeight();

$(window).scroll(function(){
    var scroll = $(window).scrollTop();
    if(scroll > windowHeight){
       $('.barra').addClass('fixed');
       $('body').css({'margin-top':barraAltura+'px'});
    } else {
        $('.barra').removeClass('fixed');
        $('body').css({'margin-top':'0px'});
    }
});

//MENU RESPONSIVE
$('.menu-movil').on('click', function(){
    $('.navegacion-principal').slideToggle();
});

//LETTERING
$('.nombre-sitio').lettering ();

//RESALTAR PAGINA EN LA NAVEGACIÓN

$('body.conferencia .navegacion-principal a:contains("conferencia")').addClass('activ');
$('body.calendario .navegacion-principal a:contains("calendario")').addClass('activ');
$('body.invitados .navegacion-principal a:contains("invitados")').addClass('activ');

//ANIMACIÓN DE NÚMEROS - INDEX

$('.resumen-evento li:nth-child(1) p').animateNumber ({number:6}, 1600);
$('.resumen-evento li:nth-child(2) p').animateNumber ({number:15}, 2200);
$('.resumen-evento li:nth-child(3) p').animateNumber ({number:3}, 1400);
$('.resumen-evento li:nth-child(4) p').animateNumber ({number:9}, 1800);

//COUNTDOWN  

$('.cuenta-regresiva').countdown('2020/12/10 09:00:00', function(event){
    $('#dias').html(event.strftime('%D'));
    $('#horas').html(event.strftime('%H'));
    $('#minutos').html(event.strftime('%M'));
    $('#segundos').html(event.strftime('%S'));
});

//COLORBOX

$('.invitado-info').colorbox({inline:true, width:"50%"});




