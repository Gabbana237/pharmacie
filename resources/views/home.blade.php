@extends('layoutClient.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/medicament.css') }}">

    <section class="hero">
        <h1>Bienvenue à la Pharmacie Mourra</h1>
        <p>Votre santé, notre priorité. Découvrez nos services, nos conseils santé et nos produits de qualité.</p>
        <button>Découvrir nos services</button>
    </section>

    <section id="services" class="features">
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
            <p>Préparation d'ordonnances et retrait rapide au comptoir ou livraison à domicile.</p>
        </div>
    </section>

    <section id="medicaments" class="medicaments-section">
        <h1>Nos Médicaments</h1>
        <p>Voici une sélection de nos produits disponibles en pharmacie.</p>

        <div class="medicament-grid">
            <div class="medicament-card">
                <img src="{{ asset('images/Doliprane.jpg') }}" alt="Amox">
                <h2>Amox</h2>
                <p>Antibiotique utilisé contre les infections bactériennes.</p>
                <span class="prix">1200 FCFA</span>
                <button class="btn-commander" data-produit="Amox">Commander</button>
            </div>

            <div class="medicament-card">
                <img src="{{ asset('images/Doliprane.jpg') }}" alt="Del">
                <h2>Del</h2>
                <p>Sirop contre la toux et affections ORL.</p>
                <span class="prix">800 FCFA</span>
                <button class="btn-commander" data-produit="Del">Commander</button>
            </div>

            <div class="medicament-card">
                <img src="{{ asset('images/paracetamol.jpg') }}" alt="Paracétamol">
                <h2>Para</h2>
                <p>Paracétamol pour douleurs et fièvre.</p>
                <span class="prix">500 FCFA</span>
                <button class="btn-commander" data-produit="Para">Commander</button>
            </div>

            <div class="medicament-card">
                <img src="{{ asset('images/Smecta.jpg') }}" alt="SMA">
                <h2>SMA</h2>
                <p>Lait infantile riche en nutriments.</p>
                <span class="prix">2500 FCFA</span>
                <button class="btn-commander" data-produit="SMA">Commander</button>
            </div>

            <div class="medicament-card">
                <img src="{{ asset('images/spasfon.jpg') }}" alt="SPA">
                <h2>SPA</h2>
                <p>Spasmolytique contre les crampes.</p>
                <span class="prix">1500 FCFA</span>
                <button class="btn-commander" data-produit="SPA">Commander</button>
            </div>

            <div class="medicament-card">
                <img src="{{ asset('images/vitaminC.jpg') }}" alt="Vitamine">
                <h2>Vit</h2>
                <p>Multivitamines pour renforcer l'immunité.</p>
                <span class="prix">1000 FCFA</span>
                <button class="btn-commander" data-produit="Vit">Commander</button>
            </div>
        </div>
    </section>

    <!-- MODAL -->
    <div id="modalCommande" class="modal">
        <div class="modal-content">
            <span class="close" id="closeModal">&times;</span>
            <h2 id="modalTitle">Commander</h2>
            <form id="commandeForm">
                <input type="hidden" id="produit" name="produit">
                <label for="quantite">Quantité :</label>
                <input type="number" id="quantite" name="quantite" min="1" value="1" required>
                <button type="submit">Valider</button>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const modal = document.getElementById('modalCommande');
            const modalTitle = document.getElementById('modalTitle');
            const produitInput = document.getElementById('produit');
            const quantiteInput = document.getElementById('quantite');
            const commandeForm = document.getElementById('commandeForm');
            const closeModalBtn = document.getElementById('closeModal');

            // Ouvrir le modal
            document.querySelectorAll('.btn-commander').forEach(button => {
                button.addEventListener('click', function () {
                    const produit = this.getAttribute('data-produit');
                    modal.style.display = 'flex';
                    modalTitle.textContent = 'Commander : ' + produit;
                    produitInput.value = produit;
                });
            });

            // Fermer le modal
            closeModalBtn.addEventListener('click', function () {
                modal.style.display = 'none';
            });

            // Envoyer la commande
            commandeForm.addEventListener('submit', function (e) {
                e.preventDefault();
                const produit = produitInput.value;
                const quantite = quantiteInput.value;
                alert(`Commande enregistrée : ${quantite} x ${produit}`);
                modal.style.display = 'none';
            });

            // Fermer en cliquant à l'extérieur
            window.addEventListener('click', function (e) {
                if (e.target === modal) {
                    modal.style.display = 'none';
                }
            });
        });
    </script>
@endsection