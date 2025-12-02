<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Derecho y Eco6')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #1a3c6e 0%, #2c5282 100%);
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* HEADER Y NAVEGACIÓN */
        header {
            background: white;
            border-radius: 15px;
            padding: 1rem;
            margin-bottom: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        nav ul {
            display: flex;
            list-style: none;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
        }

        nav ul li a {
            color: #1a3c6e;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        nav ul li a:hover, nav ul li a.active {
            background: #1a3c6e;
            color: white;
            transform: translateY(-2px);
        }

        /* CONTENIDO PRINCIPAL */
        .main-content {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            min-height: 500px;
        }

        h1 {
            color: #1a3c6e;
            text-align: center;
            margin-bottom: 2rem;
            font-size: 2.5rem;
        }

        h2 {
            color: #2d3748;
            margin: 2rem 0 1rem 0;
            border-left: 4px solid #1a3c6e;
            padding-left: 15px;
        }

        /* FOOTER */
        footer {
            text-align: center;
            color: white;
            padding: 2rem;
            margin-top: 2rem;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
                align-items: center;
            }
            nav ul li {
                width: 100%;
                text-align: center;
            }
            .main-content {
                padding: 1rem;
            }
        }
    </style>
    @yield('styles')
</head>
<body>
    <div class="container">
        <header>
            <nav>
                <ul>
                    <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">
                        <i class="fas fa-home"></i> Inicio
                    </a></li>
                    <li><a href="{{ url('/servicios') }}" class="{{ request()->is('servicios') ? 'active' : '' }}">
                        <i class="fas fa-concierge-bell"></i> Servicios
                    </a></li>
                    <li><a href="{{ url('/personas-fisicas') }}" class="{{ request()->is('personas-fisicas') ? 'active' : '' }}">
                        <i class="fas fa-user"></i> Personas Físicas
                    </a></li>
                    <li><a href="{{ url('/dni') }}" class="{{ request()->is('dni') ? 'active' : '' }}">
                        <i class="fas fa-id-card"></i> DNI
                    </a></li>
                    <li><a href="{{ url('/matrimonios') }}" class="{{ request()->is('matrimonios') ? 'active' : '' }}">
                        <i class="fas fa-ring"></i> Matrimonios
                    </a></li>
                </ul>
            </nav>
        </header>

        <main class="main-content">
            @yield('content')
        </main>

        <footer>
            <p>&copy; 2025 Derecho y Eco6 - Todos los derechos reservados</p>
        </footer>
    </div>

    @yield('scripts')
</body>
</html>