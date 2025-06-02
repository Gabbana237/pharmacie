@extends('layoutClient.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
<main class="main-content">
    <section class="contact-section">
        <h1>Contactez la Pharmacie</h1>
        <p>Nous serions ravis de vous aider. Remplissez le formulaire ci-dessous pour toute question ou conseil !</p>
        
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('contact.envoyer') }}" method="POST" class="contact-form">
            @csrf
            <div class="form-group">
                <label for="name">Nom Complet</label>
                <input type="text" name="nom" id="name" placeholder="Votre nom complet" value="{{ old('nom') }}" required>
                @error('nom') <div class="error">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="email">Adresse e-mail</label>
                <input type="email" name="email" id="email" placeholder="exemple@domaine.com" value="{{ old('email') }}" required>
                @error('email') <div class="error">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" placeholder="Écrivez votre message ici..." rows="5" required>{{ old('message') }}</textarea>
                @error('message') <div class="error">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <button type="submit">Envoyer le message</button>
            </div>
        </form>
    </section>
</main>
@endsection
