# Laravel Crud App

A simple crud App with Laravel 5.5.

## Installation

Clone the repository-
```
git clone https://github.com/ToTanbir/laravel-crud.git
```

Then cd into the folder with this command-
```
cd laravel-crud
```

Then do a composer install
```
composer install
```

Then create a environment file using this command-
```
cp .env.example .env
```

Then edit `.env` file with appropriate credential for your database server. Just edit these two parameter(`DB_USERNAME`, `DB_PASSWORD`).

Then create a database named `laravelcrud` and then do a database migration using this command-
```
php artisan migrate
```

## Run server

Run server using this command-
```
php artisan serve
```

Then go to `http://localhost:8000` from your browser and see the app.

## Screenshot

![](https://i.imgur.com/inZHcaZ.jpg?1)

## Credits

- [Tanbir](https://github.com/ToTanbir)

