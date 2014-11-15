Laravel Multi-Login Restrictor
=============================

Restrict users on a Laravel 4 system from logging in more than a certain number of times.

This package provides a filter to add to your Laravel routes that will log out the oldest user session for a particular user when he or she is logged in more than a set number of times.

There is a current dev dependency on [Laravel 4 Generators](https://github.com/JeffreyWay/Laravel-4-Generators).

## Usage

Add the composer definition to your composer.json:

```json
"yottaram/multi-login-restrictor": "dev-master"
```

And run `composer update`.  When it is installed, register the service provider in `app/config/app.php` in the `providers` array:

```php
'providers' => array(
        'Yottaram\MultiLoginRestrictor\MultiLoginRestrictorServiceProvider',
)        
```

Publish configuration and review settings in `app/config/packages/yottaram/multi-login-restrictor/config.php`:

```
php artisan config:publish yottaram/multi-login-restrictor
```

In particular, make sure the `users_table` property is set to the name of the users table in your application.  You may also change the field on the users table that indicates how many simultaneous logins each user will be allowed.  To do this edit `users_num_seats_field`.

Run the artisan command to generate migrations which will add a `num_seats` field to the users table and a `users_logins` table:

```
php artisan multi-login:make-migration
```

Run the migrations:

```
php artisan migrate
```

Add the `multi-login-restrict` filter to any route:

```php
Route::group( [ 'before' => [ 'auth', 'multi-login-restrict' ] ], function() 
```

Users by default will be allowed to login at most one simultaneous time.  You may change the value of `num_seats` for any particular user to allow his account additional simultaneous logins.
