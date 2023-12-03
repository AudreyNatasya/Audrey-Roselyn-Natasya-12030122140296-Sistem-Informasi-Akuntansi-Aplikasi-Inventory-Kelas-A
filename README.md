## Installation

* clone the repo and `cd` into it
* `composer install`
* Rename or copy `.env.example` file to `.env`
* `php artisan key:generate`

### Database

* Set your database credentials in your `.env` file
* migrate and seed the normal way with `php artisan migrate`

### Mail

You need to configure your **Mail** credentials in your '.env' file, in order to enable the registration process and checkouts. if you are using the gmail service
make sure the [less secure app access](https://myaccount.google.com/lesssecureapps) is turned on.

* Set your mail credentials in your `.env` file
* make sure your machine has turned off outbound mail scanning(if you're using antivirus or some kind of firewall)

Launch the app
```bash
 php artisan serve
 ```
