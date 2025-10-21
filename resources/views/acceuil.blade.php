<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenue</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #0c4a6e 100%);
            color: white;
            min-height: 100vh;
        }

        /* NAVIGATION */
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

        /* PARTICULES */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }

        .particle {
            position: absolute;
            width: 3px;
            height: 3px;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            animation: float 15s infinite ease-in-out;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0) translateX(0); opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { transform: translateY(-100vh) translateX(50px); opacity: 0; }
        }

        /* CONTENU PRINCIPAL */
        .container {
            position: relative;
            z-index: 2;
            text-align: center;
            max-width: 800px;
            padding: 40px;
            margin-top: 100px; /* laisser de la place pour la nav */
        }

        .glow {
            position: absolute;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(34, 197, 94, 0.3) 0%, transparent 70%);
            border-radius: 50%;
            filter: blur(80px);
            animation: pulse 4s ease-in-out infinite;
            z-index: 0;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 0.5; }
            50% { transform: scale(1.2); opacity: 0.8; }
        }

        h1 {
            font-size: 4.5rem;
            font-weight: 700;
            margin-bottom: 30px;
            background: linear-gradient(135deg, #fff 0%, #10b981 50%, #06b6d4 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: fadeInDown 1s ease-out;
            text-shadow: 0 0 30px rgba(16, 185, 129, 0.3);
            letter-spacing: -2px;
        }

        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .subtitle {
            font-size: 1.3rem;
            margin-bottom: 50px;
            color: rgba(255, 255, 255, 0.8);
            animation: fadeIn 1s ease-out 0.3s both;
            font-weight: 300;
            letter-spacing: 1px;
        }

        @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }

        .btn {
            display: inline-block;
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            padding: 18px 45px;
            border: none;
            border-radius: 50px;
            font-size: 1.2rem;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(16, 185, 129, 0.4);
            animation: fadeInUp 1s ease-out 0.6s both;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            letter-spacing: 0.5px;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s ease;
        }

        .btn:hover::before { left: 100%; }
        .btn:hover { transform: translateY(-3px); box-shadow: 0 15px 50px rgba(16, 185, 129, 0.6); }
        .btn:active { transform: translateY(-1px); }

        .features {
            display: flex;
            gap: 30px;
            justify-content: center;
            margin-top: 60px;
            animation: fadeIn 1s ease-out 0.9s both;
        }

        .feature {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 25px;
            width: 180px;
            transition: all 0.3s ease;
        }

        .feature:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-5px);
            border-color: rgba(16, 185, 129, 0.5);
        }

        .feature-icon { font-size: 2.5rem; margin-bottom: 15px; }
        .feature-text { font-size: 0.95rem; color: rgba(255, 255, 255, 0.9); font-weight: 500; }

        @media (max-width: 768px) {
            h1 { font-size: 2.5rem; }
            .subtitle { font-size: 1rem; }
            .features { flex-direction: column; align-items: center; }
            .feature { width: 250px; }
            .nav-links { gap: 15px; }
        }
    </style>
</head>
<body>
    <div class="particles" id="particles"></div>

    <!-- NAVIGATION -->
    <nav>
        <div class="nav-container">
            <div class="logo">MonSite</div>
            <ul class="nav-links">
                <li><a href="{{ route('acceuil') }}" class="active">Accueil</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li><a href="#">À propos</a></li>
                <li><a href={{ route('contact') }}>Contact</a></li>
            </ul>
        </div>
    </nav>

    <div class="glow"></div>

    <div class="container">
        <h1>Bienvenue sur mon site</h1>
        <p class="subtitle">Découvrez nos solutions innovantes pour votre entreprise</p>
        <a href="{{ route('services') }}" class="btn">Voir nos services</a>

        <div class="features">
            <div class="feature">
                <div class="feature-icon">⚡</div>
                <div class="feature-text">Rapide</div>
            </div>
            <div class="feature">
                <div class="feature-icon">🎯</div>
                <div class="feature-text">Précis</div>
            </div>
            <div class="feature">
                <div class="feature-icon">🚀</div>
                <div class="feature-text">Innovant</div>
            </div>
        </div>
    </div>

    <script>
        const particlesContainer = document.getElementById('particles');
        const particleCount = 50;

        for (let i = 0; i < particleCount; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';
            particle.style.left = Math.random() * 100 + '%';
            particle.style.animationDelay = Math.random() * 15 + 's';
            particle.style.animationDuration = (Math.random() * 10 + 10) + 's';
            particlesContainer.appendChild(particle);
        }
    </script>
</body>
</html>
