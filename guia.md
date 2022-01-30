# Guía de comandos Laravel

## Crear proyecto
composer create-project laravel/laravel x

## Breeze
1. - composer require laravel/breeze --dev
2. - php artisan breeze:install
3. - npm install
4. - npm run dev
5. - php artisan migrate (La bd ya debe estar creada)

## Bootsrap
1. - npm install bootstrap
2. - <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
(Insertar link en layout plantilla )

## Rutas
Route::resource('x', xController::class)->middleware(['auth']);

- Si queremos cambiar algo en el nombre de la url le añadimos parameters a la resource
Route::resource('centros', CentroController::class)->parameters(['centros'=>'x'])->names('centros'); 


## Resources comando (Crear controllador tipo resource y modelo)
php artisan make:controller PhotoController --model=Photo --resource

## Controller
php artisan make:controller xController
php artisan make:controller xController --resource

## Crear modelo
php artisan make:model x

## Migrar
php artisan migrate 
php artisan make:migration add_x_to_table_x
php artisan make:fresh --seed
php artisan migrate:reset
composer require doctrine/dbal (renombrar columna)

## Seeder (Mejor usar seeder llamando al factory)
php artisan make:seeder xSeeder

- Llenas con:
  -  $curso = new Curso();
  -  $curso->name = "Laravel"
  - ...
  -  $curso->save()
- Otro modo es llamar desde databaseSeeder
    - $this call ..

## Factory
1. - php artisan make:factory xFactory
2. - php artisan migrate:fresh --seed

## Valor por default en migracion y valor por defecto en factory
$table->string('user_role')->default('propietario');
'user_role' => $this->faker->randomElement(['super_admin','admin','propietario','cliente'])

## Modelo insertar datos
Poner en filleable los campos de la bd, deben llamarse igual los input names que las columnas de la bd.

protected $fillable = ['name','terminos'=> 'boolean'];


## Listar routes
php artisan route:list

## Request comando 
php artisan make:request StoreRequest


## Lenguajes comando
composer require laravel-lang/lang
php artisan lang:add es

