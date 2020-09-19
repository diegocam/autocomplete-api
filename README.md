# Autocomplete API
This API will query user names from a Users Database table.

## Tech Stack
This app uses [Lumen](https://lumen.laravel.com/) as the PHP framework, and Docker to develop locally, using the LEMP (Linux, Nginx, Mysql, PHP) stack.

## Setup
1. Run `cd <your desired path>` to change into the directory where you want this app installed.
2. Run `git clone <this repo> .` to clone this repo to you local machine.
3. Run `cp .env.example .env` to create your .env config file.
4. Run `docker-compose up -d` to install/start all Docker containers.
5. Run `docker-compose exec php /bin/bash` to SSH into your php container by running .
6. Run `composer install` to install any vendor dependencies.
7. Run `php artisan migrate` to create the Users DB table.
8. Run `php artisan db:seed` to populate the Users DB table.

## Test Installation
Open up your web browser and go to http://localhost:8080. You should see
```
Lumen (8.0.1) (Laravel Components ^8.0)
```

## Test Search Endpoint
Run `curl http://localhost:8080/search/test` where "test" can be any user's name. You should receive a response JSON format.
