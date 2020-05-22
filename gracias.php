<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description"
          content="¡Paga todo lo que necesites desde la comodidad de tu hogar!. Los Olivos Cartagena pone a tu disposición este portal para que pagues todo sin complicaciones">

    <meta name="keywords"
          content="pagos en linea, los olivos cartagena, pasarela de pagos los olivos, pago de servicios los olivos, pagos en linea los olivos, pago de planes">

    <link rel="shortcut icon" href="static/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="static/css/index.css">

    <link href="https://fonts.googleapis.com/css?family=Arimo:400,700&display=swap" rel="stylesheet">

    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '812915559215970');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=812915559215970&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->

    <title>Pasarela de pagos</title>
</head>
<body>

<div class="sec_form">
    <div class="filtro"></div>
    <nav class="navbar navbar-light bg-transparent" style="z-index: 3">
        <a class="navbar-brand" href="#">
            <img src="static/logo-blanco.png" width="70" height="70" alt="">
        </a>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex flex-wrap" style="z-index: 3">

                <h1 style="text-align: center; color: white; text-shadow: 0px 3px 6px rgb(0,0,0);"
                    class="d-flex align-items-end font-weight-bold">¡Que nada impida que protejas a los que amas!</h1>

                <p class="text-center" style="color: white; text-shadow: 0px 3px 6px rgb(0,0,0);">En LOS
                    OLIVOS CARTAGENA siempre pensamos en tu comodidad, por eso nos esforzamos para poner a tu
                    disposición todas las herramientas necesarias para que protejas a tu familia</p>
            </div>

            <div class="col-md-6" style="z-index: 3">
                <div class="form">
                    <h3 style="margin-bottom: 10px">¡Paga todo lo que necesites desde la comodidad de tu hogar!</h3>
                    <label>Llena los datos para realizar el pago</label>
                    <form action="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="nombres" id="nombres" placeholder="Nombres" required
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos" required
                                           class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="tipo_cc" id="tipo_cc" required class="form-control">
                                        <option value="">-- Tipo Documento --</option>
                                        <option value="cc">CC</option>
                                        <option value="dni">DNI</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number" name="numero_cc" id="numero_cc" required
                                           placeholder="Numero de documento"
                                           class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="correo" id="correo" required placeholder="Correo"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="direccion" id="direccion" required placeholder="Dirección"
                                           class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number" name="telefono" id="telefono" required placeholder="Teléfono"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number" name="pago" id="pago" required
                                           placeholder="Monto(sin puntos ni comas)"
                                           class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="descripcion" id="descripcion"
                                           placeholder="Descripción del pago(servicio que va a pagar)" required
                                           class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group form-check">
                                    <input type="checkbox" name="terminos" id="terminos" class="form-check-input">
                                    <label for="terminos" class="form-check-label">
                                        Acepto los <a href="https://www.marketing.losolivoscartagena.com/privacy/"
                                                      target="_blank">términos y condiciones</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center">
                                <div class="form-group">
                                    <input type="button" id="go" disabled value="Comenzar" class="btn btn-success">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="inquietud pb-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 style="font-weight: bold; color: #008458">¿Tienes alguna inquietud? ¿No sabes cuanto debes
                    pagar?</h2>
            </div>
            <div class="col-md-12 text-center">
                <h4 style="font-weight: bold; color: #008458">Escríbenos</h4>
            </div>
            <div class="col-md-12 text-center">
                <a href="https://api.whatsapp.com/send?phone=+573008131043"><img src="static/whatsapp.png" alt="whatsapp contacto" width="200"></a>
            </div>
        </div>
    </div>
</div>

<div class="container pt-5">
    <div class="row">
        <div class="col-md-12 text-center mt-3 mb-3">
            <h1 style="font-weight: bold; color: #008458">Conoce todas nuestras opciones de pago</h1>
        </div>
    </div>
</div>

<div class="container cont" style="margin-top: 20px; margin-bottom: 20px">
    <div class="row">
        <div class="col-md-4 d-flex justify-content-center mt-3 mb-3">
            <img src="static/bancos_small/bbva.svg" alt="banco bbva" class="banco">
        </div>
        <div class="col-md-4 d-flex justify-content-center mt-3 mb-3">
            <img src="static/bancos_small/cajasocial.svg" alt="banco caja social" class="banco">
        </div>
        <div class="col-md-4 d-flex justify-content-center mt-3 mb-3">
            <img src="static/bancos_small/coper.svg" alt="banco cooper" class="banco">
        </div>
    </div>
    <div class="row banco_fila" style="margin-top: 60px">
        <div class="col-md-4 d-flex justify-content-center mt-3 mb-3">
            <img src="static/bancos_small/davivienda.svg" alt="banco davivienda" class="banco">
        </div>
        <div class="col-md-4 d-flex justify-content-center mt-3 mb-3">
            <img src="static/bancos_small/efecty.svg" alt="efecty" class="banco">
        </div>
        <div class="col-md-4 d-flex justify-content-center mt-3 mb-3">
            <img src="static/bancos_small/pse.svg" alt="pse">
        </div>
    </div>

    <div class="row banco_fila" style="margin-top: 60px">
        <div class="col-md-6 d-flex justify-content-center mt-3 mb-3">
            <img src="static/bancos_small/bancolombia.svg" alt="banco bancolombia" class="banco">
        </div>
        <div class="col-md-6 d-flex justify-content-center mt-3 mb-3">
            <img src="static/bancos_small/supergiros.svg" alt="supergiros" class="banco">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center mt-3 mb-3">
            <h2 class="font-weight-bold" style="color: #008458">Operador logístico</h2>
        </div>
        <div class="col-md-12 text-center">
            <h4>Cel: 3013587009 - 31764442264</h4>
            <br>
            <h4>Tel: 6529480</h4>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center justify-content-center justify-content-md-start">
                <label style="margin: 10px; color: white">&copy;2020 Los Olivos Cartagena</label>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center justify-content-md-end">
                <label style="margin: 10px; color: white"><a href="https://www.facebook.com/Olivos.Ctg/"><img
                                src="static/fb.png" alt="facebook" width="35"></a></label>
                <label style="margin: 10px; color: white"><a href="https://www.instagram.com/olivos.ctg/"><img
                                src="static/ig_logo.png" alt="instagram" width="35"></a></label>
                <label style="margin: 10px; color: white"><a
                            href="https://api.whatsapp.com/send?phone=+573008131043"><img src="static/ws.png"
                                                                                          alt="whatsapp" width="35"></a></label>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

<script type="text/javascript" src="https://checkout.epayco.co/checkout.js"></script>

<script>

    document.getElementById('terminos').onchange = check;

    function check() {
        let checkitem = document.querySelectorAll('#go');
        for (let i = 0; i < checkitem.length; i++) {
            checkitem[i].disabled = !checkitem[i].disabled
        }
    }

    let btnPago = document.getElementById('go');

    btnPago.addEventListener('click', (event) => {
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

            return;
        }

        datoPagos(nombreCompleto, tipo_documento, numero_documento, correo, direccion, telefono, monto, descripcion)
    });

    function datoPagos(nombreCompleto, tipo_documento, numero_documento, correo, direccion, telefono, monto, descripcion) {
        var handler = ePayco.checkout.configure({
            key: '9a7e207f9a80e86ca376316286b30121',
            test: true
        });


        var data = {
            //Parametros compra (obligatorio)
            name: "Pago servicios online",
            description: descripcion,
            invoice: "123334",
            currency: "cop",
            amount: monto,
            tax_base: "0",
            tax: "0",
            country: "co",
            lang: "es",

            //Onpage="false" - Standard="true"
            external: "false",


            //Atributos opcionales
            response: "http://pasarela_pagos.test.com/gracias.php",

            //Atributos cliente
            name_billing: nombreCompleto,
            address_billing: direccion,
            type_doc_billing: tipo_documento,
            mobilephone_billing: telefono,
            number_doc_billing: numero_documento,
        }

        handler.open(data)
    }


</script>

</body>
</html>
