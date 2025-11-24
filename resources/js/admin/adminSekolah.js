import Chart from 'chart.js/auto';

document.addEventListener('DOMContentLoaded', () => {
    // Chart creation utility
    const createBarChart = (ctx, labels, datasets, options = {}) => {
        if (!ctx) return console.warn('Canvas not found:', ctx);
        return new Chart(ctx, {
            type: 'bar',
            data: { labels, datasets },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { position: 'bottom' },
                    tooltip: { mode: 'index', intersect: false },
                    ...options.plugins
                },
                scales: {
                    y: { beginAtZero: true },
                    ...options.scales
                }
            }
        });
    };

    // Create Monthly Recycle Chart
    createBarChart(
        document.getElementById('monthlyRecycleChart'),
        ['Jan','Feb','Mac','Apr','Mei','Jun','Jul','Ogos','Sept','Okt','Nov','Dis'],
        [
            { label: '3R (kg)', data: [120,150,180,200,230,250,270,300,280,320,340,360], backgroundColor: 'rgba(34,197,94,0.7)', borderRadius: 6 },
            { label: 'e-Waste (kg)', data: [60,80,100,120,110,130,140,150,160,170,180,190], backgroundColor: 'rgba(59,130,246,0.7)', borderRadius: 6 },
            { label: 'UCO (L)', data: [30,50,40,60,70,80,90,100,110,120,130,150], backgroundColor: 'rgba(234,179,8,0.7)', borderRadius: 6 },
        ]
    );

    // Create Average School Chart
    createBarChart(
        document.getElementById('avgSchoolChart'),
        ['SK Panji','SMK Bachok','SK Kota','SMK Kubang Kerian','SK Wakaf Bharu'],
        [{ label: 'Purata Kutipan (kg)', data: [320,280,250,230,210], backgroundColor: 'rgba(147,51,234,0.7)', borderRadius: 6 }],
        { plugins: { legend: { display: false } } }
    );

    // Modal functionality
    const toggleModal = (id) => {
        const modal = document.getElementById(id);
        if (modal) modal.classList.toggle('hidden');
    };
    window.toggleAddSchoolModal = () => toggleModal('addSchoolModal');

    // Program filtering functionality
    const initializeFiltering = () => {
        const searchInput = document.getElementById('programSearch');
        const statusFilter = document.getElementById('programStatus');
        const startDate = document.getElementById('programStartDate');
        const endDate = document.getElementById('programEndDate');
        const table = document.querySelector('#programTable tbody');

        if (!table) return;

        const rows = Array.from(table.querySelectorAll('tr'));

        function parseDate(str) {
            const months = {Jan:0,Feb:1,Mar:2,Apr:3,May:4,Jun:5,Jul:6,Aug:7,Sep:8,Sept:8,Oct:9,Nov:10,Dec:11};
            const parts = str.trim().split(' ');
            if (parts.length !== 3) return null;
            const day = parseInt(parts[0]);
            const month = months[parts[1].substr(0,3)] ?? 0;
            const year = parseInt(parts[2]);
            return new Date(year, month, day);
        }

        function filterPrograms() {
            const search = searchInput.value.toLowerCase();
            const status = statusFilter.value.toLowerCase();
            const start = startDate.value ? new Date(startDate.value) : null;
            const end = endDate.value ? new Date(endDate.value) : null;

            let visibleCount = 0;
            
            rows.forEach(row => {
                const programName = row.children[1].textContent.toLowerCase();
                const schoolName = row.children[2].textContent.toLowerCase();
                const rowStatus = row.children[4].textContent.trim().toLowerCase();
                const rowDate = parseDate(row.children[3].textContent);

                let matchesSearch = programName.includes(search) || schoolName.includes(search);
                let matchesStatus = !status || rowStatus === status;
                let matchesDate = true;

                if (start && rowDate < start) matchesDate = false;
                if (end && rowDate > end) matchesDate = false;

                const isVisible = matchesSearch && matchesStatus && matchesDate;
                row.style.display = isVisible ? '' : 'none';
                if (isVisible) visibleCount++;
            });

            // Update no results message
            const noResults = document.getElementById('noResults');
            if (noResults) {
                noResults.style.display = visibleCount === 0 ? 'block' : 'none';
            }
        }

        // Add event listeners
        searchInput?.addEventListener('input', filterPrograms);
        statusFilter?.addEventListener('change', filterPrograms);
        startDate?.addEventListener('change', filterPrograms);
        endDate?.addEventListener('change', filterPrograms);
    };

    // Initialize filtering
    initializeFiltering();
});


