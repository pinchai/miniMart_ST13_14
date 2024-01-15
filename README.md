#miniMart-ST13.14🚀

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
