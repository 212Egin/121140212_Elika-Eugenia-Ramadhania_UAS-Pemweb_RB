# 121140212_Elika-Eugenia-Ramadhania_UAS-Pemweb_RB
Nama : Elika Eugenia Ramadhania

NIM  : 121140212

PEMWEB RB


Bagian 1 : Client-side Programming
![uas1](https://github.com/212Egin/121140212_Elika-Eugenia-Ramadhania_UAS-Pemweb_RB/assets/118003630/bba63aa9-fa7c-4aae-bc05-569fea0cd258)

1.1 Form input data dan menampilkan data
![code1](https://github.com/212Egin/121140212_Elika-Eugenia-Ramadhania_UAS-Pemweb_RB/assets/118003630/b13fca3b-7618-4c01-b0dc-bca3c046973d)

Pada code diatas merupakan form untuk menginputkan dan menampilkan data. Dimana pada form website ini memiliki atribut-atribut seperti nama, ttl, usia, jk(radio), dan asal. Data yang dimasukkan melalui form ini akan ditangani oleh objek $classhandle untuk ditambahkan atau dihapus dari database. Informasi data dari database kemudian ditampilkan di halaman web. Pastikan kedua file ini berada dalam direktori yang dapat diakses oleh server web. Lalu menjalankan aplikasi ini melalui server lokal (seperti XAMPP atau WampServer) atau langsung di server web yang mendukung PHP. Jika menggunakan server lokal, buka http://localhost/nama_proyek/index.php pada browser.

1.2 Event handle

a. Form Submission Handling
![code2](https://github.com/212Egin/121140212_Elika-Eugenia-Ramadhania_UAS-Pemweb_RB/assets/118003630/289918fe-716c-4968-8952-ee3f0371273b)
Ketika form dengan tombol submit diklik. Pada event ini, metode addData dari objek $classhandle dipanggil untuk menambahkan data ke database. 

b. Form Deletion Handling

![code3](https://github.com/212Egin/121140212_Elika-Eugenia-Ramadhania_UAS-Pemweb_RB/assets/118003630/8157ade8-e34f-4195-bc16-0009c3e23570)

Ketika form dengan tombol submit diklik. Pada event ini, metode removeData dari objek $classhandle dipanggil untuk menghapus data dari database.

Bagian 2 : Server-side Programming

2.1 Implementasi script PHP
![2 1](https://github.com/212Egin/121140212_Elika-Eugenia-Ramadhania_UAS-Pemweb_RB/assets/118003630/7d4c7cd5-615c-4516-833b-e6bd48f2d2f0)

Pada bagian ini, terjadi pengolahan data formulir di sisi server dengan menggunakan PHP. Saat formulir dikirim, data dikirimkan ke server dan diproses menggunakan objek Classhandle. Metode addData dan removeData digunakan untuk menambah dan menghapus data dari basis data, dan outputnya disimpan dalam variabel $info untuk kemudian ditampilkan pada halaman web.

2.2 Objek PHP berbasis OOP 
![2 2](https://github.com/212Egin/121140212_Elika-Eugenia-Ramadhania_UAS-Pemweb_RB/assets/118003630/84447d24-3062-4ae2-ac6a-06eba2ec6051)

Dalam bagian ini, terdapat penjelasan tentang kelas Classhandle yang mencakup metode addData dan removeData. Kedua metode ini difungsikan untuk menambahkan data ke basis data dan menghapus data dari basis data, berturut-turut. Kode ini mengilustrasikan pendekatan berorientasi objek dalam pemrosesan data di sisi server dengan menggunakan PHP.

Bagian 3 : Database Management

3.1 Tabel pada database MySQL
![sql2](https://github.com/212Egin/121140212_Elika-Eugenia-Ramadhania_UAS-Pemweb_RB/assets/118003630/c7f979c2-1f0b-406c-8574-6a2707f727b8)
![sql1](https://github.com/212Egin/121140212_Elika-Eugenia-Ramadhania_UAS-Pemweb_RB/assets/118003630/1949e0d2-759d-405d-958d-46d2979b2ebd)

3.3 Manipulasi data pada tabel database dengan menggunakan query SQL.
![code4](https://github.com/212Egin/121140212_Elika-Eugenia-Ramadhania_UAS-Pemweb_RB/assets/118003630/c0e4b4b9-7b1a-49a1-8c95-4a0b8cb0a7fb)
Metode getData() bertujuan untuk mengambil data dari tabel "data" dalam database. Query SQL dieksekusi menggunakan metode koneksi database yang mungkin telah disiapkan sebelumnya dalam kode. Hasil query, yang berupa kumpulan baris data dari tabel "data", kemudian diambil dan diolah. 

Bagian 4 : State Management

4.1 Skrip PHP yang menggunakan session untuk menyimpan dan mengelola state pengguna
![code5](https://github.com/212Egin/121140212_Elika-Eugenia-Ramadhania_UAS-Pemweb_RB/assets/118003630/566a3d16-7321-4b44-94c1-5bcaeb689268)

Fungsi session_start() adalah fungsi PHP yang berperan dalam memulai atau melanjutkan sesi pada server. Sesuai dengan konsep dasar pengelolaan sesi, panggilan ini harus dilakukan sebelum mengakses atau menyimpan data sesi. Setelah pengguna berhasil login melalui $classhandle->validateUser, yang kemungkinan merupakan metode untuk memvalidasi kredensial pengguna, data pengguna seperti nama pengguna disimpan dalam $_SESSION['user']. Ini memungkinkan data tersebut dapat diakses dan dipertahankan di seluruh sesi pengguna.

Tampilan Registrasi
![uas3](https://github.com/212Egin/121140212_Elika-Eugenia-Ramadhania_UAS-Pemweb_RB/assets/118003630/dcf79851-2432-47ec-8462-80501c557276)

Tampilan Login
![uas2](https://github.com/212Egin/121140212_Elika-Eugenia-Ramadhania_UAS-Pemweb_RB/assets/118003630/33cfbb62-62ea-43cd-97c1-25d838849a9f)

Tampilan Main Page
![uas1](https://github.com/212Egin/121140212_Elika-Eugenia-Ramadhania_UAS-Pemweb_RB/assets/118003630/1693c455-a7c5-4ced-845c-5aabc33567d3)



