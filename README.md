# lab11_php_ci

NAMA    : MUHAMMAD FERDI HERDIANSYAH

NIM     : 312010038

KELAS   : TI.20 D1 

MATA KUL: PEMOGRAMAN WEB 

DOSEN   :

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


