# Guía de comandos Laravel

## Crear proyecto
composer create-project laravel/laravel x

## Breeze
1. - composer require laravel/breeze --dev
2. - php artisan breeze:install
3. - npm install
4. - npm run dev
5. - php artisan migrate (La bd ya debe estar creada)


## Controller
php artisan make:controller xController

## Bootsrap
1. - npm install bootstrap
2. - <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
(Insertar link en layout plantilla )

## Crear modelo
php artisan make:model Contacto

## Migrar
php artisan migrate 

## Seeder
php artisan make:seeder xSeeder

## Factory
1. - php artisan make:factory xFactory
2. - php artisan migrate:fresh --seed
