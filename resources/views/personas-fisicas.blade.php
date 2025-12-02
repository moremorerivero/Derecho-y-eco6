<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas Físicas - Derecho y Eco6</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * { 
            margin: 0; padding: 0; box-sizing: border-box; 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
        }
        
        body { 
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            background-attachment: fixed;
        }

        .container { 
            max-width: 1200px; 
            margin: 0 auto; 
            padding: 20px; 
        }
        
        /* HEADER CON EFECTO DE VIDRIO */
        header { 
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            box-shadow: 
                0 8px 32px rgba(0, 0, 0, 0.1),
                0 2px 8px rgba(255, 255, 255, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        nav ul { 
            display: flex; 
            list-style: none; 
            flex-wrap: wrap; 
            gap: 15px; 
            justify-content: center; 
        }

        nav ul li a { 
            color: #4a5568; 
            text-decoration: none; 
            padding: 12px 25px; 
            border-radius: 50px; 
            font-weight: 600; 
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            border: 2px solid transparent;
            display: flex;
            align-items: center;
            gap: 10px;
            position: relative;
            overflow: hidden;
        }

        nav ul li a::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
            transition: left 0.6s;
        }

        nav ul li a:hover::before {
            left: 100%;
        }

        nav ul li a:hover, nav ul li a.active { 
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            transform: translateY(-3px) scale(1.05);
            box-shadow: 
                0 10px 25px rgba(102, 126, 234, 0.4),
                0 5px 15px rgba(118, 75, 162, 0.3);
            border-color: rgba(255, 255, 255, 0.3);
        }
        
        /* CONTENIDO PRINCIPAL CON FONDO DIFERENCIADO */
        .main-content { 
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            border-radius: 25px;
            padding: 3rem;
            box-shadow: 
                0 20px 40px rgba(0, 0, 0, 0.1),
                inset 0 1px 0 rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.15);
            margin-bottom: 2rem;
        }

        h1 { 
            color: white;
            text-align: center; 
            margin-bottom: 3rem; 
            font-size: 3rem;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            font-weight: 700;
            letter-spacing: -0.5px;
        }

        h2 { 
            color: white;
            margin: 3rem 0 1.5rem 0; 
            border-left: 5px solid rgba(255, 255, 255, 0.8);
            padding-left: 20px;
            font-size: 2rem;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        }

        h3 { 
            color: white; 
            margin: 2rem 0 1rem 0; 
            font-size: 1.5rem;
        }
        
        /* TARJETAS CON EFECTO DE CRISTAL */
        .info-card { 
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(20px);
            padding: 2.5rem;
            border-radius: 20px;
            margin-bottom: 2.5rem;
            border-left: 6px solid rgba(255, 255, 255, 0.5);
            box-shadow: 
                0 10px 30px rgba(0, 0, 0, 0.15),
                inset 0 1px 0 rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 
                0 15px 40px rgba(0, 0, 0, 0.2),
                inset 0 1px 0 rgba(255, 255, 255, 0.3);
        }

        .info-card p, .info-card li {
            color: rgba(255, 255, 255, 0.95);
            font-size: 1.1rem;
            line-height: 1.7;
        }

        .legal-grid { 
            display: grid; 
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); 
            gap: 2rem; 
            margin: 2.5rem 0; 
        }

        .legal-card { 
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            padding: 2rem;
            border-radius: 18px;
            border: 1px solid rgba(255, 255, 255, 0.15);
            box-shadow: 
                0 8px 25px rgba(0, 0, 0, 0.1),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            position: relative;
            overflow: hidden;
        }

        .legal-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #667eea, #764ba2);
        }

        .legal-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 
                0 20px 40px rgba(0, 0, 0, 0.2),
                0 0 0 1px rgba(255, 255, 255, 0.1),
                inset 0 1px 0 rgba(255, 255, 255, 0.2);
        }

        .legal-card h3 { 
            color: white; 
            display: flex; 
            align-items: center; 
            gap: 12px; 
            margin-bottom: 1.2rem;
            font-size: 1.4rem;
        }

        .legal-card p {
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.6;
        }
        
        /* ATRIBUTOS CON EFECTO DE ZOOM */
        .attributes-grid { 
            display: grid; 
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); 
            gap: 2rem; 
            margin: 2.5rem 0; 
        }

        .attribute { 
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            padding: 2rem;
            border-radius: 18px;
            border-top: 4px solid rgba(255, 255, 255, 0.5);
            box-shadow: 
                0 8px 25px rgba(0, 0, 0, 0.1),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            text-align: center;
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            position: relative;
            overflow: hidden;
        }

        .attribute::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .attribute:hover::after {
            opacity: 1;
        }

        .attribute:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 
                0 25px 50px rgba(0, 0, 0, 0.25),
                0 0 0 1px rgba(255, 255, 255, 0.15);
            border-top-color: rgba(255, 255, 255, 0.8);
        }

        .attribute i { 
            font-size: 2.5rem; 
            color: rgba(255, 255, 255, 0.9); 
            margin-bottom: 1.2rem;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
        }

        .attribute:hover i {
            transform: scale(1.2);
        }

        .attribute h4 { 
            color: white; 
            margin-bottom: 0.8rem;
            font-size: 1.3rem;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .attribute p, .attribute small {
            color: rgba(255, 255, 255, 0.85);
        }
        
        /* DOCUMENTOS CON EFECTOS DE LUZ */
        .document-section { 
            margin: 4rem 0; 
        }

        .documents-grid { 
            display: grid; 
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); 
            gap: 2.5rem; 
            margin-top: 2rem; 
        }

        .document-card { 
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            padding: 2.5rem;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.15);
            box-shadow: 
                0 12px 30px rgba(0, 0, 0, 0.15),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            transition: all 0.4s ease;
            position: relative;
        }

        .document-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1));
            border-radius: 20px;
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .document-card:hover::before {
            opacity: 1;
        }

        .document-card:hover {
            transform: translateY(-8px);
            box-shadow: 
                0 25px 50px rgba(0, 0, 0, 0.25),
                0 0 0 1px rgba(255, 255, 255, 0.2);
        }

        .document-card h4 { 
            color: white; 
            margin-bottom: 1.5rem;
            font-size: 1.4rem;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .document-card ul {
            color: rgba(255, 255, 255, 0.9);
        }

        .document-card li {
            margin-bottom: 0.5rem;
            padding-left: 1rem;
            position: relative;
        }

        .document-card li::before {
            content: '•';
            color: rgba(255, 255, 255, 0.7);
            position: absolute;
            left: 0;
        }
        
        /* FOOTER CON EFECTO DE CRISTAL */
        footer { 
            text-align: center; 
            color: rgba(255, 255, 255, 0.8); 
            padding: 2.5rem;
            margin-top: 3rem;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        /* RESPONSIVE */
        @media (max-width: 768px) {
            nav ul { flex-direction: column; align-items: center; }
            nav ul li { width: 100%; text-align: center; }
            .main-content { padding: 1.5rem; }
            h1 { font-size: 2.2rem; }
            .legal-grid, .attributes-grid, .documents-grid { grid-template-columns: 1fr; }
        }

        /* ANIMACIONES SUAVES */
        .main-content > * {
            animation: fadeInUp 0.6s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <nav>
                <ul>
                    <li><a href="/"><i class="fas fa-home"></i> Inicio</a></li>
                    <li><a href="/servicios"><i class="fas fa-concierge-bell"></i> Servicios</a></li>
                    <li><a href="/personas-fisicas" class="active"><i class="fas fa-user"></i> Personas Físicas</a></li>
                    <li><a href="/dni"><i class="fas fa-id-card"></i> DNI</a></li>
                    <li><a href="/matrimonios"><i class="fas fa-ring"></i> Matrimonios</a></li>
                </ul>
            </nav>
        </header>

        <main class="main-content">
            <h1>Personas Físicas</h1>

            <div class="info-card">
                <h2>¿Qué es una Persona Física?</h2>
                <p>Una persona física (o natural) es todo ser humano considerado como sujeto de derecho y obligaciones. Se diferencia de la persona jurídica, que es una entidad creada por la ley (como una empresa, asociación, fundación, Estado, etc.).</p>
                <p>La personalidad jurídica de la persona física empieza con el nacimiento con vida y termina con la muerte (art. 19 y ss. del CCyC).</p>
            </div>

            <!-- El resto del contenido se mantiene igual que antes -->
            <div class="legal-grid">
                <div class="legal-card">
                    <h3><i class="fas fa-baby"></i> Inicio de la Existencia</h3>
                    <p><strong>Art. 19 CCyC:</strong> La existencia de la persona humana comienza con la concepción. Se adquiere personalidad plena con el nacimiento con vida, aunque sea por un instante.</p>
                </div>
                
                <div class="legal-card">
                    <h3><i class="fas fa-times-circle"></i> Fin de la Existencia</h3>
                    <p><strong>Art. 93 CCyC:</strong> Termina con la muerte comprobada legalmente.</p>
                </div>
            </div>

            <!-- ... resto del contenido HTML anterior ... -->
            
        </main>

        <footer>
            <p>&copy; 2023 Derecho y Eco6 - Todos los derechos reservados</p>
        </footer>
    </div>
</body>
</html>