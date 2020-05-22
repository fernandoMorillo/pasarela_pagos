document.getElementById('terminos').onchange = check;

function getRndInteger(min, max) {
    return 'RIT' + '' + Math.floor(Math.random() * (max - min)) + min;
}

function check() {
    let checkitem = document.querySelectorAll('#go');
    for (let i = 0; i < checkitem.length; i++) {
        checkitem[i].disabled = !checkitem[i].disabled
    }
}

let btnPago = document.getElementById('go');

btnPago.addEventListener('click', (event) => {
    btnPago.value = 'Espere...';
    btnPago.disabled = true;

    let nombres = document.getElementById('nombres').value;
    let apellidos = document.getElementById('apellidos').value;

    var nombreCompleto = nombres + ' ' + apellidos;

    let tipo_documento = document.getElementById('tipo_cc').value;
    let numero_documento = document.getElementById('numero_cc').value;
    let correo = document.getElementById('correo').value;
    let direccion = document.getElementById('direccion').value;
    let telefono = document.getElementById('telefono').value;
    let monto = document.getElementById('pago').value;
    let descripcion = document.getElementById('descripcion').value;

    if (nombres === '' || apellidos === '' || numero_documento === '' || tipo_documento === '' || correo === '' || direccion === '' || telefono === '' || monto === '' || descripcion === '') {
        alert('Debe completar todos los datos');
        btnPago.disabled = false;
        btnPago.value = 'Comenzar';

        return;
    }

    let ref = getRndInteger(100, 1000000);
    datoPagos(nombreCompleto, tipo_documento, numero_documento, correo, direccion, telefono, monto, descripcion, ref)

});

function datoPagos(nombreCompleto, tipo_documento, numero_documento, correo, direccion, telefono, monto, descripcion, ref) {
    var handler = ePayco.checkout.configure({
        key: '9a7e207f9a80e86ca376316286b30121',
        test: false
    });


    var data = {
        //Parametros compra (obligatorio)
        name: "Pago servicios online",
        description: descripcion,
        invoice: ref,
        currency: "cop",
        amount: monto,
        tax_base: "0",
        tax: "0",
        country: "co",
        lang: "es",

        //Onpage="false" - Standard="true"
        external: "false",


        //Atributos opcionales
        response: "https://www.pagos.losolivoscartagena.com/response.html",

        //Atributos cliente
        name_billing: nombreCompleto,
        address_billing: direccion,
        type_doc_billing: tipo_documento,
        mobilephone_billing: telefono,
        number_doc_billing: numero_documento,
    }
    handler.open(data);
}