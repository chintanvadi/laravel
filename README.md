## Install Project Steps

Clone the project repository by running the command below
```bash
git clone https://github.com/chintanvadi/laravel.git
```
After cloning,run:

```bash
composer install
```

Duplicate `.env.example` and rename it `.env`

Then run:

```bash
php artisan key:generate
```
#### Database Migrations

Be sure to fill in your database details in your `.env` file before running the migrations:

```bash
php artisan migrate
```

Generate Dummy Users:
```
php artisan tinker
```
after tinker run this command
```
factory(App\User::class, 5000)->create();
```

And finally, start the application:

```bash
php artisan serve
```
