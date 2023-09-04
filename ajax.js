const formularios_ajax = document.querySelectorAll(".FormAjax");

function enviar_formularios_ajax(e){
    e.preventDefault();

    let confirmacion = confirm("Confirme el envío del formulario");

    if(confirmacion == true){

        let data = new FormData(this);

        let method = this.getAttribute("method");

        let action = this.getAttribute("action");

        let encabezados = new Headers();

        let config = {
            method: method,
            headers: encabezados,
            mode: 'cors',
            cache: 'no-cache',
            body: data
        };

        fetch(action, config)
        .then(response => response.text())
        .then(response => {
            alert(response);
        });
    }
}

formularios_ajax.forEach(formularios => {
    formularios.addEventListener("submit",enviar_formularios_ajax);
});

