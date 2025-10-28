<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Información Legal</title>
    <style>
        body {
            background: linear-gradient(135deg, #8f68c4 0%, #7a4fa8 50%, #6a3d9e 100%);
            background-attachment: fixed;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        nav {
            background: rgba(143, 104, 196, 0.95);
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        nav a {
            margin-right: 20px;
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 10px 18px;
            border-radius: 8px;
        }
        .content {
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 20px;
            margin: 30px auto;
            max-width: 800px;
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{ url('/') }}">Inicio</a>
        <a href="{{ url('diseño') }}">Diseño</a>
        <a href="{{ url('role') }}">Roles</a>
        <a href="{{ url('informacion') }}">Información</a>
        <a href="{{ url('personas') }}">Personas Físicas</a>
    </nav>

    <div class="content">
        <h1>Información Legal</h1>
        <p>Aquí encontrarás información jurídica y legal relevante.</p>
        <!-- Tu contenido de información aquí -->
    </div>
</body>
</html>