<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrimonios y Uniones - Derecho y Eco6</title>
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

        /* GRID DE OPCIONES */
        .options-grid { 
            display: grid; 
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); 
            gap: 2rem; 
            margin: 2.5rem 0; 
        }

        .option-card { 
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            padding: 2.5rem;
            border-radius: 18px;
            border: 1px solid rgba(255, 255, 255, 0.15);
            box-shadow: 
                0 8px 25px rgba(0, 0, 0, 0.1),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .option-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #667eea, #764ba2);
        }

        .option-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 
                0 20px 40px rgba(0, 0, 0, 0.2),
                0 0 0 1px rgba(255, 255, 255, 0.1);
        }

        .option-card i { 
            font-size: 3rem; 
            color: rgba(255, 255, 255, 0.9); 
            margin-bottom: 1.5rem;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
        }

        .option-card:hover i {
            transform: scale(1.2);
        }

        .option-card h3 { 
            color: white; 
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
        }

        .option-card ul {
            color: rgba(255, 255, 255, 0.9);
            text-align: left;
        }

        .option-card li {
            margin-bottom: 0.8rem;
            padding-left: 1rem;
            position: relative;
        }

        .option-card li::before {
            content: '•';
            color: rgba(255, 255, 255, 0.7);
            position: absolute;
            left: 0;
        }

        /* DOCUMENTOS */
        .documents-grid { 
            display: grid; 
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); 
            gap: 2rem; 
            margin: 2.5rem 0; 
        }

        .document-card { 
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            padding: 2.5rem;
            border-radius: 18px;
            border: 1px solid rgba(255, 255, 255, 0.15);
            box-shadow: 
                0 8px 25px rgba(0, 0, 0, 0.1),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            transition: all 0.4s ease;
        }

        .document-card:hover {
            transform: translateY(-8px);
            box-shadow: 
                0 20px 40px rgba(0, 0, 0, 0.2);
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
            margin-bottom: 0.8rem;
            padding-left: 1rem;
            position: relative;
        }

        .document-card li::before {
            content: '•';
            color: rgba(255, 255, 255, 0.7);
            position: absolute;
            left: 0;
        }

        /* RÉGIMEN PATRIMONIAL */
        .regimen-grid { 
            display: grid; 
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); 
            gap: 2rem; 
            margin: 2.5rem 0; 
        }

        .regimen-card { 
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

        .regimen-card:hover {
            transform: translateY(-8px);
            box-shadow: 
                0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .regimen-card h4 { 
            color: white; 
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }

        .regimen-card p {
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.6;
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
            .options-grid, .documents-grid, .regimen-grid { grid-template-columns: 1fr; }
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
                    <li><a href="/dni"><i class="fas fa-id-card"></i> DNI</a></li>
                    <li><a href="/matrimonios" class="active"><i class="fas fa-ring"></i> Matrimonios</a></li>
                </ul>
            </nav>
        </header>

        <main class="main-content">
            <h1>Matrimonios y Uniones Convivenciales</h1>

            <div class="info-card">
                <h2><i class="fas fa-heart"></i> Uniones Legales en Argentina</h2>
                <p>El Código Civil y Comercial de la Nación reconoce dos tipos de uniones familiares: el <strong>matrimonio</strong> y la <strong>unión convivencial</strong>. Ambas otorgan derechos y obligaciones, pero con diferencias significativas en su régimen jurídico.</p>
                <p>El matrimonio requiere formalización ante registro civil, mientras que la unión convivencial surge de la cohabitación prolongada y puede inscribirse voluntariamente.</p>
            </div>

            <div class="options-grid">
                <div class="option-card">
                    <i class="fas fa-ring"></i>
                    <h3>Matrimonio Civil</h3>
                    <p><strong>Unión formal ante registro civil</strong></p>
                    <ul>
                        <li>Celebración ante oficial público</li>
                        <li>Régimen de comunidad de ganancias</li>
                        <li>Derecho sucesorio automático</li>
                        <li>Reconocimiento internacional</li>
                        <li>Divorcio como única forma de disolución</li>
                        <li>Derecho a alimentos entre cónyuges</li>
                    </ul>
                </div>
                
                <div class="option-card">
                    <i class="fas fa-users"></i>
                    <h3>Unión Convivencial</h3>
                    <p><strong>Unión de hecho registrable</strong></p>
                    <ul>
                        <li>Surge por convivencia prolongada (2+ años)</li>
                        <li>Inscripción voluntaria en registro</li>
                        <li>Régimen de separación de bienes</li>
                        <li>Derecho sucesorio limitado</li>
                        <li>Extinción por simple separación</li>
                        <li>Derecho a alimentos temporal</li>
                    </ul>
                </div>
                
                <div class="option-card">
                    <i class="fas fa-file-contract"></i>
                    <h3>Trámites Posteriores</h3>
                    <p><strong>Gestiones post-uniones</strong></p>
                    <ul>
                        <li>Divorcio vincular</li>
                        <li>Separación de bienes</li>
                        <li>Alimentos y compensaciones</li>
                        <li>Tenencia y cuidado personal de hijos</li>
                        <li>Régimen de comunicación</li>
                        <li>Liquidación sociedad conyugal</li>
                    </ul>
                </div>
            </div>

            <div class="documents-section">
                <h2><i class="fas fa-file-alt"></i> Documentación Requerida</h2>
                
                <div class="documents-grid">
                    <div class="document-card">
                        <h4><i class="fas fa-ring"></i> Para Matrimonio Civil</h4>
                        <ul>
                            <li><strong>DNI original y copia</strong> de ambos contrayentes</li>
                            <li><strong>Partida de nacimiento</strong> actualizada (máx. 6 meses)</li>
                            <li><strong>Certificado de domicilio</strong> actualizado</li>
                            <li><strong>2 testigos mayores de edad</strong> con DNI</li>
                            <li><strong>Certificado de soltería</strong> o estado civil</li>
                            <li><strong>Acta de defunción</strong> de anterior cónyuge (si aplica)</li>
                            <li><strong>Sentencia de divorcio</strong> (si aplica)</li>
                            <li><strong>Pago de tasas</strong> correspondientes</li>
                        </ul>
                    </div>

                    <div class="document-card">
                        <h4><i class="fas fa-users"></i> Para Unión Convivencial</h4>
                        <ul>
                            <li><strong>DNI original y copia</strong> de ambos convivientes</li>
                            <li><strong>Partida de nacimiento</strong> actualizada</li>
                            <li><strong>Certificado de domicilio</strong> compartido</li>
                            <li><strong>Declaración jurada</strong> de convivencia</li>
                            <li><strong>2 testigos</strong> que acrediten convivencia</li>
                            <li><strong>Certificado de inexistencia</strong> de impedimentos</li>
                            <li><strong>Pactos de convivencia</strong> (opcional)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="info-card">
                <h3><i class="fas fa-balance-scale"></i> Régimen Patrimonial</h3>
                <p>El Código Civil establece diferentes regímenes patrimoniales según el tipo de unión:</p>
                
                <div class="regimen-grid">
                    <div class="regimen-card">
                        <h4>Comunidad de Ganancias</h4>
                        <p><strong>Matrimonio (por defecto)</strong></p>
                        <p>Bienes propios de cada cónyuge y bienes gananciales adquiridos durante el matrimonio. Al disolución, se dividen los bienes gananciales.</p>
                    </div>
                    
                    <div class="regimen-card">
                        <h4>Separación de Bienes</h4>
                        <p><strong>Unión Convivencial (por defecto)</strong></p>
                        <p>Cada conviviente mantiene la propiedad exclusiva de sus bienes. Pueden realizar pactos de convivencia para establecer otro régimen.</p>
                    </div>
                    
                    <div class="regimen-card">
                        <h4>Régimen Mixto</h4>
                        <p><strong>Pacto Especial</strong></p>
                        <p>Los cónyuges pueden convenir mediante capitulaciones matrimoniales un régimen diferente al legal, previo a la celebración.</p>
                    </div>
                </div>
            </div>

            <div class="info-card">
                <h3><i class="fas fa-gavel"></i> Requisitos Legales Esenciales</h3>
                <div class="requirements-grid">
                    <div class="option-card">
                        <h4>Capacidad</h4>
                        <ul>
                            <li>Mayoría de edad (18 años)</li>
                            <li>Consentimiento libre y espontáneo</li>
                            <li>Ausencia de vínculo matrimonial previo</li>
                            <li>No parentesco cercano</li>
                        </ul>
                    </div>
                    
                    <div class="option-card">
                        <h4>Formalidades</h4>
                        <ul>
                            <li>Celebración ante oficial público</li>
                            <li>Presencia de dos testigos</li>
                            <li>Manifestación expresa de voluntad</li>
                            <li>Inscripción en registro civil</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="info-card">
                <h3><i class="fas fa-exclamation-circle"></i> Efectos Jurídicos</h3>
                <ul>
                    <li><strong>Derecho alimentario:</strong> Obligación de alimentos entre cónyuges/convivientes</li>
                    <li><strong>Derecho sucesorio:</strong> Participación en la herencia del causante</li>
                    <li><strong>Derecho de representación:</strong> Capacidad para representar al otro en actos jurídicos</li>
                    <li><strong>Derecho a la vivienda:</strong> Protección del hogar familiar</li>
                    <li><strong>Responsabilidad parental:</strong> Ejercicio conjunto sobre hijos menores</li>
                    <li><strong>Derechos previsionales:</strong> Acceso a jubilaciones y pensiones</li>
                    <li><strong>Derechos laborales:</strong> Licencias por matrimonio y familiares</li>
                </ul>
            </div>

            <div class="info-card">
                <h3><i class="fas fa-clock"></i> Plazos y Consideraciones</h3>
                <ul>
                    <li><strong>Turnos para matrimonio:</strong> Solicitar con 30 días de anticipación</li>
                    <li><strong>Validez documentación:</strong> Partidas con máximo 6 meses de antigüedad</li>
                    <li><strong>Unión convivencial:</strong> Requiere 2 años de convivencia para algunos efectos</li>
                    <li><strong>Divorcio:</strong> Puede solicitarse unilateralmente sin causales</li>
                    <li><strong>Pactos de convivencia:</strong> Deben instrumentarse por escritura pública</li>
                    <li><strong>Efectos internacionales:</strong> Matrimonio tiene reconocimiento internacional</li>
                </ul>
            </div>
        </main>

        <footer>
            <p>&copy; 2023 Derecho y Eco6 - Todos los derechos reservados</p>
        </footer>
    </div>
</body>
</html>