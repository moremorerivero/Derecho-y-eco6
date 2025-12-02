<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trámites DNI - Derecho y Eco6</title>
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
        
        /* CONTENIDO PRINCIPAL */
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
        }

        h2 { 
            color: white;
            margin: 3rem 0 1.5rem 0; 
            border-left: 5px solid rgba(255, 255, 255, 0.8);
            padding-left: 20px;
            font-size: 2rem;
        }

        h3 { 
            color: white; 
            margin: 2rem 0 1rem 0; 
            font-size: 1.5rem;
        }

        h4 {
            color: white;
            margin: 1.5rem 0 1rem 0;
            font-size: 1.3rem;
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

        /* GRID DE REQUISITOS */
        .requirements-grid { 
            display: grid; 
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); 
            gap: 2rem; 
            margin: 2.5rem 0; 
        }

        .requirement-card { 
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

        .requirement-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #667eea, #764ba2);
        }

        .requirement-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 
                0 20px 40px rgba(0, 0, 0, 0.2),
                0 0 0 1px rgba(255, 255, 255, 0.1);
        }

        .requirement-card h3 { 
            color: white; 
            display: flex; 
            align-items: center; 
            gap: 12px; 
            margin-bottom: 1.2rem;
            font-size: 1.4rem;
        }

        .requirement-card ul {
            color: rgba(255, 255, 255, 0.9);
        }

        .requirement-card li {
            margin-bottom: 0.8rem;
            padding-left: 1rem;
            position: relative;
        }

        .requirement-card li::before {
            content: '•';
            color: rgba(255, 255, 255, 0.7);
            position: absolute;
            left: 0;
        }

        /* OFICINAS */
        .locations-grid { 
            display: grid; 
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); 
            gap: 2rem; 
            margin: 2.5rem 0; 
        }

        .location-card { 
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            padding: 2rem;
            border-radius: 18px;
            border: 1px solid rgba(255, 255, 255, 0.15);
            box-shadow: 
                0 8px 25px rgba(0, 0, 0, 0.1),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            transition: all 0.4s ease;
            text-align: center;
        }

        .location-card:hover {
            transform: translateY(-8px);
            box-shadow: 
                0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .location-card h4 { 
            color: white; 
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }

        .location-card p {
            color: rgba(255, 255, 255, 0.9);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        /* NOTA IMPORTANTE */
        .important-note {
            background: rgba(255, 245, 245, 0.2);
            backdrop-filter: blur(15px);
            padding: 2rem;
            border-radius: 18px;
            border-left: 6px solid rgba(255, 100, 100, 0.7);
            margin-top: 3rem;
            display: flex;
            align-items: flex-start;
            gap: 1.5rem;
        }

        .important-note i {
            color: rgba(255, 255, 255, 0.9);
            font-size: 2rem;
            margin-top: 0.5rem;
        }

        .important-note p {
            color: rgba(255, 255, 255, 0.95);
            font-size: 1.1rem;
            line-height: 1.6;
            margin: 0;
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
            .main-content { padding: 1.5rem; }
            h1 { font-size: 2.2rem; }
            .requirements-grid, .locations-grid { grid-template-columns: 1fr; }
            .important-note { flex-direction: column; text-align: center; }
        }

        /* ANIMACIONES */
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
                    <li><a href="/personas-fisicas"><i class="fas fa-user"></i> Personas Físicas</a></li>
                    <li><a href="/dni" class="active"><i class="fas fa-id-card"></i> DNI</a></li>
                    <li><a href="/matrimonios"><i class="fas fa-ring"></i> Matrimonios</a></li>
                </ul>
            </nav>
        </header>

        <main class="main-content">
            <h1>Documento Nacional de Identidad (DNI)</h1>

            <div class="info-card">
                <h2><i class="fas fa-info-circle"></i> Información General</h2>
                <p>El Documento Nacional de Identidad es obligatorio para todas las personas en Argentina y es el medio legal para acreditar la identidad ante el Estado y terceros. Su actualización o cambio es necesaria en distintos momentos de la vida o ante determinadas situaciones, como pérdida, cambio de domicilio o modificación de datos personales.</p>
            </div>

            <div class="requirements-section">
                <h2><i class="fas fa-clipboard-list"></i> Requisitos por Trámite</h2>
                
                <div class="requirements-grid">
                    <div class="requirement-card">
                        <h3><i class="fas fa-child"></i> 5 a 8 años</h3>
                        <p><strong>Actualización Obligatoria</strong></p>
                        <ul>
                            <li>Partida de nacimiento original</li>
                            <li>DNI del padre, madre o tutor</li>
                            <li>Certificado de escolaridad (opcional)</li>
                            <li>Fotografía 4x4 fondo celeste</li>
                        </ul>
                    </div>
                    
                    <div class="requirement-card">
                        <h3><i class="fas fa-user-graduate"></i> 14 años</h3>
                        <p><strong>Actualización Obligatoria</strong></p>
                        <ul>
                            <li>Partida de nacimiento original</li>
                            <li>DNI anterior</li>
                            <li>Certificado de domicilio</li>
                            <li>Fotografía 4x4 fondo celeste</li>
                        </ul>
                    </div>
                    
                    <div class="requirement-card">
                        <h3><i class="fas fa-exclamation-triangle"></i> Extravío/Robo</h3>
                        <p><strong>Duplicado por Pérdida</strong></p>
                        <ul>
                            <li>Denuncia policial o declaración de extravío</li>
                            <li>Partida de nacimiento actualizada</li>
                            <li>Certificado de domicilio</li>
                            <li>Fotografía 4x4 fondo celeste</li>
                        </ul>
                    </div>
                    
                    <div class="requirement-card">
                        <h3><i class="fas fa-truck-moving"></i> Cambio Domicilio</h3>
                        <p><strong>Actualización de Datos</strong></p>
                        <ul>
                            <li>DNI actual</li>
                            <li>Sin necesidad de comprobante de domicilio</li>
                            <li>Fotografía 4x4 fondo celeste (opcional)</li>
                        </ul>
                    </div>

                    <div class="requirement-card">
                        <h3><i class="fas fa-user-edit"></i> Rectificación</h3>
                        <p><strong>Nombre o Género</strong></p>
                        <ul>
                            <li>Partida de nacimiento actualizada</li>
                            <li>Sentencia judicial (si corresponde)</li>
                            <li>DNI anterior</li>
                            <li>Según Ley de Identidad de Género N° 26.743</li>
                        </ul>
                    </div>

                    <div class="requirement-card">
                        <h3><i class="fas fa-passport"></i> Primera Vez</h3>
                        <p><strong>Recién Nacidos</strong></p>
                        <ul>
                            <li>Partida de nacimiento original</li>
                            <li>DNI de ambos padres</li>
                            <li>Certificado de domicilio</li>
                            <li>Fotografía del bebé (especificaciones especiales)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="locations-section">
                <h2><i class="fas fa-map-marker-alt"></i> Oficinas en Misiones</h2>
                <div class="locations-grid">
                    <div class="location-card">
                        <h4>Posadas</h4>
                        <p><i class="fas fa-map-pin"></i> Registro Provincial de las Personas</p>
                        <p>Félix de Azara 2360</p>
                        <p><i class="fas fa-clock"></i> Lunes a Viernes 7:00-13:00</p>
                    </div>
                    <div class="location-card">
                        <h4>Oberá</h4>
                        <p><i class="fas fa-map-pin"></i> Registro Civil</p>
                        <p>Av. José Ingenieros 1050</p>
                        <p><i class="fas fa-clock"></i> Lunes a Viernes 7:00-13:00</p>
                    </div>
                    <div class="location-card">
                        <h4>Eldorado</h4>
                        <p><i class="fas fa-map-pin"></i> Registro Civil</p>
                        <p>Kilómetro 9</p>
                        <p><i class="fas fa-clock"></i> Lunes a Viernes 7:00-13:00</p>
                    </div>
                    <div class="location-card">
                        <h4>Apóstoles</h4>
                        <p><i class="fas fa-map-pin"></i> Registro Civil</p>
                        <p>San Martín 845</p>
                        <p><i class="fas fa-clock"></i> Lunes a Viernes 7:00-13:00</p>
                    </div>
                </div>
            </div>

            <div class="info-card">
                <h3><i class="fas fa-camera"></i> Especificaciones de Foto DNI</h3>
                <ul>
                    <li><strong>Formato:</strong> 4x4 cm (ancho x alto)</li>
                    <li><strong>Fondo:</strong> Celeste claro uniforme</li>
                    <li><strong>Postura:</strong> Frente al fotógrafo, mirada al objetivo</li>
                    <li><strong>Expresión:</strong> Neutral, boca cerrada</li>
                    <li><strong>Vestimenta:</strong> Ropa de calle, sin uniformes</li>
                    <li><strong>Accesorios:</strong> Sin lentes oscuros, gorros o sombreros</li>
                    <li><strong>Calidad:</strong> Reciente, nítida y de frente</li>
                </ul>
            </div>

            <div class="important-note">
                <i class="fas fa-exclamation-triangle"></i>
                <p><strong>Realizar el cambio de DNI en tiempo y forma garantiza el acceso a derechos, trámites y servicios.</strong> Mantener el documento actualizado es fundamental para ejercer derechos civiles, políticos y sociales, así como para realizar trámites bancarios, viajes y gestiones administrativas.</p>
            </div>
        </main>

        <footer>
            <p>&copy; 2023 Derecho y Eco6 - Todos los derechos reservados</p>
        </footer>
    </div>
</body>
</html>