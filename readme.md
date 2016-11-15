# Social Prediction

## Installation

write 

```
git clone git@github.com:SocialPrediction/SocialPrediction.git
```
to clone the repository.


write 
```
composer install
```
to install the dependancies

You will need an .env file.
Copy the contents of [this file](https://github.com/laravel/laravel/blob/master/.env.example)
and place it in a file called .env within the 'SocialPrediction' folder.

Change the database credentials within '.env' to match yours.

To run database migrations and seeds write 
```
php artisan migrate:refresh
```

To run tests write
```
vendor/phpunit/phpunit/phpunit
```
when you are in the root folder of the project


