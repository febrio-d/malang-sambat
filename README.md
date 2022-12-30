<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Installation
1. Clone this repository `git clone https://github.com/febrio-d/malang-sambat.git`
2. Go inside to folder by `cd malang-sambat`
3. Run `composer install`
4. Create `.env` file with command `cp .env.example .env`
5. Generate key inside `.env` file by `php artisan key:generate`
6. Start your XAMPP service
7. Create database on XAMPP, example name: `malang-sambat`
8. Open `.env` file and config your database:
    ```
    DB_DATABASE='malang-sambat'
    ```
9. Run `php artisan migrate --seed` and then `php artisan storage:link`
10. Start your local server `php artisan serve`
11. Open link `localhost:8000` as default on your browser
12. Create a new account on the sign up menu
13. Or sign in on the admin dashboard with
    ```
    username=admin
    password=password
    ```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
