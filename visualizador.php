<?php // visualizador.php
/*
Página exclusiva para usuarios con rol Visualizador.
Bloquea acceso si no hay sesión activa.
*/
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== 'Visualizador') {
  header('Location: index.html');
  exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataforma de Servicios</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">
            <h1>Plataforma de Servicios</h1>
            <p>Conoce nuestros servicios exclusivos y mucho más</p>
        </div>
        <nav>
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="servicios.html">Servicios</a></li>
                <li><a href="testimonios.html">Testimonios</a></li>
                <li><a href="Contacto.html">Contacto</a></li>
                <!-- Cambiar href para redirigir a la página de inicio de sesión y registro -->
                <li><a href="inicio de sesion y registro.html">Iniciar Sesión</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Sección de Servicios Destacados -->
        <section id="services">
            <h2>Servicios Destacados</h2>
            <div class="service-container">
                <!-- Servicio 1 -->
                <div class="service-card">
                    <img src="Lenceria muebles.jpg" alt="Servicio 1" class="service-img">
                    <h3>Lenceria para muebles</h3>
                    <p>Ofrecemos una gran variedad de fundas y protectores para mantener tus muebles siempre nuevos y en excelente estado.</p>
                    <a href="lenceria muebles.html" class="cta-button">Más Información</a>
                </div>

                <!-- Servicio 2 -->
                <div class="service-card">
                    <img src="limpieza muebles.jpg" alt="Servicio 2" class="service-img">
                    <h3>Limpieza de muebles</h3>
                    <p>Brindamos servicios profesionales de limpieza y mantenimiento para tus muebles, garantizando la higiene y durabilidad.</p>
                    <a href="limpieza muebles.html" class="cta-button">Más Información</a>
                </div>

                <!-- Servicio 3 -->
                <div class="service-card">
                    <img src="arreglar mueble1.jpg" alt="Servicio 3" class="service-img">
                    <h3>Arreglos de muebles</h3>
                    <p>Reparamos tus muebles dañados y restauramos su aspecto original con técnicas profesionales y materiales de alta calidad.</p>
                    <a href="arreglo muebles.html" class="cta-button">Más Información</a>
                </div>
            </div>
        </section>

        <!-- Testimonios -->
        <section id="testimonials">
            <h2>Lo que dicen nuestros clientes</h2>
            <div class="testimonial">
                <p>"Excelente servicio, muy recomendable!" - Juan Pérez</p>
            </div>
            <div class="testimonial">
                <p>"Un cambio radical en mi vida gracias a este servicio." - Ana López</p>
            </div>
        </section>

        <!-- Llamado a la acción -->
        <section id="cta">
            <h2>¡Regístrate ahora!</h2>
            <p>Comienza a disfrutar de nuestros servicios hoy mismo.</p>
            <a href="#register" class="cta-button">Regístrate</a>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Plataforma de Servicios. Todos los derechos reservados.</p>
    </footer>
</body>
</html>

