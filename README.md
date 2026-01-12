📦 Project Setup Instructions (Laravel 12)
🔧 Requirements

Make sure the following versions are installed on your system:

PHP: 8.2.12

Laravel Framework: 12.46.0

Composer

Git
===============================================================
📥 Clone the Repository
git clone https://github.com/MUTHU-ERSS/Elroi-OMS-Task.git
cd Elroi-OMS-Task
===============================================================
📦 Install Dependencies
composer install
===============================================================
⚙️ Environment Setup

Generate application key:

php artisan key:generate

Database configuration (SQLite is recommended for this task):

In .env file:

DB_CONNECTION=sqlite


Create SQLite database file:

touch database/database.sqlite
===============================================================
🗄️ Run Migrations & Seeders
php artisan migrate
php artisan db:seed


===============================================================

▶️ Run the Application
php artisan serve

===============================================================
🔗 Available API Endpoints

Use browser / Postman / curl to test:

GET /api/customers
GET /api/products


Example:

http://127.0.0.1:8000/api/customers
http://127.0.0.1:8000/api/products


All responses are returned in JSON format.