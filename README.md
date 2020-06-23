<p align="center"><a href="https://venoudev.com"><img src="https://venoudev.com/img/venoudev-2.png" width="400" alt="Venou Dev"></a>
</p>

# VenouDev Results
A awesome package for send messages beetwen class in your Laravel proyect for your API Rest.

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
# Example

## API Docs

<larecipe-card shadow>
    Welcome to the Venoudev API Rest Base Documentation
</larecipe-card>


|Json Response Structure|
|:-|

```json
{
    "success": bool ,
    "description": "string",
    "data": { JsonObject } || { JsonArrayObject[] },
    "errors": [
        {
            "error_code": "[CODE]",
            "field": "[field]" || "[NOTHING]",
            "message": "string"
        }
    ],
    "messages": [
        {
            "message_code": "[CODE]",
            "message": "string"
        }
    ]
}
```

## ErrorMessage

#### Example
```json
    {
        "message_code": "[LOGIN_SUCCESS]",
        "message": "Login do correctly"
    }

```

## ErrorObject

#### Example
```json

    {
        "error_code": "[ERR_REQUIRED]",
        "field": "[email]",
        "message": "The email field is required."
    }

```
```json

    {
        "error_code": "[ERR_STATUS_USER]",
        "field": "[NOTHING]",
        "message": "The status of user is baned."
    }

```

## Website 
  https://venoudev.com 



