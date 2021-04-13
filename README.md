

# LenzKart  
A shopping cart which can to be used universally for all types of Ecommerce Websites 
# Look and Feel

<a target="_blank" href="#"><img src="https://i.ibb.co/jMfGjLv/Screenshot-20210413-155438.png"/></a>
## Getting Started
Project has been developed using Laravel and Bootsrap, You can seed the database and Customize as you want

### Prerequisites

1. PHP 7.x higher versions
2. Composer v1.9.0

### Features

* Stock management
* Two Payment Gateways
    * payubiz
    * payumoney
* Argon Dashboard


### Installing

1. Clone the project and update the Vendor (Hope Comopser is already installed)

```
git clone https://github.com/alshoja/lens-shopping-cart.git
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


[Demo](http://shoppingcart.zenithsbm.com/)

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
* [Dashboard](https://www.creative-tim.com/product/argon-dashboard)
* [Thanks to W3layouts ](https://demo.w3layouts.com/demos_new/template_demo/07-08-2018/goggles-web_Free/1521872807/web/index.html)





Please read [CONTRIBUTING.md](https://github.com/alshoja/Income-Expence-Manager/blob/master/CODE_OF_CONDUCT.md) for details on our code of conduct, and the process for submitting pull requests to us.


## Authors

* **Alshoja M ikbal** - *Initial work* - [Alshoja ](https://github.com/alshoja)

## Donations
[Donations](https://www.paypal.me/alshoja)






## License

Free to Use, The actual licence is under [Technalatus](http://technalatus.com/)


