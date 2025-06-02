<div>
    <label>Nom:</label>
    <input type="text" name="nom" value="{{ old('nom', $medicament->nom ?? '') }}" required><br>

    <label>Description:</label>
    <textarea name="description">{{ old('description', $medicament->description ?? '') }}</textarea><br>

    <label>Quantité en stock:</label>
    <input type="number" name="quantite_en_stock" value="{{ old('quantite_en_stock', $medicament->quantite_en_stock ?? 0) }}" required><br>

    <label>Prix:</label>
    <input type="number" step="0.01" name="prix" value="{{ old('prix', $medicament->prix ?? '') }}" required><br>

    <label>Date d'expiration:</label>
    <input type="date" name="date_expiration" value="{{ old('date_expiration', $medicament->date_expiration ?? '') }}"><br>

    <label>Catégorie:</label>
    <input type="text" name="categorie" value="{{ old('categorie', $medicament->categorie ?? '') }}"><br>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
