<?php include 'cek_sesi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FinAnalyze - Pengaturan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 overflow-hidden">
    <div class="flex h-screen overflow-hidden">
        <div class="w-64 bg-gray-900 text-white">
            <div class="p-6">
                <div class="flex items-center gap-2 mb-8">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/></svg>
                    <h1 class="text-xl font-bold">FinAnalyze</h1>
                </div>
                
                <nav class="space-y-2">
                    <a href="index.php" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:bg-gray-800 rounded-lg">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/></svg>
                        <span>Dashboard</span>
                    </a>
                    <a href="transaksi.php" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:bg-gray-800 rounded-lg">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z"/></svg>
                        <span>Transaksi</span>
                    </a>
                    <a href="laporan.php" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:bg-gray-800 rounded-lg">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4zm2.5 2.1h-15V5h15v14.1zm0-16.1h-15c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg>
                        <span>Laporan</span>
                    </a>
                    <a href="pengaturan.php" class="flex items-center gap-3 px-4 py-3 bg-gray-800 rounded-lg">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19.14 12.94c.04-.3.06-.61.06-.94 0-.32-.02-.64-.07-.94l2.03-1.58c.18-.14.23-.41.12-.61l-1.92-3.32c-.12-.22-.37-.29-.59-.22l-2.39.96c-.5-.38-1.03-.7-1.62-.94l-.36-2.54c-.04-.24-.24-.41-.48-.41h-3.84c-.24 0-.43.17-.47.41l-.36 2.54c-.59.24-1.13.57-1.62.94l-2.39-.96c-.22-.08-.47 0-.59.22L2.74 8.87c-.12.21-.08.47.12.61l2.03 1.58c-.05.3-.09.63-.09.94s.02.64.07.94l-2.03 1.58c-.18.14-.23.41-.12.61l1.92 3.32c.12.22.37.29.59.22l2.39-.96c.5.38 1.03.7 1.62.94l.36 2.54c.05.24.24.41.48.41h3.84c.24 0 .44-.17.47-.41l.36-2.54c.59-.24 1.13-.56 1.62-.94l2.39.96c.22.08.47 0 .59-.22l1.92-3.32c.12-.22.07-.47-.12-.61l-2.01-1.58zM12 15.6c-1.98 0-3.6-1.62-3.6-3.6s1.62-3.6 3.6-3.6 3.6 1.62 3.6 3.6-1.62 3.6-3.6 3.6z"/></svg>
                        <span>Pengaturan</span>
                    </a>
                    <a href="logout.php" onclick="return confirm('Apakah Anda yakin ingin logout?');" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:bg-gray-800 rounded-lg mt-8">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z"/></svg>
                        <span>Logout</span>
                    </a>
                </nav>
            </div>
        </div>

        <div class="flex-1 overflow-auto">
            <div class="bg-white border-b px-8 py-4">
                <h2 class="text-2xl font-bold text-gray-800">Pengaturan Kategori</h2>
            </div>

            <div class="p-8">
                <div class="bg-white rounded-lg shadow-sm p-6 mb-8">
                    <h3 class="text-lg font-bold mb-4">Tambah Kategori Baru</h3>
                    <form id="formTambahKategori" class="flex items-end gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nama Kategori</label>
                            <input type="text" id="namaKategoriBaru" placeholder="Contoh: Investasi" required class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Jenis Kategori</label>
                            <select id="jenisKategoriBaru" class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="pendapatan">Pendapatan</option>
                                <option value="pengeluaran">Pengeluaran</option>
                            </select>
                        </div>
                        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
                            Tambah
                        </button>
                    </form>
                </div>

                <div class="grid grid-cols-2 gap-6">
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <h3 class="text-lg font-bold mb-4">Kategori Pendapatan</h3>
                        <div id="listKategoriPendapatan" class="space-y-2">
                            </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <h3 class="text-lg font-bold mb-4">Kategori Pengeluaran</h3>
                        <div id="listKategoriPengeluaran" class="space-y-2">
                            </div>
                    </div>
                </div>

                <div class="text-center text-gray-600 text-sm mt-8 py-4">
                    © 2025 FinAnalyze Dashboard. All rights reserved
                </div>
            </div>
        </div>
    </div>

    <script>
        // --- [FUNGSI UTAMA] ---
        document.addEventListener('DOMContentLoaded', function() {
            muatDaftarKategori();

            document.getElementById('formTambahKategori').addEventListener('submit', function(e) {
                e.preventDefault();
                tambahKategoriBaru();
            });
        });

        // --- [FUNGSI: Mengambil Kategori dari PHP] ---
        async function getKategori() {
            try {
                const response = await fetch('api_get_kategori.php');
                const kategori = await response.json();
                return kategori;
            } catch (error) {
                console.error("Gagal mengambil kategori:", error);
                return { pendapatan: [], pengeluaran: [] }; // Kembalikan objek kosong jika gagal
            }
        }

        // --- [FUNGSI: Menampilkan Kategori ke Layar] ---
        async function muatDaftarKategori() {
            const kategori = await getKategori();
            
            const listPendapatan = document.getElementById('listKategoriPendapatan');
            const listPengeluaran = document.getElementById('listKategoriPengeluaran');

            listPendapatan.innerHTML = '';
            listPengeluaran.innerHTML = '';

            // Tampilkan kategori pendapatan
            kategori.pendapatan.forEach(item => {
                listPendapatan.appendChild(buatElemenKategori(item, 'pendapatan'));
            });

            // Tampilkan kategori pengeluaran
            kategori.pengeluaran.forEach(item => {
                listPengeluaran.appendChild(buatElemenKategori(item, 'pengeluaran'));
            });
        }

        // --- [FUNGSI: Membuat 1 baris Kategori] ---
        function buatElemenKategori(nama, jenis) {
            const div = document.createElement('div');
            div.className = 'flex justify-between items-center p-3 bg-gray-50 rounded-lg';
            
            const span = document.createElement('span');
            span.textContent = nama;
            div.appendChild(span);

            // Jangan izinkan hapus "Lainnya"
            if (nama !== 'Lainnya') {
                const button = document.createElement('button');
                button.innerHTML = `<svg class="w-5 h-5 text-red-500 hover:text-red-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>`;
                button.onclick = function() {
                    hapusKategori(nama, jenis);
                };
                div.appendChild(button);
            }
            return div;
        }

        // --- [FUNGSI: Menambah Kategori Baru] ---
        async function tambahKategoriBaru() {
            const nama = document.getElementById('namaKategoriBaru').value;
            const jenis = document.getElementById('jenisKategoriBaru').value;

            if (!nama) return; 

            try {
                const response = await fetch('api_simpan_kategori.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ nama: nama, jenis: jenis })
                });
                const result = await response.json();

                if (result.status === 'success') {
                    muatDaftarKategori(); // Muat ulang list
                    document.getElementById('namaKategoriBaru').value = ''; // Kosongkan form
                } else {
                    alert('Error: ' + result.message);
                }
            } catch (error) {
                console.error("Gagal menambah kategori:", error);
            }
        }

        // --- [FUNGSI: Menghapus Kategori] ---
        async function hapusKategori(nama, jenis) {
            if (!confirm(`Yakin ingin menghapus kategori "${nama}"?`)) {
                return;
            }

            try {
                const response = await fetch('api_hapus_kategori.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ nama: nama, jenis: jenis })
                });
                const result = await response.json();

                if (result.status === 'success') {
                    muatDaftarKategori(); // Muat ulang list
                } else {
                    alert('Error: ' + result.message);
                }
            } catch (error) {
                console.error("Gagal menghapus kategori:", error);
            }
        }
    </script>
</body>
</html>