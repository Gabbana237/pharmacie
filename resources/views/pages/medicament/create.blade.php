@extends('layouts.app')

@section('content')
<div class="table-wrapper">
  <h2 style="color: #012e5f; margin-bottom: 20px;">Ajouter un médicament</h2>
  <form id="addMedForm">
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
      <div>
        <label for="nom">Nom du médicament</label>
        <input type="text" id="nom" name="nom" class="form-input" required>
      </div>
      <div>
        <label for="categorie">Catégorie</label>
        <input type="text" id="categorie" name="categorie" class="form-input" required>
      </div>
      <div>
        <label for="description">Description</label>
        <textarea id="description" name="description" class="form-input" rows="3" required></textarea>
      </div>
      <div>
        <label for="quantite">Quantité en stock</label>
        <input type="number" id="quantite" name="quantite" class="form-input" required>
      </div>
      <div>
        <label for="prix">Prix (€)</label>
        <input type="number" step="0.01" id="prix" name="prix" class="form-input" required>
      </div>
      <div>
        <label for="date_expiration">Date d'expiration</label>
        <input type="date" id="date_expiration" name="date_expiration" class="form-input" required>
      </div>
    </div>
    <div style="margin-top: 20px;">
      <button type="submit" class="export-btn">Ajouter</button>
    </div>
  </form>
</div>
@endsection

@section('styles')
<style>
  .form-input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 6px;
    margin-top: 5px;
  }
  label {
    font-weight: 500;
    color: #012e5f;
  }
</style>
@endsection

@section('scripts')
<script>
  document.getElementById('addMedForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Médicament ajouté (simulation)');
    this.reset();
  });
</script>
@endsection
