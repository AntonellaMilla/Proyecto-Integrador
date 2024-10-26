<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />

    <!-- Estilos de CSS -->

    <link rel="stylesheet" href="{{ asset('Estilos_Totales/Estilo_Login.css') }}" />


</head>

<body>

    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-5">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="card-body p-md-5 mx-md-4">

                                <div class="text-center">
                                    <img src="https://i.postimg.cc/m23P1F2y/Logo-ciber-Cafe.png" style="width: 130px; margin-bottom: 20px;"
                                        style="width: 130px;" alt="logo">
                                    <!--<h4 class="mt-1 mb-5 pb-1">We are The Lotus Team</h4>-->
                                </div>

                                <form>

                                    <h5>¡Bienvenido a Online Coffee!</h5>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <label class="form-label" for="form2Example11">Correo:</label>
                                        <input type="email" id="form2Example11" class="form-control"
                                            placeholder="Ingrese tu Correo Aquí" />
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <label class="form-label" for="form2Example22">Contraseña:</label>
                                        <input type="password" id="form2Example22" class="form-control"
                                            placeholder="Ingrese tu Contraseña Aquí" />
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <!-- Checkbox -->
                                        <div class="form-check mb-0">
                                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                            <label class="form-check-label" for="form2Example3">
                                                Recordarme
                                            </label>
                                        </div>
                                        <a href="#!" class="text-body">¿Olvidaste tu contraseña?</a>
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 mt-4" type="button">Ingresar</button>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-center pb-4" style="margin-top: -40px;">
                                        <p class="mb-0 me-2">¿No tienes una cuenta?</p>
                                        <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-danger">Registrar</button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>