# Bookstore_LARAVEL

This is a Laravel/php/mysql project for a bookstore. Centered in CRUD operations and database management.

## Table of Contents

- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
- [Project Structure](#project-structure)
- [License](#license)
- [Acknowledgements](#acknowledgements)

## Requirements

- PHP >= 8.3.3
- Composer
- Node.js and npm
- Web server (e.g., Apache, Nginx) configured to serve Laravel applications

## Installation

1. Clone this repository: `git clone https://github.com/ian-ry/laravel_bookstore_project`
2. Navigate to the project directory: `laravel_bookstore_project`
3. Copy the environment configuration file: `cp .env.example .env`
4. Generate a new application key: `php artisan key:generate`
5. Install PHP dependencies: `composer install`
6. Install JavaScript dependencies: `npm install && npm run dev`
7. Run database migrations: `php artisan migrate`
8. Start the development server: `php artisan serve`

## Usage

The project is mainly focused in database management by using CRUD methods. The user can Create, Read, Update and Delete books from the database as needed.
The main funcionality is in `/localhost/name_of_your_folder/public/bookstore`. From here, users can use the whole funcionality of the application.
To create a new entry for the database, use the button `Add a new book...`. Other functions will be locked until a entry is created.
Once any entry is created for the database, `Edit this book.` and `Delete this book.` will be accesible from `/localhost/name_of_your_folder/public/bookstore`. This buttons edit and delete the entry, respectivetly.

## Project Structure

This project mainly uses the default laravel Structure. The only files that were added are controllers, a migration file and blade views. 

## License

This project currently has no licence and can be used by anyone as long as it adheres to other licences used in this project (laravel, php, etc.)

## Acknowledgements

- Many thanks to Pablo (https://github.com/RE-Pablo) for lending me a hand on migrations.
