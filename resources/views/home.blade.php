@extends('layoutClient.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/medicament.css') }}">

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
        <h2>Produits Garantis</h2>
        <p>Médicaments certifiés et disponibles sur ordonnance ou en libre accès.</p>
    </div>
    <div class="feature">
        <h2>Service Rapide</h2>
        <p>Préparation rapide au comptoir ou livraison à domicile.</p>
    </div>
</section>

<section class="medicaments-section">
    <h1>Nos Médicaments</h1>
    <p>Voici une sélection de nos produits disponibles.</p>

  <div class="medicament-grid">
    @foreach($medicaments as $medicament)
        <div class="medicament-card">
            <img src="{{ asset('storage/' . $medicament->image) }}" alt="image {{ $medicament->nom }}">
            <h2>{{ $medicament->nom }}</h2>
            <p>{{ $medicament->description }}</p>
            <span class="prix">{{ number_format($medicament->prix, 0, ',', ' ') }} FCFA</span>

           <form action="{{ route('orders.store', $medicament->id) }}" method="POST">
    @csrf
    <input type="number" name="quantity" value="1" min="1" max="{{ $medicament->quantite_en_stock }}">
    <button type="submit">Commander</button>
</form>

        </div>
    @endforeach
</div>

</section>

<!-- MODAL DE COMMANDE -->
<div id="modalCommande" class="modal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5); justify-content:center; align-items:center;">
    <div class="modal-content" style="background:#fff; padding:20px; border-radius:6px; width:300px; position:relative;">
        <button id="closeModal" type="button" style="position:absolute; top:10px; right:10px; border:none; background:none; font-size:20px; cursor:pointer;">&times;</button>
        <h2 id="modalTitle">Commander</h2>
        <form id="commandeForm" method="POST">
            @csrf
            <label for="quantite">Quantité :</label>
            <input type="number" id="quantite" name="quantity" min="1" value="1" required>
            <button type="submit" style="margin-top:10px;">Valider</button>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('modalCommande');
    const modalTitle = document.getElementById('modalTitle');
    const quantiteInput = document.getElementById('quantite');
    const commandeForm = document.getElementById('commandeForm');
    const closeModalBtn = document.getElementById('closeModal');

    document.querySelectorAll('.btn-commander').forEach(button => {
        button.addEventListener('click', () => {
            const id = button.dataset.id;
            const nom = button.dataset.nom;

            modal.style.display = 'flex';
            modalTitle.textContent = 'Commander : ' + nom;
            quantiteInput.value = 1;
            commandeForm.action = `/orders/${id}`;
        });
    });

    closeModalBtn.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    window.addEventListener('click', e => {
        if (e.target === modal) {
            modal.style.display = 'none';
        }
    });
});
</script>
@endsection
