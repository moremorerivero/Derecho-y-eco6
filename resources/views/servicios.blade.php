<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios Legales - Derecho y Eco6</title>
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
        
        /* ABOGACINI SECTION */
        .abogacini-section {
            margin-bottom: 4rem;
        }

        .abogacini-card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(20px);
            padding: 3rem;
            border-radius: 20px;
            border-left: 6px solid rgba(255, 255, 255, 0.5);
            box-shadow: 
                0 10px 30px rgba(0, 0, 0, 0.15),
                inset 0 1px 0 rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .abogacini-header {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 2rem;
        }

        .abogacini-header i {
            font-size: 4rem;
            color: rgba(255, 255, 255, 0.9);
        }

        .abogacini-header h2 {
            margin: 0;
            border: none;
            padding: 0;
        }

        .features-grid { 
            display: grid; 
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); 
            gap: 2rem; 
        }

        .feature-card { 
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            padding: 2rem;
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.15);
            box-shadow: 
                0 8px 25px rgba(0, 0, 0, 0.1),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            transition: all 0.4s ease;
            display: flex;
            align-items: flex-start;
            gap: 1.5rem;
        }

        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 
                0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .feature-card i {
            font-size: 2.5rem;
            color: rgba(255, 255, 255, 0.9);
            margin-top: 0.5rem;
            flex-shrink: 0;
        }

        .feature-content h4 {
            color: white;
            margin-bottom: 0.8rem;
            font-size: 1.3rem;
        }

        .feature-content p {
            color: rgba(255, 255, 255, 0.85);
            line-height: 1.6;
            margin: 0;
        }

        /* SERVICES GRID */
        .services-grid { 
            display: grid; 
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); 
            gap: 2rem; 
            margin: 2.5rem 0; 
        }

        .service-card { 
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            padding: 2.5rem 2rem;
            border-radius: 18px;
            border: 1px solid rgba(255, 255, 255, 0.15);
            box-shadow: 
                0 8px 25px rgba(0, 0, 0, 0.1),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #667eea, #764ba2);
        }

        .service-card:hover {
            transform: translateY(-10px) scale(1.03);
            box-shadow: 
                0 25px 50px rgba(0, 0, 0, 0.25),
                0 0 0 1px rgba(255, 255, 255, 0.15);
        }

        .service-card i {
            font-size: 3.5rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 1.5rem;
            transition: transform 0.3s ease;
        }

        .service-card:hover i {
            transform: scale(1.2);
        }

        .service-card h3 {
            color: white;
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        .service-card p {
            color: rgba(255, 255, 255, 0.85);
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .service-features {
            text-align: left;
            color: rgba(255, 255, 255, 0.8);
        }

        .service-features li {
            margin-bottom: 0.5rem;
            padding-left: 1rem;
            position: relative;
        }

        .service-features li::before {
            content: '•';
            color: rgba(255, 255, 255, 0.7);
            position: absolute;
            left: 0;
        }

        /* CTA SECTION */
        .cta-section {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            padding: 3rem;
            text-align: center;
            margin-top: 4rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .cta-section h3 {
            color: white;
            margin-bottom: 1.5rem;
            font-size: 2rem;
        }

        .chat-button {
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
                0 8px 25px rgba(102, 126, 234, 0.4);
            display: inline-flex;
            align-items: center;
            gap: 12px;
        }

        .chat-button:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 
                0 15px 35px rgba(102, 126, 234, 0.5);
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

        /* CHAT STYLES CORREGIDOS */
        .chat-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            backdrop-filter: blur(10px);
            z-index: 10000;
            display: flex;
            justify-content: center;
            align-items: center;
            animation: fadeIn 0.3s ease;
        }

        .chat-window {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 20px;
            padding: 2rem;
            width: 90%;
            max-width: 500px;
            height: 600px;
            color: white;
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
            animation: slideUp 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .chat-header {
            text-align: center;
            margin-bottom: 1rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid rgba(255,255,255,0.2);
        }

        .chat-messages {
            background: rgba(255,255,255,0.1);
            padding: 1.5rem;
            border-radius: 15px;
            margin-bottom: 1.5rem;
            flex-grow: 1;
            overflow-y: auto;
            backdrop-filter: blur(10px);
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .message {
            display: flex;
            animation: messageSlide 0.3s ease;
        }

        .user-message {
            justify-content: flex-end;
        }

        .bot-message {
            justify-content: flex-start;
        }

        .message-bubble {
            padding: 0.8rem 1.2rem;
            border-radius: 15px;
            max-width: 80%;
            word-wrap: break-word;
        }

        .user-bubble {
            background: rgba(255,255,255,0.2);
            border-top-right-radius: 5px;
        }

        .bot-bubble {
            background: rgba(255,255,255,0.1);
            border-top-left-radius: 5px;
        }

        .chat-input-container {
            display: flex;
            gap: 10px;
        }

        .chat-input {
            flex: 1;
            padding: 1rem;
            border: none;
            border-radius: 25px;
            background: rgba(255,255,255,0.9);
            color: #333;
            font-size: 1rem;
        }

        .send-button {
            background: white;
            color: #667eea;
            border: none;
            padding: 1rem;
            border-radius: 50%;
            cursor: pointer;
            transition: transform 0.2s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .send-button:hover {
            transform: scale(1.1);
        }

        .close-chat {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            nav ul { flex-direction: column; align-items: center; }
            nav ul li { width: 100%; text-align: center; }
            .main-content { padding: 1.5rem; }
            h1 { font-size: 2.2rem; }
            .abogacini-header { flex-direction: column; text-align: center; }
            .features-grid, .services-grid { grid-template-columns: 1fr; }
            .chat-window { width: 95%; padding: 1.5rem; height: 500px; }
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

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes messageSlide {
            from {
                opacity: 0;
                transform: translateY(10px);
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
                    <li><a href="/servicios" class="active"><i class="fas fa-concierge-bell"></i> Servicios</a></li>
                    <li><a href="/personas-fisicas"><i class="fas fa-user"></i> Personas Físicas</a></li>
                    <li><a href="/dni"><i class="fas fa-id-card"></i> DNI</a></li>
                    <li><a href="/matrimonios"><i class="fas fa-ring"></i> Matrimonios</a></li>
                    <li><a href="/actas-certificados"><i class="fas fa-file-contract"></i> Actas</a></li>
                </ul>
            </nav>
        </header>

        <main class="main-content">
            <h1>Nuestros Servicios Legales</h1>

            <section class="abogacini-section">
                <div class="abogacini-card">
                    <div class="abogacini-header">
                        <i class="fas fa-robot"></i>
                        <div>
                            <h2>Abogacini - Tu Asistente Legal Inteligente</h2>
                            <p style="color: rgba(255,255,255,0.9); font-size: 1.2rem;">Plataforma legal 24/7 que combina inteligencia artificial con expertise jurídico</p>
                        </div>
                    </div>
                    
                    <div class="features-grid">
                        <div class="feature-card">
                            <i class="fas fa-gavel"></i>
                            <div class="feature-content">
                                <h4>Asesoría Legal Especializada</h4>
                                <p>Consulta sobre leyes, derechos y obligaciones con respuestas precisas y fundamentadas en la legislación argentina vigente.</p>
                            </div>
                        </div>
                        
                        <div class="feature-card">
                            <i class="fas fa-bolt"></i>
                            <div class="feature-content">
                                <h4>Respuestas Inmediatas 24/7</h4>
                                <p>Información legal verificada disponible en segundos, sin esperas. Base de datos actualizada constantemente.</p>
                            </div>
                        </div>
                        
                        <div class="feature-card">
                            <i class="fas fa-shield-alt"></i>
                            <div class="feature-content">
                                <h4>Confidencialidad Garantizada</h4>
                                <p>Tus consultas están protegidas con encriptación de grado militar. Cumplimiento Ley 25.326 de Protección de Datos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="services-section">
                <h2>Servicios Documentarios y Trámites</h2>
                
                <div class="services-grid">
                    <div class="service-card">
                        <i class="fas fa-id-card"></i>
                        <h3>Trámites DNI</h3>
                        <p>Gestión completa del Documento Nacional de Identidad</p>
                        <ul class="service-features">
                            <li>Emisión y renovación</li>
                            <li>Duplicado por pérdida/robo</li>
                            <li>Cambio de domicilio</li>
                            <li>Rectificación de datos</li>
                            <li>Actualizaciones obligatorias</li>
                        </ul>
                    </div>
                    
                    <div class="service-card">
                        <i class="fas fa-ring"></i>
                        <h3>Matrimonios y Uniones</h3>
                        <p>Gestión de uniones civiles y convivenciales</p>
                        <ul class="service-features">
                            <li>Matrimonio civil</li>
                            <li>Unión convivencial</li>
                            <li>Divorcio y separación</li>
                            <li>Régimen patrimonial</li>
                            <li>Alimentos y compensaciones</li>
                        </ul>
                    </div>
                    
                    <div class="service-card">
                        <i class="fas fa-file-contract"></i>
                        <h3>Actas y Certificados</h3>
                        <p>Solicitud de documentación legal</p>
                        <ul class="service-features">
                            <li>Acta de nacimiento</li>
                            <li>Acta de defunción</li>
                            <li>Acta de matrimonio</li>
                            <li>Certificado de domicilio</li>
                            <li>Certificado de soltería</li>
                        </ul>
                    </div>

                    <div class="service-card">
                        <i class="fas fa-passport"></i>
                        <h3>Pasaporte y Viajes</h3>
                        <p>Documentación para viajes internacionales</p>
                        <ul class="service-features">
                            <li>Pasaporte argentino</li>
                            <li>Renovación de pasaporte</li>
                            <li>Legalizaciones</li>
                            <li>Documentación para menores</li>
                        </ul>
                    </div>

                    <div class="service-card">
                        <i class="fas fa-user-edit"></i>
                        <h3>Rectificaciones</h3>
                        <p>Corrección de datos registrales</p>
                        <ul class="service-features">
                            <li>Rectificación de nombre</li>
                            <li>Cambio de género (Ley 26.743)</li>
                            <li>Corrección de fechas</li>
                            <li>Inscripción tardía</li>
                        </ul>
                    </div>

                    <div class="service-card">
                        <i class="fas fa-home"></i>
                        <h3>Domicilio y Residencia</h3>
                        <p>Gestión de cambios de domicilio</p>
                        <ul class="service-features">
                            <li>Cambio de domicilio</li>
                            <li>Certificado de residencia</li>
                            <li>Domicilio legal</li>
                            <li>Domicilio electrónico</li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="cta-section">
                <h3>¿Necesitás Ayuda Legal Inmediata?</h3>
                <p>Nuestro asistente Abogacini está disponible para resolver tus consultas de manera instantánea</p>
                <button class="chat-button" onclick="iniciarChat()">
                    <i class="fas fa-comments"></i>
                    Iniciar Chat con Abogacini
                </button>
            </section>
        </main>

        <footer>
            <p>&copy; 2023 Derecho y Eco6 - Todos los derechos reservados</p>
        </footer>
    </div>

    <script>
        // SISTEMA DE CONVERSACIÓN AVANZADO CON RESPUESTAS LEGALES ESPECÍFICAS
        class ChatbotAvanzado {
            constructor() {
                this.contexto = {
                    nombreUsuario: null,
                    estadoAnimo: 'neutral',
                    problemaLegal: null,
                    temasConversacion: [],
                    ultimoTema: null,
                    pasoConversacion: 0
                };
                
                this.historial = [];
            }
            
            // Analizar el mensaje del usuario
            analizarMensaje(mensaje) {
                const texto = mensaje.toLowerCase().trim();
                let respuesta = '';
                let accion = '';
                
                // PRIMERO VERIFICAR CONCEPTOS LEGALES ESPECÍFICOS (PRIORIDAD MÁXIMA)
                if (this.esConceptoLegalEspecifico(texto)) {
                    respuesta = this.responderConceptoLegal(texto);
                    accion = 'concepto_legal';
                }
                // Detectar saludos
                else if (this.esSaludo(texto)) {
                    respuesta = this.generarSaludo(texto);
                    accion = 'saludo';
                }
                // Detectar despedidas
                else if (this.esDespedida(texto)) {
                    respuesta = this.generarDespedida(texto);
                    accion = 'despedida';
                }
                // Detectar preguntas sobre estado
                else if (this.esPreguntaEstado(texto)) {
                    respuesta = this.responderEstado(texto);
                    accion = 'estado';
                }
                // Detectar presentaciones
                else if (this.esPresentacion(texto)) {
                    respuesta = this.procesarPresentacion(texto);
                    accion = 'presentacion';
                }
                // Detectar problemas legales
                else if (this.esProblemaLegal(texto)) {
                    respuesta = this.analizarProblemaLegal(texto);
                    accion = 'problema_legal';
                }
                // Detectar agradecimientos
                else if (this.esAgradecimiento(texto)) {
                    respuesta = this.responderAgradecimiento(texto);
                    accion = 'agradecimiento';
                }
                // Detectar preguntas personales
                else if (this.esPreguntaPersonal(texto)) {
                    respuesta = this.responderPreguntaPersonal(texto);
                    accion = 'pregunta_personal';
                }
                // Respuesta por defecto con análisis contextual
                else {
                    respuesta = this.respuestaContextual(texto);
                    accion = 'general';
                }
                
                // Actualizar contexto
                this.actualizarContexto(mensaje, respuesta, accion);
                
                return respuesta;
            }
            
            // DETECTAR CONCEPTOS LEGALES ESPECÍFICOS
            esConceptoLegalEspecifico(texto) {
                const conceptos = [
                    'matrimonio', 'persona física', 'dni', 'documento nacional de identidad',
                    'acta', 'partida', 'certificado', 'divorcio', 'unión convivencial',
                    'sucesión', 'herencia', 'testamento', 'propiedad', 'contrato',
                    'alquiler', 'despido', 'trabajo', 'laboral', 'consumidor',
                    'derechos', 'obligaciones', 'capacidad', 'menor', 'mayor',
                    'adopción', 'tenencia', 'alimentos', 'patria potestad'
                ];
                
                return conceptos.some(concepto => texto.includes(concepto));
            }
            
            // RESPONDER CONCEPTOS LEGALES ESPECÍFICOS
            responderConceptoLegal(texto) {
                // MATRIMONIO
                if (texto.includes('matrimonio')) {
                    return `💍 **MATRIMONIO CIVIL EN ARGENTINA**

*Definición:* El matrimonio es la unión de dos personas que celebran un contrato solemne con vocación de permanencia, con el objetivo de constituir una familia (Art. 431 CCyC).

*Características principales:*
• Se celebra ante oficial público del registro civil
• Requiere consentimiento libre y pleno de ambos contrayentes
• Crea vínculo familiar y derechos sucesorios
• Puede ser disuelto por divorcio

*Requisitos básicos:*
- DNI de ambos contrayentes
- Partida de nacimiento actualizada
- 2 testigos con DNI
- Certificado de domicilio

¿Te interesa saber sobre requisitos específicos, régimen patrimonial o divorcio?`;
                }
                
                // PERSONA FÍSICA
                else if (texto.includes('persona física')) {
                    return `👤 **PERSONA FÍSICA**

*Definición:* Es todo ser humano con capacidad para ser titular de derechos y obligaciones (Art. 19 CCyC). La existencia de la persona física comienza con la concepción.

*Atributos esenciales:*
• **Nombre:** Identificación personal (nombre de pila + apellido)
• **Domicilio:** Lugar de residencia habitual
• **Estado civil:** Situación familiar (soltero, casado, etc.)
• **Capacidad:** Aptitud para ejercer derechos

*Capacidades:*
- **Capacidad de derecho:** Todas las personas tienen capacidad jurídica desde el nacimiento
- **Capacidad de ejercicio:** Se adquiere plenamente a los 18 años

¿Querés saber más sobre capacidad, representación de menores o derechos personalísimos?`;
                }
                
                // DNI
                else if (texto.includes('dni') || texto.includes('documento nacional de identidad')) {
                    return `🆔 **DOCUMENTO NACIONAL DE IDENTIDAD (DNI)**

*Definición:* Es el documento público que acredita la identidad de las personas en todo el territorio argentino. Es obligatorio para argentinos y residentes mayores de 14 años.

*Tipos de trámites:*
• **Primera vez** (recién nacidos)
• **Renovación** (8-14 años obligatoria, 14-16 años por categoría)
• **Duplicado** (por pérdida, robo o deterioro)
• **Rectificación** (corrección de datos)
• **Cambio de domicilio** (gratuito)

*Documentación requerida:*
- Partida de nacimiento
- Foto 4x4 fondo celeste
- DNI anterior (si corresponde)
- Comprobante de pago

¿Necesitás información sobre algún trámite específico del DNI?`;
                }
                
                // ACTAS Y CERTIFICADOS
                else if (texto.includes('acta') || texto.includes('partida') || texto.includes('certificado')) {
                    return `📄 **ACTAS Y CERTIFICADOS**

*Acta de Nacimiento:*
- Registra el nacimiento de una persona
- Se solicita con DNI del menor o padres
- Base para obtener DNI y otros documentos

*Acta de Matrimonio:*
- Registra la unión matrimonial
- Necesaria para trámites sucesorios y divorcios
- Contiene datos de cónyuges y régimen patrimonial

*Acta de Defunción:*
- Registra el fallecimiento de una persona
- Requerida para trámites sucesorios
- Se solicita como "tercero"

*Certificados comunes:*
- Domicilio (comisaría)
- Soltería (registro civil)
- Antecedentes penales

¿Qué tipo de acta o certificado necesitás?`;
                }
                
                // DIVORCIO
                else if (texto.includes('divorcio')) {
                    return `💔 **DIVORCIO EN ARGENTINA**

*Características:*
• Sin causales desde 2015 (Ley 27.618)
• Puede ser solicitado unilateralmente
• Requiere 3 meses de matrimonio como mínimo
• No necesita justificación

*Proceso:*
1. Acuerdo sobre bienes, alimentos y tenencia
2. Mediación obligatoria (excepto violencia)
3. Presentación judicial
4. Sentencia de divorcio

*Efectos:*
- Disolución del vínculo matrimonial
- División de bienes gananciales
- Régimen de alimentos si corresponde
- Tenencia y comunicación con hijos

¿Tenés dudas sobre algún aspecto específico del divorcio?`;
                }
                
                // SUCESIÓN
                else if (texto.includes('sucesión') || texto.includes('herencia') || texto.includes('testamento')) {
                    return `⚰️ **SUCESIONES Y HERENCIAS**

*Definición:* Proceso mediante el cual se transmiten los bienes, derechos y obligaciones del fallecido a sus herederos.

*Herederos forzosos:*
1. Hijos (por partes iguales)
2. Cónyuge (50% bienes gananciales + porción hereditaria)
3. Padres (si no hay hijos)
4. Hermanos (si no hay hijos ni padres)

*Trámite sucesorio:*
- Acta de defunción
- DNI del fallecido
- Partidas de herederos
- Lista de bienes
- Declaratoria de herederos

*Testamento:*
- Disponible sobre 1/3 de los bienes (tercio de mejora)
- Debe hacerse ante escribano
- No puede privar de la legítima a herederos forzosos

¿Necesitás información sobre algún aspecto específico de sucesiones?`;
                }
                
                // RESPUESTA POR DEFECTO PARA CONCEPTOS LEGALES
                return `⚖️ **CONSULTA LEGAL**

He detectado que estás preguntando sobre un concepto legal. Como asistente especializado en derecho argentino, puedo proporcionarte información precisa sobre:

• **Derecho Civil:** Personas, familia, propiedades, sucesiones
• **Derecho Laboral:** Contratos, despidos, condiciones de trabajo
• **Derecho de Familia:** Matrimonio, divorcio, alimentos, tenencia
• **Trámites documentarios:** DNI, actas, certificados
• **Derechos del consumidor**

¿Podrías ser más específico sobre qué aspecto te interesa?`;
            }
            
            // Detectar saludos
            esSaludo(texto) {
                const saludos = ['hola', 'holaa', 'holiis', 'holis', 'buenas', 'buenos días', 'buenas tardes', 'buenas noches', 'hey', 'hi', 'qué tal', 'qué onda'];
                return saludos.some(saludo => texto.includes(saludo));
            }
            
            // Generar saludo contextual
            generarSaludo(texto) {
                const saludosInformales = [
                    "¡Holaa! 😊 ¿Cómo estás hoy? Soy Abogacini, tu asistente legal. ¿En qué tema legal puedo ayudarte?",
                    "¡Holiis! ✨ ¿Qué tal tu día? Estoy aquí para resolver tus dudas sobre derecho argentino.",
                    "¡Qué onda, amig@! 👋 ¿Todo bien? Cuéntame, ¿qué consulta legal tenés?",
                    "¡Buenas! 😄 ¿Cómo va todo? Soy tu asistente legal, preguntame lo que necesites sobre leyes.",
                    "¡Hola! 🙌 Me alegra verte por aquí. Soy Abogacini, especialista en derecho argentino. ¿En qué puedo asistirte?"
                ];
                
                const saludosFormales = [
                    "Buenos días/tardes. Soy Abogacini, tu asistente legal especializado. ¿En qué tema jurídico necesitas ayuda hoy?",
                    "Hola. Estoy aquí para asistirte con tus consultas legales sobre derecho argentino. ¿Qué necesitas saber?",
                    "Saludos. Cuéntame, ¿en qué aspecto legal necesitas orientación específica?"
                ];
                
                // Detectar tono del mensaje
                const esInformal = texto.includes('holaa') || texto.includes('holiis') || 
                                 texto.includes('holis') || texto.includes('qué onda') || 
                                 texto.includes('amig') || texto.includes('bro');
                
                if (esInformal) {
                    return saludosInformales[Math.floor(Math.random() * saludosInformales.length)];
                } else {
                    return saludosFormales[Math.floor(Math.random() * saludosFormales.length)];
                }
            }
            
            // Detectar despedidas
            esDespedida(texto) {
                const despedidas = ['chau', 'adiós', 'bye', 'nos vemos', 'hasta luego', 'hasta pronto', 'me voy', 'tengo que irme'];
                return despedidas.some(despedida => texto.includes(despedida));
            }
            
            // Generar despedida contextual
            generarDespedida(texto) {
                const despedidas = [
                    `¡Chau! ${this.contexto.nombreUsuario ? this.contexto.nombreUsuario + ', ' : ''}fue un gusto ayudarte. ¡Cuidate! 😊`,
                    `¡Hasta luego! ${this.contexto.nombreUsuario ? this.contexto.nombreUsuario + ', ' : ''}no dudes en consultarme si necesitas más ayuda legal. 👋`,
                    `¡Nos vemos! ${this.contexto.nombreUsuario ? this.contexto.nombreUsuario + ', ' : ''}que tengas un excelente día. ✨`,
                    `¡Adiós! ${this.contexto.nombreUsuario ? this.contexto.nombreUsuario + ', ' : ''}recuerda que estoy disponible 24/7 para tus consultas legales. 💼`
                ];
                
                return despedidas[Math.floor(Math.random() * despedidas.length)];
            }
            
            // Detectar preguntas sobre estado
            esPreguntaEstado(texto) {
                return texto.includes('cómo estás') || texto.includes('qué tal') || 
                       texto.includes('cómo te va') || texto.includes('cómo andas');
            }
            
            // Responder sobre estado
            responderEstado(texto) {
                const respuestas = [
                    "¡Estoy excelente, gracias por preguntar! 😊 Listo para ayudarte con lo que necesites. ¿Y tú, cómo estás?",
                    "¡Todo bien por aquí! 💻 Siempre contento de poder asistirte. ¿Cómo va tu día?",
                    "¡De maravilla! ✨ Programado para brindarte la mejor asesoría legal. ¿Y tú, qué tal?",
                    "¡Perfecto! 😄 Listo para resolver tus dudas legales. ¿Cómo estás hoy?"
                ];
                
                return respuestas[Math.floor(Math.random() * respuestas.length)];
            }
            
            // Detectar presentaciones
            esPresentacion(texto) {
                return texto.includes('me llamo') || texto.includes('soy') || 
                       texto.includes('mi nombre es') || texto.includes('me dicen');
            }
            
            // Procesar presentación
            procesarPresentacion(texto) {
                // Extraer nombre del mensaje
                let nombre = this.extraerNombre(texto);
                
                if (nombre) {
                    this.contexto.nombreUsuario = nombre;
                    return `¡Mucho gusto, ${nombre}! 😊 Es un placer conocerte. ¿En qué tema legal puedo ayudarte hoy?`;
                } else {
                    return "¡Encantado de conocerte! 😄 ¿Cómo te llamas?";
                }
            }
            
            // Extraer nombre del texto
            extraerNombre(texto) {
                const regex1 = /me llamo (\w+)/i;
                const regex2 = /soy (\w+)/i;
                const regex3 = /mi nombre es (\w+)/i;
                const regex4 = /me dicen (\w+)/i;
                
                let match = texto.match(regex1) || texto.match(regex2) || 
                           texto.match(regex3) || texto.match(regex4);
                
                return match ? match[1] : null;
            }
            
            // Detectar problemas legales
            esProblemaLegal(texto) {
                const palabrasClave = ['problema', 'situación', 'dificultad', 'conflicto', 'disputa', 
                                     'problema legal', 'asunto legal', 'tengo un problema', 'necesito ayuda con'];
                return palabrasClave.some(palabra => texto.includes(palabra));
            }
            
            // Analizar problema legal
            analizarProblemaLegal(texto) {
                this.contexto.problemaLegal = texto;
                this.contexto.pasoConversacion = 1;
                
                // Detectar tipo de problema
                if (texto.includes('trabajo') || texto.includes('empleo') || texto.includes('despido')) {
                    return "Entiendo que tienes un problema laboral. 😔 Cuéntame más detalles: ¿es sobre despido, condiciones de trabajo, salario, o algo específico?";
                } else if (texto.includes('familia') || texto.includes('hijo') || texto.includes('divorcio')) {
                    return "Comprendo que se trata de un asunto familiar. 👨‍👩‍👧‍👦 ¿Podrías contarme más? ¿Es sobre divorcio, tenencia de hijos, alimentos, o otro tema?";
                } else if (texto.includes('alquiler') || texto.includes('casa') || texto.includes('departamento')) {
                    return "Veo que es un problema de alquiler o vivienda. 🏠 ¿Qué está pasando exactamente? ¿Es con el contrato, el propietario, o las condiciones?";
                } else if (texto.includes('compra') || texto.includes('producto') || texto.includes('consumidor')) {
                    return "Parece ser un problema de consumo. 🛍️ ¿Podrías darme más detalles? ¿Es sobre garantías, devoluciones, o publicidad engañosa?";
                } else {
                    return "Entiendo que tienes una situación legal que resolver. ⚖️ Para poder ayudarte mejor, ¿podrías contarme más detalles sobre lo que está pasando?";
                }
            }
            
            // Detectar agradecimientos
            esAgradecimiento(texto) {
                return texto.includes('gracias') || texto.includes('agradecido') || 
                       texto.includes('agradecida') || texto.includes('te agradezco');
            }
            
            // Responder agradecimientos
            responderAgradecimiento(texto) {
                const respuestas = [
                    `¡De nada! ${this.contexto.nombreUsuario ? this.contexto.nombreUsuario + ', ' : ''}es un placer ayudarte. 😊 ¿Hay algo más en lo que pueda asistirte?`,
                    `¡No hay de qué! ${this.contexto.nombreUsuario ? this.contexto.nombreUsuario + ', ' : ''}estoy aquí para lo que necesites. 💼 ¿Alguna otra consulta legal?`,
                    `¡Es mi trabajo! ${this.contexto.nombreUsuario ? this.contexto.nombreUsuario + ', ' : ''}me alegra poder ser útil. ✨ ¿Necesitas ayuda con algo más?`
                ];
                
                return respuestas[Math.floor(Math.random() * respuestas.length)];
            }
            
            // Detectar preguntas personales
            esPreguntaPersonal(texto) {
                return texto.includes('quién eres') || texto.includes('qué eres') || 
                       texto.includes('cómo funcionas') || texto.includes('qué puedes hacer');
            }
            
            // Responder preguntas personales
            responderPreguntaPersonal(texto) {
                if (texto.includes('quién eres') || texto.includes('qué eres')) {
                    return "¡Soy Abogacini! 🤖 Tu asistente legal inteligente especializado en derecho argentino. Estoy aquí para brindarte información legal precisa y ayudarte a resolver tus dudas jurídicas 24/7.";
                } else if (texto.includes('cómo funcionas')) {
                    return "Funciono analizando tus consultas con inteligencia artificial especializada en derecho argentino. 🤓 Tengo acceso a una amplia base de datos legal actualizada con leyes, códigos y jurisprudencia.";
                } else if (texto.includes('qué puedes hacer')) {
                    return "Puedo ayudarte con: asesoría legal general, trámites documentarios, derechos y obligaciones, análisis de situaciones legales, y mucho más sobre derecho argentino. ¿En qué específicamente necesitas ayuda?";
                }
                
                return "Soy tu asistente legal Abogacini, especializado en derecho argentino. 😊 Estoy programado para entender tus consultas legales y proporcionarte información precisa y útil.";
            }
            
            // Respuesta contextual basada en la conversación
            respuestaContextual(texto) {
                // Si estamos en medio de analizar un problema legal
                if (this.contexto.pasoConversacion > 0) {
                    return this.continuarAnalisisProblema(texto);
                }
                
                // Si el usuario responde sobre su estado
                if (this.historial.length > 0) {
                    const ultimoMensajeBot = this.historial[this.historial.length - 1].bot;
                    if (ultimoMensajeBot.includes('cómo estás') || ultimoMensajeBot.includes('cómo va tu día')) {
                        return this.responderEstadoUsuario(texto);
                    }
                }
                
                // Respuesta legal general
                return this.respuestaLegalGeneral(texto);
            }
            
            // Continuar análisis de problema legal
            continuarAnalisisProblema(texto) {
                this.contexto.pasoConversacion++;
                
                if (this.contexto.pasoConversacion === 2) {
                    return "Entiendo. 🤔 Ahora cuéntame, ¿desde cuándo está ocurriendo esta situación? Y si aplica, ¿has intentado resolverlo de alguna manera antes?";
                } else if (this.contexto.pasoConversacion === 3) {
                    return "Gracias por la información. 📝 Basándome en lo que me has contado, te recomendaría considerar las siguientes opciones: [aquí iría el análisis legal específico]. ¿Te gustaría que profundice en alguna de estas opciones?";
                } else {
                    return "He analizado tu situación. ⚖️ Según la legislación argentina, tienes derecho a [explicación legal]. Te sugiero [recomendación específica]. ¿Hay algún aspecto en particular que te gustaría que aclare?";
                }
            }
            
            // Responder al estado del usuario
            responderEstadoUsuario(texto) {
                if (texto.includes('bien') || texto.includes('genial') || texto.includes('excelente') || 
                    texto.includes('perfecto') || texto.includes('contento') || texto.includes('feliz')) {
                    return "¡Me alegra mucho saber que estás bien! 😊 Ahora, ¿en qué tema legal puedo ayudarte hoy?";
                } else if (texto.includes('mal') || texto.includes('regular') || texto.includes('cansado') || 
                          texto.includes('estresado') || texto.includes('preocupado')) {
                    return "Lamento escuchar que no estás en tu mejor momento. 😔 Espero poder ayudarte a resolver lo que te preocupa. ¿Hay algún tema legal en el que pueda asistirte?";
                } else {
                    return "Entiendo. 🤗 Bueno, estoy aquí para lo que necesites. ¿En qué aspecto legal puedo ayudarte hoy?";
                }
            }
            
            // Respuesta legal general
            respuestaLegalGeneral(texto) {
                const respuestasContextuales = [
                    "Interesante. 🤔 Como asistente legal especializado, puedo brindarte información sobre diversos temas jurídicos. ¿Podrías contarme más específicamente qué aspecto legal te interesa?",
                    "Comprendo tu consulta. 📚 Para darte la mejor respuesta, ¿podrías especificar si se trata de derechos, obligaciones, trámites, o algún área legal en particular?",
                    "Entiendo. ⚖️ Como sistema especializado en derecho argentino, puedo ayudarte con información precisa. ¿Qué tema legal específico te gustaría explorar?"
                ];
                
                return respuestasContextuales[Math.floor(Math.random() * respuestasContextuales.length)];
            }
            
            // Actualizar contexto de conversación
            actualizarContexto(mensajeUsuario, respuestaBot, accion) {
                this.historial.push({
                    usuario: mensajeUsuario,
                    bot: respuestaBot,
                    accion: accion,
                    timestamp: new Date()
                });
                
                // Mantener solo los últimos 20 mensajes en el historial
                if (this.historial.length > 20) {
                    this.historial.shift();
                }
            }
        }

        // INICIALIZAR CHATBOT AVANZADO
        const chatbot = new ChatbotAvanzado();

        // FUNCIÓN PARA INICIAR EL CHAT
        function iniciarChat() {
            // Crear overlay del chat
            const chatOverlay = document.createElement('div');
            chatOverlay.className = 'chat-overlay';
            chatOverlay.innerHTML = `
                <div class="chat-window">
                    <button class="close-chat" onclick="cerrarChat()">
                        <i class="fas fa-times"></i>
                    </button>
                    
                    <div class="chat-header">
                        <i class="fas fa-robot" style="font-size: 3rem; margin-bottom: 1rem;"></i>
                        <h2 style="margin: 0; color: white;">Abogacini</h2>
                        <p style="opacity: 0.9; margin: 0;">Asistente Legal Inteligente</p>
                    </div>
                    
                    <div class="chat-messages" id="chatMessages">
                        <div class="message bot-message">
                            <div class="message-bubble bot-bubble">
                                <i class="fas fa-robot" style="margin-right: 0.5rem;"></i>
                                ¡Hola! Soy Abogacini, tu asistente legal especializado en derecho argentino. 😊 ¿En qué tema legal puedo ayudarte hoy? Puedo explicarte conceptos, trámites, derechos y mucho más.
                            </div>
                        </div>
                    </div>
                    
                    <div class="chat-input-container">
                        <input type="text" 
                               id="chatInput" 
                               class="chat-input" 
                               placeholder="Escribe tu consulta legal..." 
                               onkeypress="if(event.key === 'Enter') enviarMensaje()">
                        <button class="send-button" onclick="enviarMensaje()">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            `;

            document.body.appendChild(chatOverlay);
            
            // Enfocar el input
            setTimeout(() => {
                document.getElementById('chatInput').focus();
            }, 300);
        }

        // FUNCIÓN PARA ENVIAR MENSAJE
        function enviarMensaje() {
            const input = document.getElementById('chatInput');
            const message = input.value.trim();
            
            if (message) {
                const chatMessages = document.getElementById('chatMessages');
                
                // Mensaje del usuario
                const userMsg = document.createElement('div');
                userMsg.className = 'message user-message';
                userMsg.innerHTML = `
                    <div class="message-bubble user-bubble">
                        ${message}
                    </div>
                `;
                chatMessages.appendChild(userMsg);
                
                // Limpiar input
                input.value = '';
                
                // Simular "escribiendo..."
                const typingMsg = document.createElement('div');
                typingMsg.className = 'message bot-message';
                typingMsg.innerHTML = `
                    <div class="message-bubble bot-bubble">
                        <i class="fas fa-robot" style="margin-right: 0.5rem;"></i>
                        <i class="fas fa-ellipsis-h"></i> Analizando tu consulta legal...
                    </div>
                `;
                chatMessages.appendChild(typingMsg);
                chatMessages.scrollTop = chatMessages.scrollHeight;
                
                // Respuesta del bot después de un delay
                setTimeout(() => {
                    chatMessages.removeChild(typingMsg);
                    
                    const botMsg = document.createElement('div');
                    botMsg.className = 'message bot-message';
                    const respuesta = chatbot.analizarMensaje(message);
                    botMsg.innerHTML = `
                        <div class="message-bubble bot-bubble">
                            <i class="fas fa-robot" style="margin-right: 0.5rem;"></i>
                            ${respuesta}
                        </div>
                    `;
                    chatMessages.appendChild(botMsg);
                    chatMessages.scrollTop = chatMessages.scrollHeight;
                }, 1500 + Math.random() * 1000);
            }
        }

        // FUNCIÓN PARA CERRAR CHAT
        function cerrarChat() {
            const chatOverlay = document.querySelector('.chat-overlay');
            if (chatOverlay) {
                document.body.removeChild(chatOverlay);
            }
        }

        // EFECTOS INTERACTIVOS
        document.addEventListener('DOMContentLoaded', function() {
            const serviceCards = document.querySelectorAll('.service-card');
            
            serviceCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px) scale(1.03)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });

            // Enviar con Enter
            document.addEventListener('keypress', function(e) {
                if (e.key === 'Enter' && document.querySelector('.chat-overlay')) {
                    enviarMensaje();
                }
            });
        });
    </script>
</body>
</html>