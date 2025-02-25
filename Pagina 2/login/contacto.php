<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="icon" href="ima/fondo2.png">
    <title>Terapia Natural - San Juan - Contacto</title>
    <link rel="stylesheet" href="chat.css">
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <a href="inicio.php"><img src="ima/logo-pagina.png" alt=""></a>
            </div>
            <ul class="menu">
                <li><a href="../inicio.php"><i class="fas fa-home"></i>   Inicio</a></li>
                <li><a href="../servicios.php"><i class="fas fa-smile-beam"></i>  Servicios</a></li>
                <li><a href="../index.php"><i class="fas fa-phone-alt"></i>   Contacto</a></li>
                <li><a href="turnos.php"><i class="fas fa-calendar-day"></i>  Turnos</a></li>
                <li>
                    <a href="../beneficios.php"> <i class="fa-solid fa-water"></i> Beneficios</a>
                </li>
                <li><a href="logiin.php" class="iniciar-sesion"><i class="fa-solid fa-user-plus"></i>    Iniciar sesión</a></li>
                <li> <button class="registrarse"><a href="registro.php"><i class="fa-solid fa-user-plus"></i>   Únete</a></button></li>
            </ul>
            <div class="hamburguesa" onclick="toggleMenu()">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </nav>
    </header>
    <script>
        function toggleMenu() {
            const menu = document.querySelector(".menu");
            const hamburguesa = document.querySelector(".hamburguesa");
            menu.classList.toggle("activado");
            hamburguesa.classList.toggle("activado");
        }
    </script>
    <div class="container">
        <header>
            Terapia Natural
        </header>

        <div class="contact-info">
            <p><strong>Teléfono:</strong> +54 9 264 579 6824</p>
            <p><strong>Email:</strong> terapianaturalcm@gmail.com</p>
            <p><strong>Dirección:</strong> Calle Proyectada B3 Solomon Casa 20</p>
        </div>

        <div class="social-media">
            <a href="#"><i class="fa-brands fa-facebook-f" target="_blank"></i>  Facebook</a>
            <a href="https://www.instagram.com/terapia_natural_cm/?utm_source=qr&r=nametag" target="_blank"><i class="fa-brands fa-instagram"></i>  Instagram</a>
        </div>

        <div class="schedule">
            <h2>Horarios de Atención</h2>
            <table>
                <tr>
                    <th>Día</th>
                    <th>Mañana</th>
                    <th>Tarde</th>
                    <th>Noche</th>
                </tr>
                <tr>
                    <td>Lunes</td>
                    <td>8:00 - 12:00</td>
                    <td>14:00 - 18:00</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Martes</td>
                    <td>8:00 - 12:00</td>
                    <td>15:00 - 18:00</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Miercoles</td>
                    <td>8:00 - 12:00</td>
                    <td>15:00 - 18:00</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Jueves</td>
                    <td>8:00 - 12:00</td>
                    <td>15:00 - 18:00</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Viernes</td>
                    <td>8:00 - 12:00</td>
                    <td>15:00 - 18:00</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Sábado</td>
                    <td>9:00 - 13:00</td>
                    <td>14:30 - 22:00</td>
                    <td>-</td>
                </tr>
            </table>
        </div>

        <div class="contact-form">
            <h2>Realiza tu consulta</h2>
            <form action="mensajes.php" method="POST">
                <label for="correo">Correo:</label>
                <input type="email" id="email" name="email" required>

                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" required>

                <label class="label" for="mensaje">Deja tu consulta:</label>
                <input type="textarea" id="mensaje" name="mensaje" required>

                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>
    <?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$dbname = "sistema_turnos";

// Crear conexión
$conn = new mysqli($host, $user, $password, $dbname);

// Comprobar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Validar que la solicitud sea POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener valores del formulario
    $correo_id = isset($_POST['email']) ? $_POST['email'] : null;
    $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : null;
    $mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : null;
    
    
    $usuario_id = isset($_SESSION['usuario_id']) ? $_SESSION['usuario_id'] : null;

    
    if ($correo_id && $telefono && $mensaje) {
        
        $stmt = $conn->prepare("INSERT INTO consultas (telefono, mensaje, correo_id, usuario_id) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssi", $telefono, $mensaje, $correo_id, $usuario_id);

        if ($stmt->execute()) {
            $mensaje_consulta="Su consulta se ha hecho con éxito.";
            
        } else {
            echo "Error al guardar la consulta: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error: Todos los campos son obligatorios.";
    }
}


$conn->close();
?>
<div class="mensaje-consulta">
    <h2 style="text-align:center; color:red;"><?php echo $_SESSION['nombre'];?><?php echo $mensaje_consulta;?></h2>
</div>
    <footer class="foter">
        <div class="container-footer">
            <div class="sesion-footer">
                <h3>Siguenos</h3>
                <div class="social-icons">
                    <ul>
                        <li id="whatsap"><a href=""><i class="fa-brands fa-whatsapp" aria-hidden="true" ></i></a>
                        </li>
                        <li id="facebook">
                            <a href=""><i class="fa-brands fa-facebook-f" aria-hidden="true" ></i></a>
                        </li>
                        <li id="instagram">
                            <a href=""><i class="fa-brands fa-instagram" aria-hidden="true" ></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sesion-footer">
                <h3>Sobre Nosotros</h3>
                <p>En Terapia Natural, creemos que el bienestar comienza con la relajación. Nuestro espacio está diseñado para que desconectes del estrés diario y te sumerjas en un ambiente de calma y armonía.</p>
            </div>
            <div class="sesion-footer">
                <h3>Enlaces</h3>
                <ul>
                    <li>
                        <a href="inicio.php">Inicio</a>
                    </li>
                    <li>
                        <a href="servicios.php">Servicios</a>
                    </li>
                    <li>
                        <a href="index.php">Contacto</a>
                    </li>
                </ul>
            </div>
            <div class="sesion-footer">
                <h3>Contacto</h3>
                <ul>
                    <li><i class="fas fa-phone-alt"></i> Telefono: <a href="https://wa.me/5492645796824" target="_blank">+54 9 264 579-6824</a></li>
                    <li><i class="fas fa-envelope"></i> Correo: <a href="mailto:terapianaturalcm@gmail.com" target="_blank">terapianaturalcm@gmail.com</a></li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <p>2025 Terapia Natual. Todos los derechos reservados</p>
        </div>
    </footer>
</body>

</html>