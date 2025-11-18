# Sistem Dashboard Analisis Keuangan

Sebuah proyek dashboard analisis keuangan full-stack yang dibuat sebagai bagian dari program magang. Aplikasi ini dirancang untuk membantu pengguna (seperti pemilik toko e-commerce) melacak, mengelola, dan menganalisis data pendapatan dan pengeluaran mereka melalui visualisasi data yang interaktif.

![Tampilan Dashboard](image/tampilan-dashboard.png)


---

## Fitur Utama

* **Sistem Autentikasi (Login):** Halaman login aman menggunakan PHP Sessions.
* **Dashboard Utama:** Visualisasi interaktif (Chart.js) untuk laba, pengeluaran, dan pertumbuhan.
* **Manajemen Transaksi (CRUD):** Fungsi penuh Create, Read, Update, & Delete (CRUD) dengan pagination.
* **Manajemen Kategori Dinamis:** Pengguna bisa menambah/menghapus kategori pendapatan & pengeluaran dari database.
* **Halaman Laporan:** Analisis mendalam dengan filter periode (Bulan Ini, Bulan Lalu, dll).

---

## Teknologi yang Digunakan

* **Front-End:** HTML, Tailwind CSS, Chart.js, JavaScript (Fetch API)
* **Back-End:** PHP
* **Database:** MySQL 
* **Server Lokal:** XAMPP 

---

## Cara Menjalankan Proyek (Instalasi)

Untuk menjalankan proyek ini di komputer lokal Anda, ikuti langkah-langkah berikut:

1.  **Clone atau Download Proyek**
    Clone repository ini ke komputer Anda.

    ```bash
    git clone https://github.com/anyantositus/Sistem-Dashboard-Analisis-Keuangan-dengan-Visualisasi-Data-Interaktif-ChartJS-Tailwind.git
    ```

2.  **Pindahkan ke Htdocs**
    Pindahkan seluruh folder proyek (`dashboard-keuangan`) ke dalam direktori `htdocs` XAMPP Anda.
    *Lokasi umum: `C:\xampp\htdocs\dashboard-keuangan`*

3.  **Jalankan XAMPP**
    Buka XAMPP Control Panel dan jalankan modul **Apache** dan **MySQL**.

4.  **Setup Database (Penting)**
    Buka `http://localhost/phpmyadmin/`, buat database baru bernama `db_finanalyze`. Klik database tersebut, lalu klik tab **SQL** dan jalankan kode di bawah ini.

    <details>
    <summary>Buka dan Salin Kode SQL untuk Membuat Semua Tabel</summary>
    
    ```sql
    -- 1. Membuat tabel 'kategori'
    CREATE TABLE `kategori` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `nama` varchar(100) NOT NULL,
      `jenis` ENUM('pendapatan', 'pengeluaran') NOT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

    -- 2. Mengisi tabel 'kategori' (Toko Pakaian)
    INSERT INTO `kategori` (`nama`, `jenis`) VALUES
    ('Penjualan Produk', 'pendapatan'),
    ('Jasa Desain/Sablon', 'pendapatan'),
    ('Lainnya', 'pendapatan'),
    ('Pembelian Stok (HPP)', 'pengeluaran'),
    ('Gaji & Tenaga Kerja', 'pengeluaran'),
    ('Marketing & Iklan', 'pengeluaran'),
    ('Operasional & Platform', 'pengeluaran'),
    ('Lainnya', 'pengeluaran');

    -- 3. Membuat tabel 'transaksi'
    CREATE TABLE `transaksi` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `tanggal` date NOT NULL,
      `deskripsi` varchar(255) NOT NULL,
      `jumlah` bigint(20) NOT NULL,
      `kategori` varchar(50) NOT NULL,
      `sub_kategori` varchar(50) DEFAULT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

    -- 4. Membuat tabel 'users'
    CREATE TABLE `users` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `username` varchar(100) NOT NULL,
      `password` varchar(255) NOT NULL,
      `nama_lengkap` varchar(150) NOT NULL,
      PRIMARY KEY (`id`),
      UNIQUE KEY `username` (`username`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

    -- 5. Memasukkan pengguna default
    -- (Gunakan hash yang Anda buat dengan `buat_hash.php`)
    -- Contoh ini menggunakan password: password123
    INSERT INTO `users` (`username`, `password`, `nama_lengkap`) VALUES
    ('admin', '$2y$10$9sZ/3B6A7Yk6.o2v5e8uGePyE8v8.j/mY/e9.m.w.3d8.V.P', 'Admin FinAnalyze');
    ```
    </details>

5.  **Jalankan Aplikasi**
    Buka browser Anda dan akses halaman login. **PENTING:** Jangan buka file dengan `file:///`, harus melalui `localhost`.

    `http://localhost/dashboard-keuangan/login.html`

6.  **Login**
    Gunakan kredensial default untuk masuk:
    * **Username:** `admin`
    * **Password:** `password123`

---
