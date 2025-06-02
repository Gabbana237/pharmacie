<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacie Mourra</title>
    <link rel="stylesheet" href="{{ asset('css/acceuil.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @stack('styles')
</head>
<body>
    @include('partials.header')

    <main class="main-content">
        @yield('content')
    </main>
    @include('partials.footer')

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    // Gestion du défilement pour les liens d'ancrage
    document.querySelectorAll('a.scroll-link[href*="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Vérifie si on est déjà sur la page d'accueil
            if (this.getAttribute('href').startsWith('{{ route("home") }}')) {
                const hash = this.getAttribute('href').split('#')[1];
                const target = document.getElementById(hash);
                
                if (target) {
                    // Si on est déjà sur la home, on scroll simplement
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    
                    // Mise à jour de l'URL sans rechargement
                    history.pushState(null, null, `#${hash}`);
                } else {
                    // Si la section n'existe pas, on recharge la page
                    window.location.href = this.getAttribute('href');
                }
            } else {
                // Si on est sur une autre page, on redirige vers home#section
                window.location.href = this.getAttribute('href');
            }
        });
    });
});
    </script>

    <script>
document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');
    
    // Gestion du clic sur le hamburger
    hamburger.addEventListener('click', function() {
        this.classList.toggle('active');
        navLinks.classList.toggle('active');
        
        // Empêche le défilement lorsque le menu est ouvert
        if (navLinks.classList.contains('active')) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = 'auto';
        }
    });
    
    // Fermer le menu lorsqu'un lien est cliqué
    document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('click', function() {
            hamburger.classList.remove('active');
            navLinks.classList.remove('active');
            document.body.style.overflow = 'auto';
        });
    });
    
    // Gestion du défilement pour les ancres
    document.querySelectorAll('.scroll-link').forEach(link => {
        link.addEventListener('click', function(e) {
            if (window.innerWidth <= 768) {
                hamburger.classList.remove('active');
                navLinks.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
        });
    });
});
</script>

    @stack('scripts')
</body>
</html>