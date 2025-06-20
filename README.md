UBeasiswa
UBeasiswa adalah aplikasi berbasis Laravel yang dirancang untuk membantu pengguna mendaftar dan mencari informasi tentang beasiswa. Selain itu, aplikasi ini menyediakan fitur mentor dan program untuk membantu pengguna mempersiapkan diri dalam mendapatkan beasiswa impian mereka.

Fitur Utama
Pendaftaran Beasiswa: Pengguna dapat mendaftar ke berbagai beasiswa yang tersedia.
Informasi Beasiswa: Menampilkan daftar beasiswa lengkap dengan detail seperti penyelenggara, tanggal pendaftaran, dan deadline.
Mentor: Pengguna dapat bergabung sebagai mentor atau mendapatkan bimbingan dari mentor profesional.
Program: Menawarkan program unggulan seperti webinar, sesi mentoring, dan pelatihan untuk meningkatkan peluang mendapatkan beasiswa.
Notifikasi: Memberikan notifikasi terkait aktivitas pengguna, seperti pendaftaran beasiswa.
Laporan: Admin dapat menghasilkan laporan statistik beasiswa dan aplikasi dalam bentuk PDF.


Cara Menjalankan Aplikasi
Persyaratan
  -PHP: Versi 8.2 atau lebih tinggi.
  -Composer: Dependency manager untuk PHP.
  -MySQL: Database untuk menyimpan data aplikasi.

Langkah-Langkah :
1. Clone Repository
    git clone https://github.com/yourusername/UBeasiswa.git
    cd UBeasiswa

2. Install Dependencies
    composer install
    npm install

    
3.Konfigurasi env 

4. Generate Application Key
php artisan key:generate

5.Masukkan applicatiom key di env

6. Migrasi dan Seed Database
   php artisan migrate --force
   php artisan db:seed --class=ScholarshipSeeder

7. Jalankan aplikasi 
