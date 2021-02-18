# module-todolist
## HOW TO USE

### Create a new laravel project
composer create-project laravel/laravel <project-name>
  
### Into the project file
cd <project-name>
  
### Add laravel modules
composer require nwidart/laravel-modules

### Configure laravel modules
php artisan vendor:publish --provider="Nwidart\Modules\LaravelModulesServiceProvider"
sudo nano composer.json

### Then add the Modules dir in psr-4 autoloader
"Modules\\": "Modules/",

### Reload autoloader
composer dump-autoload

### Because Modules/ & modules_statuses.json aren't created if no module is created with Artisan, just create them manually
mkdir Modules/
nano modules_statuses.json

### Then add
{
"Todo": true
}

### Install Breeze (the Auth layer for Laravel)
composer require laravel/breeze --dev
php artisan breeze:install
php artisan migrate

### Configure tne database into the .env file

### Ready to launch
php artisan serve
