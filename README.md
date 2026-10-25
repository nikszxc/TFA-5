# POS System (Laravel) - v0.1 Static Data

A basic Point-of-Sale (POS) web app rebuilt in Laravel from the CodeIgniter version (TFA1). The Customer Accounts and User Accounts pages read from static PHP arrays, so no database is involved.

## Pages

| URL          | Route name  | Controller                    | View                    |
|--------------|-------------|-------------------------------|-------------------------|
| `/`          | `home`      | `PageController@index`        | `home.blade.php`        |
| `/about`     | `about`     | `PageController@about`        | `about.blade.php`       |
| `/customers` | `customers` | `CustomerController@index`    | `customers.blade.php`   |
| `/users`     | `users`     | `UserController@index`        | `users.blade.php`       |

## Requirements

- PHP 8.2 or newer
- Composer

## Installation

This folder holds only the files that were added or changed, not the whole Laravel framework.

1. Create a fresh Laravel project and confirm it runs:
   ```bash
   composer create-project laravel/laravel pos-laravel
   cd pos-laravel
   php artisan serve
   ```
2. Copy the contents of this folder into the project, replacing `routes/web.php` when asked.
3. Start the server and visit each page:
   ```bash
   php artisan serve
   ```
   Then open http://127.0.0.1:8000.

See `SETUP.md` for the full list of files and troubleshooting.

## Project structure

```
routes/web.php
app/Http/Controllers/
    PageController.php        landing and about pages
    CustomerController.php    static array of 6 customers
    UserController.php        static array of 6 users
resources/views/
    layouts/app.blade.php     shared layout and navigation
    home.blade.php
    about.blade.php
    customers.blade.php       @foreach over the customers array
    users.blade.php           @foreach over the users array
```

## Notes

- Styling is inline in the layout, so there is no npm or Vite build step.
- Run `php artisan route:list` to see the four named routes.
- The next version (see the database version of this project) replaces the arrays with migrations, seeders and Eloquent models.
