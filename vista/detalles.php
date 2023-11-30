<?php

$producto_id = $_GET['producto_id'];
$id_usuario = $_GET['id_usuario'];
$conectar = mysqli_connect("localhost", "root", "", "aulaguard");
$sql = "SELECT * FROM productos where producto_id = '$producto_id'";
$consulta = mysqli_query($conectar, $sql);


if ($row = mysqli_fetch_array($consulta)) {

  $producto_nombre = $row['producto_nombre'];
  $producto_descripcion = $row['producto_descripcion'];
  $producto_precio = $row['producto_precio'];

  $img = base64_encode($row['img']);
  $imagenSrc = "data:image/png;base64," . $img;
  $producto_descuento = $row['producto_descuento'];
  $precio_desc = $producto_precio - (($producto_precio * $producto_descuento) / 100);
} else {
  echo 'Error al procesar la peticion';
  exit;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AULAGUARD | CODECREATORS</title>
  <!--LINKS-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="recursos/css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="recursos/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="recursos/css/bootstrap.min.css" type="text/css" />
  <script src="https://kit.fontawesome.com/a45e4463fd.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="recursos/css/style.css" type="text/css">
  <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link rel="stylesheet" href="recursos/css/acercaDe.css" />
  <link rel="stylesheet" href="recursos/css/detailsProducts.css" />
</head>

<body>
  <!--HEADER-->
  <?php
  include "modulos/cabecera1.php";
  ?>
  <br><br><br><br>
  <?php
  include "modulos/detalles.php";
  ?>
  <!-- Seccion de servicios -->
  <?php
  include "modulos/servicios.php";
  ?>
  <!-- Seccion de servicios -->
  <!--Productos relacionados-->
  <?php
  include "modulos/masProductos.php";
  ?>
    <div class="container">
    <h1 class="mt-5 mb-5">Calificar producto</h1>
    <div class="card">
      <div class="card-header">Producto prueba </div>
      <div class="card-body">
        <div class="row">
          <div class="col-sm-4 text-center">
            <h1 class="text-warning mt-4 mb-4">
              <b><span id="average_rating">0.0</span> / 5</b>
            </h1>
            <div class="mb-3">
              <i class="fas fa-star star-light mr-1 main_star"></i>
              <i class="fas fa-star star-light mr-1 main_star"></i>
              <i class="fas fa-star star-light mr-1 main_star"></i>
              <i class="fas fa-star star-light mr-1 main_star"></i>
              <i class="fas fa-star star-light mr-1 main_star"></i>
            </div>
            <h3><span id="total_review">0</span> Reseñas</h3>
          </div>
          <div class="col-sm-4">
            <p>
            <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>

            <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
            <div class="progress">
              <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
            </div>
            </p>
            <p>
            <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>

            <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
            <div class="progress">
              <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
            </div>
            </p>
            <p>
            <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>

            <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
            <div class="progress">
              <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
            </div>
            </p>
            <p>
            <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>

            <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
            <div class="progress">
              <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
            </div>
            </p>
            <p>
            <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>

            <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
            <div class="progress">
              <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
            </div>
            </p>
          </div>
          <div class="col-sm-4 text-center">
            <h3 class="mt-4 mb-3">Califica este producto</h3>
            <button type="button" name="add_review" id="add_review" class="btn btn-primary">Escribir mi opinión</button>
          </div>
        </div>
      </div>
    </div>
    <div class="mt-5" id="review_content"></div>
  </div>
  <!--FOOTER-->
  <?php
  include "modulos/footer.php";
  ?>
  <script src="https://kit.fontawesome.com/a45e4463fd.js" crossorigin="anonymous"></script>
  <script src="recursos/js/jquery-3.3.1.min.js"></script>
  <script src="recursos/js/bootstrap.min.js"></script>
  <script src="recursos/js/jquery.magnific-popup.min.js"></script>
  <script src="recursos/js/jquery-ui.min.js"></script>
  <script src="recursos/js/mixitup.min.js"></script>
  <script src="recursos/js/jquery.countdown.min.js"></script>
  <script src="recursos/js/jquery.slicknav.js"></script>
  <script src="recursos/js/owl.carousel.min.js"></script>
  <script src="recursos/js/jquery.nicescroll.min.js"></script>
  <!--Nuevos-->
  <script src="recursos/js/details.js"></script>
  <script src="recursos/js/detalles.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="recursos/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
<div id="review_modal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Puntuar producto</h5>
      </div>

      <div class="modal-body">
        <h4 class="text-center mt-2 mb-4">
          <i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
          <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
          <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
          <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
          <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
        </h4>
        <div class="form-group">
          <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Escribe tu nombre" />
        </div>
        <div class="form-group">
          <textarea name="user_review" id="user_review" class="form-control" placeholder="Comentarios"></textarea>
        </div>
        <div class="form-group text-center mt-4">
          <button type="button" class="btn btn-primary" id="save_review">Enviar</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- MODAL DE PUNTUACION-->
<!-- ... (otras partes de tu código HTML) ... -->

<!-- ... (otras partes de tu código HTML) ... -->

<script>
  // ... (código existente) ...

  $('#save_review').click(function() {
    var user_name = $('#user_name').val();
    var user_review = $('#user_review').val();

    // Obtener el ID del producto y el ID de la sesión
    var product_id = 'ID_DEL_PRODUCTO'; // Reemplaza 'ID_DEL_PRODUCTO' con el verdadero ID del producto
    var session_id = 'ID_DE_LA_SESION'; // Reemplaza 'ID_DE_LA_SESION' con el verdadero ID de la sesión

    if (user_name == '' || user_review == '') {
      alert("Por favor, completa ambos campos.");
      return false;
    } else {
      $.ajax({
        url: "submit_rating.php",
        method: "POST",
        data: {
          rating_data: rating_data,
          user_name: user_name,
          user_review: user_review,
          product_id: product_id, // Agregar el ID del producto
          session_id: session_id // Agregar el ID de la sesión
        },
        success: function(data) {
          $('#review_modal').modal('hide');
          load_rating_data();
          alert(data);
        }
      });
    }
  });

  // ... (código existente) ...
</script>


<!-- SCRIPTS-->
<script>
  //MOSTRAR MODAL
  var rating_data = 0;

  $('#add_review').click(function() {

    $('#review_modal').modal('show');

  });
  //MOSTRAR MODAL


  //PINTAR ESTRELLAS
  $(document).on('mouseenter', '.submit_star', function() {

    var rating = $(this).data('rating');

    reset_background();

    for (var count = 1; count <= rating; count++) {

      $('#submit_star_' + count).addClass('text-warning');

    }

  });

  //PINTAR ESTRELLAS

  function reset_background() {
    for (var count = 1; count <= 5; count++) {

      $('#submit_star_' + count).addClass('star-light');

      $('#submit_star_' + count).removeClass('text-warning');

    }
  }

  $(document).on('mouseleave', '.submit_star', function() {

    reset_background();

    for (var count = 1; count <= rating_data; count++) {

      $('#submit_star_' + count).removeClass('star-light');

      $('#submit_star_' + count).addClass('text-warning');
    }

  });

  $(document).on('click', '.submit_star', function() {

    rating_data = $(this).data('rating');

  });

  //MOSTRAR COMENTARIOS Y PUNTUACIONES

  $('#save_review').click(function() {

    var user_name = $('#user_name').val();

    var user_review = $('#user_review').val();

    if (user_name == '' || user_review == '') {
      alert("Please Fill Both Field");
      return false;
    } else {
      $.ajax({
        url: "submit_rating.php",
        method: "POST",
        data: {
          rating_data: rating_data,
          user_name: user_name,
          user_review: user_review
        },
        success: function(data) {
          $('#review_modal').modal('hide');

          load_rating_data();

          alert(data);
        }
      })
    }

  });


  //CALCULAR PUNTUACION
  load_rating_data();

  function load_rating_data() {
    $.ajax({
      url: "submit_rating.php",
      method: "POST",
      data: {
        action: 'load_data'
      },
      dataType: "JSON",
      success: function(data) {
        $('#average_rating').text(data.average_rating);
        $('#total_review').text(data.total_review);

        var count_star = 0;

        $('.main_star').each(function() {
          count_star++;
          if (Math.ceil(data.average_rating) >= count_star) {
            $(this).addClass('text-warning');
            $(this).addClass('star-light');
          }
        });

        $('#total_five_star_review').text(data.five_star_review);

        $('#total_four_star_review').text(data.four_star_review);

        $('#total_three_star_review').text(data.three_star_review);

        $('#total_two_star_review').text(data.two_star_review);

        $('#total_one_star_review').text(data.one_star_review);

        $('#five_star_progress').css('width', (data.five_star_review / data.total_review) * 100 + '%');

        $('#four_star_progress').css('width', (data.four_star_review / data.total_review) * 100 + '%');

        $('#three_star_progress').css('width', (data.three_star_review / data.total_review) * 100 + '%');

        $('#two_star_progress').css('width', (data.two_star_review / data.total_review) * 100 + '%');

        $('#one_star_progress').css('width', (data.one_star_review / data.total_review) * 100 + '%');

        if (data.review_data.length > 0) {
          var html = '';

          for (var count = 0; count < data.review_data.length; count++) {
            html += '<div class="row mb-3">';

            html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">' + data.review_data[count].user_name.charAt(0) + '</h3></div></div>';

            html += '<div class="col-sm-11">';

            html += '<div class="card">';

            html += '<div class="card-header"><b>' + data.review_data[count].user_name + '</b></div>';

            html += '<div class="card-body">';

            for (var star = 1; star <= 5; star++) {
              var class_name = '';

              if (data.review_data[count].rating >= star) {
                class_name = 'text-warning';
              } else {
                class_name = 'star-light';
              }

              html += '<i class="fas fa-star ' + class_name + ' mr-1"></i>';
            }

            html += '<br />';

            html += data.review_data[count].user_review;

            html += '</div>';

            html += '<div class="card-footer text-right">On ' + data.review_data[count].datetime + '</div>';

            html += '</div>';

            html += '</div>';

            html += '</div>';
          }

          $('#review_content').html(html);
        }
      }
    })
  }
</script>