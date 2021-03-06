<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio</title>

    <!--link de styles css-->
    <link rel="stylesheet" href="css/style.css">

    <!--link de awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!--link de boxicons-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>

<body>

    <!--header sección-->
    <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="#home" class="logo">
            Portafolio
        </a>

        <nav class="navbar">
            <a href="#inicio">Inicio</a>
            <a href="#acerca">Acerca</a>
            <a href="#servicios">Actividades</a>
            <a href="#portafolio">Portafolio</a>
            <a href="#contacto">Contacto</a>
        </nav>

        <div class="icon-redes">
            <a href="#" class="fas fa-envelope" alt="gmail"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-github"></a>
        </div>
    </header>
    <!--end header sección-->

    <!--sección home-->
    <section class="inicio" id="inicio" data-aos="fade-left">
        <div class="image" data-aos="fade-up">
            <img src="images/inicio.png" alt="imagen logo">
        </div>

        <div class="contenido" data-aos="fade-up">
            <h4>Hola, Soy Luis Adrián</h4>
            <span>Desarrollador Web y Java</span>
            <p></p>
        </div>

    </section>
    <!--end sección home-->

    <!--sección inicío-->
    <section class="acerca" id="acerca" data-aos="fade-right">
        <h2 class="heading">Introd<span>ucción</span></h2>
        <div class="datos">

            <p><span>Hola, </span>Soy egresado de la carrera de Ingeniería en TIC´S, me gusta mucho trabajar con las tecnologías que se emplean para el Desarrollo Web Front-end, tambien 
                trabajo con unos de mi lenguajes favorito como Java 🧡 aplicandolo con Framework Spring Boot Fronted y Backend para darle mayor optimización al desarrollo web.</p>
            <div class="bio">
                <h3><span>Nombre: </span>Luis Adrián López Rocandio</h3>
                <h3><span>Edad: </span>24 años</h3>
                <h3><span>Correo: </span>luisadrianlopezrocandio@gmail.com</h3>
                <h3><span>Dirección: </span>Zitlaltepec, Zumpango, Estado de México</h3>
                <h3><span>Teléfono: </span>55-63-97-45-36</h3>
            </div>
            <a href="" class="btn">Descargar CV</a>
        </div>
    </section>
    <br><br>
    <!--end sección inicío-->

    <!--Sección Services-->
    <section class="servicios" id="servicios" data-aos="fade-down">
        <h1 class="heading"><span>Actividades</span></h1>
        <div class="box-container">
            <div class="box">
                <i class='bx bxl-html5' style='color:#fa8516'></i>
                <h3>Diseño Web</h3>
                <p>
                   Desarrollo de sitíos Web con las tecnologías del Front-end
                   como HTML, SASS, CSS, JS, Bootstrap.
                </p>
            </div>
            <div class="box">
                <i class='bx bxl-spring-boot' style='color:#71ec21'></i>
                <i class='bx bxl-java' style='color:#f83b0f'></i>
                <h3>Desarrollo Web con Spring Boot Y Java </h3>
                <p>
                    Creación de aplicaciones Web con Spring Framework 5,
                    Spring boot: Thymeleaf, JPA, REST, SECURITY y MySQL.
                </p>
            </div>
            <div class="box">
                <i class="fas fa-database"></i>
                <h3>Base de Datos MySQL</h3>
                <p>
                   Desarrollo y gestión de Base de datos como MySQL, para
                   facilitar la consulta de información en las aplicaciones webs. 
                </p>
            </div>
        </div>
    </section>
    <!--End Sección Services-->

    <!--Sección Habilidades-->
    <section class="habilidades" data-aos="fade-left">
        <h1 class="heading"><span>Conocimientos</span></h1>
        <div class="skills">
            <div class="box">
                <i class='bx bxl-html5' style='color:#fa8516'></i>
                <h4 class="cuadrado"><span>HTML</span></h4>
            </div>
            <div class="box">
                <i class='bx bxl-css3' style='color:#228ad7'></i>
                <h4 class="cuadrado"><span>CSS</span></h4>
            </div>
            <div class="box">
                <i class='bx bxl-javascript' style='color:#f8f10f'></i>
                <h4 class="cuadrado"><span>JS</span></h4>
            </div>
            <div class="box">
                <i class='bx bxl-php' style='color:#7e1b8b'  ></i>
                <h4 class="cuadrado"><span>PHP</span></h4>
            </div>
            <div class="box">
                <i class='bx bxl-bootstrap' style='color:#9332d7'></i>
                <h4 class="cuadrado"><span>Bootstrap</span></h4>
            </div>
            <div class="box">
                <i class='bx bxl-sass' style='color:#df1aad'></i>
                <h4 class="cuadrado"><span>SASS</span></h4>
            </div>
            <div class="box">
                <i class='bx bxl-java' style='color:#f83b0f'></i>
                <h4 class="cuadrado"><span>JAVA</span></h4>
            </div>
            <div class="box">
                <i class='bx bxl-spring-boot' style='color:#71ec21'></i>
                <h4 class="cuadrado"><span>Spring-boot</span></h4>
            </div>
            <div class="box">
                <i class='bx bx-data' style='color:rgba(238,198,17,0.86)'></i>
                <h4 class="cuadrado"><span>MySQL</span></h4>
            </div>
            <div class="box">
                <i class='bx bxl-git' style='color:#d2183b'></i>
                <h4 class="cuadrado"><span>Git</span></h4>
            </div>
            <div class="box">
                <i class='bx bxl-github' style='color:#2f2829'></i>
                <h4 class="cuadrado"><span>GitHub</span></h4>
            </div>
        </div>
    </section>
    <!--End sección Habilidades-->

    <!--Sección Estudios y experiencia-->
    <section class="academico" data-aos="fade-up">
        <div class="educa-exp" data-aos="fade-left">
            <h1 class="heading">Educación y<span> Experiencia</span></h1>
            <div class="row">
                <div class="box-container" data-aos="fade-right">
                    <h3 class="title">Educación</h3>
                    <diV class="box">
                        <h2 class="titulo">Universidad Tecnológica de Tecámac</h2>
                        <h3>Ingeniería en Tecnologías de la información y Comunicación</h3>
                        <span>(2019-2021)</span>
                    </diV>
                    <diV class="box">
                        <h2>Universidad Tecnológica de Tecámac</h2>
                        <h3>TSU en TIC´S (Área Sistemas Informaticos)</h3>
                        <span>(2017-2019)</span> 
                    </diV>
                </div>

                <div class="box-container">
                    <h3 class="title">Experiencia - Practicas Profesionales</h3>
                    <diV class="box" data-aos="fade-down">
                        <h2>Net Capacitaciones(KED)</h2>
                        <h3>Desarrollo y soporte en C# </h3>
                        <span>(Enero 2021 - Mayo 2021)</span>
                        <p>- Desarrollé módulo TSFB del sistema.</p>
                        <p>- Logré llevar a cabo pruebas y correción módulo de Vouche. </p>
                        <p>- Hice el uso de software como Visual Studio y SQL Server 2016</p>
                        <p>- Recibí Curso de capacitación de SQL Server y C#</p>
                    </diV>
                    <diV class="box">
                        <h2>UTTEC Departamento de Servicios Médicos</h2>
                        <h3>Desarrollo en Java</h3>
                        <span>(Mayo 2019 - Agosto 2019)</span>
                        <p>- Desarrollé nuevos módulos para el sistema DSM en Java.</p>
                        <p>- Desarrollé apartados de reportes en Excel desde Java</p>
                        <p>- Logré hacer conexiones MySQL-JAVA entre servidor y clientes.</p>
                        <p></p>
                    </diV>
                </div>

            </div>
        </div>
    </section>
    <!--End Sección-->

    <!--Sección Portafolio-->
    <section class="portafolio" id="portafolio" data-aos="fade-left">
        <h1 class="heading"><span>Portafolio</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="images/img-1.jpg" alt="">
                <h3>Proyecto-Playa</h3>
                <span>(2020-2021)</span>
            </div>
            <div class="box">
                <img src="images/img-2.jpg" alt="">
                <h3></h3>
                <span>(2020-2021)</span>
            </div>
            <div class="box">
                <img src="images/img-3.jpg" alt="">
                <h3></h3>
                <span>(2020-2021)</span>
            </div>
            <div class="box">
                <img src="images/img-4.jpg" alt="">
                <h3></h3>
                <span>(2020-2021)</span>
            </div>
            <div class="box">
                <img src="images/img-5.jpg" alt="">
                <h3></h3>
                <span>(2020-2021)</span>
            </div>
            <div class="box">
                <img src="images/img-6.jpg" alt="">
                <h3></h3>
                <span>(2020-2021)</span>
            </div>
        </div>
    </section>
    <!--End Portafolio-->

    <!--Sección Contacto-->
    <section class="contacto" id="contacto">
        <h1 class="heading"><span>Contacto</span></h1>
        <form class="formulario" action="" method="post">
            <fieldset>
                <div class="contenedor-campos">
                    <div class="campo">
                        <label>Nombre: </label>
                        <input class="input-text" type="text" placeholder="Nombre"
                        name="nombre">
                    </div>

                    <div class="campo">
                        <label>Teléfono:     </label>
                        <input class="input-text" type="tel" placeholder="Teléfono"
                        name="telefono">
                    </div>

                    <div class="campo">
                        <label>Correo: </label>
                        <input class="input-text" type="email" placeholder="correo electrónico"
                        name="correo">
                    </div>

                    <div class="campo">
                        <label>Asunto: </label>
                        <input class="input-text" type="asunto" placeholder="asunto"
                        name="asunto">
                    </div>

                    <div class="campo">
                        <label>Mensaje:</label>
                        <textarea class="input-text" placeholder="Escribanos un Mensaje"
                        name="mensaje"></textarea>
                    </div>
                </div>

                <div>
                    <input type="submit" name="enviar" class="btn" value="Enviar Mensaje">
                </div>
            </fieldset>
        </form>
        <?php
          include("correo.php");
        ?>
    </section>
    <!--sectión del formulario-->
    <!--End Contacto-->

    <!--footer-->
    <div class="footer">
        <div class="copy">
            <a href="#" class="logo">
                Portafolio<span> by Luis Adrián</span>
            </a>
        </div>
    </div>
    <!--End Sección-->


    <!--link scripts js-->
    <script src="js/scripts.js"></script>
    <!--link js aos-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration:800,
            delay:300
        });
    </script>
</body>

</html>