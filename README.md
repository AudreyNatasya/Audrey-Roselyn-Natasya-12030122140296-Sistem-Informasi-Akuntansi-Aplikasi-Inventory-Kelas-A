
### Nama: Audrey Roselyn Natasya
### NIM: 12030122140296
### Jurusan: S1-Akuntansi
### Mata Kuliah/ Kelas: Sistem Informasi Akuntansi/ Kelas A
### Dosen Pengampu: Bapak Dr. Totok Dewayanto, S.E.,M.Si., Akt.

### Tugas Sistem Informasi Akuntansi Membuat Aplikasi Sistem Informasi Inventory (Persediaan)

### Sistem Informasi Inventory
Aplikasi sistem persediaan atau inventory adalah suatu perangkat lunak yang dirancang untuk mengelola dan mengontrol informasi terkait persediaan atau stok barang suatu perusahaan atau organisasi. Persediaan mencakup semua barang atau bahan yang dimiliki oleh perusahaan untuk digunakan dalam proses produksi, distribusi, atau penjualan.
Tujuan dari aplikasi sistem persediaan ini melibatkan pengelolaan dan pemantauan persediaan barang dengan lebih efisien, serta memberikan informasi yang akurat dan tepat waktu kepada pengambil keputusan dalam organisasi.
Sistem informasi inventory yang saya buat ini menggunakan Laravel 8 framework dan Bootstrap CSS 5

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
- That's it: launch the main URL
