<?php
    //Metodo Session iniciada
    session_start();

    if(!isset($_SESSION['usuario_email'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesion");
                window.location = "acerca.php";  
            </script>        
        ';
        session_destroy();
        die();
    }
    //session_destroy();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AULAGUARD | CODECREATORS</title>
    <!--LINKS-->
    <link rel="stylesheet" href="recursos/css/font-awesome.min.css" type="text/css" />
    <script src="https://kit.fontawesome.com/a45e4463fd.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/perfil.css" />
</head>
<body>
    <!--HEADER-->
    <?php
    include "modulos/cabecera1.php";
    ?>
    <!--PERFIL SECTION-->
    <div class="container light-style flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-4">
            Ajustes de Cuenta
        </h4>
        <div class="text-right mt-3">
            <a href="php/cerrar_session.php" class="btn btn-primary">Cerrar Sesion</a>;
            
        </div>
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                            href="#account-general">General</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-change-password">Cambiar contraseña</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-info">Información</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-notifications">Notificaciones</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <!--General-->
                        <div class="tab-pane fade active show" id="account-general">
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Nombre</label>
                                    <input type="text" class="form-control" value="Dani">
                                </div><div class="form-group">
                                    <label class="form-label">Apellido Paterno</label>
                                    <input type="text" class="form-control" value="Lopez">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Apellido Materno</label>
                                    <input type="text" class="form-control" value="Cruz">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Correo</label>
                                    <input type="text" class="form-control mb-1" value="ladani@gmail.com">
                                    <div class="alert alert-warning mt-3">
                                        Tu correo aun no esta confirmado. Por favor ve tu bandeja de mensajes.<br>
                                        <a href="javascript:void(0)">Reenviar confirmacion</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Contraseña-->
                        <div class="tab-pane fade" id="account-change-password">
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label">Contraseña actual</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Nueva contraseña</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Repetir nueva contraseña</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <!--Informacion-->
                        <div class="tab-pane fade" id="account-info">
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label">Fecha de nacimiento</label>
                                    <input type="date" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label class="form-label">País</label>
                                    <select class="custom-select">
                                        <option>Estados Unidos</option>
                                        <option selected>México</option>
                                        <option>Canada</option>
                                        <option>Alemania</option>
                                        <option>Francia</option>
                                    </select>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Contacto</h6>
                                <div class="form-group">
                                    <label class="form-label">Celular</label>
                                    <input type="text" class="form-control" value="55-3458-0302">
                                </div>
                            </div>
                        </div>
                        <!--Notificaciones-->
                        <div class="tab-pane fade" id="account-notifications">
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Actividad</h6>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" checked>
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Enviar correo cuando ingrese a mi cuenta</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input">
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Enviar correo de confirmacion de compra</span>
                                    </label>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Aplicación</h6>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" checked>
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Noticias y anuncios</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input">
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Actualizaciones de productos</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" checked>
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Resumen semanal del blog</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right mt-3">
            <button type="button" class="btn btn-primary">Guardar Cambios</button>&nbsp;
            <button type="button" class="btn btn-default">Cancelar</button>
        </div>
    </div><br><br>
    <!--FOOTER-->
    <?php
    include "modulos/footer.php";
    ?>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"></script>
    <script src="../js/main.js"></script>
</body>

</html>