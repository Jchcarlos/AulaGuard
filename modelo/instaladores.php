<?php
class Instalador{
    private $fecha;
    private $idVenta;
    private $estatus;

    public function inicializarCita($fecha, $idVenta,$estatus){
        $this->fecha=$fecha;
        $this->estatus=$estatus;
        $this->idVenta=$idVenta;
    }
    
    public function conectarBD(){
        $con = mysqli_connect("localhost", "root", "", "aulaguard") or die ("problema con la conexion");
        return $con;
    }
    public function cerrarBD($con){
        mysqli_close($con);
    }

    public function citar(){
        $con=$this->conectarBD();
        $query="INSERT INTO citas (cita_fecha, cita_Status, id_venta) VALUES ('$this->fecha', '$this->estatus', '$this->idVenta')" or die ("problema con la insercion");
        mysqli_query($con, $query);

    }

    public function mostrarselect(){
        $con=$this->conectarBD();
        $query=mysqli_query($con, "SELECT * from direcciones") or die (mysqli_error($con));
        

        print "<select> required";
        print "<option value='' disabled selected>Seleccione un instalador</option>";
        while($reg=mysqli_fetch_assoc($query)){
            print '<option value='.$reg['Id_direc'].'>'.$reg['Calle_direc'].'</option>';
        }
        print "</select>";
    }

    public function ventas(){
        $con=$this->conectarBD();
        $query = "SELECT * FROM ventas";
        $que=mysqli_query($con, $query);
        print "<table>";
        print "<tr><th>ID</th><th>Total</th><th>fecha</th><th>id transaccion</th><th>Status</th><th>usuario</th><th>opc</th></tr>";
        while($reg=mysqli_fetch_assoc($que)){
            print "<tr><td>".$reg["venta_id"]."</td><td>".$reg["venta_total"]."</td><td>".$reg["venta_fecha"]."</td><td>".$reg["venta_idTransaccion"]."</td><td>".$reg["status"]."</td><td>".$reg["usuario_id"]."</td><td><a href='../Vista/formcitas.php?idV=".$reg['venta_id']."'><button>Citar</button></a></td></tr>";
        }
        print "<table>";   
    }
    public function citas(){
        $con=$this->conectarBD();
        $query = "SELECT * FROM citas";
        $que=mysqli_query($con, $query);
        print "<table>";
        print "<tr><th>ID</th><th>Fecha</th><th>Status</th><th>id Venta</th><th>opc</th></tr>";
        while($reg=mysqli_fetch_assoc($que)){
            print "<tr><td>".$reg["cita_id"]."</td><td>".$reg["cita_fecha"]."</td><td>".$reg["cita_status"]."</td><td>".$reg["id_venta"]."</td><td><a href='../Vista/modcitas.php?idC=".$reg['cita_id']."'><button>Modificar Statuss</button></a></td></tr>";
        }
        print "<table>";   
    }

    public function status($id, $status){
        $con=$this->conectarBD();
        $query ="UPDATE citas SET cita_status = '$status' WHERE cita_id='$id'";
        mysqli_query($con, $query);

    }
    public function citasAdmin(){
        $con=$this->conectarBD();
        $query = "SELECT * FROM citas";
        $que=mysqli_query($con, $query);
        print "<table class='table table-striped'>";
        print "<thead>";
        print "<tr><th>ID</th><th>Fecha</th><th>Status</th><th>id Venta</th><th>opc</th></tr>";
        print "</thead>";
        print "<tbody>";
        while($reg=mysqli_fetch_assoc($que)){
            print "<tr><td>".$reg["cita_id"]."</td><td>".$reg["cita_fecha"]."</td><td>".$reg["cita_status"]."</td><td>".$reg["id_venta"]."</td><td><a href='../admin/CitaM.php?idC=".$reg['cita_id']."'><button name='Modificar' class='btn btn-primary'>Modificar</button></a></td></tr>";
        }
        print "</body>";
        print "<table>";   
    }

    public function modificarCita($id){
        $con=$this->conectarBD();
        $query=mysqli_query($con, "SELECT * FROM citas WHERE cita_id=$id");
        $query=mysqli_fetch_assoc($query);

        print'
        <form action="../controlador/Control.php" method="post" class="mb-3">

        Seleccione la fecha de cita:
        <br>
        <input type="datetime-local" name="fecha" id="fecha" value="'.$query['cita_fecha'].'">
        <input type="hidden" name="idVenta" value="'.$query['id_venta'].'">
        <input type="hidden" name="status" value="Pendiente">
        <input type="hidden" name="id_cita" value="'.$query['cita_id'].'">
        <br>
        <br>
        
    
        <button type="submit" name="ModificarCita" class="btn btn-primary">Modificar cita</button>
    
    ';
    }

    

    
    public function modCita($id){
        $con=$this->conectarBD();
        mysqli_query($con, "UPDATE citas SET cita_fecha='$this->fecha', cita_status='$this->estatus', id_venta='$this->idVenta' WHERE cita_id=$id") or die(mysqli_error($con));
        
    }
}
?>