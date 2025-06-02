    <main class="main-content">
        <section class="contact-section">
            <h1>Contactez la Pharmacie</h1>
            <p>Nous serions ravis de vous aider. Remplissez le formulaire ci-dessous pour toute question ou conseil !</p>
            <form action="envoyer_contact.php" method="POST" class="contact-form">
                <div class="form-group">
                    <label for="name">Nom Complet</label>
                    <input type="text" name="nom" id="name" placeholder="Votre nom complet" required>
                </div>
                <div class="form-group">
                    <label for="email">Adresse e-mail</label>
                    <input type="email" name="email" id="email" placeholder="exemple@domaine.com" required>
                </div>
                <div class="form-group">
                    <label for="subject">Objet</label>
                    <input type="text" name="objet" id="subject" placeholder="Sujet de votre message" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" placeholder="Écrivez votre message ici..." rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit">Envoyer le message</button>
                </div>
            </form>
        </section>
    </main>