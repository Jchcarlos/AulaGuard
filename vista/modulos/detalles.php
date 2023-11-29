<main>
      <div class="container-img">
      <img src="<?php echo $imagenSrc ?>" alt="..." />
      </div>
      <div class="container-info-product">
        <br /><br /><br />
        <div class="container-price">
          <h1><?php echo $row['producto_nombre']; ?></h1>
        </div>
        <br />
        <div class="container-price">
          <span>Precio: <?php echo '$'.number_format($producto_precio, 2, '.', '.'); ?></span>
        </div>
        <br />
        <form action="../controlador/ctrlCarrito.php?producto_id=<?php echo $row['producto_id']?>&precioUnitario=<?php echo $producto_precio; ?>&id_usuario=1>" method="post">
          <div class="container-add-cart">
          <h3 class="cant">Cantidad:</h3>
          <div class="container-quantity">
            <input
              type="number"
              placeholder="1"
              value="1"
              min="1"
              class="input-quantity"
              name="cantidad"
            />
            <div class="btn-increment-decrement">
              <i class="fa-solid fa-chevron-up" id="increment"></i>
              <i class="fa-solid fa-chevron-down" id="decrement"></i>
            </div>
          </div>
          <button
                class="btn-add-to-cart">
                <i class="fa-solid fa-cart-shopping"></i>
                <input class="btn-add-to-cart" type="submit" value="Añadir al carrito">
          </button>
          </div>
        </form>

        <div class="container-description">
          <div class="title-description">
            <h4>Descripción</h4>
            <i class="fa-solid fa-chevron-down"></i>
          </div>
          <div class="text-description">
            <p>
              <?php 
                echo $producto_descripcion
              ?>
            </p>
          </div>
        </div>

        <!--<div class="container-additional-information">
          <div class="title-additional-information">
            <h4>Especificaciones</h4>
            <i class="fa-solid fa-chevron-down"></i>
          </div>
          <div class="text-additional-information hidden">
            <p>
              Vincúlala a tu módem por Wi-Fi <br />
              Comparte el control con otros usuarios<br />
              Accede con:<br />
              Huella digital<br />
              Llaves <br />
              Códigos numéricos <br />
              Tarjetas RFID <br />
              Genera códigos y envíalos por mensaje<br />
              Puedes crear contraseñas temporales <br />
              Lleva registro de aperturas <br />
              Controla los usuarios registrados para abrir <br />
              Tiene alarma por intentos fallidos <br />
              Tiene switch para activar el seguro desde el interior <br />
              Incorpora puerto de alimentación de emergencia <br />
              Incluye 2 llaves y 4 tarjetas RFID <br />
            </p>
          </div>
        </div>

        <div class="container-reviews">
          <div class="title-reviews">
            <h4>Descripción tecnica</h4>
            <i class="fa-solid fa-chevron-down"></i>
          </div>
          <div class="text-reviews hidden">
            <p>
              Alimentación: 6 Vcc (4 x AAA) <br />
              Cantidad de huellas dactilares: 100 <br />
              Back set ajustable: 60 / 70 mm <br />
              Espesor de puerta: 35 a 50 mm <br />
              Cerrojo antisegueta: 12 mm <br />
              Capacidad de usuarios: 300 (100 huellas digitales + 100 tarjeta IC
              + 100 contraseñas) <br />
            </p>
          </div>
        </div>-->

        <div class="container-social">
          <span>Compartir</span>
          <div class="container-buttons-social">
            <a href="#"><i class="fa-solid fa-envelope"></i></a>
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-pinterest"></i></a>
          </div>
        </div>
      </div>
    </main>