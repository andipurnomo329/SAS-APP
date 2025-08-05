
// Penerimaan siswa baru
const ctx = document.getElementById('siswaChart').getContext('2d');
const siswaChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['2020', '2021', '2022', '2023', '2024', '2025'],
        datasets: [{
            label: 'Jumlah Siswa',
            data: [120, 250, 208, 180, 300, 310],
            borderColor: 'rgba(255, 99, 132, 0.6)',
            backgroundColor: 'rgba(255, 109, 140, 0.68)',
            borderWidth: 2,
            fill: false,
            tension: 0.4,
            pointRadius: 0
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                labels: {
                    color: '#1e293b'
                }
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                ticks: {
                    precision: 0,
                    color: '#475569'
                },
                grid: {
                    color: '#e2e8f0'
                }
            },
            x: {
                ticks: {
                    color: '#475569'
                },
                grid: {
                    color: '#e2e8f0'
                }
            }
        }
    }
});

// Nilai Rata - Rata Kelas
const barCtx = document.getElementById('barChart').getContext('2d');
const barChart = new Chart(barCtx, {
    type: 'bar',
    data: {
        labels: ['Kelas 1', 'Kelas 2', 'Kelas 3', 'Kelas 4', 'Kelas 5', 'Kelas 6'],
        datasets: [{
            label: 'Jumlah Pendaftar',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: 'rgba(54, 163, 235, 0.22)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                labels: {
                    color: '#1e293b'
                }
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                ticks: {
                    color: '#475569'
                },
                grid: {
                    color: '#e2e8f0'
                }
            },
            x: {
                ticks: {
                    color: '#475569'
                },
                grid: {
                    color: '#e2e8f0'
                }
            }
        }
    }
});