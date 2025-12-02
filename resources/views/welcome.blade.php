<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOGACINI - Tu Asistente Legal</title>
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
        
        /* HERO SECTION */
        .hero-section { 
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            border-radius: 25px;
            padding: 4rem 3rem;
            box-shadow: 
                0 20px 40px rgba(0, 0, 0, 0.1),
                inset 0 1px 0 rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.15);
            margin-bottom: 3rem;
            text-align: center;
        }

        .hero-section h1 { 
            color: white;
            margin-bottom: 1.5rem; 
            font-size: 3.5rem;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            font-weight: 700;
            line-height: 1.2;
        }

        .hero-text {
            max-width: 800px;
            margin: 0 auto;
            font-size: 1.3rem;
            color: rgba(255, 255, 255, 0.95);
            line-height: 1.7;
        }

        /* FEATURES GRID */
        .features-grid { 
            display: grid; 
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); 
            gap: 2.5rem; 
            margin: 3rem 0; 
        }

        .feature-card { 
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            padding: 3rem 2rem;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.15);
            box-shadow: 
                0 8px 25px rgba(0, 0, 0, 0.1),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #667eea, #764ba2);
        }

        .feature-card::after {
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

        .feature-card:hover::after {
            opacity: 1;
        }

        .feature-card:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 
                0 25px 50px rgba(0, 0, 0, 0.25),
                0 0 0 1px rgba(255, 255, 255, 0.15);
        }

        .feature-card i { 
            font-size: 4rem; 
            color: rgba(255, 255, 255, 0.9); 
            margin-bottom: 1.5rem;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
        }

        .feature-card:hover i {
            transform: scale(1.2) rotate(5deg);
        }

        .feature-card h3 { 
            color: white; 
            margin-bottom: 1rem;
            font-size: 1.8rem;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .feature-card p {
            color: rgba(255, 255, 255, 0.85);
            font-size: 1.1rem;
            line-height: 1.6;
        }

        /* SERVICES PREVIEW */
        .services-preview {
            margin: 4rem 0;
        }

        .services-preview h2 {
            color: white;
            text-align: center;
            margin-bottom: 3rem;
            font-size: 2.5rem;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
        }

        .services-grid { 
            display: grid; 
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); 
            gap: 2rem; 
        }

        .service-item { 
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            padding: 2.5rem 2rem;
            border-radius: 18px;
            border: 1px solid rgba(255, 255, 255, 0.15);
            box-shadow: 
                0 8px 25px rgba(0, 0, 0, 0.1),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            transition: all 0.4s ease;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .service-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1));
            border-radius: 18px;
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .service-item:hover::before {
            opacity: 1;
        }

        .service-item:hover {
            transform: translateY(-8px);
            box-shadow: 
                0 20px 40px rgba(0, 0, 0, 0.2),
                0 0 0 1px rgba(255, 255, 255, 0.1);
        }

        .service-item i {
            font-size: 3rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 1.5rem;
            transition: transform 0.3s ease;
        }

        .service-item:hover i {
            transform: scale(1.2);
        }

        .service-item h3 {
            color: white;
            margin-bottom: 1rem;
            font-size: 1.4rem;
        }

        .service-item p {
            color: rgba(255, 255, 255, 0.85);
            line-height: 1.5;
        }

        /* CTA SECTION */
        .cta-section {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(20px);
            border-radius: 25px;
            padding: 4rem;
            text-align: center;
            margin: 4rem 0;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 
                0 15px 35px rgba(0, 0, 0, 0.15),
                inset 0 1px 0 rgba(255, 255, 255, 0.2);
        }

        .cta-section h2 {
            color: white;
            margin-bottom: 1.5rem;
            font-size: 2.5rem;
        }

        .cta-section p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.2rem;
            margin-bottom: 2.5rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-button {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            border: none;
            padding: 1.2rem 3rem;
            font-size: 1.3rem;
            font-weight: 600;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.4s ease;
            box-shadow: 
                0 8px 25px rgba(102, 126, 234, 0.4),
                0 4px 15px rgba(118, 75, 162, 0.3);
            display: inline-flex;
            align-items: center;
            gap: 12px;
        }

        .cta-button:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 
                0 15px 35px rgba(102, 126, 234, 0.5),
                0 8px 25px rgba(118, 75, 162, 0.4);
        }
        
        /* FOOTER */
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
            .hero-section { padding: 2rem 1.5rem; }
            .hero-section h1 { font-size: 2.5rem; }
            .features-grid, .services-grid { grid-template-columns: 1fr; }
            .cta-section { padding: 2.5rem 1.5rem; }
        }

        /* ANIMACIONES */
        .hero-section, .features-grid, .services-preview, .cta-section {
            animation: fadeInUp 0.8s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
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
                    <li><a href="/" class="active"><i class="fas fa-home"></i> Inicio</a></li>
                    <li><a href="/servicios"><i class="fas fa-concierge-bell"></i> Servicios</a></li>
                    <li><a href="/personas-fisicas"><i class="fas fa-user"></i> Personas Físicas</a></li>
                    <li><a href="/dni"><i class="fas fa-id-card"></i> DNI</a></li>
                    <li><a href="/matrimonios"><i class="fas fa-ring"></i> Matrimonios</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <section class="hero-section">
                <h1>Bienvenido a Abogacini</h1>
                <div class="hero-text">
                    <p>Tu plataforma legal inteligente que combina tecnología avanzada con expertise jurídico para brindarte soluciones legales accesibles y confiables 24/7.</p>
                </div>
            </section>

            <section class="features-grid">
                <div class="feature-card">
                    <i class="fas fa-robot"></i>
                    <h3>Abogacini IA</h3>
                    <p>Asistente legal inteligente disponible las 24 horas para resolver tus consultas jurídicas de manera instantánea y precisa.</p>
                </div>
                
                <div class="feature-card">
                    <i class="fas fa-shield-alt"></i>
                    <h3>Confidencialidad Total</h3>
                    <p>Tus consultas están protegidas con los más altos estándares de seguridad y encriptación de datos.</p>
                </div>
                
                <div class="feature-card">
                    <i class="fas fa-bolt"></i>
                    <h3>Respuestas Inmediatas</h3>
                    <p>Obtené información legal verificada y actualizada en segundos, sin esperas ni trámites burocráticos.</p>
                </div>
            </section>

            <section class="services-preview">
                <h2>Nuestros Servicios Legales</h2>
                <div class="services-grid">
                    <div class="service-item">
                        <i class="fas fa-user"></i>
                        <h3>Personas Físicas</h3>
                        <p>Asesoramiento integral sobre derechos, obligaciones y trámites para individuos.</p>
                    </div>
                    
                    <div class="service-item">
                        <i class="fas fa-id-card"></i>
                        <h3>Trámites DNI</h3>
                        <p>Gestión completa de Documento Nacional de Identidad y documentación personal.</p>
                    </div>
                    
                    <div class="service-item">
                        <i class="fas fa-ring"></i>
                        <h3>Matrimonios</h3>
                        <p>Uniones civiles, convivenciales y todos los trámites relacionados con familia.</p>
                    </div>
                    
                    <div class="service-item">
                        <i class="fas fa-file-contract"></i>
                        <h3>Actas y Certificados</h3>
                        <p>Solicitud de actas de nacimiento, defunción, matrimonio y otros documentos.</p>
                    </div>
                </div>
            </section>

            <section class="cta-section">
                <h2>¿Necesitás Asesoría Legal?</h2>
                <p>Nuestro asistente Abogacini está disponible para resolver tus consultas de manera inmediata y confidencial.</p>
                <button class="cta-button" onclick="window.location.href='/servicios'">
                    <i class="fas fa-comments"></i>
                    Consultar con Abogacini
                </button>
            </section>
        </main>

        <footer>
            <p>&copy; 2023 Derecho y Eco6 - Todos los derechos reservados</p>
        </footer>
    </div>

    <script>
        // Efecto de partículas para el fondo (opcional)
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.cta-button, .service-item, .feature-card');
            
            buttons.forEach(button => {
                button.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px) scale(1.05)';
                });
                
                button.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });
        });
    </script>
</body>
</html>