<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Personas Físicas</title>
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
        <h1>Personas Físicas</h1>
        <p>Gestión de personas físicas y sus datos legales.</p>
        <p>PERSONAS FÍSICAS
Una persona física (o natural) es todo ser humano considerado como sujeto de derecho y obligaciones.

Se diferencia de la persona jurídica, que es una entidad creada por la ley (como una empresa, asociación, fundación, Estado, etc.).
La personalidad jurídica de la persona física empieza con el nacimiento con vida y termina con la muerte (art. 19 y ss. del CCyC).


 Según el Código Civil y Comercial de la Nación Argentina (CCyC):

Inicio de la existencia (Art. 19 CCyC)
La existencia de la persona humana comienza con la concepción.
Se adquiere personalidad plena con el nacimiento con vida, aunque sea por un instante.

Fin de la existencia (Art. 93 CCyC)
Termina con la muerte comprobada legalmente.

Atributos de la persona física (características legales que permiten identificarla y ejercer derechos):

Nombre → apellido y nombre (Arts. 62 a 72 CCyC).
Domicilio → lugar donde la persona reside con intención de permanecer (Arts. 73 a 77).
Estado civil → situación frente al matrimonio, unión convivencial, filiación.
Capacidad → Capacidad de derecho: aptitud para ser titular de derechos y obligaciones (se tiene desde el nacimiento con vida).
Capacidad de ejercicio: aptitud para ejercer esos derechos por sí mismo (plena a los 18 años).<p>

        <!-- Tu contenido de personas físicas aquí -->
    </div>
</body>
</html>