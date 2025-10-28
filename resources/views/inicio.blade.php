<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abogacini - Plataforma Legal Inteligente</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
        }

        :root {
            --primary: #1e3c72;
            --secondary: #2a5298;
            --accent: #3498db;
            --light-blue: #87CEEB;
            --navy: #0a2463;
            --sky: #e3f2fd;
            --white: #ffffff;
        }

        body {
            background: linear-gradient(-45deg, #0a2463, #1e3c72, #2a5298, #3498db);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
            color: #333;
            line-height: 1.6;
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 80%, rgba(135, 206, 235, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(30, 60, 114, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(10, 36, 99, 0.1) 0%, transparent 50%);
            pointer-events: none;
            z-index: -1;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Header Elegante */
        .main-header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            padding: 30px 40px;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(10, 36, 99, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .logo-section {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo {
            display: inline-flex;
            align-items: center;
            gap: 15px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            padding: 15px 30px;
            border-radius: 15px;
            color: white;
            box-shadow: 0 5px 15px rgba(30, 60, 114, 0.3);
        }

        .logo-icon {
            font-size: 2rem;
        }

        .logo-text h1 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .logo-text .tagline {
            font-size: 0.9rem;
            opacity: 0.9;
            font-weight: 300;
        }

        /* Navegación Mejorada */
        .main-nav {
            display: flex;
            justify-content: center;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 8px;
            background: rgba(255, 255, 255, 0.9);
            padding: 10px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .nav-links a {
            text-decoration: none;
            color: var(--primary);
            font-weight: 600;
            padding: 15px 25px;
            border-radius: 12px;
            transition: all 0.3s ease;
            background: var(--white);
            border: 2px solid transparent;
            display: flex;
            align-items: center;
            gap: 8px;
            min-width: 140px;
            justify-content: center;
        }

        .nav-links a:hover,
        .nav-links a.active {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(30, 60, 114, 0.3);
            border-color: var(--accent);
        }

        /* Secciones Limpias */
        .section {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            padding: 40px;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(10, 36, 99, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.3);
            display: none;
        }

        .section.active {
            display: block;
            animation: fadeInUp 0.6s ease;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .section h2 {
            color: var(--primary);
            font-size: 2.2rem;
            margin-bottom: 25px;
            text-align: center;
            font-weight: 700;
        }

        .section p {
            font-size: 1.1rem;
            color: #555;
            text-align: center;
            margin-bottom: 30px;
            line-height: 1.8;
        }

        /* Botones Mejorados */
        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 18px 35px;
            border: none;
            border-radius: 15px;
            font-weight: 600;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(30, 60, 114, 0.3);
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-primary:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 25px rgba(30, 60, 114, 0.4);
        }

        /* Grid de Servicios Simplificado */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin: 40px 0;
        }

        .service-card {
            background: linear-gradient(135deg, var(--sky), var(--white));
            padding: 30px 25px;
            border-radius: 15px;
            text-align: center;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            border-color: var(--accent);
        }

        .service-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 15px;
        }

        .service-card h3 {
            color: var(--primary);
            margin-bottom: 15px;
            font-size: 1.3rem;
        }

        /* Chatbot Elegante */
        .chatbot-container {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 380px;
            height: 550px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(10, 36, 99, 0.3);
            z-index: 1000;
            display: none;
            flex-direction: column;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .chatbot-container.active {
            display: flex;
            animation: slideInUp 0.3s ease;
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .chat-header {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .chat-title {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.1rem;
        }

        .close-chat {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: white;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .close-chat:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: scale(1.1);
        }

        .chat-messages {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
            background: var(--sky);
        }

        .message {
            margin-bottom: 15px;
            padding: 15px 20px;
            border-radius: 18px;
            max-width: 85%;
            animation: messageSlide 0.3s ease;
            line-height: 1.5;
        }

        @keyframes messageSlide {
            from {
                opacity: 0;
                transform: translateX(-10px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .user-message {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            margin-left: auto;
            border-bottom-right-radius: 5px;
        }

        .bot-message {
            background: var(--white);
            color: #333;
            border-bottom-left-radius: 5px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .chat-input-container {
            padding: 20px;
            background: var(--white);
            border-top: 1px solid #e1e8ed;
        }

        .chat-input-wrapper {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .chat-input {
            flex: 1;
            padding: 15px 20px;
            border: 2px solid #e1e8ed;
            border-radius: 25px;
            outline: none;
            font-size: 1rem;
            transition: border-color 0.3s ease;
            background: var(--white);
        }

        .chat-input:focus {
            border-color: var(--accent);
        }

        .send-btn {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
        }

        .send-btn:hover {
            transform: scale(1.1);
        }

        .chat-toggle {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 10px 30px rgba(30, 60, 114, 0.4);
            z-index: 999;
            transition: all 0.3s ease;
            border: none;
            font-size: 1.5rem;
        }

        .chat-toggle:hover {
            transform: scale(1.1);
            box-shadow: 0 15px 40px rgba(30, 60, 114, 0.6);
        }

        /* Preguntas Rápidas */
        .quick-questions {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
            margin: 30px 0;
        }

        .quick-question {
            background: linear-gradient(135deg, var(--sky), var(--white));
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            font-weight: 500;
            color: var(--primary);
        }

        .quick-question:hover {
            transform: translateY(-3px);
            border-color: var(--accent);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* Footer */
        .main-footer {
            text-align: center;
            padding: 30px;
            color: white;
            margin-top: 50px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }
            
            .main-header {
                padding: 20px;
            }
            
            .nav-links {
                flex-direction: column;
                gap: 5px;
            }
            
            .nav-links a {
                min-width: auto;
                justify-content: flex-start;
            }
            
            .chatbot-container {
                width: 95vw;
                height: 70vh;
                bottom: 20px;
                right: 2.5vw;
            }
            
            .logo-text h1 {
                font-size: 1.6rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header Mejorado -->
        <header class="main-header">
            <div class="logo-section">
                <div class="logo">
                    <i class="fas fa-balance-scale logo-icon"></i>
                    <div class="logo-text">
                        <h1>Abogacini</h1>
                        <div class="tagline">Asistencia Legal Inteligente</div>
                    </div>
                </div>
            </div>

            <nav class="main-nav">
                <ul class="nav-links">
                    <li><a href="#" class="nav-link active" data-section="inicio"><i class="fas fa-home"></i> Inicio</a></li>
                    <li><a href="#" class="nav-link" data-section="personas-fisicas"><i class="fas fa-user"></i> Personas Físicas</a></li>
                    <li><a href="#" class="nav-link" data-section="servicios"><i class="fas fa-briefcase"></i> Servicios</a></li>
                    <li><a href="#" class="nav-link" data-section="informacion"><i class="fas fa-info-circle"></i> Información</a></li>
                </ul>
            </nav>
        </header>

        <!-- Sección Inicio - Más Limpia -->
        <section id="inicio" class="section active">
            <h2>Bienvenido a Abogacini</h2>
            <p>Tu plataforma legal inteligente que combina tecnología avanzada con expertise jurídico para brindarte soluciones legales accesibles y confiables.</p>
            
            <div class="services-grid">
                <div class="service-card">
                    <i class="fas fa-gavel service-icon"></i>
                    <h3>Asesoría Legal</h3>
                    <p>Consulta especializada sobre leyes, derechos y obligaciones con respuestas precisas.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-bolt service-icon"></i>
                    <h3>Respuestas Rápidas</h3>
                    <p>Información legal verificada disponible 24/7 con respuestas instantáneas.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-shield-alt service-icon"></i>
                    <h3>Confidencialidad</h3>
                    <p>Tus consultas están protegidas con máxima seguridad y privacidad.</p>
                </div>
            </div>

            <div style="text-align: center; margin-top: 40px;">
                <button class="btn-primary" id="start-chat">
                    <i class="fas fa-robot"></i> Iniciar Chat con Abogacini
                </button>
            </div>

            <div class="quick-questions">
                <div class="quick-question" data-question="¿Qué es una persona física?">
                    <i class="fas fa-user"></i> Personas Físicas
                </div>
                <div class="quick-question" data-question="¿Qué es un contrato?">
                    <i class="fas fa-file-contract"></i> Contratos
                </div>
                <div class="quick-question" data-question="¿Qué es el derecho civil?">
                    <i class="fas fa-balance-scale"></i> Derecho Civil
                </div>
                <div class="quick-question" data-question="¿Cómo hacer un testamento?">
                    <i class="fas fa-file-signature"></i> Testamentos
                </div>
            </div>
        </section>

        <!-- Otras secciones más limpias -->
        <section id="personas-fisicas" class="section">
            <h2>Personas Físicas</h2>
            <p>Entidad jurídica fundamental con capacidad para ejercer derechos y contraer obligaciones.</p>
            
            <div class="services-grid">
                <div class="service-card">
                    <h3>Características Principales</h3>
                    <ul style="text-align: left; color: #555;">
                        <li>Existencia real y tangible</li>
                        <li>Capacidad jurídica desde el nacimiento</li>
                        <li>Estado civil determinado</li>
                        <li>Nombre identificativo</li>
                        <li>Patrimonio propio</li>
                         <li>Patrimonio propio</li>
                          <li>Patrimonio propio</li>
                        
                    </ul>
                </div>
                <div class="service-card">
                    <h3>Capacidad Jurídica</h3>
                    <p><strong>Capacidad de goce:</strong> Aptitud para ser titular de derechos</p>
                    <p><strong>Capacidad de ejercicio:</strong> Aptitud para ejercer derechos personalmente</p>
                </div>
            </div>
        </section>

        <section id="servicios" class="section">
            <h2>Nuestros Servicios</h2>
            <p>Ofrecemos una gama completa de servicios legales adaptados a tus necesidades específicas.</p>
            
            <div class="services-grid">
                <div class="service-card">
                    <i class="fas fa-handshake service-icon"></i>
                    <h3>Consultoría Legal</h3>
                    <p>Asesoramiento especializado en diversas áreas del derecho.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-file-alt service-icon"></i>
                    <h3>Análisis Documental</h3>
                    <p>Revisión y análisis de contratos y documentos legales.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-users service-icon"></i>
                    <h3>Orientación Legal</h3>
                    <p>Guía en trámites y procedimientos legales.</p>
                </div>
            </div>
        </section>

        <section id="informacion" class="section">
            <h2>Información Legal</h2>
            <p>Recursos educativos sobre conceptos legales fundamentales.</p>
            
            <div class="services-grid">
                <div class="service-card">
                    <h3>Conceptos Básicos</h3>
                    <p>Derecho, ley, jurisprudencia y doctrina legal.</p>
                </div>
                <div class="service-card">
                    <h3>Ramas del Derecho</h3>
                    <p>Civil, penal, laboral, administrativo y mercantil.</p>
                </div>
            </div>
        </section>
    </div>

    <!-- Chatbot Mejorado -->
    <button class="chat-toggle" id="chat-toggle">
        <i class="fas fa-robot"></i>
    </button>

    <div class="chatbot-container" id="chatbot-container">
        <div class="chat-header">
            <div class="chat-title">
                <i class="fas fa-robot"></i>
                <span>Abogacini AI</span>
            </div>
            <button class="close-chat" id="close-chat">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="chat-messages" id="chat-messages">
            <div class="message bot-message">
                ¡Hola! Soy Abogacini, tu asistente legal inteligente. 👋<br><br>
                Puedes preguntarme sobre cualquier tema legal o usar las preguntas rápidas del inicio. Estoy aquí para ayudarte 24/7.
            </div>
        </div>
        <div class="chat-input-container">
            <div class="chat-input-wrapper">
                <input type="text" class="chat-input" id="user-input" placeholder="Escribe tu pregunta legal...">
                <button class="send-btn" id="send-message">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
        </div>
    </div>

    <footer class="main-footer">
        <p>&copy; 2024 Abogacini - Plataforma Legal Inteligente. Todos los derechos reservados.</p>
    </footer>

    <script>
        // Navegación entre secciones
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
                this.classList.add('active');
                
                const targetSection = this.getAttribute('data-section');
                
                document.querySelectorAll('.section').forEach(section => {
                    section.classList.remove('active');
                });
                
                document.getElementById(targetSection).classList.add('active');
            });
        });

        // Base de conocimiento legal expandida
        const legalKnowledgeBase = {
            'hola': '¡Hola! 👋 Soy Abogacini, tu asistente legal. ¿En qué puedo ayudarte hoy? Puedes preguntarme sobre temas legales o usar las preguntas rápidas.',
            'buenos días': '¡Buenos días! ☀️ Espero que tengas un excelente día. ¿En qué tema legal puedo asistirte?',
            'buenas tardes': '¡Buenas tardes! 🌇 ¿En qué puedo ayudarte con tus consultas legales?',
            'buenas noches': '¡Buenas noches! 🌙 Estoy aquí para ayudarte sin importar la hora. ¿Cuál es tu consulta legal?',
            
            'persona física': '👤 **Persona Física**: Todo ser humano con capacidad para ejercer derechos y contraer obligaciones.\n\n**Características principales:**\n• Existencia real y tangible\n• Capacidad jurídica desde el nacimiento\n• Nombre y domicilio\n• Patrimonio propio\n• Nacionalidad específica',
            
            'persona moral': '🏢 **Persona Moral**: Entidad creada por personas físicas para cumplir objetivos sociales.\n\n**Características:**\n• Existencia jurídica independiente\n• Patrimonio separado\n• Responsabilidad limitada\n• Capacidad para ejercer derechos',
            
            'contrato': '📝 **Contrato**: Acuerdo de voluntades que genera derechos y obligaciones.\n\n**Elementos esenciales:**\n• Consentimiento de las partes\n• Objeto lícito\n• Formalidades legales\n\n**Ejemplos comunes:**\n• Compraventa\n• Arrendamiento\n• Prestación de servicios',
            
            'derecho civil': '⚖️ **Derecho Civil**: Rama que regula relaciones entre particulares.\n\n**Áreas principales:**\n• Derecho de personas y familia\n• Propiedad y posesión\n• Obligaciones y contratos\n• Sucesiones y herencias',
            
            'derecho penal': '🔒 **Derecho Penal**: Regula delitos, penas y medidas de seguridad.\n\n**Principios fundamentales:**\n• Legalidad\n• Proporcionalidad\n• Presunción de inocencia',
            
            'testamento': '📄 **Testamento**: Acto para disponer de bienes después del fallecimiento.\n\n**Tipos principales:**\n• Testamento público\n• Testamento ológrafo\n• Testamento cerrado',
            
            'divorcio': '💔 **Divorcio**: Disolución del vínculo matrimonial.\n\n**Modalidades:**\n• Voluntario (mutuo consentimiento)\n• Necessary (causas específicas)',
            
            'herencia': '💰 **Herencia**: Bienes y derechos transmitidos tras fallecimiento.\n\n**Orden sucesorio:**\n1. Descendientes\n2. Ascendientes\n3. Cónyuge\n4. Colaterales',
            
            'arrendamiento': '🏠 **Arrendamiento**: Contrato de uso temporal por renta.\n\n**Derechos del arrendatario:**\n• Uso pacífico del inmueble\n• Reparaciones necesarias\n• Renovación preferente',
            
            'capacidad jurídica': '🎯 **Capacidad Jurídica**: Aptitud para derechos y obligaciones.\n\n**Tipos:**\n• Capacidad de goce (ser titular)\n• Capacidad de ejercicio (ejercer personalmente)',
            
            'obligación': '📋 **Obligación**: Vínculo jurídico entre acreedor y deudor.\n\n**Elementos:**\n• Sujeto activo (acreedor)\n• Sujeto pasivo (deudor)\n• Objeto (prestación)\n• Vínculo jurídico',
            
            'propiedad': '🏡 **Propiedad**: Derecho real más amplio sobre bienes.\n\n**Facultades:**\n• Usar\n• Gozar\n• Disponder',
            
            'demanda': '⚖️ **Demanda**: Acto que inicia proceso judicial.\n\n**Contenido esencial:**\n• Hechos\n• Fundamentos de derecho\n• Pretensiones\n• Pruebas',
            
            'juicio': '👨‍⚖️ **Juicio**: Proceso para resolver conflicto judicial.\n\n**Etapas principales:**\n• Demanda\n• Contestación\n• Pruebas\n• Sentencia',
            
            'abogado': '👨‍💼 **Abogado**: Profesional que ejerce la defensa jurídica.\n\n**Funciones principales:**\n• Asesoramiento legal\n• Representación judicial\n• Elaboración de documentos',
            
            'ley': '📚 **Ley**: Norma jurídica de carácter obligatorio.\n\n**Características:**\n• Generalidad\n• Obligatoriedad\n• Permanencia\n• Abstracta',
            
            'default': '🤖 Todavia no tengo info sorryyyyyyyy. Te recomiendo:\n\n• Reformular tu pregunta\n• Consultar las preguntas rápidas disponibles\n• Contactar con un abogado especializado para casos específicos\n\n¿Puedo ayudarte con algún otro tema legal?'
        };

        // Funcionalidad del chatbot
        const chatToggle = document.getElementById('chat-toggle');
        const chatbotContainer = document.getElementById('chatbot-container');
        const closeChat = document.getElementById('close-chat');
        const sendMessageBtn = document.getElementById('send-message');
        const userInput = document.getElementById('user-input');
        const chatMessages = document.getElementById('chat-messages');
        const startChatBtn = document.getElementById('start-chat');

        // Preguntas rápidas
        document.querySelectorAll('.quick-question').forEach(btn => {
            btn.addEventListener('click', function() {
                const question = this.getAttribute('data-question');
                userInput.value = question;
                sendMessage();
                chatbotContainer.classList.add('active');
            });
        });

        // Control del chatbot
        chatToggle.addEventListener('click', () => {
            chatbotContainer.classList.add('active');
            userInput.focus();
        });

        closeChat.addEventListener('click', () => {
            chatbotContainer.classList.remove('active');
        });

        startChatBtn.addEventListener('click', () => {
            chatbotContainer.classList.add('active');
            userInput.focus();
        });

        function getBotResponse(userMessage) {
            const lowerMessage = userMessage.toLowerCase();
            
            // Buscar coincidencia exacta primero
            for (const keyword in legalKnowledgeBase) {
                if (lowerMessage.includes(keyword.toLowerCase())) {
                    return legalKnowledgeBase[keyword];
                }
            }
            
            return legalKnowledgeBase['default'];
        }

        function addMessage(message, isUser = false) {
            const messageDiv = document.createElement('div');
            messageDiv.classList.add('message');
            messageDiv.classList.add(isUser ? 'user-message' : 'bot-message');
            
            const formattedMessage = message.replace(/\n/g, '<br>');
            messageDiv.innerHTML = formattedMessage;
            
            chatMessages.appendChild(messageDiv);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        function sendMessage() {
            const message = userInput.value.trim();
            if (message) {
                addMessage(message, true);
                userInput.value = '';
                
                // Indicador de escritura
                const typingDiv = document.createElement('div');
                typingDiv.classList.add('message', 'bot-message');
                typingDiv.innerHTML = '<i class="fas fa-ellipsis-h"></i> Abogacini está escribiendo...';
                chatMessages.appendChild(typingDiv);
                chatMessages.scrollTop = chatMessages.scrollHeight;
                
                // Simular procesamiento
                setTimeout(() => {
                    chatMessages.removeChild(typingDiv);
                    const botResponse = getBotResponse(message);
                    addMessage(botResponse, false);
                }, 1500);
            }
        }

        sendMessageBtn.addEventListener('click', sendMessage);

        userInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                sendMessage();
            }
        });

        // Efectos de hover mejorados
        document.querySelectorAll('.btn-primary, .service-card, .quick-question').forEach(element => {
            element.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
            });
            
            element.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    </script>
</body>
</html>