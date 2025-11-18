<?php include 'cek_sesi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FinAnalyze Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.umd.min.js"></script>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <div class="w-64 bg-gray-900 text-white">
            <div class="p-6">
                <div class="flex items-center gap-2 mb-8">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/>
                    </svg>
                    <h1 class="text-xl font-bold">FinAnalyze</h1>
                </div>
                
                <nav class="space-y-2">
                    <a href="index.php" class="flex items-center gap-3 px-4 py-3 bg-gray-800 rounded-lg">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/>
                        </svg>
                        <span>Dashboard</span>
                    </a>
                    
                    <a href="transaksi.php" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:bg-gray-800 rounded-lg">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z"/>
                        </svg>
                        <span>Transaksi</span>
                    </a>
                    
                    <a href="laporan.php" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:bg-gray-800 rounded-lg">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4zm2.5 2.1h-15V5h15v14.1zm0-16.1h-15c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/>
                        </svg>
                        <span>Laporan</span>
                    </a>
                    
                    <a href="pengaturan.php" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:bg-gray-800 rounded-lg">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19.14 12.94c.04-.3.06-.61.06-.94 0-.32-.02-.64-.07-.94l2.03-1.58c.18-.14.23-.41.12-.61l-1.92-3.32c-.12-.22-.37-.29-.59-.22l-2.39.96c-.5-.38-1.03-.7-1.62-.94l-.36-2.54c-.04-.24-.24-.41-.48-.41h-3.84c-.24 0-.43.17-.47.41l-.36 2.54c-.59.24-1.13.57-1.62.94l-2.39-.96c-.22-.08-.47 0-.59.22L2.74 8.87c-.12.21-.08.47.12.61l2.03 1.58c-.05.3-.09.63-.09.94s.02.64.07.94l-2.03 1.58c-.18.14-.23.41-.12.61l1.92 3.32c.12.22.37.29.59.22l2.39-.96c.5.38 1.03.7 1.62.94l.36 2.54c.05.24.24.41.48.41h3.84c.24 0 .44-.17.47-.41l.36-2.54c.59-.24 1.13-.56 1.62-.94l2.39.96c.22.08.47 0 .59-.22l1.92-3.32c.12-.22.07-.47-.12-.61l-2.01-1.58zM12 15.6c-1.98 0-3.6-1.62-3.6-3.6s1.62-3.6 3.6-3.6 3.6 1.62 3.6 3.6-1.62 3.6-3.6 3.6z"/>
                        </svg>
                        <span>Pengaturan</span>
                    </a>
                    
                    <a href="logout.php" onclick="return confirm('Apakah Anda yakin ingin logout?');" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:bg-gray-800 rounded-lg mt-8">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z"/>
                        </svg>
                        <span>Logout</span>
                    </a>
                </nav>
            </div>
        </div>

        <div class="flex-1 overflow-auto">
            <div class="bg-white border-b px-8 py-4 flex justify-between items-center">
                <h2 class="text-2xl font-bold text-gray-800">Dashboard Keuangan</h2>
                <div class="flex items-center gap-4">
                    <div class="relative">
                    </div>
                    <div class="flex items-center gap-2">
    <img src="image/avatar.png" alt="Avatar Pengguna" class="w-10 h-10 rounded-full object-cover">
</div>
                </div>
            </div>

            <div class="p-8">
                <div class="grid grid-cols-4 gap-6 mb-8">
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <p class="text-gray-600 text-sm mb-2">Total Pendapatan</p>
                        <p id="total-pendapatan" class="text-2xl font-bold text-green-600">Rp 0</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <p class="text-gray-600 text-sm mb-2">Total Pengeluaran</p>
                        <p id="total-pengeluaran" class="text-2xl font-bold text-red-600">Rp 0</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <p class="text-gray-600 text-sm mb-2">Laba Bersih</p>
                        <p id="laba-bersih" class="text-2xl font-bold text-blue-600">Rp 0</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <p class="text-gray-600 text-sm mb-2">Pertumbuhan (vs Bln Lalu)</p>
                        <p id="pertumbuhan-persen" class="text-2xl font-bold text-gray-600">0%</p>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-6 mb-8">
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <canvas id="lineChart"></canvas>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <canvas id="barChart"></canvas>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-6">
                    <div class="bg-white p-6 rounded-lg shadow-sm ">
                        <h3 class="text-lg font-bold mb-4">Transaksi Terbaru</h3>
                        <table class="w-full">
                            <thead class="border-b">
                                <tr class="text-left text-gray-600 text-sm">
                                    <th class="pb-3">Tanggal</th>
                                    <th class="pb-3">Deskripsi</th>
                                    <th class="pb-3">Jumlah</th>
                                    <th class="pb-3">Kategori</th>
                                </tr>
                            </thead>
                            <tbody id="tabel-transaksi-terbaru">
                                </tbody>
                        </table>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <canvas id="pieChart"></canvas>
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
        let lineChartInstance = null;
        let barChartInstance = null;
        let pieChartInstance = null;

        // --- [FUNGSI UTAMA (DIREVISI)] ---
        // Berjalan saat halaman dashboard selesai dimuat
        document.addEventListener('DOMContentLoaded', loadDashboard);

        // [BARU] Fungsi ini sekarang 'async' untuk menunggu 'fetch'
        async function loadDashboard() {
            let transaksi = [];

            // [BARU] Mengambil data dari PHP, bukan localStorage
            try {
                const response = await fetch('api_get_transaksi.php');
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                transaksi = await response.json();
            } catch (error) {
                console.error("Gagal memuat data dashboard:", error);
                // Tampilkan error ke pengguna jika perlu
            }

            // Sisa kode SAMA PERSIS, karena fungsi ini
            // tidak peduli data datang dari mana (localStorage/fetch)
            updateTotalCards(transaksi);
            updateTransaksiTerbaru(transaksi);
            updateCharts(transaksi);
        }

        // --- [FUNGSI HELPER (Tidak Berubah)] ---
        function formatRupiah(angka) {
            return new Intl.NumberFormat('id-ID', { 
                style: 'currency', 
                currency: 'IDR', 
                minimumFractionDigits: 0 
            }).format(angka);
        }

        function formatTanggalSingkat(tanggal) {
            const date = new Date(tanggal);
            const options = { day: '2-digit', month: 'short', year: 'numeric' };
            return date.toLocaleDateString('id-ID', options);
        }

        // --- [BAGIAN 1: UPDATE KARTU TOTAL (Tidak Berubah)] ---
        function updateTotalCards(transaksi) {
            // ... (Fungsi ini SAMA PERSIS dengan kode Anda sebelumnya) ...
            let totalPendapatan = 0;
            let totalPengeluaran = 0;

            const today = new Date();
            const currentMonth = today.getMonth();
            const currentYear = today.getFullYear();
            const prevMonth = currentMonth === 0 ? 11 : currentMonth - 1;
            const prevYear = currentMonth === 0 ? currentYear - 1 : currentYear;

            let revenueBulanIni = 0;
            let revenueBulanLalu = 0;

            transaksi.forEach(t => {
                const tDate = new Date(t.tanggal);
                const tMonth = tDate.getMonth();
                const tYear = tDate.getFullYear();

                if (t.kategori === 'Pendapatan') {
                    totalPendapatan += t.jumlah;
                    if (tMonth === currentMonth && tYear === currentYear) {
                        revenueBulanIni += t.jumlah;
                    }
                    if (tMonth === prevMonth && tYear === prevYear) {
                        revenueBulanLalu += t.jumlah;
                    }
                } else if (t.kategori === 'Pengeluaran') {
                    totalPengeluaran += t.jumlah; // (ini sudah negatif)
                }
            });

            const labaBersih = totalPendapatan + totalPengeluaran;

            let pertumbuhanPersen = 0;
            let warnaPersen = 'text-gray-600';
            if (revenueBulanLalu > 0) {
                pertumbuhanPersen = ((revenueBulanIni - revenueBulanLalu) / revenueBulanLalu) * 100;
            } else if (revenueBulanLalu === 0 && revenueBulanIni > 0) {
                pertumbuhanPersen = 100;
            }
            if (pertumbuhanPersen > 0) warnaPersen = 'text-green-600';
            if (pertumbuhanPersen < 0) warnaPersen = 'text-red-600';
            const tanda = pertumbuhanPersen > 0 ? '+' : ''; 

            document.getElementById('total-pendapatan').textContent = formatRupiah(totalPendapatan);
            document.getElementById('total-pengeluaran').textContent = formatRupiah(Math.abs(totalPengeluaran));
            document.getElementById('laba-bersih').textContent = formatRupiah(labaBersih);
            
            const elPertumbuhan = document.getElementById('pertumbuhan-persen');
            elPertumbuhan.textContent = `${tanda}${pertumbuhanPersen.toFixed(1)}%`;
            elPertumbuhan.className = `text-2xl font-bold ${warnaPersen}`;
        }

        // --- [BAGIAN 2: UPDATE TABEL TRANSAKSI TERBARU (Tidak Berubah)] ---
        function updateTransaksiTerbaru(transaksi) {
            // ... (Fungsi ini SAMA PERSIS dengan kode Anda sebelumnya) ...
            const tbody = document.getElementById('tabel-transaksi-terbaru');
            tbody.innerHTML = ''; 
            const transaksiTerbaru = transaksi.slice(0, 3); // Ambil 3 data teratas (karena PHP sudah mengurutkan)

            if (transaksiTerbaru.length === 0) {
                tbody.innerHTML = '<tr><td colspan="4" class="py-3 text-sm text-center text-gray-500">Belum ada transaksi</td></tr>';
                return;
            }

            transaksiTerbaru.forEach(t => {
                const isPendapatan = t.kategori === 'Pendapatan';
                const colorClass = isPendapatan ? 'text-green-600' : 'text-red-600';
                const sign = isPendapatan ? '+' : '';

                const row = `
                    <tr class="border-b">
                        <td class="py-3 text-sm">${formatTanggalSingkat(t.tanggal)}</td>
                        <td class="py-3 text-sm">${t.deskripsi}</td>
                        <td class="py-3 text-sm ${colorClass} whitespace-nowrap">${sign}${formatRupiah(t.jumlah)}</td>
                        <td class="py-3 text-sm">${t.kategori}</td>
                    </tr>
                `;
                tbody.innerHTML += row;
            });
        }

        // --- [BAGIAN 3: UPDATE SEMUA CHART (DIREVISI)] ---
        function updateCharts(transaksi) {
            // ... (Logika olah data SAMA PERSIS) ...
            const namaBulan = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];
            let dataPendapatanPerBulan = new Array(12).fill(0);
            let dataPengeluaranPerBulan = new Array(12).fill(0);
            let dataLabaPerBulan = new Array(12).fill(0);

            transaksi.forEach(t => {
                const bulan = new Date(t.tanggal).getMonth(); 
                if (t.kategori === 'Pendapatan') {
                    dataPendapatanPerBulan[bulan] += t.jumlah;
                } else {
                    dataPengeluaranPerBulan[bulan] += Math.abs(t.jumlah); 
                }
            });

            for (let i = 0; i < 12; i++) {
                dataLabaPerBulan[i] = dataPendapatanPerBulan[i] - dataPengeluaranPerBulan[i];
            }
            
            const totalPendapatan = dataPendapatanPerBulan.reduce((a, b) => a + b, 0);
            const totalPengeluaran = dataPengeluaranPerBulan.reduce((a, b) => a + b, 0);

            // --- [BARU] Hancurkan chart lama sebelum menggambar yang baru ---
            if (lineChartInstance) lineChartInstance.destroy();
            if (barChartInstance) barChartInstance.destroy();
            if (pieChartInstance) pieChartInstance.destroy();

            // 1. Line Chart
            const lineCtx = document.getElementById('lineChart').getContext('2d');
            lineChartInstance = new Chart(lineCtx, { // [BARU] Simpan ke variabel
                type: 'line',
                data: {
                    labels: namaBulan, 
                    datasets: [{
                        label: 'Pendapatan',
                        data: dataPendapatanPerBulan,
                        borderColor: '#4F46E5',
                        tension: 0.4,
                        fill: false
                    }, {
                        label: 'Pengeluaran',
                        data: dataPengeluaranPerBulan,
                        borderColor: '#EF4444',
                        tension: 0.4,
                        fill: false
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false, // [PERBAIKAN] Samakan dengan laporan.html
                    plugins: { legend: { display: true, position: 'top' } },
                    scales: { y: { beginAtZero: true } }
                }
            });

            // 2. Bar Chart
            const barCtx = document.getElementById('barChart').getContext('2d');
            barChartInstance = new Chart(barCtx, { // [BARU] Simpan ke variabel
                type: 'bar',
                data: {
                    labels: namaBulan, 
                    datasets: [{
                        label: 'Laba Bulanan',
                        data: dataLabaPerBulan,
                        backgroundColor: '#4F46E5',
                        borderRadius: 4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false, // [PERBAIKAN] Samakan dengan laporan.html
                    plugins: { legend: { display: false } },
                    scales: { y: { beginAtZero: true } }
                }
            });

            // 3. Pie Chart
            const pieCtx = document.getElementById('pieChart').getContext('2d');
            pieChartInstance = new Chart(pieCtx, { // [BARU] Simpan ke variabel
                type: 'pie',
                data: {
                    labels: ['Total Pendapatan', 'Total Pengeluaran'], 
                    datasets: [{
                        data: [totalPendapatan, totalPengeluaran], 
                        backgroundColor: ['#22C55E', '#EF4444'], 
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false, // [PERBAIKAN] Samakan dengan laporan.html
                    plugins: { legend: { position: 'bottom' } }
                }
            });
        }
    </script>
    
</body>
</html>