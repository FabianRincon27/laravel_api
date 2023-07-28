<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Proyecto Consumo de API

Consumir API para generar usuarios random


#### Requisitos

- PHP >= 8.1
- Composer

#### Instalación

1. Clona este repositorio en tu máquina local:
```
    $ git clone https://github.com/FabianRincon27/laravel_api.git
```

2. Accede al directorio del proyecto:
```
    $ cd laravel_api
```

3. Instala las dependencias del proyecto utilizando Composer:
```
    $ composer update
```

4. Crea un archivo .env basado en el archivo .env.example y configura la conexión a la base de datos.
```
    $ cp .env.example .env
```

4. Crea la key del proyecto
```
    $ php artisan key:generate
```

6. Ejecuta las migraciones para crear las tablas de la base de datos

```
    $ php artisan migrate
```


#### Uso
Para ejecutar el proyecto, puedes utilizar el servidor de desarrollo de Laravel

```
    $ php artisan serve
```

Una vez que el servidor esté en ejecución, puedes acceder al proyecto en tu navegador web en la URL http://localhost:8000