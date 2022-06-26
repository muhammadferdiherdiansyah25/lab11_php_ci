# lab11_php_ci

NAMA    : MUHAMMAD FERDI HERDIANSYAH

NIM     : 312010038

KELAS   : TI.20 D1 

MATA KUL: PEMOGRAMAN WEB 

DOSEN   : Agung Nugroho,S.Kom.,M.Kom

# Buat folder baru dengan nama lab11_php_ci pada docroot webserver (htdocs)


![image](https://user-images.githubusercontent.com/101733752/172665169-4c1f3163-fde4-4623-bb98-009c86709325.png)

# Untuk mengaktifkan ekstentsi tersebut, melalu XAMPP Control Panel, pada bagian Apache klik Config -> PHP.ini

![image](https://user-images.githubusercontent.com/101733752/172665526-afc540dc-251e-4a5b-b85a-d11b87f51f66.png)

# Pada bagian extention, hilangkan tanda ; (titik koma) pada ekstensi yang akan diaktifkan. Kemudian simpan kembali filenya dan restart Apache web server.

![image](https://user-images.githubusercontent.com/101733752/172666001-d34a9d6a-e4d3-4f9b-a3c1-c7c67e110756.png)

Instalasi Codeigniter 4
Untuk melakukan instalasi Codeigniter 4 dapat dilakukan dengan dua cara, yaitu cara manual dan menggunakan composer. Pada praktikum ini kita menggunakan cara manual.

- Unduh Codeigniter dari website https://codeigniter.com/download

- Extrak file zip Codeigniter ke direktori htdocs/lab11_php_ci.

- Ubah nama direktory framework-4.x.xx menjadi ci4.

- Buka browser dengan alamat http://localhost/lab11_php_ci/ci4/public/

![image](https://user-images.githubusercontent.com/101733752/172666626-7710981e-9076-4169-8fa7-262db7c05031.png)

# Menjalankan CLI (Command Line Interface)

- Codeigniter 4 menyediakan CLI untuk mempermudah proses development. Untuk mengakses CLI buka terminal/command prompt. Arahkan lokasi direktori sesuai dengan direktori kerja project dibuat (xampp/htdocs/lab11_php_ci/ci4/). Perintah yang dapat dijalankan untuk memanggil CLI Codeigniter adalah: php spark

![2](https://user-images.githubusercontent.com/101733752/172666873-0669a67c-0aba-4975-beb9-be398fc8da64.PNG)


# Mengaktifkan Mode Debugging

- Codeigniter 4 menyediakan fitur debugging untuk memudahkan developer untuk mengetahui pesan error apabila terjadi kesalahan dalam membuat kode program. Secara default fitur ini belum aktif. Ketika terjadi error pada aplikasi akan ditampilkan pesan kesalahan seperti berikut.

![Screenshot2](https://user-images.githubusercontent.com/101733752/172668328-1baaf772-b717-407f-9bfc-abfdf79e086e.png)


- Semua jenis error akan ditampilkan sama. Untuk memudahkan mengetahui jenis errornya, maka perlu diaktifkan mode debugging dengan mengubah nilai konfigurasi pada environment variable CI_ENVIRONMENT menjadi development. Kemudian mengubah nama file env menjadi .env lalu setelah itu buka file tersebut dan ubah nilai variable CI_ENVORNMENT menjadi development. Setelah itu hapus tanda tagar (#) pada awal baris CI_ENVIRONMENT, ubah kode pada file app/Controller/Home.php hilangkan titik koma (;) pada akhir kode seperti berikut.

![image](https://user-images.githubusercontent.com/101733752/172667673-2db8396f-f9cd-4949-9403-d654f6188da2.png)

![image](https://user-images.githubusercontent.com/101733752/172667809-bb1427e0-8e09-4af4-8ade-2ab8eac3aa65.png)

- Maka hasilnya akan terjadi error seperti berikut.

![3](https://user-images.githubusercontent.com/101733752/172668658-01772749-d7c1-436e-a056-7099e853a661.PNG)


- Routing dan Controller
Router terletak pada file app/config/Routes.php. Pada file tersebut kita dapat mendefinisikan route untuk aplikasi yang kita buat.

Contoh: ```$routes->get('/', 'Home::index'); Kode tersebut akan mengarahkan rute untuk halaman home.

- Membuat Route Baru.
Tambahkan kode berikut di dalam Routes.php

![6](https://user-images.githubusercontent.com/101733752/172668912-5922663b-4d78-4f14-8ef4-e5295ac0646b.PNG)

- Untuk mengetahui route yang ditambahkan sudah benar, buka CLI dan jalankan perintah berikut. php spark routes

![7](https://user-images.githubusercontent.com/101733752/172669103-fae8ed84-3577-4609-a5d0-55bd93259790.PNG)


- Selanjutnya coba akses route yang telah dibuat dengan mengakses alamat url http://localhost:8080/about

![8](https://user-images.githubusercontent.com/101733752/172669356-58ba6c0c-229c-44b6-8992-ffb71f8a078c.PNG)

- Ketika diakses akan mucul tampilan error 404 file not found, itu artinya file/page tersebut tidak ada. Untuk dapat mengakses halaman tersebut, harus dibuat terlebih dahulu Contoller yang sesuai dengan routing yang dibuat yaitu Contoller Page.

# Membuat Controller

- Selanjutnya adalah membuat Controller Page. Buat file baru dengan nama page.php pada direktori Controller kemudian isi kodenya seperti berikut.

![image](https://user-images.githubusercontent.com/101733752/172669647-1a7dbe41-0939-4457-9d15-db1f1b505d8c.png)

# Selanjutnya refresh Kembali browser, maka akan ditampilkan hasilnya yaitu halaman sudah dapat diakses.

# Auto Routing

Secara default fitur autoroute pada Codeiginiter sudah aktif. Untuk mengubah status autoroute dapat mengubah nilai variabelnya. Untuk menonaktifkan ubah nilai true menjadi false.

Tambahkan method baru pada Controller Page seperti berikut


Method ini belum ada pada routing, sehingga cara mengaksesnya dengan menggunakan alamat: http://localhost:8080/page/tos

![image](https://user-images.githubusercontent.com/101733752/172669948-68995310-eacf-489d-80b7-452fe7cf3ff2.png)

- Method ini belum ada pada routing, sehingga cara mengaksesnya dengan menggunakan alamat: http://localhost:8080/page/tos

# Membuat View

Selanjutnya adalam membuat view untuk tampilan web agar lebih menarik. Buat file baru dengan nama about.php pada direktori view (app/view/about.php) kemudian isi kodenya seperti berikut.

![image](https://user-images.githubusercontent.com/101733752/172670218-c38b2f7a-a78d-4ddb-92dc-9c9beb6a7216.png)

- Kemudian lakukan refresh pada halaman tersebut.

![11](https://user-images.githubusercontent.com/101733752/172670409-8335bf39-601d-4ca2-951f-f085be694b08.PNG)

# Membuat Layout Web dengan CSS

- Pada dasarnya layout web dengan css dapat diimplamentasikan dengan mudah pada codeigniter. Yang perlu diketahui adalah, pada Codeigniter 4 file yang menyimpan asset css dan javascript terletak pada direktori public.

- Buat file css pada direktori public dengan nama style.css (copy file dari praktikum lab4_layout. Kita akan gunakan layout yang pernah dibuat pada praktikum 4.

![12](https://user-images.githubusercontent.com/101733752/172670602-60d0213f-f31b-4668-b3fc-68f460fcfae1.PNG)


- Kemudian buat folder template pada direktori view kemudian buat file header.php dan footer.php

- File app/view/template/header.php

![image](https://user-images.githubusercontent.com/101733752/172670939-6eda520f-fcd4-460a-b315-0012f2f3653f.png)

- File app/view/template/footer.php

![image](https://user-images.githubusercontent.com/101733752/172671150-945a8326-9e76-4a3b-9cbf-869856c7e317.png)

- Kemudian ubah file app/view/about.php seperti berikut

![image](https://user-images.githubusercontent.com/101733752/172671437-96b9e58e-046c-4def-aaa5-50594a85c637.png)

- Selanjutnya refresh tampilan pada alamat http://localhost:8080/about

![13](https://user-images.githubusercontent.com/101733752/172671537-a022681b-5917-45e1-915b-ff7c99c39484.PNG)


# Pertanyaan dan Tugas
- Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga semua link pada navigasi header dapat menampilkan tampilan dengan layout yang sama.

- About: 

![image](https://user-images.githubusercontent.com/101733752/172671711-fdc4ae20-e466-4e4d-a4cf-4b393854a4da.png)

![image](https://user-images.githubusercontent.com/101733752/172671779-e3418e1e-f0ff-4700-bd05-d05b831c71df.png)

# Hasil browser

![image](https://user-images.githubusercontent.com/101733752/172672023-c8e682cb-5f29-4119-9e2e-3a80708775c0.png)

- Kontak

![image](https://user-images.githubusercontent.com/101733752/172672278-35762d92-8e75-4c21-ac9d-02b23b897317.png)


# Praktikum 12 : Framework Lanjutan ( CRUD ) 

# Langkah-langkah Praktikum 


- Untuk memulai membuat aplikasi CRUD sederhana, yang perlu disiapkan adalah database server menggunakan MySQL. Pastikan MySQL Server sudah dapat dijalankan melalui XAMPP.

![lab 11_ci4 10](https://user-images.githubusercontent.com/101733752/174301998-6f7da5d4-8e16-41d7-b6c4-1e43d99eea8c.png)


# Konfigurasi Koneksi Database

- Selanjutnya membuat konfigurasi untuk menghubungkan dengan database server. Konfigurasi dapat dilakukan dengan dua cara, yaitu pada file `app/config/database.php` atau menggunakan file .env. Pada praktikum ini kita gunakan konfigurasi pada file .env. Konfigurasi dapat dilakukan dengan cara mengubah beberapa kode pada file  `htdocs\lab11_php_ci\ci4\.env.`  Dan hilangkan tanda pagar `#`  didepan.

![image](https://user-images.githubusercontent.com/101733752/174302755-f6a2bafe-af2e-4043-94c2-5cbb7346aa05.png)

# Membuat Model

- Selanjutnya adalah membuat Model untuk memproses data Artikel. Buat file baru pada direktori app/Models dengan nama `ArtikelModel.php`

![lab 11_ci4 2](https://user-images.githubusercontent.com/101733752/174303041-7119f32b-6c67-47a7-b1a8-46156785c8e7.png)


# Membuat Controller

- Buat Controller baru dengan nama `Artikel.php` pada direktori `app/Controllers.`

![lab 11_ci4 4](https://user-images.githubusercontent.com/101733752/174303207-db8703f7-5f77-48a6-b45c-bcf18db7e8c0.png)

# Membuat View

- Buat direktori baru dengan nama artikel pada direktori app/views, kemudian buat file baru dengan nama index.php.


![lab 11_ci4 3](https://user-images.githubusercontent.com/101733752/174304280-73aefa30-d827-4a43-9e03-d083d1a46feb.png)

- Selanjutnya buka browser kembali, dengan mengakses url http://localhost:8080/artikel

![LAB 11 _ Ci4(1)](https://user-images.githubusercontent.com/101733752/174304459-b5a2c981-1100-492a-8aa7-1fd9d311bde9.png)

- Belum ada data yang diampilkan. Kemudian coba tambahkan beberapa data pada database agar dapat ditampilkan datanya.

![image](https://user-images.githubusercontent.com/101733752/174304568-0a45030f-4e95-4cba-b817-f9cbd0160355.png)

- Refresh kembali browser, sehingga akan ditampilkan hasilnya.

![LAB 11 _ Ci4](https://user-images.githubusercontent.com/101733752/174304827-26470953-fc38-41e4-bcd1-1abbaf007c96.png)

# Membuat Tampilan Detail Artikel

- Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda. Tambahkan fungsi baru pada `Controller Artikel` dengan nama `view().`

![lab 11_ci4 6](https://user-images.githubusercontent.com/101733752/174305184-41ea6fcf-0e70-4c3e-bfaa-5aee15aeddb6.png)

# Membuat View Detail

- Buat view baru untuk halaman detail dengan nama `app/views/artikel/detail.php.`

![image](https://user-images.githubusercontent.com/101733752/174305415-4835e753-866e-4f9a-9ee2-557ac3e6837a.png)

# Membuat Routing untuk artikel detail

- Buka Kembali file `app/config/Routes.php`, kemudian tambahkan routing untuk `artikel detail.`

![image](https://user-images.githubusercontent.com/101733752/174305850-42a4bba2-e3c2-41c6-868a-d17a86176207.png)

- Kemudian Refresh kembali

![lab 11_ci4 5](https://user-images.githubusercontent.com/101733752/174306048-4e8f4b93-07be-45a6-a001-baa04f6f7234.png)


# Membuat Menu Admin

- Menu admin adalah untuk proses CRUD `data artikel.` Buat method baru pada `Controller Artikel` dengan nama `admin_index().`

![image](https://user-images.githubusercontent.com/101733752/174306372-4d2613d4-8fad-4daf-aa89-d175c8818552.png)


Selanjutnya buat view untuk tampilan admin dengan nama `admin_index.php`

![image](https://user-images.githubusercontent.com/101733752/174306513-8200bbe2-84e2-4f36-a168-ea88afe82847.png)

![image](https://user-images.githubusercontent.com/101733752/174306633-10f8769b-83b6-4188-993e-c9298b6806b7.png)


- membuat file admin_header.php


![image](https://user-images.githubusercontent.com/101733752/174306767-cd9525cb-6532-4480-a633-a8d1758b3d9a.png)

- Membuat file admin_footer.php

![image](https://user-images.githubusercontent.com/101733752/174307137-69c47c16-fceb-4b05-ae1a-74c80ba70e19.png)

- Membuat `admin.css`

![image](https://user-images.githubusercontent.com/101733752/174307483-e40fd96b-3d63-4d33-94b7-500e83ef7fdf.png)
![image](https://user-images.githubusercontent.com/101733752/174307757-c49bff27-3306-4e90-90e9-7d67d40ff32c.png)
![image](https://user-images.githubusercontent.com/101733752/174307829-0524e8cc-f0f9-4874-88d2-de5b5fc22abb.png)
![image](https://user-images.githubusercontent.com/101733752/174308005-c53118a1-3d87-4868-8658-b6cd1963efcf.png)
![image](https://user-images.githubusercontent.com/101733752/174308048-03752292-26c6-47c9-9105-b3779ad61d09.png)

- Hasil browsernya. 

![lab 11_ci4 7](https://user-images.githubusercontent.com/101733752/174308219-f8992efb-e899-4081-ae5d-49afab9edca7.png)

# Menambah Data Artikel

- Tambahkan fungsi/method baru pada `Controller Artikel` dengan nama `add().`

![image](https://user-images.githubusercontent.com/101733752/174308725-976a334f-d746-41e5-a0be-e4ec5514a5d4.png)

- Kemudian buat view untuk form tambah dengan nama `form_add.php`

![image](https://user-images.githubusercontent.com/101733752/174308824-803c7822-39cb-42c7-9490-caf8966777c3.png)

- Setelah itu klik tambah artikel maka tampilan nya seperti berikut.


![lab 11_ci4 8](https://user-images.githubusercontent.com/101733752/174309132-1d144c2d-bdd2-4b08-9b62-c0d5ffb2afe7.png)

# Mengubah Data

- Tambahkan fungsi/method baru pada Controller Artikel dengan nama `edit().`

![image](https://user-images.githubusercontent.com/101733752/174309493-04c34dfc-1cda-44bc-8eae-6ea77d46a1e8.png)

- Kemudian buat view untuk form tambah dengan nama `form_edit.php`

![image](https://user-images.githubusercontent.com/101733752/174309811-98e3d691-3b63-4973-b9f1-49a8f491611f.png)

- browser result

![lab 11_ci4 9](https://user-images.githubusercontent.com/101733752/174309918-c6cdabd7-fef9-4593-a814-ee2a812e199d.png)

# Menghapus Data

- Tambahkan fungsi/method baru pada Controller Artikel dengan nama `delete().`



![image](https://user-images.githubusercontent.com/101733752/174322202-e3ba1cd7-df36-4d51-a7f5-d238e444d94f.png)



# Praktikum 13 : Framework lanjutan ( Modul Login )

- Persiapan.
  Untuk memulai membuat modul Login, yang perlu disiapkan adalah database server
  menggunakan MySQL. Pastikan MySQL Server sudah dapat dijalankan melalui
  XAMPP.
  
  ![image](https://user-images.githubusercontent.com/101733752/175811213-e8f9c7af-ac9e-4690-8f36-e335488288c6.png)

- Membuat Tabel User 

![image](https://user-images.githubusercontent.com/101733752/175811251-fdf8201a-286d-4667-91e7-fceb4201ec64.png)

- Membuat Model User
  Selanjutnya adalah membuat Model untuk memproses data Login. Buat file baru pada
  direktori app/Models dengan nama UserModel.php

![image](https://user-images.githubusercontent.com/101733752/175811344-c65b7d62-76be-456e-aa60-da13c717ce82.png)

- Membuat Controller User
Buat Controller baru dengan nama User.php pada direktori app/Controllers.
Kemudian tambahkan method index() untuk menampilkan daftar user, dan method
login() untuk proses login.

![image](https://user-images.githubusercontent.com/101733752/175811387-0247e6e7-dbb9-44a6-9258-1a8fb45709bd.png)

![image](https://user-images.githubusercontent.com/101733752/175811399-aa15c798-7c4b-4a8f-94ae-21d3f716ad62.png)


- Membuat View Login
Buat direktori baru dengan nama user pada direktori app/views, kemudian buat file
baru dengan nama login.php.

![image](https://user-images.githubusercontent.com/101733752/175811572-52b5baaf-2368-4fa6-9bcf-401b324690bd.png)

- Membuat Database Seeder
Database seeder digunakan untuk membuat data dummy. Untuk keperluan ujicoba modul
login, kita perlu memasukkan data user dan password kedaalam database. Untuk itu buat
database seeder untuk tabel user. Buka CLI, kemudian tulis perintah berikut:

![spedd](https://user-images.githubusercontent.com/101733752/175811915-61160c3a-f5ee-4bbb-b5c5-b44fddcf5dd9.jpeg)


- Selanjutnya, buka file UserSeeder.php yang berada di lokasi direktori
/app/Database/Seeds/UserSeeder.php kemudian isi dengan kode berikut:

![image](https://user-images.githubusercontent.com/101733752/175812085-b3327590-a76e-472e-8b52-02a51d900f90.png)

- Selanjutnya buka kembali CLI dan ketik perintah berikut:

![spedd](https://user-images.githubusercontent.com/101733752/175811915-61160c3a-f5ee-4bbb-b5c5-b44fddcf5dd9.jpeg)


- Uji Coba Login
Selanjutnya buka url http://localhost:8080/user/login seperti berikut:

![image](https://user-images.githubusercontent.com/101733752/175812471-7e4336a4-2958-4427-b829-d04f4bdaa70d.png)

- Menambahkan Auth Filter
Selanjutnya membuat filer untuk halaman admin. Buat file baru dengan nama Auth.php
pada direktori app/Filters.

![image](https://user-images.githubusercontent.com/101733752/175812500-e94c81ab-2c88-4c88-8e07-0af28c35a29f.png)

- Selanjutnya buka file app/Config/Filters.php tambahkan kode berikut:
`'auth' => App\Filters\Auth::class`

![image](https://user-images.githubusercontent.com/101733752/175812547-9d939a6e-5f69-4382-8345-d2874086bfc9.png)


Selanjutnya buka file app/Config/Routes.php dan sesuaikan kodenya.

![image](https://user-images.githubusercontent.com/101733752/175812591-597ad3e8-5872-44c4-a585-ce017706ffea.png)

- Percobaan Akses Menu Admin
Buka url dengan alamat http://localhost:8080/admin/artikel ketika alamat tersebut
diakses maka, akan dimuculkan halaman login.

![image](https://user-images.githubusercontent.com/101733752/175812634-b951d7b4-54cd-43b2-bcb3-6fa68f5977d4.png)


- Fungsi Logout
Tambahkan method logout pada Controller User seperti berikut:

![image](https://user-images.githubusercontent.com/101733752/175812953-3534b449-eae9-4ad5-b81e-b92a25701a84.png)

![image](https://user-images.githubusercontent.com/101733752/175812961-85bbf24b-23fd-4c55-bc8a-9dabcc7ef66d.png)










  
  














