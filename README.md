🚀 Setup Guide

Follow these steps to get the project running locally.

1️⃣ Clone Repository

If you’ve already cloned it, skip this step.

git clone https://github.com/MUTHU-ERSS/Elroi-OMS-Task.git
cd Elroi-OMS-Task

2️⃣ Install Dependencies
composer install

3️⃣ Environment Setup

Create or copy the .env file.

Set database connection:

DB_CONNECTION=sqlite


Create the SQLite database file:

touch database/database.sqlite

4️⃣ Database & App Keys

Generate the app key, migrate the database, and seed initial data:

php artisan key:generate
php artisan migrate
php artisan db:seed

5️⃣ Run Application
php artisan serve


Open your browser at http://127.0.0.1:8000