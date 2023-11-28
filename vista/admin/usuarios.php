<?php
// Método Session iniciada
session_start();

// Verificar si la sesión está iniciada y si el rol del usuario es "administrador"
if (!isset($_SESSION['usuario_email']) || $_SESSION['usuario_rol'] !== 'administrador') {
    echo '
        <script>
            alert("No tienes permiso para acceder a esta página. Debes iniciar sesión como administrador.");
            window.location = "../../index.php";
        </script>
    ';
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>AulaGuuard </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../recursos/">
  <link rel="stylesheet" href="../recursos/vendors/feather/feather.css">
  <link rel="stylesheet" href="../recursos/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../recursos/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../recursos/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../recursos/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../recursos/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../recursos/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../recursos/js1/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../recursos/css/vertical-layout-light/style.css">
  <!-- endinject -->
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php
    include "../modulos/barra.php";
    ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php
      include "../modulos/lateral.php";
      ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">

                  </div>
                </div>
              </div>
            </div>
            <!-- content-wrapper ends -->
            <main>
              <script>
                function eliminar() {
                  var respuesta = confirm("¿Estás seguro que deseas eliminar la puntuación?");
                  return respuesta;
                }
              </script>
              <h1 class="text-center p-3">Lista Usuarios</h1>
              <?php
                include "../../modelo/conexion.php";
                include "../../controlador/eliminar_puntuacion.php";
              ?>
              <!--BARRA BUSQUEDA-->
              <div class="col-8 p-4" style="margin: 0 auto">
                <div class="d-flex">

                <input type="text" id="busqueda" class="form-control me-2" placeholder="Buscar...">
                <button id="buscar" class="btn btn-outline-success">Buscar</button>
                

                </div>
              </div>            

              <div class="col-8 p-4" style="">
              <table class="table table-striped table-hover" id="miTabla">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col" class="nombre">Nombre</th>
                        <th scope="col" class="apellidoP">Apellido P</th>
                        <th scope="col" class="apellidoM">Apellido M</th>
                        <th scope="col" class="correo">Correo</th>
                        <th scope="col" class="password">Password</th>
                        <th scope="col" class="telefono">Telefono</th>
                        <th scope="col" class="rol">Rol</th>
                        <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("../../modelo/conexion.php");
                    include("../../controlador/eliminar_puntuacion.php");

                    $sql = $conexion->query("SELECT * FROM usuarios");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr class="fila">
                            <td><?= $datos->usuario_id ?></td>
                            <td><?= $datos->usuario_nombre ?></td>
                            <td><?= $datos->usuario_apellidoP ?></td>
                            <td><?= $datos->usuario_apellidoM ?></td>
                            <td><?= $datos->usuario_email ?></td>
                            <td><?= $datos->usuario_password ?></td>
                            <td><?= $datos->usuario_telefono ?></td>
                            <td><?= $datos->usuario_rol ?></td>
                            <td>
                                <a href="../../controlador/editar_usuario.php?id=<?= $datos->usuario_id ?>" class="btn btn-small btn-primary">Editar</a>
                                <a href="../../controlador/eliminar_usuario.php?id=<?= $datos->usuario_id ?>" class="btn btn-small btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
              </table>

              </div>
            </main>
            <!-- partial:partials/_footer.html -->
            <?php
            include "../modulos/footerDash.php";
            ?>
            <!-- partial -->
          </div>
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->

      <!-- plugins:js -->
      <script src="../recursos/vendors/js/vendor.bundle.base.js"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <script src="../recursos/vendors/chart.js/Chart.min.js"></script>
      <script src="../recursos/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
      <script src="../recursos/vendors/progressbar.js/progressbar.min.js"></script>

      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src="../recursos/js1/off-canvas.js"></script>
      <script src="../recursos/js1/hoverable-collapse.js"></script>
      <script src="../recursos/js1/template.js"></script>
      <script src="../recursos/js1/settings.js"></script>
      <script src="../recursos/js1/todolist.js"></script>
      <!-- endinject -->
      <!-- Custom js for this page-->
      <script src="../recursos/js/dashboard.js"></script>
      <script src="../recursos/js/Chart.roundedBarCharts.js"></script>

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      
      <!--BARRA BUSQUEDA-->
      <script>
      document.addEventListener("DOMContentLoaded", function() {
          const inputBusqueda = document.getElementById("busqueda");
          const tabla = document.getElementById("miTabla");

          document.getElementById("buscar").addEventListener("click", function() {
              buscarEnTabla();
          });

          inputBusqueda.addEventListener("input", function() {
              buscarEnTabla();
          });

          function buscarEnTabla() {
              const filtro = inputBusqueda.value.toLowerCase();
              const filas = tabla.getElementsByClassName("fila");

              for (let i = 0; i < filas.length; i++) {
                  let coincidencia = false;
                  const celdas = filas[i].querySelectorAll("td");

                  celdas.forEach(function(celda) {
                      const texto = celda.textContent.toLowerCase();
                      if (texto.includes(filtro)) {
                          coincidencia = true;
                      }
                  });

                  filas[i].style.display = coincidencia ? "" : "none";
              }
          }
      });
      </script>

      <!--AGREGAR USUARIOS-->
      <script>
        document.addEventListener("DOMContentLoaded", function () {
          // ... Código anterior ...

          // Obtén el botón para abrir el formulario
          const btnAbrirFormulario = document.getElementById("btnAbrirFormulario");
          const formularioRegistro = document.getElementById("formularioRegistro");

          // Agregar evento al botón para abrir el formulario
          btnAbrirFormulario.addEventListener("click", function () {
            formularioRegistro.style.display = "block"; // Muestra el formulario
          });

          // Agregar evento al botón para cancelar el registro y ocultar el formulario
          const btnCancelarRegistro = document.getElementById("btnCancelarRegistro");
          btnCancelarRegistro.addEventListener("click", function () {
            formularioRegistro.style.display = "none"; // Oculta el formulario
            document.getElementById("formRegistro").reset(); // Limpia el formulario
          });

          // Agregar evento al formulario para manejar el envío de datos
          const formRegistro = document.getElementById("formRegistro");
          formRegistro.addEventListener("submit", function (e) {
            e.preventDefault(); // Evita la recarga de la página

            // Obtén los datos del formulario
            const nombre = document.getElementById("nombre").value;
            const apellidoP = document.getElementById("apellidoP").value;
            // Agrega más campos según corresponda

            // Realiza una solicitud AJAX para enviar los datos al servidor y agregar el usuario en la base de datos
            // Aquí debes implementar la lógica para agregar el usuario en el servidor

            // Luego, puedes actualizar la tabla de usuarios con los nuevos datos o recargar la página para ver al usuario agregado

            // Ejemplo de una solicitud AJAX con Fetch API (puedes usar jQuery u otra librería si lo prefieres)
            fetch("/ruta/para/agregar/usuario.php", {
              method: "POST",
              body: JSON.stringify({ nombre, apellidoP }), // Envía los datos al servidor
              headers: {
                "Content-Type": "application/json",
              },
            })
              .then((response) => response.json())
              .then((data) => {
                // Realiza alguna acción con la respuesta del servidor, si es necesario
                console.log("Respuesta del servidor:", data);
              });

            // Limpia el formulario y ocúltalo
            formularioRegistro.style.display = "none";
            formRegistro.reset();
          });
        });
      </script>




      <!-- End custom js for this page-->
</body>

</html>


