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
## Screenshots Aplikasi Inventory (Gambaran tampilan aplikasi)

### Halaman sign up 👇

![Halaman sign up](https://github.com/AudreyNatasya/Aplikasi-Inventory-Tugas-SIA-Kelas-A/assets/152130643/bf7e98d4-3948-40d7-9f22-a46e48772570)

- Fungsi utama dari halaman sign-up adalah memberikan pengguna kemampuan untuk membuat akun pribadi. Dengan membuat akun, pengguna dapat memiliki identitas unik dalam sistem.
- Setelah membuat akun, halaman sign-up dapat mencakup langkah-langkah untuk memberikan izin akses tertentu. Ini dapat termasuk memilih jenis akses yang diperlukan untuk sistem inventory, seperti akses penuh, akses terbatas, atau akses hanya baca.


### Halaman Dashboard 👇

![halaman dashboard](https://github.com/AudreyNatasya/Aplikasi-Inventory-Tugas-SIA-Kelas-A/assets/152130643/e1ba64cd-9f55-4df7-88b0-a34834e471e2)

Halaman dashboard dalam sistem inventory memiliki peran penting sebagai pusat kontrol dan visualisasi informasi kunci terkait stok barang, transaksi, dan performa umum sistem. 


### Halaman List of Items 👇

![List of items](https://github.com/AudreyNatasya/Aplikasi-Inventory-Tugas-SIA-Kelas-A/assets/152130643/d123c340-39c2-45b8-a17d-0ebc70fdd4bc)

Halaman "List of Items" pada sistem inventory berfungsi sebagai daftar lengkap barang atau item yang tersedia dalam inventaris suatu organisasi atau perusahaan. Fungsi utama halaman ini adalah untuk memberikan informasi yang jelas dan terstruktur mengenai stok barang yang dimiliki. Berikut adalah beberapa fungsi utama dari halaman "List of Items" dalam sistem inventory:

- Pemantauan Stok:
Memungkinkan pengguna untuk melihat jumlah stok setiap item secara real-time.
Menyediakan informasi tentang barang yang tersedia dan yang sudah habis atau hampir habis.

- Identifikasi Barang:
Memberikan deskripsi rinci atau informasi terkait setiap item, termasuk kode barang, nama, kategori, dan atribut lainnya.
Memudahkan identifikasi setiap barang dan membantu dalam proses pencarian.

### Halaman List of Suplliers 👇

![list of suppliers](https://github.com/AudreyNatasya/Aplikasi-Inventory-Tugas-SIA-Kelas-A/assets/152130643/0e15ce75-605c-441a-b44a-d54ea96a373f)

Halaman "List of Suppliers" pada sistem inventory berfungsi sebagai daftar atau kumpulan informasi mengenai pemasok atau supplier yang terlibat dalam rantai pasok suatu perusahaan atau organisasi. Fungsi utama dari halaman ini adalah untuk memberikan visibilitas dan manajemen yang efektif terhadap informasi terkait pemasok. Berikut beberapa fungsi utama dari halaman "List of Suppliers" pada sistem inventory:

1. Informasi Pemasok:
- Data Pemasok:
Menyediakan informasi rinci mengenai setiap pemasok, seperti nama, alamat, nomor kontak, dan detail lainnya. Ini membantu dalam mengidentifikasi dan mengelola pemasok dengan lebih efisien.

2. Manajemen Kontak:
- Kontak Pemasok:
Memberikan akses cepat ke informasi kontak pemasok, seperti nomor telepon, alamat email, dan alamat fisik. Hal ini memudahkan komunikasi dan koordinasi dengan pemasok.

3. Pemantauan Kinerja Pemasok:
- Penilaian Kinerja:
Menyediakan data terkait kinerja setiap pemasok, seperti waktu pengiriman, kualitas produk, dan layanan pelanggan. Pemantauan kinerja ini membantu dalam pengambilan keputusan terkait dengan pemilihan pemasok.

### Halaman List of Categories 👇

![list of categories](https://github.com/AudreyNatasya/Aplikasi-Inventory-Tugas-SIA-Kelas-A/assets/152130643/5b6adca9-9f3f-42aa-95f8-92bba0dc8158)

Halaman kategori pada sistem inventaris berfungsi sebagai cara untuk mengorganisir dan mengelompokkan item inventaris berdasarkan karakteristik atau atribut tertentu. Fungsi utama dari halaman kategori dalam sistem inventaris melibatkan:
- Organisasi Barang yang memungkinkan pengguna untuk mengelompokkan barang berdasarkan jenis, ukuran, merek, atau kriteria lainnya sehingga mudah dikelola dan ditemukan.

Nantinya di halaman categories ini, admin bisa menghapus atau mengubah barang-barang persediaan yang ada. 

### Halaman List of Departments 👇

![list of departments](https://github.com/AudreyNatasya/Aplikasi-Inventory-Tugas-SIA-Kelas-A/assets/152130643/6e9125b4-f672-4fa2-8666-190b22a68abe)

Halaman Departemen dapat menyediakan informasi dan kontrol terkait departemen atau bagian-bagian yang terlibat dalam manajemen inventaris. Berikut adalah beberapa fungsi umum yang mungkin ada pada halaman Departemen dalam sistem informasi inventory:

1. Manajemen Informasi Departemen:
Menampilkan daftar semua departemen atau bagian yang terkait dengan manajemen inventaris.
Menyediakan informasi rinci tentang setiap departemen, termasuk nama, kode departemen, lokasi fisik, dan informasi kontak.

2. Penugasan Barang ke Departemen:
Memungkinkan pengguna untuk menugaskan barang atau produk tertentu ke departemen tertentu.
Menyediakan visibilitas terhadap inventaris yang tersedia di setiap departemen.

Nantinya di halaman departments ini, admin bisa menghapus atau mengubah barang-barang persediaan yang ad, dan megetahui  lokasi di mana barang-barang tersebut tersedia 


### Halaman List of Borrowers 👇

![list of borrowers](https://github.com/AudreyNatasya/Aplikasi-Inventory-Tugas-SIA-Kelas-A/assets/152130643/8975ec78-1381-4321-a716-7259d00ef501)

Halaman "borrowers" dalam sistem informasi inventory bisa memiliki beberapa fungsi yang berkaitan dengan peminjaman barang atau inventaris. Berikut beberapa fungsi umum yang mungkin dimiliki oleh halaman "borrowers" dalam sistem informasi inventory:

1. Pencatatan Peminjaman:
   Halaman ini dapat digunakan untuk mencatat detail peminjaman barang oleh pihak tertentu. Informasi yang dicatat mungkin mencakup tanggal peminjaman, nama peminjam, deskripsi barang yang   dipinjam, jumlah barang, dan tanggal pengembalian yang diharapkan.

2. Informasi Peminjam:
   Menyediakan daftar atau informasi tentang peminjam yang telah menggunakan atau masih menggunakan barang yang dipinjam dari inventaris. Ini dapat mencakup nama, kontak, dan riwayat peminjaman sebelumnya.

3. Verifikasi dan Otorisasi:
   Halaman ini dapat berfungsi sebagai alat untuk memverifikasi kelayakan peminjaman dan memberikan otorisasi. Misalnya, sistem dapat memeriksa apakah peminjam memiliki hak untuk meminjam barang tertentu atau apakah ada batasan jumlah barang yang dapat dipinjam.

   Di halaman ini admin juga bisa melihat nama-nama peminjam yang akunnya masih aktif atau tidak.

### Berikut ini flowchart terkait sistem informasi inventory 👇

![Audrey Natasya Tugas SIA SI Inventory drawio](https://github.com/AudreyNatasya/Aplikasi-Inventory-Tugas-SIA-Kelas-A/assets/152130643/0eee76c1-05b6-4c9c-84ef-c6c970153cf5)

### Berikut ini structure terkait sistem informasi inventory 👇

![structure inventory](https://github.com/AudreyNatasya/Aplikasi-Inventory-Tugas-SIA-Kelas-A/assets/152130643/b132e3cd-217e-472c-970f-6b06a872f0ce)

### Berikut ini database terkait sistem informasi inventory 👇

![database invetory](https://github.com/AudreyNatasya/Aplikasi-Inventory-Tugas-SIA-Kelas-A/assets/152130643/c10cb43f-ec8b-4e02-9060-89a3174daec3)
