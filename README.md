
- [Postman Colection] - mirus\Mirus.postman_collection.json
- [Swagger](http://mirus.project-release.info/api/documentation).

# Installation

 1. Rename `.env.example` to `.env`  
 
 2. register a connection to the database
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=mirus-develop
    DB_USERNAME=root
    DB_PASSWORD=root
    ```
 3. Specify domain in `/.env => APP_URL=`
 
 4. Activate debug mode in files `/.env`  `APP_DEBUG=false => APP_DEBUG=true`
 
 5. Run the command to tighten the dependencies `composer install`
 
 6. Generate an encryption key `php artisan key:generate`
 
 7. Generate database migrations `php artisan migrate`
 
 8. Sowing data `php artisan db:seed --class=AddAdminToDB`
 
 9. Generation of authentication keys `php artisan passport:install`

 10. Swagger collection generation `php artisan l5-swagger:generate`
 
 11. Delete global cache using commands `php artisan cache:clear`, `php artisan route:clear`, `php artisan config:clear`
 
 
   
 

