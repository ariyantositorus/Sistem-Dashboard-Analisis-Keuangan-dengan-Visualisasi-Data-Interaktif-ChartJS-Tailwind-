<?php include 'cek_sesi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FinAnalyze - Transaksi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
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
                    
                    <a href="transaksi.php" class="flex items-center gap-3 px-4 py-3 bg-gray-800 rounded-lg">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z"/></svg>
                        <span>Transaksi</span>
                    </a>
                    
                    <a href="laporan.php" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:bg-gray-800 rounded-lg">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4zm2.5 2.1h-15V5h15v14.1zm0-16.1h-15c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg>
                        <span>Laporan</span>
                    </a>
                    
                    <a href="pengaturan.php" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:bg-gray-800 rounded-lg">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19.14 12.94c.04-.3.06-.61.06-.94 0-.32-.02-.64-.07-.94l2.03-1.58c.18-.14.23-.41.12-.61l-1.92-3.32c-.12-.22-.37-.29-.59-.22l-2.39.96c-.5-.38-1.03-.7-1.62-.94l-.36-2.54c-.04-.24-.24-.41-.48-.41h-3.84c-.24 0-.43.17-.47.41l-.36 2.54c-.59.24-1.13.57-1.62.94l-2.39-.96c-.22-.08-.47 0-.59.22L2.74 8.87c-.12.21-.08.47.12.61l2.03 1.58c-.05.3-.09.63-.09.94s.02.64.07.94l-2.03 1.58c-.18.14-.23.41-.12.61l1.92 3.32c.12.22.37.29.59.22l2.39-.96c.5.38 1.03.7 1.62.94l.36 2.54c.05.24.24.41.48.41h3.84c.24 0 .44-.17.47-.41l.36-2.54c.59-.24 1.13-.56 1.62-.94l2.39.96c.22.08.47 0 .59.22l1.92-3.32c.12-.22.07-.47-.12-.61l-2.01-1.58zM12 15.6c-1.98 0-3.6-1.62-3.6-3.6s1.62-3.6 3.6-3.6 3.6 1.62 3.6 3.6-1.62 3.6-3.6 3.6z"/></svg>
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
            <div class="bg-white border-b px-8 py-4 flex justify-between items-center"">
                <h2 class="text-2xl font-bold text-gray-800">Daftar Transaksi</h2>
            </div>
            

            <div class="p-8">
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="flex justify-between items-center mb-6">
                        <div class="flex gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Kategori</label>
                                <select id="kategoriFilter" class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option value="">Semua</option>
                                    <option value="Pendapatan">Pendapatan</option>
                                    <option value="Pengeluaran">Pengeluaran</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Dari Tanggal</label>
                                <input type="date" id="dariTanggal" value="2025-01-01" class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Sampai Tanggal</label>
                                <input type="date" id="sampaiTanggal" value="2025-11-30" class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                        </div>
                        <button onclick="openModal()" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
                            Tambah Transaksi
                        </button>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="border-b-2">
                                <tr class="text-left text-gray-700 font-medium">
                                    <th class="pb-3 px-2 whitespace-nowrap">Tanggal</th>
                                    <th class="pb-3 px-2">Deskripsi</th>
                                    <th class="pb-3 px-2 whitespace-nowrap">Jumlah</th>
                                    <th class="pb-3 px-2 whitespace-nowrap">Kategori</th>
                                    <th class="pb-3 px-2 whitespace-nowrap">Sub-Kategori</th>
                                    <th class="pb-3 px-2 whitespace-nowrap">Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="transaksiTable">
                                </tbody>
                        </table>
                    </div>
                        <div id="pagination-wrapper" class="flex justify-end items-center mt-6 space-x-2"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white rounded-lg p-8 w-full max-w-md">
            <h3 id="modalTitle" class="text-xl font-bold mb-6">Tambah Transaksi</h3>
            <form id="transaksiForm" onsubmit="saveTransaksi(event)">
                <input type="hidden" id="editId" value="">
                
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal</label>
                    <input type="date" id="tanggal" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi</label>
                    <input type="text" id="deskripsi" required placeholder="Contoh: Penjualan Produk A" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Jumlah (Rp)</label>
                    <input type="number" id="jumlah" required placeholder="10000000" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <p id="jumlah-preview" class="text-sm text-gray-600 mt-1 h-5"></p>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Kategori</label>
                    <select id="kategori" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">Pilih Kategori</option>
                        <option value="Pendapatan">Pendapatan</option>
                        <option value="Pengeluaran">Pengeluaran</option>
                    </select>
                </div>

                <div id="subKategoriPengeluaranWrapper" class="mb-6 hidden">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Sub Kategori Pengeluaran</label>
                    <select id="subKategoriPengeluaran" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="Gaji">Gaji</option>
                        <option value="Operasional">Operasional</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Transport">Transport</option>
                        <option value="Utilitas">Utilitas</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>

                <div id="subKategoriPendapatanWrapper" class="mb-6 hidden">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Sub Kategori Pendapatan</label>
                    <select id="subKategoriPendapatan" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="Penjualan Produk">Penjualan Produk</option>
                        <option value="Jasa">Jasa</option>
                        <option value="Seminar/Workshop">Seminar/Workshop</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>

                <div class="flex gap-4">
                    <button type="button" onclick="closeModal()" class="flex-1 px-4 py-2 border rounded-lg hover:bg-gray-50 transition">
                        Batal
                    </button>
                    <button type="submit" class="flex-1 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>

   <script>
    // === Inisialisasi Aplikasi ===
    // Hapus 'namaStorageKategori', kita tidak pakai lagi
    let transaksi = []; // Kosong, akan diisi dari database
    let currentPage = 1;
    const itemsPerPage = 7; 

    // === [Fungsi Helper (Tidak Berubah)] ===
    function formatRupiah(angka) {
        return new Intl.NumberFormat('id-ID').format(Math.abs(angka));
    }

    function formatTanggal(tanggal) {
        const date = new Date(tanggal);
        const options = { day: '2-digit', month: 'short', year: 'numeric' };
        return date.toLocaleDateString('id-ID', options);
    }

    // --- [FUNGSI KATEGORI (DIREVISI TOTAL)] ---
    // [BARU] Mengambil Kategori dari PHP
    async function getKategori() {
        try {
            const response = await fetch('api_get_kategori.php?_=${new Date().getTime()}');
            const kategori = await response.json();
            
            // Cek jika data kosong (misal tabel DB kosong)
            if (!kategori.pendapatan || !kategori.pengeluaran) {
                 return { pendapatan: ['Lainnya'], pengeluaran: ['Lainnya'] };
            }
            return kategori;
        } catch (error) {
            console.error("Gagal mengambil kategori:", error);
            // Kembalikan data default jika API error
            return {
                pendapatan: ["Penjualan Produk", "Jasa", "Lainnya"],
                pengeluaran: ["Gaji", "Operasional", "Lainnya"]
            };
        }
    }

    // --- [Fungsi Render Tabel & Pagination (SUDAH DIREVISI)] ---
    async function renderTable() {
        // ... (Fungsi ini SAMA PERSIS, tidak berubah) ...
        try {
            const response = await fetch('api_get_transaksi.php?_=${new Date().getTime()}');
            transaksi = await response.json(); 
        } catch (error) {
            console.error("Gagal mengambil data:", error);
            return; 
        }

        const kategoriFilter = document.getElementById('kategoriFilter').value;
        const dariTanggal = document.getElementById('dariTanggal').value;
        const sampaiTanggal = document.getElementById('sampaiTanggal').value;

        let filteredTransaksi = transaksi.filter(t => {
            const matchKategori = !kategoriFilter || t.kategori === kategoriFilter;
            const matchTanggal = (!dariTanggal || t.tanggal >= dariTanggal) && 
                                 (!sampaiTanggal || t.tanggal <= sampaiTanggal);
            return matchKategori && matchTanggal;
        });

        displayData(filteredTransaksi, itemsPerPage, currentPage);
        setupPagination(filteredTransaksi, itemsPerPage);
    }

    function displayData(items, rowsPerPage, page) {
        // ... (Fungsi ini SAMA PERSIS, tidak berubah) ...
        const tbody = document.getElementById('transaksiTable');
        tbody.innerHTML = ''; 
        page--; 

        const start = rowsPerPage * page;
        const end = start + rowsPerPage;
        const paginatedItems = items.slice(start, end);

        paginatedItems.forEach(t => {
            const isPendapatan = t.kategori === 'Pendapatan';
            const sign = isPendapatan ? '+' : '';
            const colorClass = isPendapatan ? 'text-green-600' : 'text-red-600';
            const subKategoriTampil = t.sub_kategori || '-';

            const row = `
                <tr class="border-b hover:bg-gray-50">
                    <td class="py-4 px-2 whitespace-nowrap">${formatTanggal(t.tanggal)}</td>
                    <td class="py-4 px-2">${t.deskripsi}</td>
                    <td class="py-4 px-2 ${colorClass} font-medium whitespace-nowrap">${sign}Rp ${formatRupiah(t.jumlah)}</td>
                    <td class="py-4 px-2 whitespace-nowrap">${t.kategori}</td>
                    <td class="py-4 px-2 whitespace-nowrap">${subKategoriTampil}</td>
                    <td class="py-4 px-2 whitespace-nowrap">
                        <button onclick="editTransaksi('${t.id}')" class="text-blue-600 hover:text-blue-800 mr-3">
                            <svg class="w-5 h-5 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                        </button>
                        <button onclick="deleteTransaksi('${t.id}')" class="text-red-600 hover:text-red-800">
                            <svg class="w-5 h-5 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                        </button>
                    </td>
                </tr>
            `;
            tbody.innerHTML += row;
        });
    }

    function setupPagination(items, rowsPerPage) {
        // ... (Fungsi ini SAMA PERSIS, tidak berubah) ...
        const wrapper = document.getElementById('pagination-wrapper');
        wrapper.innerHTML = ''; 
        const pageCount = Math.ceil(items.length / rowsPerPage);
        for (let i = 1; i < pageCount + 1; i++) {
            const btn = createPageButton(i);
            wrapper.appendChild(btn);
        }
    }

    function createPageButton(page) {
        // ... (Fungsi ini SAMA PERSIS, tidak berubah) ...
        const button = document.createElement('button');
        button.innerText = page;
        let baseStyle = 'px-4 py-2 border rounded-lg transition';
        if (page === currentPage) {
            button.className = `${baseStyle} bg-blue-600 text-white`;
        } else {
            button.className = `${baseStyle} bg-white text-gray-700 hover:bg-gray-100`;
        }
        button.addEventListener('click', function () {
            currentPage = page; 
            renderTable(); 
        });
        return button;
    }
    
    // --- [Fungsi Modal (DIREVISI)] ---
    
    // [BARU] Jadikan 'async'
    async function openModal() {
        document.getElementById('modal').classList.remove('hidden');
        document.getElementById('modalTitle').textContent = 'Tambah Transaksi';
        document.getElementById('transaksiForm').reset();
        document.getElementById('editId').value = ''; 
        document.getElementById('tanggal').value = new Date().toISOString().split('T')[0];
        document.getElementById('jumlah-preview').textContent = '';
        
        // [BARU] 'await' fungsi baru
        await isiDropdownKategori(); 
        toggleSubKategori(); 
    }

    function closeModal() {
        // ... (Tidak berubah) ...
        document.getElementById('modal').classList.add('hidden');
        document.getElementById('jumlah-preview').textContent = ''; 
    }

    // [BARU] Jadikan 'async'
    async function isiDropdownKategori() {
        const kategori = await getKategori(); // Ambil dari PHP
        const selectPendapatan = document.getElementById('subKategoriPendapatan');
        const selectPengeluaran = document.getElementById('subKategoriPengeluaran');

        selectPendapatan.innerHTML = '';
        selectPengeluaran.innerHTML = '';

        kategori.pendapatan.forEach(item => {
            const option = document.createElement('option');
            option.value = item;
            option.textContent = item;
            selectPendapatan.appendChild(option);
        });

        kategori.pengeluaran.forEach(item => {
            const option = document.createElement('option');
            option.value = item;
            option.textContent = item;
            selectPengeluaran.appendChild(option);
        });
    }

    function toggleSubKategori() {
        // ... (Fungsi ini SAMA PERSIS, tidak berubah) ...
        const kategori = document.getElementById('kategori').value;
        const wrapperPengeluaran = document.getElementById('subKategoriPengeluaranWrapper');
        const wrapperPendapatan = document.getElementById('subKategoriPendapatanWrapper');

        if (kategori === 'Pengeluaran') {
            wrapperPengeluaran.classList.remove('hidden');
            wrapperPendapatan.classList.add('hidden');
        } else if (kategori === 'Pendapatan') {
            wrapperPengeluaran.classList.add('hidden');
            wrapperPendapatan.classList.remove('hidden');
        } else {
            wrapperPengeluaran.classList.add('hidden');
            wrapperPendapatan.classList.add('hidden');
        }
    }

    // --- [Fungsi Simpan, Edit, Hapus (DIREVISI)] ---

    async function saveTransaksi(event) {
        // ... (Fungsi ini SAMA PERSIS, tidak berubah) ...
        event.preventDefault();
        
        const tanggal = document.getElementById('tanggal').value;
        const deskripsi = document.getElementById('deskripsi').value;
        let jumlah = parseInt(document.getElementById('jumlah').value);
        const kategori = document.getElementById('kategori').value;
        const editId = document.getElementById('editId').value; 
        
        let sub_kategori = null;
        if (kategori === 'Pengeluaran') {
            sub_kategori = document.getElementById('subKategoriPengeluaran').value;
            jumlah = -Math.abs(jumlah);
        } else if (kategori === 'Pendapatan') {
            sub_kategori = document.getElementById('subKategoriPendapatan').value;
            jumlah = Math.abs(jumlah);
        }

        let url = '';
        let dataBody = {};

        if (editId) {
            url = 'api_update_transaksi.php';
            dataBody = { id: editId, tanggal, deskripsi, jumlah, kategori, sub_kategori };
        } else {
            url = 'api_simpan_transaksi.php';
            dataBody = { tanggal, deskripsi, jumlah, kategori, sub_kategori };
        }

        try {
            const response = await fetch(url, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(dataBody)
            });
            const result = await response.json();

            if (result.status === 'success') {
                currentPage = 1; 
                closeModal();
                renderTable(); 
            } else {
                alert("Error: " + result.message);
            }
        } catch (error) {
            console.error("Gagal mengirim data:", error);
        }
    }

    // [BARU] Jadikan 'async'
    async function editTransaksi(id) {
        const t = transaksi.find(item => item.id === id);
        if (!t) return; 

        document.getElementById('modal').classList.remove('hidden');
        document.getElementById('modalTitle').textContent = 'Edit Transaksi';
        document.getElementById('editId').value = t.id;
        document.getElementById('tanggal').value = t.tanggal;
        document.getElementById('deskripsi').value = t.deskripsi;
        document.getElementById('jumlah').value = Math.abs(t.jumlah);
        document.getElementById('kategori').value = t.kategori;
        
        // [BARU] 'await' fungsi ini
        await isiDropdownKategori(); 
        toggleSubKategori(); 

        if (t.kategori === 'Pengeluaran') {
            document.getElementById('subKategoriPengeluaran').value = t.sub_kategori || 'Lainnya';
        } else if (t.kategori === 'Pendapatan') {
            document.getElementById('subKategoriPendapatan').value = t.sub_kategori || 'Lainnya';
        }
        
        // ... (kode preview jumlah Anda) ...
    }

    async function deleteTransaksi(id) {
        // ... (Fungsi ini SAMA PERSIS, tidak berubah) ...
        if (confirm('Yakin ingin menghapus transaksi ini?')) {
            try {
                const response = await fetch('api_hapus_transaksi.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ id: id })
                });
                const result = await response.json();

                if (result.status === 'success') {
                    renderTable(); 
                } else {
                    alert("Error: " + result.message);
                }
            } catch (error) {
                console.error("Gagal menghapus data:", error);
            }
        }
    }

    // --- [Event Listeners (Tidak Berubah)] ---
    document.getElementById('kategoriFilter').addEventListener('change', () => {
        currentPage = 1; 
        renderTable();
    });
    document.getElementById('dariTanggal').addEventListener('change', () => {
        currentPage = 1;
        renderTable();
    });
    document.getElementById('sampaiTanggal').addEventListener('change', () => {
        currentPage = 1;
        renderTable();
    });
    
    document.getElementById('kategori').addEventListener('change', toggleSubKategori);
    document.getElementById('jumlah').addEventListener('input', function(e) {
        // ... (kode preview jumlah Anda) ...
        const preview = document.getElementById('jumlah-preview');
        const nilai = e.target.value;
        if (nilai) {
            try {
                const angka = parseInt(nilai, 10);
                const formatIdr = new Intl.NumberFormat('id-ID').format(angka);
                preview.textContent = `= Rp ${formatIdr}`;
            } catch (err) { preview.textContent = ''; }
        } else { preview.textContent = ''; }
    });

    // --- Panggilan Awal ---
    renderTable(); // Panggil renderTable() saat halaman pertama kali dimuat
    </script>
</body>
</html>