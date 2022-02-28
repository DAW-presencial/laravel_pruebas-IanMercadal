# Guía de comandos Laravel

## Crear proyecto
composer create-project laravel/laravel miproyecto "8.*"
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
  -  Un array como $usuarios = [[ "name" = ... ]] en la función run
  - DB::table('users')->insert($users); esto va tras el array
  -  $this->call([UserSeeder::class]); esto va en el databaseSeeder
  - Comando para insertarlos es php artisan db:seed
  - Sentencia RAW: 
 DB::insert('insert into centros (name, descripcion, capacidad, fundado, entidad, terminos, user_id, created_at, updated_at) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', array('Borja Moll', 'decripcion de prueba', 1200, '2022-01-13', 'Publica', true, 2, Carbon::now(), Carbon::now()));

- QueryBuilder 
        $centros = [
            'name' => 'Santa Mónica',
            'descripcion' => 'Cualquier texto',
            'capacidad' => 1200,
            'fundado' => '2022-01-01',
            'entidad' => 'Concertada',
            'extraescolar' => baile,
            'terminos' => true,
            "user_id" => 1,
            "created_at" => Carbon::now(), # new \Datetime()
            "updated_at" => Carbon::now(),  # new \Datetime()
        ];
        
DB::table('centros')->insert($centros);

- Eloquent:
        Centro::factory(1)->create();

## Factory
1. - php artisan make:factory xFactory
2. - php artisan migrate:fresh --seed

## Valor por default en migracion y valor por defecto en factory
$table->string('user_role')->default('propietario');
'user_role' => $this->faker->randomElement(['super_admin','admin','propietario','cliente'])
Si quieres utilizar faker con idioma actual, te vas al config/app.php y le cambias en faker_locale

## Modelo insertar datos
Poner en filleable los campos de la bd, deben llamarse igual los input names que las columnas de la bd.

protected $fillable = ['name','terminos'=> 'boolean'];

## Gates
- En App\Providers\AuthServiceProvider metes esto:

Gate::define('update-post', function (User $user, Centro $centro) {
     return $user->id === $centro->user_id;
});

- Controlador

if (! Gate::allows('update-post', $post)) {
    abort(403);
}

## Policies
- php artisan make:policy PostPolicy --model=Post
- En App\Providers\AuthServiceProvider metes esto:
- return $user->id === $post->user_id;


## Listar routes
php artisan route:list

## Request comando 
php artisan make:request StoreRequest

## Lenguajes comando
composer require laraveles/spanish
php artisan vendor:publish --tag=lang
Config - app.php

// Ej: español
'locale'          => 'es',

Utilizar plantilla ya hecha en practica_auth y segui guía (no poner \ de la guía)
https://www.laravelcode.com/post/laravel-8-create-multi-language-website

Modo rafa:
- composer require laravel-lang/lang (Idiomas)
- composer require laravel-lang/publisher (Comando anterior)
- php artisan lang:add en es ca eu gl

## API REST

### Parte Servidor

### WEB.php
- Ruta básica que devuelva el index de blade

### API.php
- Rutas van en routes/api.php
- Route::ApiResource('/x', x::class);

### API Controller
- Solo devuelve colecciones, no vistas
- En el store, pon todos los campos, da problemas con request all.

## Model
- Crear fillable

### Parte Cliente

### FETCH
- La vairable URL debe apuntar en el despliegue a la url, por ejemplo: imercadal_exa.randion.es/public/api/contactos
- No se debe indicar ruta para redirigir, se hace window.onload.

SANCTUM:
- composer require laravel/sanctum
- php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
- php artisan migrate

## Despliegue
- cp .env-example .env
- nano .env y pones credenciales
- FILESYSTEM_DRIVER=public
- composer update
- chmod -R 777 storage
- CAMBIAR RUTA URL DEL JS!!!
- php artisan storage:link
- <td> <img src="{{asset("image/". $post->image) }}" width="150px"></td>
