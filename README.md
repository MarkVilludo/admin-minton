## Admin-minton
Template for CMS

###Installation

```
composer require mark-villudo/admin-minton
```

##Config: Open config/app.php and under Providers include this.

```
MarkVilludo\AdminMinton\ServiceProvider::class,
```
* It Register the Service provider of our package.

###Publish Assets and views

```
php artisan vendor:publish --provider="MarkVilludo\AdminMinton\ServiceProvider" --tag="views"

php artisan vendor:publish --provider="MarkVilludo\AdminMinton\ServiceProvider" --tag="assets"
``
