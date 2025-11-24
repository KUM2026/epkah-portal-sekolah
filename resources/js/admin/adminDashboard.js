import Chart from 'chart.js/auto';

// Check if chart element exists
const wasteChart = document.getElementById('wasteChart');
if (wasteChart) {
    new Chart(wasteChart, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mac', 'Apr', 'Mei', 'Jun', 'Jul', 'Ogo', 'Sep', 'Okt', 'Nov', 'Dis'],
            datasets: [{
                label: 'Sisa (Kg)',
                data: [5, 8, 12, 6, 15, 20, 25, 30, 18, 22, 26, 35],
                borderColor: '#16a34a',
                backgroundColor: 'rgba(34, 197, 94, 0.15)',
                tension: 0.4,
                fill: true,
                pointBackgroundColor: '#16a34a',
                pointBorderWidth: 2,
                pointHoverRadius: 7,
                pointRadius: 5,
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true,
                    labels: {
                        color: '#374151',
                        font: { size: 14, family: 'Inter' },
                    }
                },
                tooltip: {
                    backgroundColor: '#14532d',
                    titleColor: '#fff',
                    bodyColor: '#fff',
                    borderColor: '#22c55e',
                    borderWidth: 1,
                    padding: 10,
                }
            },
            scales: {
                x: {
                    ticks: { color: '#6b7280', font: { size: 12 } },
                    grid: { color: 'rgba(0,0,0,0.05)' }
                },
                y: {
                    ticks: { color: '#6b7280', font: { size: 12 } },
                    grid: { color: 'rgba(0,0,0,0.05)' }
                }
            }
        }
    });
}
