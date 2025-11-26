document.addEventListener("DOMContentLoaded", function () {
    console.log("Dashboard loaded!");

    // Interaksi untuk butang "Papar"
    const buttons = document.querySelectorAll(".btn-blue");
    buttons.forEach(btn => {
        btn.addEventListener("click", () => {
            alert("Butang Papar ditekan!");
        });
    });

    // Daily Recycling Tips
    const tips = [
        "Basuh botol plastik sebelum dihantar.",
        "Asingkan kertas & surat khabar dalam kotak.",
        "Hantar bateri lama ke pusat kitar semula khas.",
        "Kurangkan penggunaan plastik sekali guna.",
        "Gunakan semula beg kain ketika membeli-belah."
    ];

    const randomTip = tips[Math.floor(Math.random() * tips.length)];
    const tipBox = document.querySelector(".daily-tip span");
    if (tipBox) {
        tipBox.textContent = randomTip;
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('searchInput');
    const statusFilter = document.getElementById('statusFilter');
    const startDate = document.getElementById('startDate');
    const endDate = document.getElementById('endDate');
    const tableRows = document.querySelectorAll('tbody tr');

    function filterTable() {
        const searchText = searchInput.value.toLowerCase();
        const statusValue = statusFilter.value.toLowerCase();
        const start = startDate.value;
        const end = endDate.value;

        tableRows.forEach(row => {
            const rowText = row.textContent.toLowerCase();
            const rowStatus = row.querySelector('td:nth-child(5)').textContent.toLowerCase();
            const rowDate = row.querySelector('td:nth-child(2)').textContent;

            let match = true;

            // Cari
            if (searchText && !rowText.includes(searchText)) {
                match = false;
            }

            // Status
            if (statusValue && rowStatus !== statusValue) {
                match = false;
            }

            // Tarikh
            if ((start && rowDate < start) || (end && rowDate > end)) {
                match = false;
            }

            row.style.display = match ? '' : 'none';
        });
    }

    // Event listeners auto
    searchInput.addEventListener('input', filterTable);
    statusFilter.addEventListener('change', filterTable);
    startDate.addEventListener('change', filterTable);
    endDate.addEventListener('change', filterTable);
});

// Generic Table Filter Functionality
document.addEventListener('DOMContentLoaded', () => {
    const initTableFilter = (tableSelector, options = {}) => {
        const searchInput = document.getElementById(options.searchId);
        const statusFilter = document.getElementById(options.statusId);
        const startDate = options.startDateId ? document.getElementById(options.startDateId) : null;
        const endDate = options.endDateId ? document.getElementById(options.endDateId) : null;
        const table = document.querySelector(`${tableSelector} tbody`);

        if (!table) return;

        const rows = Array.from(table.querySelectorAll('tr'));

        const parseDate = (str) => {
            if (!str) return null;
            const months = {Jan:0,Feb:1,Mar:2,Apr:3,May:4,Jun:5,Jul:6,Aug:7,Sep:8,Sept:8,Oct:9,Nov:10,Dec:11};
            const parts = str.trim().split(' ');
            if (parts.length !== 3) return null;
            const day = parseInt(parts[0]);
            const month = months[parts[1].substr(0,3)] ?? 0;
            const year = parseInt(parts[2]);
            return new Date(year, month, day);
        };

        const filterRows = () => {
            const search = searchInput?.value.toLowerCase() || '';
            const status = statusFilter?.value.toLowerCase() || '';
            const start = startDate?.value ? new Date(startDate.value) : null;
            const end = endDate?.value ? new Date(endDate.value) : null;

            let visibleCount = 0;

            rows.forEach(row => {
                const cells = row.children;
                const nameCell = options.nameColumn ?? 1; 
                const statusCell = options.statusColumn ?? 6;
                const dateCell = options.dateColumn ?? 3;

                const nameText = cells[nameCell]?.textContent.toLowerCase() || '';
                const rowStatus = cells[statusCell]?.textContent.toLowerCase() || '';
                const rowDate = startDate && dateCell ? parseDate(cells[dateCell]?.textContent) : null;

                const matchSearch = nameText.includes(search);
                const matchStatus = !status || rowStatus === status;
                let matchDate = true;
                if (start && rowDate && rowDate < start) matchDate = false;
                if (end && rowDate && rowDate > end) matchDate = false;

                const isVisible = matchSearch && matchStatus && matchDate;
                row.style.display = isVisible ? '' : 'none';
                if (isVisible) visibleCount++;
            });

            if (options.noResultsId) {
                const noResults = document.getElementById(options.noResultsId);
                if (noResults) noResults.style.display = visibleCount === 0 ? 'block' : 'none';
            }
        };

        searchInput?.addEventListener('input', filterRows);
        statusFilter?.addEventListener('change', filterRows);
        startDate?.addEventListener('change', filterRows);
        endDate?.addEventListener('change', filterRows);
    };

    // Contoh inisialisasi untuk sekolah
    initTableFilter('#schoolTable', {
        searchId: 'schoolTable-search',
        statusId: 'schoolTable-status',
        nameColumn: 1,
        statusColumn: 2,
    });

initTableFilter('#tableKutipan', {
    searchId: 'tableKutipan-search',
    statusId: 'tableKutipan-status',
    startDateId: 'tableKutipan-start-date',
    endDateId: 'tableKutipan-end-date',
    nameColumn: 1,
    statusColumn: 4,
    dateColumn: 3,
});

});


