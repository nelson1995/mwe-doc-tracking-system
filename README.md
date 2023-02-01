## Document tracking system

This is a web application of a document tracking system which simulates how a document moves through different departments in an organizations and authorized staff with permissions can view it and modify it.

## How to set it up

- Clone the repository
- Run `composer update`
- Rename .env.example to .env and add values to the variables DB_DATABASE,DB_USERNAME,DB_PASSWORD,APP_URL
- Run `php artisan migrate` to migrate the tables && `php artisan db:seed` to seed the database.
= Run `php artisan key:generate` to generate the application key.
- Run `php artisan serve` to start the app.
- Thats it !!!