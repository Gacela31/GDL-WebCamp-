eventListeners();

function eventListeners(){
    document.querySelector('#crearAdmin').addEventListener('submit', crearAdmin);
}

function crearAdmin(e) {
    e.preventDefault();

    var usuario = document.querySelector('#usuario').value,
        nombre = document.querySelector('#nombre').value,
        password = document.querySelector('#password').value;

    // si algun campo está vacio, mandar alerta de error
    if(usuario === "" || nombre === "" || password === ""){
        Swal({
            type: 'error',
            title: 'Error!',
            text: 'Ambos campos son obligatorios'
        })
    }else {
        
        var datos = new FormData();
        datos.append('usuario', usuario),
        datos.append('nombre', nombre),
        datos.append('password', password);
        
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'insertarAdmin.php', true);
        xhr.onload = function(){
            if(this.status === 200) {
                var resultado = (JSON.parse(xhr.responseText));
                if(resultado.respuesta === 'exito') {
                    Swal({
                        type: 'success',
                        title: 'Correcto!',
                        text: 'El administrador se creo correctamente'
                    })
                } else {
                    Swal({
                        type: 'error',
                        title: 'Error!',
                        text: 'Hubo un error'
                    })
                }
            }
        }
        xhr.send(datos);

        
    }

}