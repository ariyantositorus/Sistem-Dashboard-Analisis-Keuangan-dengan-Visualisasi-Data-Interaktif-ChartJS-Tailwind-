const labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'];
const data = {
  labels: labels,
  datasets: [
    {
      label: 'Pendapatan',
      backgroundColor: 'rgb(59, 130, 246)', // Warna biru
      borderColor: 'rgb(59, 130, 246)',
      data: [100, 110, 130, 120, 140, 150], // Data dummy
    },
    {
      label: 'Pengeluaran',
      backgroundColor: 'rgb(239, 68, 68)', // Warna merah
      borderColor: 'rgb(239, 68, 68)',
      data: [80, 85, 90, 80, 95, 100], // Data dummy
    }
  ]
};
// Inisialisasi Chart
const ctx = document.getElementById('myLineChart').getContext('2d');
new Chart(ctx, {
  type: 'line',
  data: data,
  options: {} // Opsi untuk kustomisasi
});