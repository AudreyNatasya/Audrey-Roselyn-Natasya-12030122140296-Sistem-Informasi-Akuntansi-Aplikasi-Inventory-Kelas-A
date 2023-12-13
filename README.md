
### Nama: Audrey Roselyn Natasya
### NIM: 12030122140296
### Jurusan: S1-Akuntansi
### Mata Kuliah/ Kelas: Sistem Informasi Akuntansi/ Kelas A
### Dosen Pengampu: Bapak Dr. Totok Dewayanto, S.E.,M.Si., Akt.

### Tugas Sistem Informasi Akuntansi Membuat Aplikasi Sistem Informasi Inventory (Persediaan)

## Installation

* clone the repo and `cd` into it
* `composer install`
* Rename or copy `.env.example` file to `.env`
* `php artisan key:generate`
* generate the symbolic link `php artisan storage:link`

### Database

* Set your database credentials in your `.env` file
* migrate and seed the normal way with `php artisan migrate --seed`

 ### Mail

You need to configure your **Mail** credentials in your '.env' file, in order to enable the registration process and checkouts. if you are using the gmail service
make sure the [less secure app access](https://myaccount.google.com/lesssecureapps) is turned on.

* Set your mail credentials in your `.env` file
* make sure your machine has turned off outbound mail scanning(if you're using antivirus or some kind of firewall)

Launch the app
```bash
 php artisan serve
 ```


# Inventory Management System
A simple inventory management system using Laravel 8 framework and Bootstrap CSS 5. 

## How to install

- Clone the repository with __git clone__ or download zip file
- Copy __.env.example__ file to __.env__ and edit database credentials there
- Run __composer install__
- Run __php artisan key:generate__
- Run __php artisan migrate --seed__ (it has initial data)
- Run __php artisan serve__
- That's it: launch the main URL
