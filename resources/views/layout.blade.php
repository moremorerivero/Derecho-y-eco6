<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        nav {
            background-color: #595563ff;
            padding: 10px;
        }
        nav a {
            margin-right: 15px;
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .content {
            padding: 20px;
        }
    </style>
</head>
<body>
    <!-- Menú de navegación -->
    <nav>
        <a href="{{ url('/') }}">Inicio</a>
        <a href="{{ url('Personas Fisicasss') }}">Diseño</a>
        <a href="{{ url('informacion') }}">Información</a>
    </nav>

    <!-- Contenido dinámico -->
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
