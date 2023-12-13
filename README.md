
### Nama: Audrey Roselyn Natasya
### NIM: 12030122140296
### Jurusan: S1-Akuntansi
### Mata Kuliah/ Kelas: Sistem Informasi Akuntansi/ Kelas A
### Dosen Pengampu: Bapak Dr. Totok Dewayanto, S.E.,M.Si., Akt.

### Tugas Sistem Informasi Akuntansi Membuat Aplikasi Sistem Informasi Inventory (Persediaan)

### Sistem Informasi Inventory 😄
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

### Screenshots Aplikasi Pembelian (Gambaran tampilan aplikasi Inventory)

### Halaman Sign Up 👇
-	Fungsi utama dari halaman sign-up adalah memberikan pengguna kemampuan untuk membuat akun pribadi. Dengan membuat akun, pengguna dapat memiliki identitas unik dalam sistem.
-	Setelah membuat akun, halaman sign-up dapat mencakup langkah-langkah untuk memberikan izin akses tertentu. Ini dapat termasuk memilih jenis akses yang diperlukan untuk sistem inventory, seperti akses penuh, akses terbatas, atau akses hanya baca.
  
![Halaman sign up](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Sistem-Informasi-Akuntansi-Aplikasi-Inventory-Kelas-A/assets/152130643/3c8fcd0a-774b-421d-a45a-1fdd87d4bb19)

### Halaman dashboard 👇
Halaman dashboard dalam sistem inventory memiliki peran penting sebagai pusat kontrol dan visualisasi informasi kunci terkait stok barang, transaksi, dan performa umum sistem.

![halaman dashboard](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Sistem-Informasi-Akuntansi-Aplikasi-Inventory-Kelas-A/assets/152130643/2bb774af-e05b-47d4-8d31-5bb2e77578b8)

### Halaman List of Items 👇
Halaman "List of Items" pada sistem inventory berfungsi sebagai daftar lengkap barang atau item yang tersedia dalam inventaris suatu organisasi atau perusahaan. 
Fungsi utama halaman ini adalah untuk memberikan informasi yang jelas dan terstruktur mengenai stok barang yang dimiliki. Berikut adalah beberapa fungsi utama dari halaman "List of Items" dalam sistem inventory:
-	Pemantauan Stok:
  Memungkinkan pengguna untuk melihat jumlah stok setiap item secara real-time. Menyediakan informasi tentang barang yang tersedia dan yang sudah habis atau hampir habis.
-	Identifikasi Barang:
  Memberikan deskripsi rinci atau informasi terkait setiap item, termasuk kode barang, nama, kategori, dan atribut lainnya. Memudahkan identifikasi setiap barang dan membantu dalam proses 
  pencarian.

![List of items](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Sistem-Informasi-Akuntansi-Aplikasi-Inventory-Kelas-A/assets/152130643/b65be16e-6f58-4754-bb1d-8a9644c70d55)

### Halaman List of Suppliers 👇
Halaman "List of Suppliers" pada sistem inventory berfungsi sebagai daftar atau kumpulan informasi mengenai pemasok atau supplier yang terlibat dalam rantai pasok suatu perusahaan atau organisasi. Fungsi utama dari halaman ini adalah untuk memberikan visibilitas dan manajemen yang efektif terhadap informasi terkait pemasok. 
Berikut beberapa fungsi utama dari halaman "List of Suppliers" pada sistem inventory:
- Informasi Pemasok
  Data Pemasok: Menyediakan informasi rinci mengenai setiap pemasok, seperti nama, alamat, nomor kontak, dan detail lainnya. Ini membantu dalam mengidentifikasi dan mengelola pemasok dengan 
  lebih efisien.
- Manajemen Kontak
  Kontak Pemasok: Memberikan akses cepat ke informasi kontak pemasok, seperti nomor telepon, alamat email, dan alamat fisik. Hal ini memudahkan komunikasi dan koordinasi dengan pemasok.
- Pemantauan Kinerja Pemasok
  Penilaian Kinerja: Menyediakan data terkait kinerja setiap pemasok, seperti waktu pengiriman, kualitas produk, dan layanan pelanggan. Pemantauan kinerja ini membantu dalam pengambilan 
  keputusan terkait dengan pemilihan pemasok.

![list of suppliers](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Sistem-Informasi-Akuntansi-Aplikasi-Inventory-Kelas-A/assets/152130643/a0dbf320-81d7-42ed-8622-6e982bdc22f0)

### Halaman List of Categories 👇
Halaman kategori pada sistem inventaris berfungsi sebagai cara untuk mengorganisir dan mengelompokkan item inventaris berdasarkan karakteristik atau atribut tertentu. 
Fungsi utama dari halaman kategori dalam sistem inventaris melibatkan:
•	Organisasi Barang yang memungkinkan pengguna untuk mengelompokkan barang berdasarkan jenis, ukuran, merek, atau kriteria lainnya sehingga mudah dikelola dan ditemukan.
Nantinya di halaman categories ini, admin bisa menghapus atau mengubah barang-barang persediaan yang ada.

![source code categories](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Sistem-Informasi-Akuntansi-Aplikasi-Inventory-Kelas-A/assets/152130643/c4d38c1f-e706-45e7-a3e8-9f59279ca425)

### Halaman List of Departments 👇
Halaman Departemen dapat menyediakan informasi dan kontrol terkait departemen atau bagian-bagian yang terlibat dalam manajemen inventaris. Berikut adalah beberapa fungsi umum yang mungkin ada pada halaman Departemen dalam sistem informasi inventory:
- Manajemen Informasi Departemen:
  Menampilkan daftar semua departemen atau bagian yang terkait dengan manajemen inventaris. Menyediakan informasi rinci tentang setiap departemen, termasuk nama, kode departemen, lokasi fisik,  
  dan informasi kontak.
- Penugasan Barang ke Departemen:
  Memungkinkan pengguna untuk menugaskan barang atau produk tertentu ke departemen tertentu.
  Menyediakan visibilitas terhadap inventaris yang tersedia di setiap departemen.
  
  Nantinya di halaman departments ini, admin bisa menghapus atau mengubah barang-barang persediaan yang ad, dan megetahui lokasi di mana barang-barang tersebut tersedia.

![source code departments](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Sistem-Informasi-Akuntansi-Aplikasi-Inventory-Kelas-A/assets/152130643/b6a710a0-7995-451e-934b-90e27f671fd8)

### Halaman List of Borrowers 👇
Halaman "borrowers" dalam sistem informasi inventory bisa memiliki beberapa fungsi yang berkaitan dengan peminjaman barang atau inventaris. Berikut beberapa fungsi umum yang mungkin dimiliki oleh halaman "borrowers" dalam sistem informasi inventory:
-	Pencatatan Peminjaman:
  Halaman ini dapat digunakan untuk mencatat detail peminjaman barang oleh pihak tertentu. Informasi yang dicatat mungkin mencakup tanggal peminjaman, nama peminjam, deskripsi barang yang 
  dipinjam, jumlah barang, dan tanggal pengembalian yang diharapkan.
-	Informasi Peminjam:
  Menyediakan daftar atau informasi tentang peminjam yang telah menggunakan atau masih menggunakan barang yang dipinjam dari inventaris. Ini dapat mencakup nama, kontak, dan riwayat peminjaman 
  sebelumnya.
-	Verifikasi dan Otorisasi:
  Halaman ini dapat berfungsi sebagai alat untuk memverifikasi kelayakan peminjaman dan memberikan otorisasi.
 	Misalnya, sistem dapat memeriksa apakah peminjam memiliki hak untuk meminjam barang tertentu atau apakah ada batasan jumlah barang yang dapat dipinjam.

 	Di halaman ini admin juga bisa melihat nama-nama peminjam yang akunnya masih aktif atau tidak.

![list of borrowers](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Sistem-Informasi-Akuntansi-Aplikasi-Inventory-Kelas-A/assets/152130643/7d412f16-4e56-4f8b-9ec5-71c7957e6d3a)




