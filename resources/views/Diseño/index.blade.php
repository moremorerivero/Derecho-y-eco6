<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Diseño</title>
    <style>
        /* Fondo con degradado de tres colores manteniendo la paleta original */
        body {
            background: linear-gradient(135deg, 
                #e99be2ff 0%,     /* Color principal del menú */
                #82a4cfff 50%,    /* Versión más oscura del color principal */
                #29207cff 100%    /* Versión aún más oscura */
            );
            background-attachment: fixed;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            font-family: Arial, sans-serif;
            color: #333;
        }

        /* Mejorar el menú de navegación manteniendo el color original */
        nav {
            background: rgba(143, 104, 196, 0.95) !important;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.25);
        }

        nav a {
            margin-right: 20px;
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 10px 18px;
            border-radius: 8px;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        nav a:hover {
            background-color: rgba(255, 255, 255, 0.25);
            border-color: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }

        /* Contenedor para el contenido principal */
        .content {
            background: linear-gradient(145deg, 
                rgba(255, 255, 255, 0.98), 
                rgba(245, 245, 255, 0.95)
            );
            padding: 40px;
            border-radius: 20px;
            margin: 30px auto;
            max-width: 800px;
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.2);
            text-align: center;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        h1 {
            color: #5a4b81;
            margin-bottom: 25px;
            font-size: 2.5em;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        p {
            color: #130618ff;
            font-size: 1.2em;
            line-height: 1.8;
            margin-top: 15px;
        }

        /* Efectos adicionales para mejor apariencia */
        .content:hover {
            transform: translateY(-5px);
            transition: transform 0.3s ease;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
        }

        /* Responsive design */
        @media (max-width: 768px) {
            nav {
                padding: 10px;
                text-align: center;
            }
            
            nav a {
                display: block;
                margin: 8px 0;
                padding: 12px;
            }
            
            .content {
                padding: 25px;
                margin: 20px 15px;
            }
            
            h1 {
                font-size: 2em;
            }
        }
    </style>
</head>
<body>
    <!-- Menú -->
    <nav>
        <a href="{{ url('/') }}">Inicio</a>
        <a href="{{ url('diseño') }}">Personas Fisicas</a>
        <a href="{{ url('informacion') }}">Información</a>
        
    </nav>

    <div class="content">
        <h1>Bienvenido a la Página de Diseño</h1>
        <p>PERSONAS FÍSICAS
queso pan mermelada y atun.
</p>
        
    </div>
</body>
</html>

