<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Tierra

git clone https://github.com/kre8mymedia/Laravel-Vue-Boiler.git

Run "composer install"

Configure example.env to your application and MySQL database then remove "example" from file name to just ".env"

Run "php artisan key:generate"

Run "npm install"

## Return app-name/public to root on web server XAMPP
Navigate to your server path at /apache/conf/extra/httpd-vhosts.conf

Paste <VirtualHost *:80>
          DocumentRoot "C:/xampp/htdocs/app-name/public"
          ServerName app-name.me
          </VirtualHost>
        
## On Your Local Machine navigate to this path as ADMINISTRATOR

C:/windows/System32/drivers/etc/hosts

Paste "127.0.0.1 app-name.me"

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
