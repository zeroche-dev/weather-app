
<img src="https://github.com/zeroche-dev/weather-app/blob/master/mockup/weather.png" width="1000px">

## About project

Very simple weather app coded using Laravel, random data.

## Requirements

Laravel >= 9  
PHP >= 8  
Docker

## Usage

Configure

```bash
.env
```


Edit /etc/hosts by adding this line on top

```bash
mysql   127.0.0.1 
```

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

Run cron jobs

```bash
php artisan schedule:work
```

Update weather manually

```
php artisan weather:update
```


Try it

[http://localhost:80/city](http://localhost:80/city)



