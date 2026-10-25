# POS Laravel Lab: Setup

## 1. Create the project and confirm it runs

```bash
composer create-project laravel/laravel pos-laravel
cd pos-laravel
php artisan serve
```

Open http://127.0.0.1:8000. You should see the default Laravel welcome page. Stop the server with Ctrl+C.

## 2. Copy in the files from this folder

Copy these into the project, replacing `routes/web.php` when asked:

```
routes/web.php
app/Http/Controllers/PageController.php
app/Http/Controllers/CustomerController.php
app/Http/Controllers/UserController.php
resources/views/layouts/app.blade.php
resources/views/home.blade.php
resources/views/about.blade.php
resources/views/customers.blade.php
resources/views/users.blade.php
```

(Alternatively, generate the controllers with
`php artisan make:controller PageController` and likewise for the other two,
then paste in the code.)

## 3. Run and check every route

```bash
php artisan serve
```

- http://127.0.0.1:8000/           landing page
- http://127.0.0.1:8000/about      about page
- http://127.0.0.1:8000/customers  Customer Accounts (6 static records)
- http://127.0.0.1:8000/users      User Accounts (6 static records)

If a page looks stale, run `php artisan view:clear` and `php artisan route:clear`.

`php artisan route:list` should show the four named routes: home, about, customers, users.

## Notes

- The styling is inline in the layout, so there is no npm or Vite build step.
- The data lives in the controllers as static arrays and is passed to the views with `view('name', [...])`.
