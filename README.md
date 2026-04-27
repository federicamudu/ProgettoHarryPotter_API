# Documentazione Tecnica: Interfaccia Utente e Client API Harry Potter con Laravel

## 1. Titolo del Progetto e Overview

Il progetto **"ProgettoHarryPotter_API"** è un'applicazione web sviluppata con il framework PHP Laravel, progettata per interagire con un'API esterna a tema Harry Potter (specificamente `https://potterapi-fedeperin.vercel.app/`).

L'obiettivo principale del progetto è fornire un'interfaccia utente (UI) intuitiva e reattiva che consenta agli utenti di esplorare e visualizzare informazioni dettagliate su:
*   **Personaggi (Characters)**: Nomi completi, nickname, casate di Hogwarts, date di nascita e interpreti.
*   **Libri (Books)**: Titoli, titoli originali, date di uscita, numero di pagine e descrizioni.
*   **Incantesimi (Spells)**: Nomi degli incantesimi e il loro utilizzo.

L'applicazione include anche una pagina di contatto con un modulo che permette agli utenti di inviare messaggi, con una conferma via email automatica.

**Tecnologie chiave utilizzate:**
*   **Backend**: PHP 8.2+, Laravel 11.x, Composer.
*   **Frontend**: Blade Templates, Bootstrap 5.x, Tailwind CSS, Vite, JavaScript.
*   **Comunicazione API**: Laravel HTTP Client.
*   **Database**: SQLite (default, configurabile per MySQL/PostgreSQL).

## 2. Struttura del Progetto

Il progetto segue la struttura standard di un'applicazione Laravel, con alcune aggiunte specifiche per le funzionalità API e il frontend.

```
.
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── BookController.php
│   │   │   ├── CharacterController.php
│   │   │   ├── ContactController.php
│   │   │   ├── Controller.php
│   │   │   ├── PublicController.php
│   │   │   └── SpellController.php
│   │   ├── Mail/
│   │   │   └── ContactMail.php
│   │   └── Models/
│   │       └── User.php
│   └── Providers/
│       └── AppServiceProvider.php
├── bootstrap/
│   ├── app.php
│   ├── cache/
│   └── providers.php
├── config/
│   ├── app.php
│   ├── auth.php
│   ├── cache.php
│   ├── database.php
│   ├── filesystems.php
│   ├── logging.php
│   ├── mail.php
│   ├── queue.php
│   ├── services.php
│   └── session.php
├── database/
│   ├── factories/
│   │   └── UserFactory.php
│   ├── migrations/
│   │   ├── 0001_01_01_000000_create_users_table.php
│   │   ├── 0001_01_01_000001_create_cache_table.php
│   │   └── 0001_01_01_000002_create_jobs_table.php
│   └── seeders/
│       └── DatabaseSeeder.php
├── public/
│   ├── media/
│   │   └── favpng_magic-in-harry-potter-logo-desktop-wallpaper.png (e altri sfondi)
│   ├── favicon.ico
│   ├── index.php
│   └── robots.txt
├── resources/
│   ├── css/
│   │   ├── app.css
│   │   └── style.css
│   ├── js/
│   │   ├── app.js
│   │   ├── bootstrap.js
│   │   └── main.js
│   └── views/
│       ├── bookDetail.blade.php
│       ├── books.blade.php
│       ├── characterDetail.blade.php
│       ├── characters.blade.php
│       ├── contactUs.blade.php
│       ├── mail/
│       │   └── contact-mail.blade.php
│       ├── spells.blade.php
│       ├── welcome.blade.php
│       └── components/
│           ├── layout.blade.php
│           └── navbar.blade.php
├── routes/
│   ├── console.php
│   └── web.php
├── storage/
│   ├── app/
│   ├── framework/
│   └── logs/
├── tests/
│   ├── Feature/
│   │   └── ExampleTest.php
│   ├── Unit/
│   │   └── ExampleTest.php
│   └── TestCase.php
├── .editorconfig
├── .env.example
├── .gitattributes
├── .gitignore
├── artisan
├── composer.json
├── composer.lock
├── package.json
├── package-lock.json
├── phpunit.xml
├── postcss.config.js
├── README.md
├── tailwind.config.js
└── vite.config.js
```

**Descrizione delle cartelle e dei file principali:**

*   **`app/Http/Controllers`**: Contiene la logica di business dell'applicazione. Ogni controller gestisce le richieste relative a specifiche sezioni (personaggi, libri, incantesimi, contatti, pagine pubbliche).
*   **`app/Mail/ContactMail.php`**: Definisce l'oggetto Mailable per l'invio delle email dal modulo di contatto.
*   **`app/Models/User.php`**: Il modello Eloquent per gli utenti.
*   **`database/migrations`**: Contiene i file per la creazione delle tabelle del database (`users`, `password_reset_tokens`, `sessions`, `cache`, `cache_locks`, `jobs`, `job_batches`, `failed_jobs`).
*   **`public/`**: La directory radice pubblica del server web, contenente gli asset statici come immagini (`media/`), CSS e JS compilati.
*   **`resources/css/`**: Contiene i fogli di stile CSS, inclusi `app.css` (che importa Bootstrap, Bootstrap Icons e `style.css`) e `style.css` per la personalizzazione estetica.
*   **`resources/js/`**: Contiene i file JavaScript. `app.js` è l'entry point che importa Bootstrap e `main.js`. `main.js` include logica per mantenere la posizione di scorrimento.
*   **`resources/views/`**: Contiene i template Blade. Suddivisi per funzionalità (`books.blade.php`, `characters.blade.php`, ecc.), includono anche i template per i dettagli (`bookDetail.blade.php`, `characterDetail.blade.php`) e i componenti Blade riutilizzabili (`components/layout.blade.php`, `components/navbar.blade.php`).
*   **`routes/web.php`**: Definisce tutte le rotte HTTP accessibili via browser.
*   **`.env.example`**: File di esempio per la configurazione delle variabili d'ambiente.
*   **`composer.json`**: Definisce le dipendenze PHP del progetto (Laravel framework, Laravel Tinker, Faker, Laravel Pail, Laravel Pint, Laravel Sail, Mockery, Collision, PestPHP).
*   **`package.json`**: Definisce le dipendenze Node.js/npm del progetto (Bootstrap, Bootstrap Icons, Autoprefixer, Axios, Concurrently, Laravel Vite Plugin, PostCSS, Tailwind CSS, Vite).
*   **`vite.config.js`, `tailwind.config.js`, `postcss.config.js`**: File di configurazione per lo sviluppo frontend con Vite, Tailwind CSS e PostCSS.

## 3. Prerequisiti e Setup

Per installare ed eseguire il progetto localmente, assicurati di avere i seguenti prerequisiti:

*   **PHP**: Versione 8.2 o superiore.
*   **Composer**: Gestore di dipendenze PHP.
*   **Node.js**: Versione 18.0 o superiore (con `npm` o `yarn`).
*   **Un server web**: Apache, Nginx o il server di sviluppo integrato di PHP (`php artisan serve`).
*   **Database**: SQLite (predefinito) o un altro database supportato da Laravel (es. MySQL, PostgreSQL).

**Passi per l'installazione e l'esecuzione:**

1.  **Clona la repository:**
    ```bash
    git clone https://github.com/federicamudu/ProgettoHarryPotter_API.git
    cd ProgettoHarryPotter_API
    ```

2.  **Installa le dipendenze PHP:**
    ```bash
    composer install
    ```

3.  **Crea e configura il file `.env`:**
    Copia il file di configurazione delle variabili d'ambiente di esempio e genera una chiave per l'applicazione.
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
    Apri il file `.env` e, se necessario, modifica le configurazioni del database, della posta elettronica, ecc. Per impostazione predefinita, è configurato per usare SQLite, che non richiede ulteriori configurazioni del server database.

4.  **Installa le dipendenze Node.js:**
    ```bash
    npm install
    # o se usi yarn
    # yarn install
    ```

5.  **Esegui le migrazioni del database:**
    Crea il file database SQLite (se non esiste) ed esegui le migrazioni per creare le tabelle necessarie.
    ```bash
    php -r "file_exists('database/database.sqlite') || touch('database/database.sqlite');"
    php artisan migrate
    ```

6.  **Esegui i seeder (opzionale):**
    Il seeder crea un utente di test.
    ```bash
    php artisan db:seed
    ```

7.  **Compila gli asset frontend:**
    Per lo sviluppo, puoi usare:
    ```bash
    npm run dev
    # o per la produzione
    # npm run build
    ```
    Se vuoi eseguire il server Laravel e il watcher Vite contemporaneamente, puoi usare lo script `dev` definito in `composer.json`:
    ```bash
    composer dev
    ```
    Questo comando avvierà contemporaneamente il server PHP Artisan, il listener della coda, il logger dei log (`pail`) e il server di sviluppo Vite, come specificato nello script `dev` di Composer.

8.  **Avvia il server di sviluppo Laravel:**
    ```bash
    php artisan serve
    ```
    L'applicazione sarà accessibile all'indirizzo `http://127.0.0.1:8000` (o quello specificato da `APP_URL` nel `.env`).

## 4. Architettura e Moduli Principali

Il progetto è basato sull'architettura **Model-View-Controller (MVC)** fornita dal framework Laravel.

### Backend

1.  **Routing (`routes/web.php`)**:
    *   Definisce gli endpoint pubblici dell'applicazione.
    *   Le rotte principali includono:
        *   `/`: Homepage (`PublicController@homepage`).
        *   `/personaggi`: Lista personaggi (`CharacterController@charactersList`).
        *   `/personaggi/dettaglio/{index}`: Dettaglio singolo personaggio (`CharacterController@characterDetail`).
        *   `/libri`: Lista libri (`BookController@booksList`).
        *   `/libri/dettaglio/{index}`: Dettaglio singolo libro (`BookController@bookDetail`).
        *   `/incantesimi`: Lista incantesimi (`SpellController@spellList`).
        *   `/contattaci`: Modulo di contatto (`ContactController@contactUs`).
        *   `/contattaci-submit`: Gestisce l'invio del modulo di contatto (`ContactController@contactUsSubmit`).

2.  **Controllers (`app/Http/Controllers`)**:
    *   **`PublicController`**: Gestisce la visualizzazione della homepage.
    *   **`CharacterController`**:
        *   `charactersList()`: Effettua una richiesta HTTP GET all'API esterna `https://potterapi-fedeperin.vercel.app/it/characters` per ottenere tutti i personaggi e li passa alla vista `characters.blade.php`.
        *   `characterDetail($index)`: Effettua la stessa richiesta all'API, itera sui risultati per trovare il personaggio con l'`index` corrispondente e passa i dettagli alla vista `characterDetail.blade.php`.
    *   **`BookController`**: Simile a `CharacterController`, ma gestisce i dati dei libri dall'endpoint `/it/books`.
    *   **`SpellController`**: Gestisce la lista degli incantesimi dall'endpoint `/it/spells` e li passa alla vista `spells.blade.php`.
    *   **`ContactController`**:
        *   `contactUs()`: Restituisce la vista `contactUs.blade.php` con il modulo.
        *   `contactUsSubmit(Request $request)`: Riceve i dati dal modulo, invia un'email all'indirizzo fornito utilizzando il Mailable `ContactMail` e reindirizza con un messaggio di successo.

3.  **Mail (`app/Mail/ContactMail.php`)**:
    *   La classe `ContactMail` estende `Illuminate\Mail\Mailable`.
    *   Il costruttore riceve `name`, `email` e `userMessage` dall'utente.
    *   Il metodo `envelope()` definisce il mittente (`hack154@noreply.com`, "Hack 154") e l'oggetto dell'email ("Grazie di averci contattato").
    *   Il metodo `content()` specifica la vista Blade (`mail.contact-mail`) che costituisce il corpo dell'email.

4.  **Database e Models**:
    *   Il progetto utilizza un database SQLite per impostazione predefinita, configurato in `config/database.php`.
    *   Le migrazioni (`database/migrations/`) definiscono le tabelle standard di Laravel: `users`, `password_reset_tokens`, `sessions`, `cache`, `cache_locks`, `jobs`, `job_batches`, `failed_jobs`.
    *   Il modello `App\Models\User` estende `Authenticatable` e usa il trait `HasFactory` per la generazione di dati di test.
    *   Non ci sono modelli specifici per personaggi, libri o incantesimi, poiché i dati vengono recuperati direttamente dall'API esterna e non persistiti localmente.

### Frontend

1.  **Blade Templates (`resources/views`)**:
    *   Il file `resources/views/components/layout.blade.php` funge da layout principale, includendo la barra di navigazione (`x-navbar`) e il contenuto specifico della pagina (`$slot`).
    *   `resources/views/components/navbar.blade.php` definisce la barra di navigazione comune a tutte le pagine, con link a tutte le sezioni dell'API e alla pagina di contatto.
    *   Le viste per le liste (`books.blade.php`, `characters.blade.php`, `spells.blade.php`) e i dettagli (`bookDetail.blade.php`, `characterDetail.blade.php`) si occupano di visualizzare i dati ricevuti dai controller.
    *   La vista `mail/contact-mail.blade.php` è un template HTML per l'email di conferma, generato presumibilmente da uno strumento di email design (come Stripocdn).

2.  **Styling (CSS)**:
    *   `resources/css/app.css` importa i framework CSS: Bootstrap (`@import 'bootstrap';`), Bootstrap Icons (`@import 'bootstrap-icons';`) e il CSS personalizzato (`@import './style.css';`).
    *   `resources/css/style.css` contiene stili personalizzati, principalmente per sfondi delle pagine (`homepageSfondo`, `containerCharacters`, `containerBooks`, `containerSpells`, `containerDetailCharacter`, `containerDetailBook`, `containerContact`) e stili specifici per gli elementi dell'UI (es. `cardCustom`, `logoNav`, `navbar-toggler-icon`). Gli sfondi sono immagini locali caricate dalla directory `public/media`.

3.  **Scripting (JavaScript)**:
    *   `resources/js/app.js` è il file JavaScript principale, che importa `bootstrap.js` (per Axios e configurazioni globali HTTP) e `main.js`.
    *   `resources/js/main.js` implementa una piccola funzionalità per memorizzare e ripristinare la posizione di scorrimento (`localStorage.setItem('scrolledPosition', scroll)`) quando si naviga tra una lista (es. `/libri`) e una pagina di dettaglio (es. `/libri/dettaglio/{index}`) e viceversa. Questo migliora l'esperienza utente, permettendo di tornare alla posizione esatta nella lista.

### Configurazione di Sviluppo

*   **Vite (`vite.config.js`)**: Utilizzato per il bundling degli asset frontend. Configurato per ricaricare automaticamente la pagina durante lo sviluppo.
*   **Tailwind CSS (`tailwind.config.js`)**: Framework CSS utility-first, configurato per scansionare le viste Blade e i file JS/Vue per classi Tailwind.
*   **PostCSS (`postcss.config.js`)**: Strumento per trasformare il CSS con plugin come Tailwind CSS e Autoprefixer.

## 5. Guida all'Uso

Dopo aver completato il setup del progetto come descritto nella sezione "Prerequisiti e Setup", l'applicazione sarà pronta per l'uso.

### Accesso all'applicazione

Apri il tuo browser e vai all'URL configurato, solitamente:
`http://127.0.0.1:8000`

### Navigazione principale

La barra di navigazione (visibile in tutte le pagine) ti permetterà di accedere alle varie sezioni:

*   **Homepage**: Clicca sul logo "Potterianesimo" o vai su `/`.
*   **Personaggi**: Accedi a `/personaggi`. Qui vedrai una lista di tutti i personaggi recuperati dall'API esterna.
*   **Libri**: Accedi a `/libri`. Qui vedrai una lista di tutti i libri.
*   **Incantesimi**: Accedi a `/incantesimi`. Qui vedrai una lista di tutti gli incantesimi.
*   **Contattaci**: Accedi a `/contattaci`. Qui troverai un modulo per inviare un messaggio.

### Visualizzazione dei Dettagli

*   **Personaggi**: Dalla pagina `/personaggi`, clicca sul pulsante "Dettaglio" accanto a ciascun personaggio per visualizzare informazioni più specifiche come nickname, casata, data di nascita e interprete.
*   **Libri**: Dalla pagina `/libri`, clicca sul pulsante "Dettaglio" accanto a ciascun libro per visualizzare titolo originale, data di uscita, numero di pagine e una descrizione.

### Funzionalità di "Scroll Position"

Quando navighi da una pagina di lista (es. `/libri` o `/personaggi`) a una pagina di dettaglio e poi torni indietro, l'applicazione tenterà di ripristinare la tua posizione di scorrimento precedente nella lista. Questo è possibile grazie allo script `resources/js/main.js` che salva la posizione di scorrimento nel `localStorage` del browser.

### Invio di messaggi tramite il Modulo di Contatto

1.  Vai alla pagina `/contattaci`.
2.  Compila i campi "Nome completo", "E-mail" e "Il tuo messaggio".
3.  Clicca sul pulsante "Invia".
4.  Riceverai un messaggio di successo sulla pagina e un'email di conferma all'indirizzo fornito (l'email verrà inviata a `hack154@noreply.com` per impostazione predefinita nel Mailable, ma il testo ti dice che hai contattato "con successo"). Verifica la configurazione `MAIL_MAILER` nel tuo `.env` per indirizzare le email. Di default, è `log`, quindi le email saranno scritte nel file di log.
