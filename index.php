<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="img/klipartz.com (1).png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Pagina</title>
</head>
<body>
    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">VTC</a>
            <input type="checkbox" id="menu">
            <label for="menu">
                <img src="menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicio</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </div>
        <div class="header-content container">
            <div class="header-txt">
                <h1>Veterinary</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                   Nulla corporis explicabo architecto temporibus rem nihil saepe nisi iste tempora sequi voluptatem,
                   accusamus necessitatibus officia optio vel tenetur, deserunt ipsam qui.
                </p>

                   <a href="#" class="btn-1">Informacion</a>
            </div>
            <div class="header-img">
                <img src="klipartz.com.png" alt="imagen-perro">
            </div>
        </div>
    </header>
    <section class="about container">
        <div class="about-img">
            <img src="martha-dominguez-de-gouveia-nMyM7fxpokE-unsplash.jpg" alt="about-img">
        </div>
        <div class="about-txt">
            <h2>Nosotros</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
               Officiis odit, accusamus architecto aperiam veritatis reiciendis recusandae culpa nemo dolores asperiores.
               Animi molestiae quam deserunt neque expedita eos sequi vero dolores.
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Officiis odit, accusamus architecto aperiam veritatis reiciendis recusandae culpa nemo dolores asperiores.
                Animi molestiae quam deserunt neque expedita eos sequi vero dolores.
            </p>
        </div>
    </section>
    <main class="servicios container">
        <h2>Servicios</h2>
        <div class="servicios-content container">
            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-hospital-user"></i>
                <h3>Cirugía Veterinaria</h3>
            </div>
            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-stethoscope"></i>
                <h3>Dermatología Veterinaria</h3>
            </div>
            <div class="servicio-1">
                <i class="fa-solid fa-shield-cat"></i>
                <h3>Patología Veterinaria</h3>
            </div>
            <div class="servicio-1">
                <i class="fa-solid fa-tooth"></i>
                <h3>Odontología Veterinaria</h3>
            </div>
        </div>
    </main>
    <section class="formulario container">
        <form method="post" autocomplete="off">
            <h2>Agenda Consulta!!</h2>

            <div class="input-group">
                <div class="input-container">
                    <input type="text" name="name" placeholder="Nombre y Apellido">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input-container">
                    <input type="tel" name="phone" placeholder="Telefono">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="input-container">
                    <input type="email" name="email" placeholder="Correo">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="input-container">
                   <textarea name="message" placeholder="Detalles de la consulta"></textarea>
                </div>
                <input type="submit" name="send" class="btn" onclick="myFunction()">
            </div>
        </form>
    </section>
    <footer class="footer">
        <div class="footer-content container">
            <div class="link">
                <a href="#" class="logo">VTC</a>
            </div>
            <div class="link">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicio</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <?php 
        include("send.php");
    ?>
    <script> 
        function myFunction(){
            window.location.href="http://localhost/Pagina"
        }
    </script>
</body>
</html>