<?php include 'cek_sesi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FinAnalyze - Laporan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.umd.min.js"></script>
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
                    <a href="laporan.php" class="flex items-center gap-3 px-4 py-3 bg-gray-800 rounded-lg">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4zm2.5 2.1h-15V5h15v14.1zm0-16.1h-15c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg>
                        <span>Laporan</span>
                    </a>
                    <a href="pengaturan.php" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:bg-gray-800 rounded-lg">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19.14 12.94c.04-.3.06-.61.06-.94 0-.32-.02-.64-.07-.94l2.03-1.58c.18-.14.23-.41.12-.61l-1.92-3.32c-.12-.22-.37-.29-.59-.22l-2.39.96c-.5-.38-1.03-.7-1.62-.94l-.36-2.54c-.04-.24-.24-.41-.48-.41h-3.84c-.24 0-.43.17-.47.41l-.36 2.54c-.59.24-1.13.57-1.62.94l-2.39-.96c-.22-.08-.47 0-.59.22L2.74 8.87c-.12.21-.08.47.12.61l2.03 1.58c-.05.3-.09.63-.09.94s.02.64.07.94l-2.03 1.58c-.18.14-.23.41-.12.61l1.92 3.32c.12.22.37.29.59.22l2.39-.96c.5.38 1.03.7 1.62.94l.36 2.54c.05.24.24.41.48.41h3.84c.24 0 .44-.17.47-.41l.36-2.54c.59-.24 1.13-.56 1.62-.94l2.39.96c.22.08.47 0 .59-.22l1.92-3.32c.12-.22.07-.47-.12-.61l-2.01-1.58zM12 15.6c-1.98 0-3.6-1.62-3.6-3.6s1.62-3.6 3.6-3.6 3.6 1.62 3.6 3.6-1.62 3.6-3.6 3.6z"/></svg>
                        <span>Pengaturan</span>
                    </a>
                    <a href="logout.php" onclick="return confirm('Apakah Anda yakin ingin logout?');"class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:bg-gray-800 rounded-lg mt-8">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z"/></svg>
                        <span>Logout</span>
                    </a>
                </nav>
            </div>
        </div>

        <div class="flex-1 overflow-auto">
            <div class="bg-white border-b px-8 py-4">
                <h2 class="text-2xl font-bold text-gray-800">Laporan Analisis Keuangan</h2>
            </div>

            <div class="p-8">
                <div class="bg-white rounded-lg shadow-sm p-6 mb-8">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Periode</label>
                    <select id="periode" class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="semua_waktu">Semua Waktu</option>
                        <option value="bulan_ini">Bulan Ini</option>
                        <option value="bulan_lalu">Bulan Lalu</option>
                        <option value="3_bulan_terakhir">3 Bulan Terakhir</option>
                    </select>
                </div>

                <div class="grid grid-cols-1 gap-6 mb-8">
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <h3 class="text-lg font-bold mb-4">Tren Laba Bersih</h3>
                        <div class="relative h-72"> 
                            <canvas id="labaTrenChart"></canvas>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-6 mb-8">
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <h3 class="text-lg font-bold mb-4">Perbandingan Pengeluaran per Kategori</h3>
                        <div class="relative h-72">
                            <canvas id="kategoriPengeluaranChart"></canvas>
                        </div>
                    </div>
                    
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <h3 class="text-lg font-bold mb-4">Komposisi Pendapatan</h3>
                        <div class="relative h-72">
                            <canvas id="pendapatanPieChart"></canvas>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-3 gap-6">
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <p class="text-gray-600 text-sm mb-2">Rata-rata Laba Bulanan</p>
                        <p id="rata-rata-laba" class="text-2xl font-bold text-blue-600">Rp 0</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <p class="text-gray-600 text-sm mb-2">Kategori Pengeluaran Terbesar</p>
                        <p id="kategori-terbesar" class="text-2xl font-bold text-red-600">-</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <p class="text-gray-600 text-sm mb-2">Tingkat Pertumbuhan (Rev)</p>
                        <p id="tingkat-pertumbuhan-laporan" class="text-2xl font-bold text-gray-600">0%</p>
                    </div>
                </div>

                <div class="text-center text-gray-600 text-sm mt-8 py-4">
                    © 2025 FinAnalyze Dashboard. All rights reserved
                </div>
            </div>
        </div>
    </div>

    <script>
        // --- Variabel Global untuk Chart ---
        let chartLaba = null;
        let chartPengeluaran = null;
        let chartPendapatan = null;

        // --- Variabel Global untuk Data Cache ---
        let semuaTransaksiCache = [];
        let kategoriCache = null;

        // --- [FUNGSI UTAMA] ---
        document.addEventListener('DOMContentLoaded', loadLaporan);
        document.getElementById('periode').addEventListener('change', loadLaporan);

        async function loadLaporan() {
            // Ambil nilai filter
            const periode = document.getElementById('periode').value;

            // 1. Ambil data (dari cache atau fetch baru)
            const semuaTransaksi = await getSemuaTransaksi();
            const kategori = await getSemuaKategori();
            
            // 2. Filter data berdasarkan periode
            const transaksiFilter = filterTransaksiByPeriode(semuaTransaksi, periode);

            // 3. Proses data
            // Kartu ringkasan (rata-rata, terbesar) pakai data filter
            const analisisFiltered = prosesAnalisis(transaksiFilter, kategori, periode);
            // Kartu pertumbuhan pakai data penuh
            const analisisSemuaWaktu = prosesAnalisis(semuaTransaksi, kategori, 'semua_waktu');
            
            // 4. Tampilkan data
            tampilkanKartu(analisisFiltered, analisisSemuaWaktu); 
            tampilkanCharts(analisisFiltered, kategori); 
        }

        // --- [FUNGSI PENGAMBIL DATA (Fetch/Cache)] ---
        async function getSemuaTransaksi() {
            // Jika filter "Semua Waktu", kita bisa pakai cache
            // Jika filter lain, kita HARUS fetch ulang agar data terbaru
            if (document.getElementById('periode').value === 'semua_waktu' && semuaTransaksiCache.length > 0) {
                return semuaTransaksiCache;
            }
            try {
                const response = await fetch('api_get_transaksi.php');
                semuaTransaksiCache = await response.json();
                return semuaTransaksiCache;
            } catch (error) {
                console.error("Gagal mengambil transaksi:", error);
                return [];
            }
        }

        async function getSemuaKategori() {
            if (kategoriCache) {
                return kategoriCache;
            }
            try {
                const response = await fetch('api_get_kategori.php');
                kategoriCache = await response.json();
                return kategoriCache;
            } catch (error) {
                console.error("Gagal mengambil kategori:", error);
                return { pendapatan: [], pengeluaran: [] };
            }
        }

        // --- [FUNGSI FILTER PERIODE] ---
        function filterTransaksiByPeriode(transaksi, periode) {
            const now = new Date();
            const today = new Date(now.getFullYear(), now.getMonth(), now.getDate());
            
            const bulanIniStart = new Date(today.getFullYear(), today.getMonth(), 1);
            const bulanIniEnd = new Date(today.getFullYear(), today.getMonth() + 1, 0);
            const bulanLaluStart = new Date(today.getFullYear(), today.getMonth() - 1, 1);
            const bulanLaluEnd = new Date(today.getFullYear(), today.getMonth(), 0);
            const tigaBulanStart = new Date(today.getFullYear(), today.getMonth() - 2, 1);
            
            switch (periode) {
                case 'bulan_ini':
                    return transaksi.filter(t => {
                        const tDate = new Date(t.tanggal);
                        return tDate >= bulanIniStart && tDate <= bulanIniEnd;
                    });
                case 'bulan_lalu':
                    return transaksi.filter(t => {
                        const tDate = new Date(t.tanggal);
                        return tDate >= bulanLaluStart && tDate <= bulanLaluEnd;
                    });
                case '3_bulan_terakhir':
                    return transaksi.filter(t => {
                        const tDate = new Date(t.tanggal);
                        return tDate >= tigaBulanStart && tDate <= bulanIniEnd;
                    });
                case 'semua_waktu':
                default:
                    return transaksi;
            }
        }

        // --- [FUNGSI HELPER FORMAT] ---
        function formatRupiah(angka) {
            return new Intl.NumberFormat('id-ID', { 
                style: 'currency', 
                currency: 'IDR', 
                minimumFractionDigits: 0 
            }).format(angka);
        }

        // --- [FUNGSI PENGOLAH DATA] ---
        function prosesAnalisis(transaksi, kategori, periode) {
            const namaBulan = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];
            
            // Inisialisasi data
            let dataLabaPerBulan = new Array(12).fill(0);
            // Inisialisasi Kategori secara Dinamis
            let totalPerKategoriPengeluaran = {};
            kategori.pengeluaran.forEach(kat => { totalPerKategoriPengeluaran[kat] = 0; });
            
            let totalPerKategoriPendapatan = {};
            kategori.pendapatan.forEach(kat => { totalPerKategoriPendapatan[kat] = 0; });

            const today = new Date();
            const currentMonth = today.getMonth();
            const currentYear = today.getFullYear();
            const prevMonth = currentMonth === 0 ? 11 : currentMonth - 1;
            const prevYear = currentMonth === 0 ? currentYear - 1 : currentYear;
            let revenueBulanIni = 0;
            let revenueBulanLalu = 0;
            let totalPendapatan = 0;
            let totalPengeluaran = 0;

            // Loop data yang SUDAH DIFILTER
            transaksi.forEach(t => {
                const tDate = new Date(t.tanggal);
                const bulan = tDate.getMonth();
                const tMonth = tDate.getMonth();
                const tYear = tDate.getFullYear();

                if (t.kategori === 'Pendapatan') {
                    totalPendapatan += t.jumlah;
                    if (periode === 'semua_waktu') {
                        dataLabaPerBulan[bulan] += t.jumlah;
                    }
                    // Cek untuk pertumbuhan (hanya jika data ini ada di bulan ini/lalu)
                    if (tMonth === currentMonth && tYear === currentYear) revenueBulanIni += t.jumlah;
                    if (tMonth === prevMonth && tYear === prevYear) revenueBulanLalu += t.jumlah;
                    
                    const subKat = t.sub_kategori || 'Lainnya';
                    if (totalPerKategoriPendapatan.hasOwnProperty(subKat)) {
                        totalPerKategoriPendapatan[subKat] += t.jumlah;
                    }
                    
                } else if (t.kategori === 'Pengeluaran') {
                    if (periode === 'semua_waktu') {
                        dataLabaPerBulan[bulan] += t.jumlah;
                    }
                    totalPengeluaran += Math.abs(t.jumlah);

                    const subKat = t.sub_kategori || 'Lainnya';
                    if (totalPerKategoriPengeluaran.hasOwnProperty(subKat)) {
                        totalPerKategoriPengeluaran[subKat] += Math.abs(t.jumlah);
                    }
                }
            });
            
            // Jika filter BUKAN "semua_waktu", data laba harus dihitung berbeda
            if (periode !== 'semua_waktu') {
                dataLabaPerBulan = new Array(12).fill(0); 
                dataLabaPerBulan[currentMonth] = totalPendapatan - totalPengeluaran; 
            }

            const totalLaba = dataLabaPerBulan.reduce((a, b) => a + b, 0);
            const rataRataLaba = totalLaba === 0 ? 0 : totalLaba / 12;

            let kategoriTerbesar = '-';
            let maxPengeluaran = 0;
            for (const [kategori, jumlah] of Object.entries(totalPerKategoriPengeluaran)) {
                if (jumlah > maxPengeluaran) {
                    maxPengeluaran = jumlah;
                    kategoriTerbesar = kategori;
                }
            }

            // Hitung pertumbuhan (ini akan 0 jika periode bukan 'semua_waktu', itu OK)
            let pertumbuhanPersen = 0;
            let warnaPersen = 'text-gray-600';
            if (revenueBulanLalu > 0) {
                pertumbuhanPersen = ((revenueBulanIni - revenueBulanLalu) / revenueBulanLalu) * 100;
            } else if (revenueBulanLalu === 0 && revenueBulanIni > 0) {
                pertumbuhanPersen = 100;
            }
            if (pertumbuhanPersen > 0) warnaPersen = 'text-green-600';
            if (pertumbuhanPersen < 0) warnaPersen = 'text-red-600';

            return {
                namaBulan,
                dataLabaPerBulan,
                totalPerKategoriPengeluaran,
                totalPerKategoriPendapatan,
                totalPendapatan,
                totalPengeluaran,
                labaBersih: totalPendapatan - totalPengeluaran, // Laba bersih dari PERIODE
                rataRataLaba,
                kategoriTerbesar,
                pertumbuhan: {
                    persen: pertumbuhanPersen.toFixed(1),
                    warna: warnaPersen,
                    tanda: pertumbuhanPersen > 0 ? '+' : ''
                }
            };
        }

        // --- [FUNGSI TAMPILKAN KARTU (DIREVISI)] ---
        function tampilkanKartu(analisisFiltered, analisisSemuaWaktu) {
            // Rata-rata & Terbesar pakai data filter
            document.getElementById('rata-rata-laba').textContent = formatRupiah(Math.round(analisisFiltered.rataRataLaba));
            document.getElementById('kategori-terbesar').textContent = analisisFiltered.kategoriTerbesar;
            
            // Pertumbuhan SELALU pakai data 'Semua Waktu' (Bulan ini vs Bulan Lalu)
            const elPertumbuhan = document.getElementById('tingkat-pertumbuhan-laporan');
            elPertumbuhan.textContent = `${analisisSemuaWaktu.pertumbuhan.tanda}${analisisSemuaWaktu.pertumbuhan.persen}%`;
            elPertumbuhan.className = `text-2xl font-bold ${analisisSemuaWaktu.pertumbuhan.warna}`;
        }

        // --- [FUNGSI TAMPILKAN CHARTS (DIREVISI)] ---
        function tampilkanCharts(analisis, kategori) {
            
            // Fungsi helper untuk filter data 0
            function filterDataNol(dataObjek) {
                const labels = [];
                const data = [];
                // Gunakan daftar KATEGORI MASTER sebagai urutan
                kategori.pengeluaran.forEach(kat => {
                    if (dataObjek[kat] > 0) {
                        labels.push(kat);
                        data.push(dataObjek[kat]);
                    }
                });
                return { labels, data };
            }
            function filterDataNolPendapatan(dataObjek) {
                const labels = [];
                const data = [];
                kategori.pendapatan.forEach(kat => {
                    if (dataObjek[kat] > 0) {
                        labels.push(kat);
                        data.push(dataObjek[kat]);
                    }
                });
                return { labels, data };
            }

            // Hancurkan chart lama
            if (chartLaba) chartLaba.destroy();
            if (chartPengeluaran) chartPengeluaran.destroy();
            if (chartPendapatan) chartPendapatan.destroy();

            // 1. Tren Laba Bersih (Line Chart)
            const labaCtx = document.getElementById('labaTrenChart').getContext('2d');
            chartLaba = new Chart(labaCtx, {
                type: 'line',
                data: {
                    labels: analisis.namaBulan,
                    datasets: [{
                        label: 'Laba Bersih',
                        data: analisis.dataLabaPerBulan,
                        borderColor: '#4F46E5',
                        backgroundColor: 'rgba(79, 70, 229, 0.1)',
                        tension: 0.4,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false, // <-- PERBAIKAN UKURAN
                    scales: { y: { beginAtZero: false } }
                }
            });

            // 2. Perbandingan Pengeluaran (Bar Chart)
            const dataPengeluaranFiltered = filterDataNol(analisis.totalPerKategoriPengeluaran);
            const kategoriCtx = document.getElementById('kategoriPengeluaranChart').getContext('2d');
            chartPengeluaran = new Chart(kategoriCtx, {
                type: 'bar',
                data: {
                    labels: dataPengeluaranFiltered.labels,
                    datasets: [{
                        label: 'Total Pengeluaran',
                        data: dataPengeluaranFiltered.data,
                        backgroundColor: ['#EF4444', '#F97316', '#EAB308', '#84CC16', '#22C55E', '#10B981'],
                        borderRadius: 4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false, // <-- PERBAIKAN UKURAN
                    plugins: { legend: { display: false } },
                    scales: { y: { beginAtZero: true } }
                }
            });

            // 3. Komposisi Pendapatan (Pie Chart)
            const dataPendapatanFiltered = filterDataNolPendapatan(analisis.totalPerKategoriPendapatan);
            const pieCtx = document.getElementById('pendapatanPieChart').getContext('2d');
            chartPendapatan = new Chart(pieCtx, {
                type: 'pie',
                data: {
                    labels: dataPendapatanFiltered.labels,
                    datasets: [{
                        data: dataPendapatanFiltered.data,
                        backgroundColor: ['#22C55E', '#3B82F6', '#EAB308', '#A855F7', '#84CC16'],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false, // <-- PERBAIKAN UKURAN
                    plugins: { legend: { position: 'bottom' } }
                }
            });
        }
    </script>
</body>
</html>