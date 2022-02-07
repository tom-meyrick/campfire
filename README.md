## Installation

Clone the repository, install dependencies and initialise your .env file. 
````
git clone git@github.com:tom-meyrick/campfire.git
composer install
cp .env.example .env
````
Next setup the database. 
````
php artisan db
create database blog
````
Finally, run the migrations and populate the database. 
````
php artisan migrate --seed
````
