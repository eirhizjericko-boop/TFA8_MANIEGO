# Counterboard POS TFA8

Student: Eirhiz Jericko Maniego

This Laravel project continues the Counterboard POS application through TFA8. It uses Laravel resource routes for customer and staff account management and Laravel Breeze-style session authentication so only logged-in staff can manage those records.

## Required pages and forms

- `/login` - staff login
- `/register` - staff registration
- `/customers` - protected customer account resource
- `/customers/create` - protected customer creation form
- `/customers/{id}/edit` - protected customer edit form
- `/users` - protected user account resource with avatar or placeholder image
- `/users/create` - protected user creation form
- `/users/{id}/edit` - protected user edit form with avatar upload
- `/about` - project information

The customer and user resources are registered with `Route::resource()` inside an `auth` middleware group. Visiting a protected page while logged out redirects to `/login`.

## Run in Visual Studio Code

Open this folder in Visual Studio Code, then run:

```powershell
composer install
copy .env.example .env
php artisan key:generate
New-Item database/database.sqlite -ItemType File
php artisan migrate --seed
php artisan storage:link
php artisan serve
```

If the SQLite file already exists, skip the `New-Item` command. Open `http://127.0.0.1:8000` in a browser.

If PHP is not on your PATH, use the XAMPP PHP executable:

```powershell
C:\xampp\php\php.exe artisan migrate --seed
C:\xampp\php\php.exe artisan storage:link
C:\xampp\php\php.exe artisan serve
```

The seeded login is `ari.cruz@example.test` with password `password`.

## Breeze setup reference

The authentication files in this repository follow the standard Laravel Breeze Blade structure. In a fresh Laravel copy, the official scaffold commands are:

```powershell
composer require laravel/breeze --dev
php artisan breeze:install blade
npm install
npm run build
```

## Avatar upload requirement

The TFA7 avatar upload remains available. It validates an image no larger than 2MB, prepares a square JPEG thumbnail with Intervention Image, stores it through `Storage::disk('public')`, and saves only the resulting path in the database.

## Project structure

```text
app/Http/Controllers/       resource and authentication controllers
app/Models/                 Customer and authenticated User models
database/migrations/        users, customers, and avatar schema
database/seeders/           sample accounts and login credentials
resources/views/            lists, forms, auth views, and shared layout
public/images/              avatar placeholder
routes/web.php              page routes and protected resource routes
routes/auth.php             login, registration, and logout routes
```

## Verification commands

```powershell
php artisan route:list
php artisan migrate:status
php artisan test
```

Confirm that the route list includes the resource routes, `login`, `register`, and `logout`. Test `/customers` once logged out to confirm the redirect, then log in and confirm the customer page opens.

No hosting setup is included.
