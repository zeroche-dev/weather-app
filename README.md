
<img src="https://github.com/zeroche-dev/weather-app/blob/master/mockup/weather.png" width="1000px">

## About project

Very simple weather app coded using Laravel, random data.

## Requirements

Laravel >= 9  
PHP >= 8  
Docker

## Usage

Run 

```bash 
./vendor/bin/sail up
```

Recreate database

```bash
php artisan db:wipe

php artisan migarte

php artisan db:seed
```

Try it

[http://localhost:80/city/1](http://localhost:80/city/1)



