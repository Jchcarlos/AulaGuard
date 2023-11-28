<main>
      <br /><br />
      <div class="container">
        <h2 class="text-center">Carrito de compra</h2>
        <!--Breadcrumbs-->
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="productos.php">Productos</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Carrito</li>
          </ol>
        </nav>
        <!--Breadcrumbs-->
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Productos</th>
                    <th class="product-name">Descripcion</th>
                    <th class="product-price">Precio</th>
                    <th class="product-quantity">Cantidad</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="product-thumbnail">Cerradura Inteligente</td>
                    <td class="product-name">
                      <h2 class="h5 text-black">
                        Convierte tu casa en una Smart Home!
                      </h2>
                    </td>
                    <td>$49.00</td>
                    <td>
                      <div
                        class="input-group mb-3 d-flex align-items-center quantity-container"
                        style="max-width: 120px"
                      >
                        <div class="input-group-prepend">
                          <button
                            class="btn btn-outline-black decrease"
                            type="button"
                          >
                            &minus;
                          </button>
                        </div>
                        <input
                          type="text"
                          class="form-control text-center quantity-amount"
                          value="1"
                          placeholder=""
                          aria-label="Example text with button addon"
                          aria-describedby="button-addon1"
                        />
                        <div class="input-group-append">
                          <button
                            class="btn btn-outline-black increase"
                            type="button"
                          >
                            &plus;
                          </button>
                        </div>
                      </div>
                    </td>
                    <td>$49.00</td>
                    <td><a href="#" class="btn btn-black btn-sm">X</a></td>
                  </tr>
                  <tr>
                    <td class="product-thumbnail">Proyector</td>
                    <td class="product-name">
                      <h2 class="h5 text-black">
                        Convierte tu casa en una Smart Home!
                      </h2>
                    </td>
                    <td>$49.00</td>
                    <td>
                      <div
                        class="input-group mb-3 d-flex align-items-center quantity-container"
                        style="max-width: 120px"
                      >
                        <div class="input-group-prepend">
                          <button
                            class="btn btn-outline-black decrease"
                            type="button"
                          >
                            &minus;
                          </button>
                        </div>
                        <input
                          type="text"
                          class="form-control text-center quantity-amount"
                          value="1"
                          placeholder=""
                          aria-label="Example text with button addon"
                          aria-describedby="button-addon1"
                        />
                        <div class="input-group-append">
                          <button
                            class="btn btn-outline-black increase"
                            type="button"
                          >
                            &plus;
                          </button>
                        </div>
                      </div>
                    </td>
                    <td>$49.00</td>
                    <td><a href="#" class="btn btn-black btn-sm">X</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <button class="btn1 btn-black btn-sm btn-block">
                  Vaciar carrito
                </button>
              </div>
              <div class="col-md-6">
                <a href="productos.php">
                  <button class="btn1 btn-outline-black btn-sm btn-block">
                    Seguir comprando
                  </button></a
                >
              </div>
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Total</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$230.00</strong>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Iva</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$20.00</strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$250.00</strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <!---O poner etiqueta a-->
                    <button
                      class="btn1 btn-black btn-lg py-3 btn-block"
                      onclick="window.location='checkout.php'"
                    >
                      Realizar pedido
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>