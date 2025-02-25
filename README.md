# Pagina-de-Masajista
PaginaMasajes
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="ima/fondo2.png">
    <title>Masajista - San Juan</title>
</head>

<body>
    <nav class="navbar">
        <div class="logo">
            <a href="inicio.php"><img src="ima/logo-pagina.png" alt="" width="170px" height="60px"></a>
        </div>
        <ul class="menu">
            <li>
                <a href="inicio.html">Inicio</a></li>

            <li>
                <a href="servicios.html">Servicio</a></li>
            <li>
                <a href="index.html">Contacto</a></li>
            <li>
                <a href="login/turnos.php">Turnos</a></li>
            <li>
                <a href="beneficios.html">Beneficios</a></li>
            <li><a href="login/iniciar_sesion.php">Iniciar sesion</a></li>
        </ul>
        <div class="hamburguesa" onclick="toggleMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </nav>

    <script>
        function toggleMenu() {
            const menu = document.querySelector(".menu");
            const hamburguesa = document.querySelector(".hamburguesa");
            menu.classList.toggle("activado");
            hamburguesa.classList.toggle("activado");
        }
    </script>
    <div class="servicios-tile">
        <h2>NUESTROS SERVICIOS</h2>
    </div>
    <div class="card-container">
        <div class="card hidden-card">
            <img src="https://portlandhallspa.com/storage/2019/06/sports-massage-therapist-massaging-sportsmans-P3TY63N-copy-600x401.jpg" alt="imagen de masaje descontracturante" class="imagen-masaje">
            <h2>Masaje Descontracturante</h2>
            <p class="descripcion">Precio:-------------------$10000 <br> Duracion:---------------40min <br> <br> Se trabaja toda la musculatura de modo que se alivia la tensión y el dolor por malas posturas <br> <span class="ver-bene"><a href="beneficios.html">Ver Beneficios</a></span></p>
            <a href="login/turnos.php"><button class="boton">AGENDAR</button></a>
        </div>
        <div class="card-container">
            <div class="card hidden-card">
                <img src="https://th.bing.com/th/id/OIP.4jzPrh8SKJu-9f8PDhQQngHaE6?rs=1&pid=ImgDetMain" alt="imagen de masaje facial" class="imagen-masaje">
                <h2>Masaje Facial</h2>
                <p class="descripcion">Precio:-------------------$5000 <br>Duracion:---------------20min <br><br>Se realiza en el cráneo, cara, cuello y hombros para eliminar jaquecas y migrañas <br> <span class="ver-bene"><a href="beneficios.html">Ver Beneficios</a></span></p>
                <a href="login/turnos.php"><button class="boton">AGENDAR</button></a>
            </div>
        </div>
        <div class="card-container">
            <div class="card hidden-card">
                <img src="https://th.bing.com/th/id/R.fc151f9b0af0081b1711b3264be09310?rik=UzjEoLTiI4I0iw&pid=ImgRaw&r=0" alt="imagen de masaje linfatico facial" class="imagen-masaje">
                <h2>Masaje Linfatico</h2>
                <p class="descripcion">Precio:----------------$12000<br>Duracion:-------------30min <br><br>Técnica de masoterapia que se engloba en la fisioterapia y la medicina alternativa <br><span class="ver-bene"><a href="beneficios.html">Ver Beneficios</a></span></p>
                <a href="login/turnos.php"><button class="boton">AGENDAR</button></a>
            </div>
        </div>
        <div class="card-container">
            <div class="card hidden-card">
                <img src="https://th.bing.com/th/id/OIP.unhbt_kZDUIFsUA9uyUdowHaE8?rs=1&pid=ImgDetMain" alt="imagen de masaje circulatorio" class="imagen-masaje">
                <h2>Masaje Circulatorio</h2>
                <p class="descripcion">Precio:---------------$8000 <br> Duracion:-----------------30min <br> <br>Técnica de masoterapia se encarga de tratar dolencias musculares y mejorar el bienestar fisico <br> <span class="ver-bene"><a href="beneficios.html">Ver Beneficios</a></span></p>
                <a href="login/turnos.php"><button class="boton">AGENDAR</button></a>
            </div>
        </div>
        <div class="card-container">
            <div class="card hidden-card">
                <img src="https://th.bing.com/th/id/OIP.sW9XEwuv5awAu_h0pTXgVQAAAA?rs=1&pid=ImgDetMain" alt="imagen de masaje deportivo" class="imagen-masaje">
                <h2>Masaje Deportivo</h2>
                <p class="descripcion">Precio:--------------$10000 <br> Duracion:-------------30min<br>Método de preparación de los tejidos para la competición o la práctica de ejercicio atlético <br> <span class="ver-bene"><a href="beneficios.html">Ver Beneficios</a></span>                    <br><br><br>
                    <a href="login/turnos.php"><button class="boton">AGENDAR</button></a>
            </div>
        </div>
        <div class="card-container">
            <div class="card hidden-card">
                <img src="https://th.bing.com/th/id/R.0ecf91fb7946c9f4eb9063b4548951ad?rik=krH%2bsW0FMvdfZw&pid=ImgRaw&r=0" alt="imagen de masaje de reflexologia podal" class="imagen-masaje">
                <h2>Reflexoligia Podal</h2>
                <p class="descripcion">Precio:--------------$10000 <br> Duracion:---------------20min <br> <br> Técnica de masoterapia basada en la estimulacion de puntos especificos en los pies ,que corresponden a distintas partes del cuerpo <br> <span class="ver-bene"><a href="beneficios.html">Ver beneficios</a></span></p>
                <a href="login/turnos.php"><button class="boton">AGENDAR</button></a>
            </div>
        </div>
        <div class="card-container">
            <div class="card hidden-card">
                <img src="https://images.mujerdeelite.com/galerias/388_1.jpg" alt="imagen de masaje cervical" class="imagen-masaje">
                <h2>Masaje de cervical</h2>
                <p class="descripcion">Precio:---------------$8000 <br> Duracion:-------------20min <br> <br>técnica enfocada en aliviar la tensión y el dolor en la zona del cuello , los hombros y la parte alta de la espalda. <br> <span class="ver-bene"><a href="beneficios.html">Ver beneficios</a></span>                    </p>
                <a href="login/turnos.php"><button class="boton">AGENDAR</button></a>
            </div>
        </div>
        <div class="card-container">
            <div class="card hidden-card">
                <img src="https://th.bing.com/th/id/OIP.yNsn9In4rQyjK_18cyEBaAHaE8?rs=1&pid=ImgDetMain" alt="imagen de masaje pies" class="imagen-masaje">
                <h2>Masaje de Pies</h2>
                <p class="descripcion">Precio:------------------$6000 <br> Duracion:--------------30min <br> <br> Técnica de masoterapia que se encarga de aliviar la tensión , mejorar la circulación y promover la relajación mediante la estimulación de diferentes puntos en los
                    pies.
                    <br> <span class="ver-bene"><a href="beneficios.html">Ver beneficios</a></span> </p>
                <a href="login/turnos.php"><button class="boton">AGENDAR</button></a>
            </div>
            <div class="card-container">
                <div class="card hidden-card">
                    <img src="https://th.bing.com/th/id/OIP.M4CZxF7nOc5S7yLIgUnKYQHaEc?w=2234&h=1342&rs=1&pid=ImgDetMain" alt="imagen de masaje descontracturante" class="imagen-masaje">
                    <h2>Masaje Relajante</h2>
                    <p class="descripcion">Cuerpo Completo:----$16000---1h 30min <br>Mitad de Cuerpo:-----$8000-----45min <br> <br> Métodos manuales suaves y rítmicos con la finalidad de relajar y descontracturar <br> <br> <span class="ver-bene"><a href="beneficios.html">Ver Beneficios</a></span>                        <br></p>
                    <br>
                    <a href="login/turnos.php"><button class="boton">AGENDAR    </button></a>
                </div>
            </div>
            <div class="card-container">
                <div class="card hidden-card">
                    <img src="https://th.bing.com/th/id/OIP.RozX0Ksp5CUM23MDG954JwHaEK?rs=1&pid=ImgDetMain" alt="Masaje con vendas" class="imagen-masaje">
                    <h2>Masaje con vendas</h2>
                    <p class="descripcion">Precio:----------------$14000 <br> Duracion:----------------45min <br> <br> Técnica Terapéutica para mejorar la circulación , reducir la inflamación y aliviar tensiones muscualres. <br> <span class="ver-bene"><a href="beneficios.html">Ver beneficios</a></span>                        </p>
                    <a href="login/turnos.php"><button class="boton">AGENDAR</button></a>

                </div>
            </div>
            <div class="card-container">
                <div class="card hidden-card">
                    <img src="https://th.bing.com/th/id/R.f0c56a274e839d134f4c8017c0359256?rik=nKC6CeUWLuIynw&riu=http%3a%2f%2facdn.mitiendanube.com%2fstores%2f230%2f305%2fproducts%2fbyn-masaje-reductor-11-46eb4321d2484b735915119370211844-640-0.jpg&ehk=bmW%2fDQvL98PLf6Ulr70MbRRB6UfsZJXkOzccY4pqi5w%3d&risl=&pid=ImgRaw&r=0"
                        alt="imagen de masaje reductor de abdomen" class="imagen-masaje">
                    <h2>Masaje Reductor</h2>
                    <p class="descripcion">Precio:---------------$15000 <br>Duracion:------------35min <br><br> Método para combatir y eliminar la acumulación de grasa de una zona localizada del cuerpo <br><span class="ver-bene"><a href="beneficios.html">Ver Beneficios</a></span></p>
                    <a href="login/turnos.php"><button class="boton">AGENDAR</button>
                    </a>
                </div>
            </div>
            <script src="java.js"></script>
        </div>
    </div>
    <script src="scroll.js"></script>

    <footer class="foter">
        <div class="container-footer">
            <div class="sesion-footer">
                <h3>Siguenos</h3>
                <div class="social-icons">
                    <ul>
                        <li id="whatsap"><a href="https://wa.me/5492645796824" target="_blank"><i class="fa-brands fa-whatsapp" aria-hidden="true" ></i></a>
                        </li>
                        <li id="facebook">
                            <a href=""><i class="fa-brands fa-facebook-f" aria-hidden="true" ></i></a>
                        </li>
                        <li id="instagram">
                            <a href="https://www.instagram.com/terapia_natural_cm/?utm_source=qr&r=nametag" tarjet="_blank"><i class="fa-brands fa-instagram" aria-hidden="true" ></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sesion-footer">
                <h3>Sobre Nosotros</h3>
                <p class="nosotros">En Terapia Natural, creemos que el bienestar comienza con la relajación. Nuestro espacio está diseñado para que desconectes del estrés diario y te sumerjas en un ambiente de calma y armonía.</p>
            </div>
            <div class="sesion-footer">
                <h3>Enlaces</h3>
                <ul class="enlaces">
                    <li>
                        <a href="inicio.html" id="links-anim">Inicio</a>
                    </li>
                    <li>
                        <a href="servicios.html" id="links-anim">Servicios</a>
                    </li>
                    <li>
                        <a href="index.php" id="links-anim">Contacto</a>
                    </li>
                    <li><a href="login/turnos.php">Turnos</a></li>
                    <li><a href="beneficios.html">Beneficios</a></li>
                </ul>
            </div>
            <div class="sesion-footer">
                <h3>Contacto</h3>
                <ul class="enlaces">
                    <li><i class="fas fa-phone-alt" class="nosotros"></i> Telefono: <a href="https://wa.me/5492645796824" target="_blank">+54 9 264 579-6824</a></li>
                    <li><i class="fas fa-envelope"></i> Correo: <a href="mailto:terapianaturalcm@gmail.com" target="_blank">terapianaturalcm@gmail.com</a></li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <p>2025 Terapia Natural. Todos los derechos reservados</p>
        </div>
    </footer>
</body>

</html>
