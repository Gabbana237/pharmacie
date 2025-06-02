@extends('layouts.app')

@section('title', 'Gestion des Produits')

@section('content')
<div class="page-header">
    <h2>Produits</h2>
    <div class="page-actions">
        <button class="btn-primary" id="add-product">
            <i class="icon-plus"></i>
            Ajouter Produit
        </button>
    </div>
</div>

<div class="products-filters">
    <div class="filter-group">
        <select id="category-filter">
            <option value="">Toutes catégories</option>
            <!-- Options à ajouter dynamiquement -->
        </select>
    </div>
</div>

<div class="table-container">
    <table class="data-table" id="products-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Catégorie</th>
                <th>Prix</th>
                <th>Stock</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Données dynamiques à ajouter plus tard -->
            <tr>
                <td>1</td>
                <td>Paracétamol 500mg</td>
                <td>Analgésique</td>
                <td>5.99 €</td>
                <td>120</td>
                <td>
                    <button class="btn-action">
                        <i class="icon-edit"></i>
                    </button>
                    <button class="btn-action danger">
                        <i class="icon-trash"></i>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class="pagination-container">
    <!-- Pagination à ajouter dynamiquement -->
</div>
@endsection

@section('scripts')
<script>
// Initialisation globale
document.addEventListener('DOMContentLoaded', function() {
    // Gestion de la déconnexion
    document.getElementById('logout-form')?.addEventListener('submit', function(e) {
        e.preventDefault();
        // Implémenter la logique de déconnexion
        console.log('Déconnexion');
    });

    // Recherche globale
    document.getElementById('global-search')?.addEventListener('input', function(e) {
        console.log('Recherche:', e.target.value);
    });
});
</script>
@endsection