Struktur Dasar HTML

<!DOCTYPE html> → Menentukan bahwa dokumen menggunakan HTML5.

<html lang="en"> → Menentukan bahasa dokumen sebagai Inggris.

<head> → Berisi metadata seperti charset, viewport, dan title.

<body> → Berisi konten yang akan ditampilkan di halaman web.

Elemen <div>

<div> digunakan sebagai wadah atau pembungkus untuk mengelompokkan elemen lain.

Di dalam <div>, terdapat teks dan elemen <p> (paragraf).

Elemen <p>

<p> adalah elemen paragraf yang digunakan untuk menampilkan teks dalam blok terpisah.

Elemen <a>

<a> disingkat sebagai anchor yang berfunsgi untuk menghubungkan link atau tautan
--------------------------------------------------------------------------
NGINX
Listen 80:
Server mendengarkan pada port 80, port standar untuk HTTP.

Server Name (localhost):
Server ini diidentifikasi dengan nama "localhost", biasanya digunakan untuk lingkungan pengembangan lokal.

Root:
Direktori /usr/share/nginx/html adalah lokasi file HTML yang akan disajikan kepada pengguna.

Index:
File index.html dan index.htm adalah file default yang akan ditampilkan jika pengguna mengakses root URL.

Location /
Blok ini menangani semua permintaan ke server.

Try Files:
Instruksi try_files $uri $uri/ =404 memastikan bahwa:

Jika file atau direktori yang diminta ada, maka file tersebut akan disajikan.

Jika tidak ditemukan, server mengembalikan error 404 (Not Found).
-----------------------------------------------------------------------------------------------
ENV
COMPOSE_PROJECT_NAME:
Menentukan nama proyek untuk Docker Compose. Nama ini digunakan untuk mengidentifikasi container, network, dan resource lain yang dibangun oleh Docker Compose sehingga memudahkan manajemen proyek secara terisolasi.

REPOSITORY_NAME:
Menunjukkan nama repository yang biasanya berisi kode sumber atau image yang akan digunakan dalam proses build dan deployment. Variabel ini membantu dalam menyusun struktur penamaan yang konsisten dalam sistem versi atau registry Docker.

IMAGE_TAG:
Menetapkan tag untuk image Docker, dalam hal ini ditetapkan sebagai latest. Tag ini berguna untuk mengelola versi image dan memastikan bahwa image yang paling mutakhir dapat diidentifikasi serta di-deploy secara otomatis.
-----------------------------------------------------------------------------------------------
DOCKER-COMPOSE
version: '3'
Menentukan versi Docker Compose yang digunakan. Versi 3 mendukung fitur-fitur yang kompatibel dengan Docker Swarm dan produksi.

Service web:
Menggunakan image nginx:latest untuk menyajikan konten web.

ports:
Mapping port 80:80 memungkinkan akses ke layanan melalui port 80 di host dan container.

volumes:
./nginx/nginx.conf:/etc/nginx/conf.d/default.conf
Mengganti konfigurasi default NGINX dengan file konfigurasi lokal.

./src:/usr/share/nginx/html
Menyediakan direktori lokal sebagai sumber file HTML yang akan disajikan oleh NGINX.

