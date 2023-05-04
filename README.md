

# ayocard

Dibuat hanya untuk daftar jadi freelance wkwk
## Purpose

made to make it easier for cafe/restaurant owners.

## Getting Started

To get started running the project locally, please follow the steps below.

First, clone the repository.

```bash
git clone git@github.com:alfandy12/ayocard.git
```

or

```bash
git clone git@github.com:alfandy12/ayocard.git
```

Then, install dependencies and fetch data to your local machine.

```bash
cd dycafe
composer install
npm install
npm run dev
```

Create a copy of your .env file and generate the laravel project key

```bash
cp .env.example .env
php artisan key:generate
```

Create an empty database for the application and then do configuration in your .env file

Migrate and seed the database

```bash
php artisan migrate::fresh --seed
```

Finally, open your browser.

## Technologies

-   **[Laravel](https://laravel.com/)**
-   **[DaisyUi](https://isyui.com/)**
-   **[Tailwind CSS](https://tailwindcss.com/)**


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).