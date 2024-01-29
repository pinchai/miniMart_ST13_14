# miniMart-ST13.14🚀

### Create Project By Using Composer

_Step 1: _

````
    composer create-project laravel/laravel miniMart
````

_Step 2: _

````
    php artisan serve
or
    php artisan serve --port=8080
or
    php artisan serve --port=8080 --hort=xxx.xxx.xxxx
````

### Cloning Project And setting up

_Step 1:_

````gitexclude
    git clone https://github.com/pinchai/miniMart_ST13_14.git
````

_Step 2:_

````
    cd miniMart_ST13_14
````

_Step 3:_

````
    composer install
    or 
    composer install --ignore-platform-reqs
````

_Step 4:_

````
    cp .env.example .env
    php artisan key:generate
    php artisan migrate:fresh --seed
    php artisan serve
````

### Migration

_create new table_

````
php artisan make:migration create_yourTableName_table
ex: php artisan make:migration create_customer_table
````

_edit or add new columns to old table_

````
php artisan make:migration add_youcolumnsname_to_yourtable --table=yourTableName
ex: php artisan make:migration add_columns_gender_to_customer_table --table=customer
````

_generate table_

````
php artisan migrate
````

_rollback table_

````
php artisan migrate:rollback
````

````php
//According to the official Laravel 7.x documentation, you can solve this quite easily.
//Update your /app/Providers/AppServiceProvider.php to contain:

    use Illuminate\Support\Facades\Schema;
    
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
````


````
#nested menu
request()->is('companies/*')

#single menu
{{ url()->current() == url('/') ? 'active' : '' }}
````

