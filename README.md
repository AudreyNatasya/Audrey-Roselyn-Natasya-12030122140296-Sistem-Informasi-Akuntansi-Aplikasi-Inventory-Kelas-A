
### Nama              : Audrey Roselyn Natasya
### NIM               : 12030122140296
### Jurusan           : S1-Akuntansi
### Mata Kuliah/ Kelas: Sistem Informasi Akuntansi/ Kelas A
### Dosen Pengampu    : Bapak Dr. Totok Dewayanto, S.E.,M.Si., Akt.

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

### Screenshots Aplikasi Inventory (Gambaran tampilan aplikasi Inventory)

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
- Organisasi Barang yang memungkinkan pengguna untuk mengelompokkan barang berdasarkan jenis, ukuran, merek, atau kriteria lainnya sehingga mudah dikelola dan ditemukan.

  Nantinya di halaman categories ini, admin bisa menghapus atau mengubah barang-barang persediaan yang ada.

![halaman list of categories new](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Sistem-Informasi-Akuntansi-Aplikasi-Inventory-Kelas-A/assets/152130643/6e14a2a4-3444-4df7-af83-a5dba7730c7a)

### Halaman List of Departments 👇
Halaman Departemen dapat menyediakan informasi dan kontrol terkait departemen atau bagian-bagian yang terlibat dalam manajemen inventaris. Berikut adalah beberapa fungsi umum yang mungkin ada pada halaman Departemen dalam sistem informasi inventory:
- Manajemen Informasi Departemen:
  Menampilkan daftar semua departemen atau bagian yang terkait dengan manajemen inventaris. Menyediakan informasi rinci tentang setiap departemen, termasuk nama, kode departemen, lokasi fisik,  
  dan informasi kontak.
- Penugasan Barang ke Departemen:
  Memungkinkan pengguna untuk menugaskan barang atau produk tertentu ke departemen tertentu.
  Menyediakan visibilitas terhadap inventaris yang tersedia di setiap departemen.
  
  Nantinya di halaman departments ini, admin bisa menghapus atau mengubah barang-barang persediaan yang ad, dan megetahui lokasi di mana barang-barang tersebut tersedia.

![halaman list of departments new](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Sistem-Informasi-Akuntansi-Aplikasi-Inventory-Kelas-A/assets/152130643/1b3276df-1c26-4c0c-94b8-fa91188915a1)

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

### Berikut adalah flowchart terkait sistem informasi inventory 👇

![Audrey Natasya Tugas SIA SI Inventory drawio](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Sistem-Informasi-Akuntansi-Aplikasi-Inventory-Kelas-A/assets/152130643/69d5fe91-d851-4d51-b155-3f63d718c03b)

Penjelasan terkait flowchart diatas:
1. Penyedia Barang atau Bahan
   - Seorang supplier bertanggung jawab menyediakan barang-barang atau bahan-bahan tertentu yang dibutuhkan oleh perusahaan atau organisasi. Barang tersebut dapat berupa produk jadi, bahan 
     mentah, suku cadang, atau komponen lain yang diperlukan untuk produksi atau penjualan.

2. Pemesanan Barang:
   - Dalam sistem inventory, perusahaan biasanya melakukan pemesanan atau pembelian barang kepada supplier untuk menjaga stok atau memenuhi permintaan pelanggan. Pemesanan ini dapat didasarkan 
     pada proyeksi permintaan atau rencana produksi.

3.	Penerimaan dan Pemeriksaan Barang
   - Setelah pemesanan dilakukan, barang yang diterima dari supplier akan diperiksa untuk memastikan kesesuaian dengan pesanan. Informasi ini kemudian dicatat dalam sistem inventory.

4.	Pengelolaan Hubungan dengan Pemasok
   - Perusahaan perlu memelihara hubungan yang baik dengan supplier. Ini melibatkan komunikasi yang efisien, negosiasi persyaratan kontrak, dan penilaian kinerja pemasok. Beberapa perusahaan 
     bahkan menggunakan sistem manajemen rantai pasokan (supply chain management) untuk mengoptimalkan hubungan dengan pemasok mereka.

5.	Penyediaan Informasi Stok
   - Supplier juga dapat memberikan informasi terkait ketersediaan stok, harga, dan perubahan kondisi pasokan. Informasi ini membantu perusahaan dalam perencanaan inventaris dan pengelolaan 
     stok.
     
6.	Pembayaran dan Faktur
   - Setelah barang diterima dan diverifikasi, perusahaan perlu melakukan pembayaran kepada supplier sesuai dengan persyaratan pembayaran yang disepakati. Faktur dari supplier juga harus 
     dicatat dalam sistem keuangan.

7.	Pengaruh pada Ketersediaan dan Layanan Pelanggan.
   - Kinerja supplier dapat memiliki dampak langsung pada ketersediaan barang dan layanan pelanggan perusahaan. Oleh karena itu, pemilihan supplier yang handal dan dapat diandalkan sangat 
     penting untuk menjaga kelancaran operasional.


### Berikut adalah database terkait sistem informasi inventory 👇
![database invetory](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Sistem-Informasi-Akuntansi-Aplikasi-Inventory-Kelas-A/assets/152130643/907ac150-ff74-4b3b-83d2-2c1c7276d9a9)

### Berikut adalah structure terkait sistem informasi inventory 👇
![structure inventory](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Sistem-Informasi-Akuntansi-Aplikasi-Inventory-Kelas-A/assets/152130643/353fe563-db18-4269-8a0c-8d8d8505372e)

### Source Code 👇
Secara umum, source code dapat diartikan sebagai instruksi-instruksi yang diberikan kepada komputer untuk melakukan suatu tugas tertentu. Instruksi-instruksi ini ditulis dalam bahasa yang dapat dipahami oleh manusia, sehingga pengembang perangkat lunak dapat membaca dan memahaminya dengan mudah.

Source code memiliki peran yang sangat penting dalam pengembangan perangkat lunak. Kode sumber merupakan blueprint dari suatu program komputer, dan merupakan sumber utama untuk memahami bagaimana program tersebut bekerja. Kode sumber juga dapat digunakan untuk melakukan berbagai macam tugas, seperti:
- Menjalankan program
- Melakukan debugging program
- Melakukan pengujian program
- Melakukan modifikasi program
- Mendistribusikan program

Berikut saya tampilkan beberapa source code dari setiap list-list yang ada 👇

### Source Code Edit Profil 👇
![source code profile](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Sistem-Informasi-Akuntansi-Aplikasi-Inventory-Kelas-A/assets/152130643/942e0702-cb98-4ebd-b629-75922e4efa45)

### Source Code Edit List of Items 👇
![source code items](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Sistem-Informasi-Akuntansi-Aplikasi-Inventory-Kelas-A/assets/152130643/17d382ed-bb2e-4600-b180-f9901bb1f4a4)

### Source Code Edit List of Suppliers 👇
![source code suppliers](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Sistem-Informasi-Akuntansi-Aplikasi-Inventory-Kelas-A/assets/152130643/a4665730-d5d4-4270-a9e2-ddb108e8966a)

### Source Code Edit List of Categories 👇
![source code categories](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Sistem-Informasi-Akuntansi-Aplikasi-Inventory-Kelas-A/assets/152130643/afd12dac-6c73-4db3-ac1f-118fdce73af2)

### Source Code Edit List of Departments 👇
![source code departments](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Sistem-Informasi-Akuntansi-Aplikasi-Inventory-Kelas-A/assets/152130643/5ac80871-45e1-475c-a7f3-728229697c99)

### Source Code Edit List of Borrowers 👇
![source kode borrowers](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Sistem-Informasi-Akuntansi-Aplikasi-Inventory-Kelas-A/assets/152130643/fc0e2fd2-9503-4bf6-975d-887c70577ef2)


### Berikut merupakan hasil laporan beserta penjelasan mengenai sistem informasi dan aplikasi sistem pembelian yang telah saya buat. Silahkan di klik yaa!. Terima kasih 😄
[Audrey Roselyn Natasya 12030122140296_Laporan Tugas SIA Aplikasi Inventory.pdf](https://github.com/AudreyNatasya/Audrey-Roselyn-Natasya-12030122140296-Sistem-Informasi-Akuntansi-Aplikasi-Inventory-Kelas-A/files/13666957/Audrey.Roselyn.Natasya.12030122140296_Laporan.Tugas.SIA.Aplikasi.Inventory.pdf)


### Penutup dari aplikasi inventory yang saya buat:
Pembuatan aplikasi inventory menggunakan aplikasi GitHub dan XAMPP dapat menjadi solusi yang efektif untuk mengelola stok barang. Aplikasi ini dapat dibuat dengan mudah dan cepat, serta dapat diakses dari mana saja.
Berikut adalah kesimpulan dari pembuatan aplikasi inventory menggunakan aplikasi GitHub dan XAMPP:
- Kemudahan penggunaan:
  Aplikasi ini dapat dibuat dengan mudah dan cepat, bahkan oleh pengguna yang tidak memiliki pengalaman coding.
-	Ketersediaan:
  Aplikasi ini dapat diakses dari mana saja, selama pengguna memiliki koneksi internet.
-	Keamanan:
  Aplikasi ini dapat diakses dengan aman menggunakan akun GitHub.
 	
Berikut adalah beberapa langkah yang perlu dilakukan untuk membuat aplikasi inventory menggunakan aplikasi GitHub dan XAMPP:
-	Siapkan lingkungan kerja. Siapkan komputer dengan sistem operasi Windows, macOS, atau Linux. Kemudian, instal aplikasi XAMPP.
-	Buat proyek GitHub. Buat proyek GitHub baru untuk menyimpan kode aplikasi inventory.
-	Buat kode aplikasi. Buat kode aplikasi inventory sesuai dengan kebutuhan Anda.
-	Komit kode ke GitHub. Commit kode aplikasi ke GitHub secara berkala.
-	Buat database MySQL. Buat database MySQL untuk menyimpan data inventory.
-	Konfigurasikan aplikasi. Konfigurasikan aplikasi untuk menggunakan database MySQL.
-	Mulai aplikasi. Mulai aplikasi dan uji coba aplikasi.






