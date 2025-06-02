@extends('layouts.app')

@section('content')
<div class="table-wrapper">
  <h2 style="color: #012e5f; margin-bottom: 20px;">Liste des médicaments</h2>
  <table class="invoice-table" id="medicamentTable">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Catégorie</th>
        <th>Description</th>
        <th>Quantité</th>
        <th>Prix (€)</th>
        <th>Expiration</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <!-- Exemple de ligne de médicament -->
      <tr>
        <td>Doliprane</td>
        <td>Douleur</td>
        <td>Paracétamol 500mg</td>
        <td>50</td>
        <td>2.99</td>
        <td>2026-12-01</td>
        <td>
          <button onclick="editMedicament(this)">✏️</button>
          <button onclick="deleteMedicament(this)">🗑️</button>
        </td>
      </tr>
    </tbody>
  </table>
</div>
@endsection

@section('scripts')
<script>
  function deleteMedicament(button) {
    if (confirm('Supprimer ce médicament ?')) {
      const row = button.closest('tr');
      row.remove();
    }
  }

  function editMedicament(button) {
    alert('Fonction d\'édition à implémenter');
  }
</script>
@endsection
