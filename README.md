# test-app
Laravel Api using Laravel Passport for Auth

# Install
 This guide expect you already have a basic apache/nginx-php-mysql
 environment fully working with composer as php package manager.
## General installation
 First step is clone or download from repo
 Then you can install dependencies using 
 the command `$ composer install`. 
 After that check if _.env_ have been created and or simply you can
 get it from here:
 [RESOURCES.md](/RESOURCES.md)
## Laravel Passport
 The Laravel Passport installation guide should be executed to guarantee
 the application will work:
 [Laravel Passport Installation](https://laravel.com/docs/5.8/passport#installation)
 
## Main commands:
 
 `composer install`
 
 `php artisan migrate`
 
 `php artisan passport:install`
 
 `php artisan passport:keys`
 
## Testing
 Can be used any api tester but a Postman App collection is provided in 
 [RESOURCES.md](/RESOURCES.md). If this app is already installed just import
 this collection and you will ready to test app.

# Logic
 There is some logic have been added to test the authentication behalf the
 basic register and authentication. 
## User Register
 Basic user registration have been configured. 
 The validation of user registration request require that the user fields be not empty
 and the given email should be unique.
## User Authentication
 Basic user authentication have been configured. 
 The validation of user authentication request require that the user credentials
 be not empty if pass token will be sent with the response.
## Posts feature
 Adding some logic with post management.
 Common api resources routes have been added.
 Let's see the restrictions over this resources: 
 Any user can list and see all existing posts.
 Any user can create a post.
 An user can only update and delete his own posts. 
 
