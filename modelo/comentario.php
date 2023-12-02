<?php

class comentario
{
    private $comentario_id;
    private $comentario_tipo;
    private $comentario_email;
    private $comentario_comentario;

    public function inicializar($comentario_id, $comentario_tipo, $comentario_email,$comentario_comentario)
    {
        $this->comentario_id = $comentario_id;
        $this->comentario_tipo = $comentario_tipo;
        $this->comentario_email = $comentario_email;
        $this->comentario_comentario = $comentario_comentario;
       
    }

    public function conexionBD()
    {
        $con = mysqli_connect("localhost", "root", "", "aulaguard") or die("Problemas con la conexión a la base de datos");
        return $con;
    }
    public function agregar()
    {
        $registro = mysqli_query($this->conexionBD(), "SELECT * FROM comentarios WHERE comentario_tipo = '$this->comentario_tipo'")
            or die("Problemas en la consulta" . mysqli_error($this->conexionBD()));

        if ($reg = mysqli_fetch_array($registro)) {
            return 'Ya existe esta comentario';
        } else {

            // Insertar nuevo usuario con la contraseña hasheada
            mysqli_query($this->conexionBD(), "INSERT INTO comentarios (comentario_tipo) VALUES
                ('$this->comentario_tipo')")
                or die("Problemas en el insert" . mysqli_error($this->conexionBD()));
            header("Location: ../vista/admin/comentarios.php");
            exit(); // Asegurar que no se ejecute más código después de la redirección
        }
    }
    public function modificar()
    {
        // Verificar si la categoría ya existe
        $consultaExistencia = mysqli_query($this->conexionBD(), "SELECT * FROM comentarios WHERE comentario_tipo = '$this->comentario_tipo'")
            or die("Problemas en la consulta: " . mysqli_error($this->conexionBD()));

        if (mysqli_num_rows($consultaExistencia) > 0) {
            return 'Ya existe esta categoría';
        } else {
            // Actualizar la categoría
            mysqli_query($this->conexionBD(), "UPDATE comentarios SET comentario_tipo = '$this->comentario_tipo' WHERE comentario_id = $this->comentario_id")
                or die("Problemas en la actualización: " . mysqli_error($this->conexionBD()));

            header("Location: ../vista/admin/comentarios.php");
            exit(); // Asegurar que no se ejecute más código después de la redirección
        }
    }

    public function eliminar($comentario_id)
    {
        // Validar que el ID de la categoría sea un entero
        $comentario_id = intval($this->comentario_id);

        // Verificar si la categoría existe
        $consulta = mysqli_query($this->conexionBD(), "SELECT * FROM comentarios WHERE comentario_id = $comentario_id")
            or die("Problemas en la consulta: " . mysqli_error($this->conexionBD()));

        if (mysqli_num_rows($consulta) == 0) {
            return 'La categoría no existe';
        } else {
            // Eliminar la categoría
            $eliminacion = mysqli_query($this->conexionBD(), "DELETE FROM comentarios WHERE comentario_id = $comentario_id")
                or die("Problemas en la eliminación: " . mysqli_error($this->conexionBD()));

            if ($eliminacion) {
                header("Location: ../vista/admin/comentarios.php");
                exit(); // Asegurar que no se ejecute más código después de la redirección
            } else {
                return 'Error al eliminar la categoría';
            }
        }
    }

    public function cerrarBD()
    {
        mysqli_close($this->conexionBD());
    }
}