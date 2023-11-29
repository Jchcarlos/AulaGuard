<main><br><br>
    <div class="container">
      <!--<div class="row mb-5">
          <div class="col-md-12">
            <div class="border p-4 rounded" role="alert">
              Eres cliente? <a href="#">Haz click aqui</a> para ingresar
            </div>
          </div>
        </div>-->
      <div class="row">
        <div class="col-md-6 mb-5 mb-md-0">
          <h2 class="h3 mb-3 text-black">Detalles de facturación</h2>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="productos.html">Productos</a></li>
              <li class="breadcrumb-item"><a href="carrito.php">Carrito</a></li>
              <li class="breadcrumb-item active" aria-current="page">Facturación</li>
            </ol>
          </nav>
          <div class="p-3 p-lg-5 border bg-white">
            <div class="form-group">
              <label for="c_country" class="text-black">Pais <span class="text-danger">*</span></label>
              <select id="c_country" class="form-control">
                <option value="1">Seleccione un pais</option>
                <option value="2">Estados Unidos</option>
                <option value="3">México</option>
                <option value="4">Canada</option>
                <option value="5">Puerto rico</option>
                <option value="6">Colombia</option>
                <option value="7">Peru</option>
                <option value="8">Brasil</option>
                <option value="9">Venezuela</option>
              </select>
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <label for="c_fname" class="text-black">Nombre(s) <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_fname" name="c_fname">
              </div>
              <div class="col-md-6">
                <label for="c_lname" class="text-black">Apellido(s) <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_lname" name="c_lname">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <label for="c_address" class="text-black">Dirección <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Calle">
              </div>
            </div>

            <div class="form-group mt-3">
              <input type="text" class="form-control" placeholder="Mz y Lt">
            </div>

            <div class="form-group row">
              <div class="col-md-6">
                <label for="c_state_country" class="text-black">Estado <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_state_country" name="c_state_country">
              </div>
              <div class="col-md-6">
                <label for="c_postal_zip" class="text-black">Codigo Postal <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip">
              </div>
            </div>

            <div class="form-group row mb-5">
              <div class="col-md-6">
                <label for="c_email_address" class="text-black">Correo Electronico <span
                    class="text-danger">*</span></label>
                <input type="email" class="form-control" id="c_email_address" name="c_email_address">
              </div>
              <div class="col-md-6">
                <label for="c_phone" class="text-black">Numero celular <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Numero de celular">
              </div>
            </div>

            <div class="form-group">
              <label for="c_ship_different_address" class="text-black" data-bs-toggle="collapse"
                href="#ship_different_address" role="button" aria-expanded="false"
                aria-controls="ship_different_address"><input type="checkbox" value="1" id="c_ship_different_address">
                ¿Enviar a una direccion diferente?</label>
              <div class="collapse" id="ship_different_address">
                <div class="py-2">
                  <div class="form-group">
                    <label for="c_country" class="text-black">Pais <span class="text-danger">*</span></label>
                    <select id="c_country" class="form-control">
                      <option value="1">Seleccione un pais</option>
                      <option value="2">Estados Unidos</option>
                      <option value="3">México</option>
                      <option value="4">Canada</option>
                      <option value="5">Puerto rico</option>
                      <option value="6">Colombia</option>
                      <option value="7">Peru</option>
                      <option value="8">Brasil</option>
                      <option value="9">Venezuela</option>
                    </select>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-6">
                      <label for="c_fname" class="text-black">Nombre(s) <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_fname" name="c_fname">
                    </div>
                    <div class="col-md-6">
                      <label for="c_lname" class="text-black">Apellido(s) <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_lname" name="c_lname">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-md-12">
                      <label for="c_address" class="text-black">Dirección <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Calle">
                    </div>
                  </div>

                  <div class="form-group mt-3">
                    <input type="text" class="form-control" placeholder="Mz y Lt">
                  </div>

                  <div class="form-group row">
                    <div class="col-md-6">
                      <label for="c_state_country" class="text-black">Estado <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_state_country" name="c_state_country">
                    </div>
                    <div class="col-md-6">
                      <label for="c_postal_zip" class="text-black">Codigo Postal <span
                          class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip">
                    </div>
                  </div>

                  <div class="form-group row mb-5">
                    <div class="col-md-6">
                      <label for="c_email_address" class="text-black">Correo Electronico <span
                          class="text-danger">*</span></label>
                      <input type="email" class="form-control" id="c_email_address" name="c_email_address">
                    </div>
                    <div class="col-md-6">
                      <label for="c_phone" class="text-black">Numero celular <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_phone" name="c_phone"
                        placeholder="Numero de celular">
                    </div>
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>
        <div class="col-md-6">
          <div class="row mb-5">
            <div class="col-md-12">
              <h2 class="h3 mb-3 text-black">Tu orden</h2>
              <div class="p-3 p-lg-5 border bg-white">
                <table class="table site-block-order-table mb-5">
                  <thead>
                    <th>Producto</th>
                    <th>Precio</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Cerradura <strong class="mx-2">x</strong> 1</td>
                      <td>$250.00</td>
                    </tr>
                    <tr>
                      <td>Persiana <strong class="mx-2">x</strong> 1</td>
                      <td>$100.00</td>
                    </tr>
                    <td class="text-black font-weight-bold"><strong>Subtotal</strong></td>
                    <td class="text-black">$350.00</td>
                    </tr>
                    <tr>
                      <td class="text-black font-weight-bold"><strong>IVA</strong></td>
                      <td class="text-black">$50.00</td>
                    </tr>
                    <tr>
                    <tr>
                      <td class="text-black font-weight-bold"><strong>Total</strong></td>
                      <td class="text-black font-weight-bold"><strong>$400.00</strong></td>
                    </tr>
                  </tbody>
                </table>

                <div class="border p-3 mb-5">
                  <h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsepaypal" role="button"
                      aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>

                  <div class="collapse" id="collapsepaypal">
                    <div class="py-2">
                      <p class="mb-0">Al terminar tu compra te llegará un correo con las indicaciones para realizar tu
                        pago</p>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn1 btn-black btn-lg py-3 btn-block" onclick="window.location='compra.php'">Pagar
                    ahora</button>
                </div>

              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- </form> -->
    </div>
  </main><br><br>