

# Profile Management  
# Look and Feel

<a target="_blank" href="#"><img src="https://i.ibb.co/jMfGjLv/Screenshot-20210413-155438.png"/></a>
## Getting Started
Project has been developed using Laravel and Bootstrap, You can seed the database and Customize as you want

### Prerequisites

1. PHP 8.x higher versions
1. Laravel 8.x higher versions
2. Composer v2.0

### Features

* Role management
* Profile management
* Analytics
* Timeline


### Installing

1. Clone the project and update the Vendor (Hope Comopser is already installed)

```
git clone https://github.com/technalatus/profile-management-v2.0.git
```
```
composer install
```
```
cp .env.example .env
```

    
2.Update the Env

    DB_DATABASE=''
    DB_USERNAME=''
    DB_PASSWORD=''
    
3.Migrate and Seed the database

    php artisan migrate --seed


## You can find the demo Here

* Username :(Copy from users table after seeding)
* Password : password
```
Update any of the user's role field to 'admin' in users table for access of admin panel
```
  Or
  
 # Update the role in first entry of user as admin
 ```
 UPDATE `users` SET `role` = 'admin' WHERE `users`.`id` = 1;
 ```

## Built With

* [Laravel](https://laravel.com) - Download  Laravel from here.
* [Bootstrap](http://getbootstrap.com/) - Frontend
* [Sweet Alert](http://getbootstrap.com/)- Alerts
* [Metronic](https://preview.keenthemes.com/metronic/demo1/index.html)-Dashboard


Please read [CONTRIBUTING.md](https://github.com/alshoja/Income-Expence-Manager/blob/master/CODE_OF_CONDUCT.md) for details on our code of conduct, and the process for submitting pull requests to us.


## Authors

* **Alshoja M ikbal** - *Developer* - [Alshoja ](https://github.com/alshoja)


## License

[Quantus Space](https://quantus.ae/)


