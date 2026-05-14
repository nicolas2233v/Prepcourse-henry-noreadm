<?php require __DIR__ . '/config.php'; ?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="description" content="Consulta espiritual privada por WhatsApp para orientación amorosa, limpiezas energéticas y armonización emocional. Atención confidencial 24/7.">
    <meta name="theme-color" content="#06283d">
    <title><?php echo htmlspecialchars($SITE_NAME, ENT_QUOTES, 'UTF-8'); ?> | Consulta espiritual privada</title>

    <?php if (!empty($GOOGLE_ADS_ID)): ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo htmlspecialchars($GOOGLE_ADS_ID, ENT_QUOTES, 'UTF-8'); ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '<?php echo htmlspecialchars($GOOGLE_ADS_ID, ENT_QUOTES, 'UTF-8'); ?>');
    </script>
    <?php endif; ?>

    <?php if (!empty($GTM_ID)): ?>
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(), event:'gtm.js'}); var f=d.getElementsByTagName(s)[0], j=d.createElement(s), dl=l!='dataLayer'?'&l='+l:''; j.async=true; j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl; f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','<?php echo htmlspecialchars($GTM_ID, ENT_QUOTES, 'UTF-8'); ?>');
    </script>
    <?php endif; ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,700;0,800;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="desktop.css" media="(min-width: 992px)">
</head>
<body>
<?php if (!empty($GTM_ID)): ?>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo htmlspecialchars($GTM_ID, ENT_QUOTES, 'UTF-8'); ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<?php endif; ?>

<header class="topbar">
    <a href="#inicio" class="brand-wrap" aria-label="Ir al inicio">
        <span class="brand-mark">✦</span>
        <span class="brand-copy">
            <span class="eyebrow">Consulta privada</span>
            <strong><?php echo htmlspecialchars($SITE_NAME, ENT_QUOTES, 'UTF-8'); ?></strong>
        </span>
    </a>
    <nav class="top-links" aria-label="Navegación principal">
        <a href="#servicios">Servicios</a>
        <a href="#metodo">Método</a>
        <a href="#testimonios">Testimonios</a>
        <a href="#faq">FAQ</a>
    </nav>
    <a class="mini-cta" href="wa.php?text=Hola%2C%20quiero%20una%20consulta%20privada" target="_blank" rel="noopener noreferrer">WhatsApp 24/7</a>
</header>

<main id="inicio">
    <section class="hero">
        <div class="hero-bg" aria-hidden="true"></div>
        <div class="hero-overlay" aria-hidden="true"></div>
        <div class="hero-inner">
            <div class="hero-content reveal">
                <span class="chip">🔮 Guía energética + diagnóstico privado</span>
                <h1>Recupera claridad en el amor y toma acción hoy</h1>
                <p class="lead">Si estás viviendo distancia, silencio, ansiedad o una ruptura, te acompaño con una lectura privada para identificar bloqueos, ordenar tu energía y definir el siguiente paso con calma.</p>
                <div class="cta-stack">
                    <a class="btn btn-whatsapp xl" href="wa.php?text=Hola%2C%20quiero%20mi%20diagn%C3%B3stico%20privado%20ahora" target="_blank" rel="noopener noreferrer">💬 Iniciar diagnóstico por WhatsApp</a>
                    <a class="btn btn-primary" href="#servicios">Ver cómo puedo ayudarte</a>
                </div>
                <ul class="trust-row" aria-label="Beneficios principales">
                    <li>✓ Atención confidencial</li>
                    <li>✓ Respuesta rápida</li>
                    <li>✓ Orientación personalizada</li>
                    <li>✓ Sin exposición pública</li>
                </ul>
                <div class="hero-microproof card glass">
                    <div class="hero-proof-head"><span class="pulse-dot"></span><strong>Agenda activa ahora</strong></div>
                    <p id="geoMessage">Abrimos cupos limitados para consultas privadas de amor, armonización y limpieza energética.</p>
                </div>
            </div>

            <aside class="hero-panel card glass reveal" aria-label="Formulario de intención rápida">
                <span class="panel-kicker">Elige tu situación</span>
                <h2>¿Qué necesitas resolver?</h2>
                <div class="quick-list">
                    <a href="wa.php?t=Quiero recuperar la comunicación con mi pareja" target="_blank" rel="noopener noreferrer"><span>01</span><strong>Se alejó o no responde</strong><p>Revisamos el bloqueo y la energía actual del vínculo.</p></a>
                    <a href="wa.php?t=Necesito claridad por una infidelidad o una tercera persona" target="_blank" rel="noopener noreferrer"><span>02</span><strong>Hay una tercera persona</strong><p>Trabajamos protección emocional y claridad para decidir.</p></a>
                    <a href="wa.php?t=Siento cargas negativas y necesito limpieza espiritual" target="_blank" rel="noopener noreferrer"><span>03</span><strong>Siento energía pesada</strong><p>Identificamos cargas, envidias o ciclos que se repiten.</p></a>
                </div>
                <a class="btn btn-whatsapp xl" href="wa.php?text=Hola%2C%20quiero%20contarte%20mi%20caso" target="_blank" rel="noopener noreferrer">Contar mi caso ahora</a>
                <p class="microcopy">Tu consulta es privada. Los tiempos y resultados dependen de cada proceso personal y energético.</p>
            </aside>
        </div>
        <div class="hero-fade" aria-hidden="true"></div>
    </section>

    <section class="section">
        <div class="section-head center reveal">
            <span class="kicker">Por qué funciona mejor</span>
            <h2>Una landing hecha para convertir: clara, emocional y directa</h2>
            <p>Reducimos distracciones, repetimos el CTA en momentos clave y llevamos a WhatsApp con mensajes prearmados según la intención del visitante.</p>
        </div>
        <div class="feature-grid">
            <article class="feature-card card reveal"><span class="icon">⚡</span><strong>Acción inmediata</strong><p>Botones visibles desde el primer pantallazo para captar a quien necesita ayuda urgente.</p></article>
            <article class="feature-card card reveal"><span class="icon">🛡️</span><strong>Confianza</strong><p>Mensajes de privacidad, método y acompañamiento reducen dudas antes del clic.</p></article>
            <article class="feature-card card reveal"><span class="icon">💎</span><strong>Diseño premium</strong><p>Glassmorphism, sombras suaves, fondos místicos y cards visuales con jerarquía moderna.</p></article>
            <article class="feature-card card reveal"><span class="icon">📲</span><strong>WhatsApp listo</strong><p>Cada CTA llega con texto contextual para iniciar conversaciones más calificadas.</p></article>
        </div>
    </section>

    <section class="section alt" id="servicios">
        <div class="section-head center reveal">
            <span class="kicker">Servicios espirituales</span>
            <h2>Elige el trabajo que conecta con tu situación</h2>
            <p>Una presentación visual más fuerte, con beneficios concretos y CTA directo por cada necesidad.</p>
        </div>
        <div class="service-grid">
            <article class="service-card reveal" style="background-image:url('assets/img/Gemini_Generated_Image_lzzytxlzzytxlzzy.png')"><div class="service-content"><span class="service-chip">Amor y vínculo</span><h3>Armonización de pareja</h3><p>Para recuperar diálogo, bajar tensiones y volver a conectar desde una energía más estable.</p><a class="btn btn-whatsapp" href="wa.php?t=Quiero consultar por armonización de pareja" target="_blank" rel="noopener noreferrer">Consultar armonización</a></div></article>
            <article class="service-card reveal" style="background-image:url('assets/img/Gemini_Generated_Image_jt4l65jt4l65jt4l.png')"><div class="service-content"><span class="service-chip">Dulzura emocional</span><h3>Endulzamiento energético</h3><p>Para suavizar discusiones, trabajar resentimientos y abrir una conversación pendiente.</p><a class="btn btn-whatsapp" href="wa.php?t=Quiero consultar por endulzamiento energético" target="_blank" rel="noopener noreferrer">Consultar endulzamiento</a></div></article>
            <article class="service-card reveal" style="background-image:url('assets/img/Gemini_Generated_Image_8deny98deny98den.png')"><div class="service-content"><span class="service-chip">Limpieza profunda</span><h3>Limpieza espiritual</h3><p>Para cortar cargas, cansancio emocional, envidias y ciclos repetidos que bloquean tu bienestar.</p><a class="btn btn-whatsapp" href="wa.php?t=Necesito una limpieza espiritual" target="_blank" rel="noopener noreferrer">Solicitar limpieza</a></div></article>
            <article class="service-card reveal" style="background-image:url('assets/img/Gemini_Generated_Image_9k3og69k3og69k3o.png')"><div class="service-content"><span class="service-chip">Protección</span><h3>Protección y corte de interferencias</h3><p>Para marcar límites energéticos y recuperar calma cuando sientes presión externa.</p><a class="btn btn-whatsapp" href="wa.php?t=Quiero protección y corte de interferencias" target="_blank" rel="noopener noreferrer">Pedir protección</a></div></article>
        </div>
    </section>

    <section class="section" id="metodo">
        <div class="section-head center reveal">
            <span class="kicker">Método simple</span>
            <h2>De la angustia a un plan de acción en 3 pasos</h2>
        </div>
        <div class="process">
            <div class="process-item reveal"><span class="process-dot"></span><div class="process-card card"><strong>1. Me cuentas tu caso por WhatsApp</strong><p>Envías nombres, contexto y qué te preocupa. No tienes que exponerte públicamente.</p></div></div>
            <div class="process-item reveal"><span class="process-dot"></span><div class="process-card card"><strong>2. Recibes una lectura inicial</strong><p>Evaluamos el estado emocional y energético del vínculo para detectar bloqueos principales.</p></div></div>
            <div class="process-item reveal"><span class="process-dot"></span><div class="process-card card"><strong>3. Definimos el trabajo recomendado</strong><p>Te explico opciones, cuidados y próximos pasos sin promesas absolutas ni presión.</p></div></div>
        </div>
        <div class="section-cta reveal"><a class="btn btn-whatsapp xl" href="wa.php?text=Hola%2C%20quiero%20empezar%20con%20la%20lectura%20inicial" target="_blank" rel="noopener noreferrer">Empezar mi lectura inicial</a></div>
    </section>

    <section class="section alt" id="testimonios">
        <div class="social-proof-wrap card glass reveal">
            <div><span class="kicker">Prueba social</span><h2>Historias que generan confianza</h2><p>Conserva tus capturas reales, pero ahora dentro de una sección más limpia, escaneable y preparada para mobile.</p></div>
            <div class="social-badges"><span>+2.000 consultas atendidas</span><span>15 años de experiencia</span><span>Atención 24/7</span></div>
        </div>
        <div class="chat-carousel reveal" aria-label="Capturas de testimonios">
            <img src="assets/img/chat1.webp" alt="Testimonio por chat 1" loading="lazy">
            <img src="assets/img/chat2.webp" alt="Testimonio por chat 2" loading="lazy">
            <img src="assets/img/chat3.webp" alt="Testimonio por chat 3" loading="lazy">
            <img src="assets/img/chat4.webp" alt="Testimonio por chat 4" loading="lazy">
            <img src="assets/img/chat5.webp" alt="Testimonio por chat 5" loading="lazy">
        </div>
        <div class="section-cta reveal"><a class="btn btn-primary" href="wa.php?t=Quiero ver testimonios y consultar mi caso" target="_blank" rel="noopener noreferrer">Ver testimonios y consultar</a></div>
    </section>

    <section class="section">
        <div class="stats-grid">
            <div class="stat card reveal"><strong>24/7</strong><span>Canal de WhatsApp disponible</span></div>
            <div class="stat card reveal"><strong>100%</strong><span>Consulta privada y confidencial</span></div>
            <div class="stat card reveal"><strong>15+</strong><span>Años de acompañamiento</span></div>
            <div class="stat card reveal"><strong>3 min</strong><span>Para enviar tu situación inicial</span></div>
        </div>
    </section>

    <section class="section" id="faq">
        <div class="section-head center reveal">
            <span class="kicker">Preguntas frecuentes</span>
            <h2>Resuelve dudas antes de escribir</h2>
        </div>
        <div class="faq-list">
            <details class="faq-item card reveal"><summary>¿La consulta es confidencial?</summary><p>Sí. La información que compartes se trata de forma privada y solo para orientar tu caso.</p></details>
            <details class="faq-item card reveal"><summary>¿Cuándo puedo escribir?</summary><p>El canal de WhatsApp está disponible 24/7. La respuesta depende de la agenda activa del momento.</p></details>
            <details class="faq-item card reveal"><summary>¿Qué necesito enviar?</summary><p>Tu nombre, el nombre de la otra persona si corresponde, contexto breve y qué deseas resolver.</p></details>
            <details class="faq-item card reveal"><summary>¿Los resultados son garantizados?</summary><p>No prometemos resultados absolutos. Cada proceso es personal; trabajamos con orientación, acompañamiento y enfoque energético responsable.</p></details>
        </div>
    </section>

    <section class="section final-cta">
        <div class="urgency-box reveal">
            <span class="kicker">No sigas con la duda</span>
            <h2>Escríbeme ahora y recibe una orientación inicial</h2>
            <p>Un mensaje puede ayudarte a ordenar lo que sientes y decidir el siguiente paso con más claridad.</p>
            <a class="btn btn-whatsapp xl" href="wa.php?text=Hola%2C%20necesito%20orientaci%C3%B3n%20urgente%20para%20mi%20caso" target="_blank" rel="noopener noreferrer">🚨 Hablar por WhatsApp ahora</a>
            <p class="microcopy">Atención privada. Sin exposición. Sin promesas absolutas.</p>
        </div>
    </section>
</main>

<a class="floating-wa" href="wa.php?text=Hola%2C%20quiero%20hacer%20una%20consulta" target="_blank" rel="noopener noreferrer" aria-label="Abrir WhatsApp">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="" width="42" height="42">
</a>

<script>
    const reveals = document.querySelectorAll('.reveal');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });
    reveals.forEach((item) => observer.observe(item));

    const geoMessage = document.getElementById('geoMessage');
    if (geoMessage) {
        fetch('https://ipapi.co/json/')
            .then((response) => response.ok ? response.json() : null)
            .then((data) => {
                if (data && data.city) {
                    geoMessage.textContent = `Hay consultas privadas disponibles para ${data.city}. Puedes escribir ahora y recibir orientación inicial.`;
                }
            })
            .catch(() => {});
    }
</script>
</body>
</html>
