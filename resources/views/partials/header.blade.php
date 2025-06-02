<header class="header">
    <div class="container">
        <div class="logo">
            <img src="{{ asset('images/logo.jpg') }}" alt="Logo de la pharmacie" />
            <span>Pharmacie mourra</span>
        </div>
        <nav class="navbar">
            <ul class="nav-links">
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li><a href="{{ route('home') }}#medicaments" class="scroll-link">Médicaments</a></li>
                <li><a href="{{ route('home') }}#services" class="scroll-link">Services</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </div>
</header>