# UD6 - Laravel

Este directorio contiene el material de estudio y ejercicios correspondientes a la Unidad Didáctica 6 (UD6). A continuación, se describen los temas cubiertos en cada semana.

---

## Comandos para dependencias

composer install (vendor)
php artisan key:generate
.env

## Árbol

```php
UD6 - Laravel.
├── 1. Gogodev.
│   ├── 1.- Fundamentos.
│   ├── 2.- Blade.
│   ├── 3.- MigracionesModel.
|   ├── 4.- Controladores.
|   └── 5.- CRUD. 
└── 2. ProyectoFPDual.
```

## Semana 1 (080125-100125).

Instalación y preparación del entorno de desarrollo de Laravel + Composer.

## Semana 2. (130125-170125).

### 1. Gogodev.

Vamos a analizar el tutorial de Gogodev.

Curso Profesional De LARAVEL.

Enlace al tutorial: [https://www.youtube.com/watch?v=aljDqJCYkIc&amp;list=PLDllzmccetSM50U0Y9fTOWHvSzAZ_W6Il]()

#### 1.- Fundamentos.

Curso Profesional De LARAVEL. Enlace tutorial: [Episodio 1 - Fundamentos.](https://www.youtube.com/watch?v=kV2jUg-iXYw)

- Formas para crear un proyecto desde 0:
  - `composer create proyect laravel/laravel miproyecto`
  - `laravel new helloworld`
  - `composer create-project --prefer-dist laravel/laravel:^10.0 helloworld10`
  - Laravel Herd: Nuevo proyecto

* Comando para instalar todas las dependencias necesarias: `npm install`
* Para iniciar el proyecto: `php artisan serve`

#### 2.- Blade.

Curso Profesional De LARAVEL. Enlace tutorial: [Episodio 2 - Blade](https://www.youtube.com/watch?v=--sKDxpKbxM).

1. **Introducción.**

Conceptos básicos de Blade y su rol en la creación de vistas.

Configuración inicial con `laravel new blade`.

2. **Layouts.**

Uso de layouts para compartir código entre vistas.

Ejemplo de layout base (`landing.blade.php`) con secciones definidas mediante `@yield`.

3. **Parciales.**

Creación de secciones reutilizables como menús mediante `@include`.

Ejemplo: menú definido en `layouts/_partials/menu.blade.php`.

4. **Rutas Nombradas.**

Ventajas de usar rutas nombradas en lugar de URLs absolutas.

Ejemplo práctico con enlaces generados dinámicamente.

5. **Componentes Blade.**

Uso de componentes para fragmentos de interfaz más complejos y reutilizables.

Ejemplo: tarjeta (`card.blade.php`) con atributos dinámicos llenados mediante `@component` y `@slot`.

6. **Recursos Estáticos.**

Organización de recursos estáticos en la carpeta `public`.

Carga de imágenes, estilos CSS y otros archivos estáticos con la función `asset`.

Ejemplo de uso en `landing.blade.php`:

```php
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<img src="{{ asset('assets/img/image.png') }}" alt="Descripción">
```

7. **Ejemplo Completo.**

- Implementación de un sistema de plantillas con vistas como index, about, services, y más.
- Integración de layouts, parciales, componentes y recursos estáticos en una estructura clara y escalable.

#### 3.- Migraciones y Modelos.

Curso Profesional De LARAVEL. Enlace tutorial: [Episodio 3 - Migraciones Modelos](https://www.youtube.com/watch?v=njvzNhF0ka4&list=PLDllzmccetSM50U0Y9fTOWHvSzAZ_W6Il&index=4&pp=iAQB).

Este episodio del curso Profesional de Laravel aborda en detalle cómo trabajar con migraciones y modelos en Laravel, incluyendo configuraciones, comandos, buenas prácticas y funcionalidades avanzadas. Aquí tienes un resumen de los puntos más importantes:

**Marcas de Tiempo.**

- **Introducción:** 0:00:00.
- **Configuración de la capa de persistencia:** 0:00:55.
- **Migraciones:** 0:23:37.
- **Rollbacking:** 0:45:17.
- **Modelos:** 1:03:09.
- **Conclusiones:** 1:24:29.

##### - Configuración de la capa de persistencia.

1. Creación de un proyecto Laravel sin starter kit:

   `laravel new modeldata`
2. Configuración de la base de datos en el archivo `.env`.

   - Soporte para diferentes motores como MySQL y SQLite.
   - Configuración adicional en `/config/database.php`.
3. Inicialización de migraciones con:

   `php artisan migrate`

##### Migraciones.

- Creación de migraciones para definir la estructura de la base de datos.

  `php artisan make:migration create_notes_table`
- Estructura básica de las clases de migración:

  - `up`: Define cómo crear la tabla.
  - `down`: Define cómo revertir los cambios (rollback).

* Uso de la clase **Schema** para gestionar tablas:

  - Métodos:`create`, `table`, `dropIfExists`, entre otros.
  - Nomenclatura recomendada: nombres de tablas en plural y en minúsculas.
* Comandos útiles:

  - Migrar tablas:

    `php artisan migrate`
  - Rollback de migraciones:

    `php artisan migrate:rollback`
  - Resetear todas las migraciones:

    `php artisan migrate:reset`

    Actualizar la estructura de tablas mediante un archivo de migración adicional:

    `php artisan make:migration update_notes_table`

##### Modelos.

1. Creación de un modelo:

   `php artisan make:model Note`
2. Convenciones:

- Los modelos deben estar en inglés, singular y con UpperCamelCase.
- Laravel asocia automáticamente el modelo con la tabla correspondiente (por ejemplo, el modelo Note se asocia con la tabla notes).

3. Configuración adicional:

- Especificar manualmente el nombre de la tabla si no sigue la convención:

  `protected $table = 'notas'; `
- Propiedades útiles en los modelos:

  - `$fillable`: Define qué campos son rellenables.
  - `$guarded`: Define qué campos están protegidos.
  - `$casts`: Convierte automáticamente datos a ciertos tipos (ejemplo: date).
  - `$hidden`: Oculta ciertos campos al serializar datos (ejemplo: password).

4. Creación conjunta de modelo y migración:

   `php artisan make:model Author --migration`

##### Comandos Avanzados para Crear Modelos.

Laravel permite generar múltiples clases asociadas a un modelo usando opciones adicionales:

- Modelo con migración:

  `php artisan make:model Flight --migration`
- Modelo con factory, seeder y controlador:

  `php artisan make:model Flight --all`
- Modelo para tablas pivote:

  `php artisan make:model Member --pivot `

## Semana 3. (200125-240125).

#### 4.- Controladores.

Curso Profesional De LARAVEL. Enlace tutorial: [Episodio 4 - Controladores.
](https://youtu.be/YJrCBe4hx3Y?si=rqohCFa4I0WTRlVZ)

##### 1. Introducción.

En esta sección completamos el patrón MVC al integrar los controladores, explorando la conexión entre rutas, vistas, modelos y el manejo de datos mediante diferentes herramientas como Eloquent, SQL puro y métodos mixtos. El objetivo es comprender el sistema completo de Laravel.

##### 2. Configuración inicial.

* **Creación del proyecto.**

  Se utiliza Composer para crear un nuevo proyecto:

  `composer create-project laravel/laravel controllers`
* **Configuración de base de datos.**

  Actualizamos el archivo `.env` para vincular una base de datos MariaDB o MySQL.
* **Modelado de datos.**

  Se añaden columnas como `age`, `address`, y `zip_code` a la tabla `users` mediante migraciones. Los cambios son reflejados en el modelo `User.php`, actualizando la 		propiedad `$fillable`.
* **Ejecución de migraciones.**

  `php artisan migrate:refresh`

##### 3. Vinculación Ruta-Controlador-Vista.

* **Creación del controlador.**

  `php artisan make:controller UserController`

  Se define un método index en el controlador para devolver una vista.
* **Rutas y vistas.**

  - Asociación de ruta y controlador en `routes/web.php`:

    `Route::get('/', [UserController::class, 'index'])->name('user.index');`
  - Vinculación del controlador con vistas usando Blade.
    (`resources/views/user/index.blade.php`).

##### 4. Manipulación de datos.

* **Consultas con Eloquent.**

Recuperación de datos usando User::all() y pasando resultados a vistas mediante compact.

* **Inserción de datos.**

Métodos para crear registros:

    - Usando`new User` seguido de `save`.

    - Usando`User::create` con los atributos necesarios.

Redirigir tras crear datos:

`return redirect()->route('user.index');`

* **Consultas avanzadas con Eloquent.**

Realización de búsquedas con filtros, ordenamientos y límites:

```php
$users = User::where('age', '>=', 18)
             ->orderBy('age', 'asc')
             ->limit(5)
             ->get();
```

##### 5. Consultas SQL RAW.

* **Uso de consultas SQL directas mediante la clase DB:**

```php
$users = DB::select('SELECT * FROM users');
DB::insert('INSERT INTO users (...) VALUES (...)');
```

**Ventajas:** mayor control y flexibilidad.

**Desventajas:** menor integración con POO y dependencia de la estructura SQL.

#### 5.- CRUD.

Curso Profesional De LARAVEL. Enlace tutorial: [Episodio 5 - CRUD.](https://youtu.be/T_9pKfj1dBI?si=V0RsNyawAOOTXYma)

## Semana 4. (270125-310125).

#### 7.- Seeder, Factory y Faker.

Curso Profesional De LARAVEL. Enlace tutorial: [Episodio 7 - Seeder, Factory y Faker.](https://youtu.be/A-7_hQRX3yk?si=JbxLaxyG29WSCOY-)

#### 8.- Relaciones.

Curso Profesional De LARAVEL. Enlace tutorial: [Episodio 8 - Relaciones.](https://youtu.be/7B_Sbqq62Bc?si=Qb5IGUpOOUB-fCrO)

Las relaciones van a ir en los modelos.

php artisan migrate --> php artisan db:seed


## Semana 5. (030225-070225).

#### 6.- API REST.

Curso Profesional De LARAVEL. Enlace tutorial: [Episodio 6 - API.](https://youtu.be/DvzLf1SMASo?si=bTS2Mp3c0Xm8d5Lu)


### 2. ProyectoFPDual.
