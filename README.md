# AppBank
Proyecto semestral Programación T-Móviles


Para trabajar las rutas autenticadas se realiza con auth sanctum, por lo que se debe ejecutar el siguiente comando para generar el token de autenticación:

- composer require laravel/sanctum

- php artisan vendor:publish --tag=sanctum-migrations 
que sirve para crear las migraciones de la base de datos.

Tambien crear el controlador de autenticación:

php artisan make:controller SecurityAuthController

Y agregar las rutas de autenticación en el archivo api.php:

Route::middleware(['auth:sanctum'])->group(function () {
    Route::apiResource('/users', UsersController::class);
    Route::apiResource('/bank-accounts', BankAccountsController::class);
    Route::apiResource('/benefits', BenefitsController::class);
    Route::apiResource('/consultancies', ConsultanciesController::class);
    Route::apiResource('/credits', CreditsController::class);
    Route::apiResource('/life-insurances', LifeInsurancesController::class);
    Route::apiResource('/offices', OfficesController::class);
    Route::post('/logout', [SecurityAuthController::class, 'logout']);
});

Route::post('/login', [SecurityAuthController::class, 'login'])->name('login');

