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

1. **Dependencies installeren:**
```bash
   composer install
   npm install && npm run dev 


   