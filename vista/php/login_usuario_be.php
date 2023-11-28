<?php
    // Método Session iniciada
    session_start();

    include 'conexion_be.php';

    $usuario_email = $_POST['usuario_email'];   
    $usuario_password = $_POST['usuario_password'];

    // Validar correo y contraseña
    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario_email = '$usuario_email'");

    if (mysqli_num_rows($validar_login) > 0) {
        $row = mysqli_fetch_assoc($validar_login);
        $stored_password = $row['usuario_password'];

        // Compara las contraseñas en texto plano
        if ($stored_password === $usuario_password) {
            $usuario_email = $row['usuario_email'];
            $usuario_rol = $row['usuario_rol'];

            $_SESSION['usuario_email'] = $usuario_email;
            $_SESSION['usuario_rol'] = $usuario_rol;

            // Redirige al usuario según su rol
            if ($usuario_rol === 'administrador') {
                header("Location: ../admin/index.php");
            } else {
                header("Location: ../../index.php");
            }
            exit;
        } else {
            echo '
                <script>
                    alert("La contraseña es incorrecta. Verifique sus datos.");
                    window.location = "../login.php";
                </script>
            ';
        }
    } else {
        echo '
            <script>
                alert("Este usuario no existe. Verifique sus datos.");
                window.location = "../login.php";
            </script>
        ';
    }

    
?>
