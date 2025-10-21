<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nos Services</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #0c4a6e 100%);
            color: white;
            min-height: 100vh;
            overflow-x: hidden;
        }

        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
            pointer-events: none;
        }

        .particle {
            position: absolute;
            width: 2px;
            height: 2px;
            background: rgba(255, 255, 255, 0.4);
            border-radius: 50%;
            animation: float 20s infinite ease-in-out;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0) translateX(0);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100vh) translateX(30px);
                opacity: 0;
            }
        }

        nav {
            position: relative;
            z-index: 100;
            background: rgba(15, 23, 42, 0.8);
            backdrop-filter: blur(10px);
            padding: 20px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            background: linear-gradient(135deg, #10b981, #06b6d4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-links {
            display: flex;
            gap: 30px;
            list-style: none;
        }

        .nav-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(135deg, #10b981, #06b6d4);
            transition: width 0.3s ease;
        }

        .nav-links a:hover {
            color: white;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-links a.active {
            color: #10b981;
        }

        .container {
            position: relative;
            z-index: 2;
            max-width: 1200px;
            margin: 0 auto;
            padding: 80px 30px;
        }

        .hero-section {
            text-align: center;
            margin-bottom: 80px;
            animation: fadeInDown 1s ease-out;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            background: linear-gradient(135deg, #fff 0%, #10b981 50%, #06b6d4 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            letter-spacing: -2px;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.7);
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
            animation: fadeIn 1s ease-out 0.3s both;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .service-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 40px;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.1), rgba(6, 182, 212, 0.1));
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .service-card:hover::before {
            opacity: 1;
        }

        .service-card:hover {
            transform: translateY(-10px);
            border-color: rgba(16, 185, 129, 0.5);
            box-shadow: 0 20px 60px rgba(16, 185, 129, 0.3);
        }

        .service-icon {
            font-size: 3.5rem;
            margin-bottom: 25px;
            display: inline-block;
            transition: transform 0.4s ease;
        }

        .service-card:hover .service-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .service-title {
            font-size: 1.6rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: white;
            position: relative;
        }

        .service-description {
            color: rgba(255, 255, 255, 0.7);
            line-height: 1.7;
            margin-bottom: 25px;
            position: relative;
        }

        .service-features {
            list-style: none;
            margin-bottom: 30px;
            position: relative;
        }

        .service-features li {
            color: rgba(255, 255, 255, 0.6);
            padding: 8px 0;
            padding-left: 25px;
            position: relative;
        }

        .service-features li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #10b981;
            font-weight: bold;
        }

        .service-btn {
            display: inline-block;
            background: linear-gradient(135deg, #10b981, #059669);
            color: white;
            padding: 12px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .service-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s ease;
        }

        .service-btn:hover::before {
            left: 100%;
        }

        .service-btn:hover {
            transform: translateX(5px);
            box-shadow: 0 10px 30px rgba(16, 185, 129, 0.4);
        }

        .cta-section {
            margin-top: 100px;
            text-align: center;
            background: rgba(16, 185, 129, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(16, 185, 129, 0.3);
            border-radius: 20px;
            padding: 60px 40px;
            animation: fadeInUp 1s ease-out 0.6s both;
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

        .cta-title {
            font-size: 2.5rem;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .cta-subtitle {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 30px;
        }

        .cta-btn {
            display: inline-block;
            background: linear-gradient(135deg, #10b981, #059669);
            color: white;
            padding: 18px 45px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.2rem;
            box-shadow: 0 10px 40px rgba(16, 185, 129, 0.4);
            transition: all 0.3s ease;
        }

        .cta-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 50px rgba(16, 185, 129, 0.6);
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 2.5rem;
            }
            .services-grid {
                grid-template-columns: 1fr;
            }
            .nav-links {
                gap: 15px;
            }
            .cta-title {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <div class="particles" id="particles"></div>

    <nav>
        <div class="nav-container">
            <div class="logo">MonSite</div>
            <ul class="nav-links">
                <li><a href="{{ route('acceuil') }}" >Accueil</a></li>
                <li><a href="#" class="active">Services</a></li>
                <li><a href="#">À propos</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="hero-section">
            <h1>Nos Services</h1>
            <p class="hero-subtitle">Des solutions sur mesure pour répondre à tous vos besoins et propulser votre activité vers le succès</p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">💻</div>
                <h2 class="service-title">Développement Web</h2>
                <p class="service-description">Création de sites web modernes, rapides et optimisés pour tous les appareils.</p>
                <ul class="service-features">
                    <li>Design responsive</li>
                    <li>Performance optimale</li>
                    <li>SEO intégré</li>
                    <li>Maintenance incluse</li>
                </ul>
                <a href="#" class="service-btn">En savoir plus →</a>
            </div>

            <div class="service-card">
                <div class="service-icon">📱</div>
                <h2 class="service-title">Applications Mobile</h2>
                <p class="service-description">Développement d'applications natives et cross-platform pour iOS et Android.</p>
                <ul class="service-features">
                    <li>Interface intuitive</li>
                    <li>Performances natives</li>
                    <li>Push notifications</li>
                    <li>Support multi-plateforme</li>
                </ul>
                <a href="#" class="service-btn">En savoir plus →</a>
            </div>

            <div class="service-card">
                <div class="service-icon">🎨</div>
                <h2 class="service-title">Design UX/UI</h2>
                <p class="service-description">Création d'expériences utilisateur engageantes et interfaces visuellement attrayantes.</p>
                <ul class="service-features">
                    <li>Recherche utilisateur</li>
                    <li>Prototypage interactif</li>
                    <li>Tests d'utilisabilité</li>
                    <li>Charte graphique</li>
                </ul>
                <a href="#" class="service-btn">En savoir plus →</a>
            </div>

            <div class="service-card">
                <div class="service-icon">☁️</div>
                <h2 class="service-title">Solutions Cloud</h2>
                <p class="service-description">Déploiement et gestion d'infrastructures cloud sécurisées et scalables.</p>
                <ul class="service-features">
                    <li>Hébergement sécurisé</li>
                    <li>Scalabilité automatique</li>
                    <li>Sauvegarde continue</li>
                    <li>Monitoring 24/7</li>
                </ul>
                <a href="#" class="service-btn">En savoir plus →</a>
            </div>

            <div class="service-card">
                <div class="service-icon">🔒</div>
                <h2 class="service-title">Cybersécurité</h2>
                <p class="service-description">Protection avancée de vos données et systèmes contre les menaces numériques.</p>
                <ul class="service-features">
                    <li>Audit de sécurité</li>
                    <li>Cryptage des données</li>
                    <li>Conformité RGPD</li>
                    <li>Formation équipes</li>
                </ul>
                <a href="#" class="service-btn">En savoir plus →</a>
            </div>

            <div class="service-card">
                <div class="service-icon">📊</div>
                <h2 class="service-title">Analyse de Données</h2>
                <p class="service-description">Transformation de vos données en insights actionnables pour votre business.</p>
                <ul class="service-features">
                    <li>Tableaux de bord</li>
                    <li>Rapports automatisés</li>
                    <li>Intelligence artificielle</li>
                    <li>Prédictions avancées</li>
                </ul>
                <a href="#" class="service-btn">En savoir plus →</a>
            </div>
        </div>

        <div class="cta-section">
            <h2 class="cta-title">Prêt à démarrer votre projet ?</h2>
            <p class="cta-subtitle">Contactez-nous dès aujourd'hui pour discuter de vos besoins et obtenir un devis personnalisé</p>
            <a href="#" class="cta-btn">Demander un devis</a>
        </div>
    </div>

    <script>
        const particlesContainer = document.getElementById('particles');
        const particleCount = 40;

        for (let i = 0; i < particleCount; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';
            particle.style.left = Math.random() * 100 + '%';
            particle.style.animationDelay = Math.random() * 20 + 's';
            particle.style.animationDuration = (Math.random() * 15 + 15) + 's';
            particlesContainer.appendChild(particle);
        }
    </script>
</body>
</html>