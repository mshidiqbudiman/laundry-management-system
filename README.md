# Family Laundry System

A production-oriented Laravel monolith for a small family laundry business. The repository currently contains only the Milestone 0 foundation: a minimal public page, internal administrator authentication, an authenticated admin placeholder, and the existing weight quantity rule.

Business features such as customers, services, orders, pricing, payments, and reporting are intentionally deferred to later milestones. See [Domain Notes](docs/DOMAIN_NOTES.md) and [Milestone 0](docs/CODEX_MILESTONE_0.md).

## Requirements

- PHP 8.2 or newer, with the extensions required by Laravel and pdo_mysql
- Composer 2
- MySQL

Node.js is not required for Milestone 0 because the small foundation stylesheet is served directly from public/css.

## Local setup

1. Install PHP dependencies:

       composer install

2. Create the local environment file:

       cp .env.example .env
       php artisan key:generate

   On Windows PowerShell, use Copy-Item .env.example .env instead of cp.

3. Create an empty MySQL database named family_laundry, or choose another name, then update the DB_* values in .env. Never commit .env.

4. Create the framework and authentication tables:

       php artisan migrate

5. Create the first internal administrator interactively:

       php artisan app:create-admin

   The password is entered through a hidden prompt and is stored only as a secure hash.

6. Start the local server:

       php artisan serve

   Open http://127.0.0.1:8000 for the public page or http://127.0.0.1:8000/admin for the protected admin area.

## Tests and code style

Tests use an in-memory SQLite database and do not need the local MySQL database:

    php artisan test

Run the Laravel formatter check with:

    vendor/bin/pint --test

## Deployment notes

- Point the web server document root at public/, never the repository root.
- Set APP_ENV=production, APP_DEBUG=false, a generated APP_KEY, and real MySQL credentials through deployment secrets.
- Run php artisan migrate --force as a controlled deployment step.
- Create operator accounts with php artisan app:create-admin; no default account is seeded.
