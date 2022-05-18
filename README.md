# Portfolio Web Alexander Pérez

## Installation

You need to clone this project.

```
git clone https://github.com/AlexanderPerezUrbina/portfolio-laravel.git
```

Install all project dependencies.
```
composer install
```

Copy .env.example to .env
```
cp .env.example .env
```

Generate a project key
```
php artisan key:generate
```

Then start the server in localhost:8000
```
php artisan serve
```
or in a specific host
```
php artisan serve --host=192.168.1.X:8000
```

### Google Recaptcha and Contact Form is not working because you need the access keys

