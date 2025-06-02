<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil | Pharmacie Mourra</title>
    <link rel="stylesheet" href="{{ asset('css/acceuil.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <img src="{{asset('images/logo.jpg')}}" alt="Logo de la pharmacie" />
                <span>Pharmacie mourra</span>
            </div>
            <nav class="navbar">
                <ul class="nav-links">
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="#">Médicaments</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </nav>
        </div>
    </header>

<main class="main-content">
    <section class="hero">
        <h1>Bienvenue à la Pharmacie Mourra</h1>
        <p>Votre santé, notre priorité. Découvrez nos services, nos conseils santé et nos produits de qualité.</p>
        <button>Découvrir nos services</button>
    </section>

    <section class="features">
        <div class="feature">
            <h2>Conseils Santé</h2>
            <p>Des pharmaciens qualifiés pour vous conseiller et vous accompagner au quotidien.</p>
        </div>
        <div class="feature">
            <h2>Produits Garanties</h2>
            <p>Médicaments et produits de santé certifiés et disponibles sur ordonnance ou en libre accès.</p>
        </div>
        <div class="feature">
            <h2>Service Rapide</h2>
            <p>Préparation d’ordonnances et retrait rapide au comptoir ou livraison à domicile.</p>
        </div>
    </section>
</main>

<footer class="footer">
    <div class="footer-container">
        <!-- Logo et description -->
        <div class="footer-brand">
            <div class="logo">
                <img src="{{ asset('images/logo.jpg') }}" alt="Logo Pharmacie Mourra">
                <span>Pharmacie Mourra</span>
            </div>
            <p class="footer-description">Votre santé, notre priorité depuis 1985.</p>
        </div>

        <!-- Liens utiles -->
        <div class="footer-links">
            <h4>Liens utiles</h4>
            <ul>
                <li><a href="index.html">Accueil</a></li>
                <li><a href="#">Médicaments</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>

        <!-- Coordonnées -->
        <div class="footer-contact">
            <h4>Contactez-nous</h4>
            <address>
                <p><i class="fas fa-map-marker-alt"></i> 123 Rue de la Santé, Casablanca</p>
                <p><i class="fas fa-phone"></i> +212 522 222222</p>
                <p><i class="fas fa-envelope"></i> contact@pharmaciemourra.com</p>
            </address>
        </div>
    </div>

    <!-- Copyright -->
    <div class="footer-copyright">
        <p>&copy; 2025 Pharmacie Mourra. Tous droits réservés.</p>
    </div>
</footer>

    <script>
        // Script pour le menu hamburger
        const hamburger = document.querySelector(".hamburger");
        const navLinks = document.querySelector(".nav-links");
        
        hamburger.addEventListener("click", () => {
            navLinks.classList.toggle("active");
            hamburger.classList.toggle("active");
        });
    </script>
</body>
</html>