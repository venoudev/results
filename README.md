<p align="center"><a href="https://venoudev.com"><img src="https://venoudev.com/img/venoudev-2.png" width="400" alt="Venou Dev"></a>
</p>

# VenouDev Results
An awesome package for construct a very understandable Json structure response in your Laravel proyect for your API Rest.

## Installation 

```
  composer require venoudev/results
```

### Installation of resources

  #### install resources of the package and gives an awesome message:

  ```
   php artisan results:install-resources
  ```

  #### if you dont see an awesome message use:

  ```
    php artisan vendor:publish --tag=results-resources
  ```
  
### Configure Facade ResultManager

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
        "error_code": "ERR_REQUIRED",
        "field": "email",
        "message": "The email field is required."
    }

```
```json

    {
        "error_code": "ERR_STATUS_USER",
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
            "error_code": "ERR_REQUIRED",
            "field": "email",
            "message": "The email field is required."
        },
        {
            "error_code": "ERR_REQUIRED",
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
