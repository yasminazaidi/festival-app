# Festival App - Backend Web Eindopdracht

Dit is de dynamische website gebouwd met **Laravel 13** voor het vak Backend Web. Het project bevat een volledig functioneel content managementsysteem, gebruikersbeheer en databasekoppelingen volgens de gevraagde MVC-architectuur.

---

##  Functionaliteiten

### 1. Authenticatiesysteem & Gebruikersbeheer
*   Volledig werkend **Login-, Registratie- en Wachtwoordherstelsysteem** via Laravel Breeze.
*   **Rolgebaseerde toegang (RBAC):** Onderscheid tussen normale gebruikers en administrators via een `is_admin` kolom in de database.
*   Beveiligde routes (`middleware`) zodat alleen de administrator content kan toevoegen.

### 2. Laatste Nieuwtjes (News)
*   Bezoekers kunnen de lijst met nieuwsartikelen bekijken en de details per artikel lezen.
*   Administrators kunnen nieuwe nieuwsitems aanmaken via een beveiligd formulier.
*   Automatische publicatiedatum bij het aanmaken van een artikel.

### 3. FAQ Pagina (Veelgestelde Vragen)
*   Vragen zijn overzichtelijk **gegroepeerd per categorie** (One-to-Many relatie tussen `Category` en `Faq`).
*   De administrator heeft de mogelijkheid om nieuwe vragen aan de juiste categorie toe te voegen.

### 4. Contactpagina
*   Formulier met invoervelden voor Naam, E-mail en Bericht.
*   **Server-side en Client-side validatie** op alle velden.
*   Succesvolle verzendingen worden veilig gesimuleerd en opgeslagen in de applicatielogs (`storage/logs/laravel.log`).

---

##  Technische Vereisten & Beveiliging

*   **MVC Structuur:** Strikte scheiding tussen Eloquent Models, Blade Views en Controllers.
*   **Beveiliging:** Volledige bescherming tegen **CSRF** (via `@csrf` tokens in formulieren) en **XSS** (via Blade escaping).
*   **Layouts & Componenten:** Gebruik van meerdere layouts (`app.blade.php` en `guest.blade.php`) en herbruikbare componenten.
*   **Database:** Geconfigureerd met **SQLite**.

---

##  Installatie en Setup

Volg deze stappen om het project lokaal te draaien:

   # 1. Kloon het project van GitHub
git clone <url-van-repo>
cd festival-app

# 2. Installeer de PHP- en JavaScript-dependencies
composer install
npm install && npm run dev

# 3. Configureer het omgevingsbestand (environment file)
cp .env.example .env
php artisan key:generate

# 4. Voer de migraties uit om de tabellen te initialiseren
php artisan migrate

# 5. Start de lokale ontwikkelingsserver (development server)
php artisan serve

## Gebruik van AI
Tijdens de ontwikkeling van dit project werd artificiële intelligentie (AI) gebruikt als ondersteunend hulpmiddel.
 AI werd ingezet voor het opstellen en verbeteren van de documentatie,
 het controleren en corrigeren van Engelstalige teksten
 en het identificeren en oplossen van bepaalde bugs en fouten in de code.