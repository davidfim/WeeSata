# Weesata

Aplikasi web semantik untuk mencari wisata yang ada di Jawa Barat yang dapat difilter menurut nama tempatnya, kategorinya, dan lokasinya.

## Getting Started

Instruksi ini untuk menjalankan testing di penyimpanan lokal

## Menjalankan testing


### Menginstall composer

Sebelum menjalankan local development server, install composer terlebih dahulu, kemudian buka command prompt dan jalankan perintah berikut pada direktori WeeSata/Frontend

composer install

### Menjalankan local development server

Masih pada direktori WeeSata/Frontend jalankan server dengan perintah berikut

php artisan serve

Jika berhasil maka akan muncul pesan berikut

Laravel development server started: <http://127.0.0.1:8000>

Kemudian buka browser lalu ketikan url http://127.0.0.1:8000

## Deployment

Aplikasi ini menggunakan arsitektur three tier, menggunakan API, dan menggunakan framewor, service, dan aplikasi berikut

## Built With

* [Laravel](https://laravel.com/docs/6.x) - Framerwork Web yang digunakan untuk Backend dan Frontend
* [Apache Jena Fuseki](https://jena.apache.org/documentation/fuseki2/) - SPARQL server
* [Protege](https://protege.stanford.edu/) - Digunakan dalam membuat ontologi

## Authors

* **Junia Adhani Juzar** - Database SPARQL - [Junia](https://github.com/juniaadhani)
* **Syaina Nur Fauziyah** - Frontend - [Syaina](https://github.com/syaina)
* **David Ferdinand** - Backend - [David](https://github.com/davidfim)

## Lain-lain

### Dokumentasi API Weesata

* Mengambil semua data
'GET', 'https://weesata.000webhostapp.com/getall'

* Search data
'POST', 'https://weesata.000webhostapp.com/searchbykondisi', 'required: nama, jenis, kota'
