<p align="center"><a href="https://venoudev.com"><img src="https://venoudev.com/img/venoudev-2.png" width="400" alt="Venou Dev"></a>
</p>

# VenouDev Results
An awesome package for construct a very understandable Json structure response in your Laravel or Lumen proyect for your API Rest.

## Installation 

```
  composer require venoudev/results
```
### Lumen Register Provider
in your bootstrap/app.php file, configure

```
  /**
  * Venoudev Results
  */
  $app->register(Venoudev\Results\Providers\LumenResultsServiceProvider::class);
  
```


### Installation of resources
  #### Laravel

  #### install resources of the package and gives an awesome message:

  ```
   php artisan results:install-resources
  ```

  #### if you dont see an awesome message use:

  ```
    php artisan vendor:publish --tag=results-resources
  ```
  
  ### Laravel 
  
  update your config/app.php file whit this.
  
  ```
    ...
    /*
      |--------------------------------------------------------------------------
      | Application Locale Configuration
      |--------------------------------------------------------------------------
      |
      | The application locale determines the default locale that will be used
      | by the translation service provider. You are free to set this value
      | to any of the locales which will be supported by the application.
      |
      */
    'locale' => env('APP_LOCALE', 'en'),
    ...
  ```
  
  ### Lumen 
  
  ```
    mkdir resources/lang
    cp -R vendor/venoudev/results/resources/lang/en_results_venoudev resources/lang
  ```
  
  create file in config/app.php  (if you don´t see the folder config create this.)
  
  ```
    <?php

      return [

          /*
          |--------------------------------------------------------------------------
          | Application Name
          |--------------------------------------------------------------------------
          |
          | This value is the name of your application. This value is used when the
          | framework needs to place the application's name in a notification or
          | any other location as required by the application or its packages.
          |
          */

          'name' => env('APP_NAME', 'product-service'),

          /*
          |--------------------------------------------------------------------------
          | Application Environment
          |--------------------------------------------------------------------------
          |
          | This value determines the "environment" your application is currently
          | running in. This may determine how you prefer to configure various
          | services the application utilizes. Set this in your ".env" file.
          |
          */

          'env' => env('APP_ENV', 'production'),

          /*
          |--------------------------------------------------------------------------
          | Application Debug Mode
          |--------------------------------------------------------------------------
          |
          | When your application is in debug mode, detailed error messages with
          | stack traces will be shown on every error that occurs within your
          | application. If disabled, a simple generic error page is shown.
          |
          */

          'debug' => env('APP_DEBUG', false),

          /*
          |--------------------------------------------------------------------------
          | Application URL
          |--------------------------------------------------------------------------
          |
          | This URL is used by the console to properly generate URLs when using
          | the Artisan command line tool. You should set this to the root of
          | your application so that it is used when running Artisan tasks.
          |
          */

          'url' => env('APP_URL', 'http://localhost'),

          /*
          |--------------------------------------------------------------------------
          | Application Timezone
          |--------------------------------------------------------------------------
          |
          | Here you may specify the default timezone for your application, which
          | will be used by the PHP date and date-time functions. We have gone
          | ahead and set this to a sensible default for you out of the box.
          |
          */

          'timezone' => 'UTC',

          /*
          |--------------------------------------------------------------------------
          | Application Locale Configuration
          |--------------------------------------------------------------------------
          |
          | The application locale determines the default locale that will be used
          | by the translation service provider. You are free to set this value
          | to any of the locales which will be supported by the application.
          |
          */

          'locale' => env('APP_LOCALE', 'en'),

          /*
          |--------------------------------------------------------------------------
          | Application Fallback Locale
          |--------------------------------------------------------------------------
          |
          | The fallback locale determines the locale to use when the current one
          | is not available. You may change the value to correspond to any of
          | the language folders that are provided through your application.
          |
          */

          'fallback_locale' => env('APP_FALLBACK_LOCALE', 'en'),

          /*
          |--------------------------------------------------------------------------
          | Encryption Key
          |--------------------------------------------------------------------------
          |
          | This key is used by the Illuminate encrypter service and should be set
          | to a random, 32 character string, otherwise these encrypted strings
          | will not be safe. Please do this before deploying an application!
          |
          */

          'key' => env('APP_KEY'),

          'cipher' => 'AES-256-CBC',

      ];

  ```
  #### Laravel and Lumen 
  later define in your .env file 
  
  ```
    APP_LOCALE=en_results_venoudev
  ```
  
### Configure Facade ResultManager in Laravel if you have problems with ResultManager not found

  in your app/config/app.php add this code in aliases array:
  
  ```
    'aliases' => [

        'App' => Illuminate\Support\Facades\App::class,
        'Arr' => Illuminate\Support\Arr::class,
        'Artisan' => Illuminate\Support\Facades\Artisan::class,
         
         //.... more alisases

        /*
        * Custom Aliases
        */

        'ResultManager' => Venoudev\Results\Facades\ResultManagerFacade::class,
    ],
    
  ```
  
  ### Lumen Facade 
  
  in bootstrap/app.php create an array with your facades and include ResultManager Facade
  
  ```
   
    $facades = [
        '\Venoudev\Results\Facades\ResultManagerFacade' =>  'ResultManager',
        'Illuminate\Support\Facades\App' => 'App'
    ];

    $app->withFacades(true ,$facades);
    $app->withEloquent();

   
  ```

## Commands 

  1. Generate a Skeleton Validator

  ```
    php artisan make:validator Example
  ```
  
  generate => 
  
  
  ```
      <?php

      namespace App\Validators;

      use Illuminate\Support\Facades\Validator;
      use Venoudev\Results\Exceptions\CheckDataException;

      class ExampleValidator
      {

          public static function execute($data){

              $validator=Validator::make($data,[
                   // Your awesome laravel validations here
              ]);

              if ($validator->fails()) {
                  $exception = new CheckDataException();
                  $exception->addFieldErrors($validator->errors());
                  throw $exception;
              }
              return;
          }
      }
  ```

  2. Generate a Skeleton ActionClass

  ```
    php artisan make:action Example
  ```
    
  generate => 
  
  ```
      <?php

      namespace App\Actions;

      class ExampleAction
      {

          public static function execute($data){
            // Your awesome code here.
            return;
          }
      }
  ```

  3. Generate two Skeleton, the first an Contract and second an implementation class from these contract 

  ```
    php artisan make:service Example
  ``` 
  
  generate => 
  
  ### Contract

  ```
      <?php

      namespace App\Services\Contracts;

      interface ExampleService {
           // Your awesome methods to implement here.
      }
  ```

  ### Implementation 

  ``` 
      <?php

      namespace App\Services;

      use App\Services\Contracts\ExampleService;
      use Illuminate\Http\Request;

      class ExampleServiceImpl implements ExampleService{

          // Your awesome implemented methods here.

      }
  ```

  in the method boot of your ServiceProvider or custom provider bind contract to implementation and use your contract in the controllers for example throught dependency inyection
  
  app\Providers\AppServiceProvider.php

  ``` 
      use App\Services\ExampleServiceImpl;
      use App\Services\Contracts\ExampleService;

      ...

      public function boot()
      {
          $this->app->bind(ExampleService::class,ExampleImpl::class);
      }

  ```
  
## Json response structure of Venoudev/Results


```json
{
    "success": "bool",
    "description": "string",
    "data": { "dynamic" },
    "errors": [
        {
            "error_code": "CODE",
            "field": "field || NOTHING",
            "message": "string"
        }
    ],
    "messages": [
        {
            "message_code": "CODE",
            "message": "string"
        }
    ]
}
```

## ErrorMessage

#### Example
```json
    {
        "message_code": "LOGIN_SUCCESS",
        "message": "Login do correctly"
    }

```

## ErrorObject

#### Example
```json

    {
        "error_code": "REQUIRED",
        "field": "email",
        "message": "The email field is required."
    }

```
```json

    {
        "error_code": "STATUS_USER",
        "field": "NOTHING",
        "message": "The status of user is baned."
    }

```

## Example 

Code `200` `Ok`

Content

```json
{
    "success": true,
    "description": "Welcome Be Awesome!",
    "data": {
        "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMjAxZWIzN2IyMTVkNTc5OWU0ZDg2NjJlNTRkYWM5OWEyNTYzMWE3OWM4MWZiMGEzNmRkMDY3NzdlN2M3ZTllZjYzMTA1ZjNiZmYwMzgxOWQiLCJpYXQiOjE1OTI2OTU4ODYsIm5iZiI6MTU5MjY5NTg4NiwiZXhwIjoxNjI0MjMxODg2LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.JgK84-CDMJ6xOQlmpnSdvtTGu0to0mDi0tjY6JhZCeGrfWSWb23SEf3rNDKbtWWiSAp3yBnP08v9J9GYrMwtx9ItYoANGn8qjSr2GVep2bK9GjjkErOkDWOIXeEw7tPxD5KD4xWXKY6_uiGX3Jj5m6EbhFsxzj1q1nIpJtGBxkVNQvg1fDtUGjc2qA5aFiqjRGDajFTPMyojyTOvf-tKhid_RWupdz5H4fBBjODMCAw4XBmqRhvT6WHv0WWAyvwoJCzAQTWqiEpctqthc-0HzpGTBxuqsdj71poowFJMtnL6r6_AYsEOn2IrDsR8tNjIBQ05iDrM6KZkHTuHVsKPo7augrwf6glpsuiASuy4Au1VlwJVUfno3xjCTcX7vsNzvqVSb6E2_0FWTTMwSHqkWQQNfI03daDOFyVej69U_4DqbN_cvcl9rZJp-WYXiB3C89Za1UwSxp8Ff9xcYowrw8vwb0PHvnPpkMTeHAnS59zLQrl5R-fqh-PKJe0gACK3W5-weJqoyE7_B-FziFqZdRhm7zwvSEZW2myEFdNOiUBeJ7OUV81a5CP1Gt7C0n5ejQhoPN5s60qHcSiYQFaKuhI_6rWLW9bNlFSqzHTA1DHYFFBQg4j6Vx-EqaAuZGw_cCYZMpF95A8C9_kLtjh1ayHhKae773BCulf_1ZEAYE",
        "roles": [
            "admin"
        ]
    },
    "errors": [],
    "messages": [
        {
            "message_code": "LOGIN_SUCCESS",
            "message": "login do correctly"
        }
    ]
}
```

Code `400` `Bad Request`

Content

```

{
    "success": false,
    "description": "exist conflict whit the request, please check the errors and messages",
    "data": [],
    "errors": [],
    "messages": [
        {
            "message_code": "FAILED_AUTH",
            "message": "Invalid login credential"
        }
    ]
}

```

Code `400` `Bad Request`

Content

```
{
    "success": false,
    "description": "exist conflict whit the request, please check the errors and messages",
    "data": [],
    "errors": [
        {
            "error_code": "REQUIRED",
            "field": "email",
            "message": "The email field is required."
        },
        {
            "error_code": "REQUIRED",
            "field": "password",
            "message": "The password field is required."
        }
    ],
    "messages": [
        {
            "message_code": "CHECK_DATA",
            "message": "The form has errors whit the inputs"
        }
    ]
}
```

## Website 
  https://venoudev.com 
