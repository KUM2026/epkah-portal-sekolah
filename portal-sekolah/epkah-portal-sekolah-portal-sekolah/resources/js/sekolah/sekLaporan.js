import Chart from "chart.js/auto";

document.addEventListener("DOMContentLoaded", () => {

    const canvas = document.getElementById("collectionChart");
    const dropdown = document.getElementById("jenisInput");

    if (!canvas) {
        console.warn("Canvas collectionChart tidak dijumpai.");
        return;
    }

    const ctx = canvas.getContext("2d");

    // === GRADIENTS ===
    const gradientUCO = ctx.createLinearGradient(0, 0, 0, 300);
    gradientUCO.addColorStop(0, "rgba(16, 185, 129, 0.3)");
    gradientUCO.addColorStop(1, "rgba(255, 255, 255, 0)");

    const gradientEWaste = ctx.createLinearGradient(0, 0, 0, 300);
    gradientEWaste.addColorStop(0, "rgba(59, 130, 246, 0.3)");
    gradientEWaste.addColorStop(1, "rgba(255, 255, 255, 0)");

    const gradient3R = ctx.createLinearGradient(0, 0, 0, 300);
    gradient3R.addColorStop(0, "rgba(249, 115, 22, 0.3)");
    gradient3R.addColorStop(1, "rgba(255, 255, 255, 0)");

    // === DATASET ===
    const dataUCO =     [85, 120, 90, 140, 110, 170, 130, 180, 150, 175, 210, 240];
    const dataEWaste =  [20, 40, 25, 60, 55, 80, 70, 95, 90, 110, 120, 130];
    const data3R =      [150, 180, 160, 200, 220, 240, 230, 260, 250, 275, 300, 320];

    // === DEFAULT ALL DATASETS ===
    const allDatasets = [
        {
            id: "UCO",
            label: "UCO (kg)",
            data: dataUCO,
            borderColor: "#059669",
            backgroundColor: gradientUCO,
            fill: true,
            tension: 0.4,
            borderWidth: 3,
            pointRadius: 3
        },
        {
            id: "E-Waste",
            label: "E-Waste (kg)",
            data: dataEWaste,
            borderColor: "#3B82F6",
            backgroundColor: gradientEWaste,
            fill: true,
            tension: 0.4,
            borderWidth: 3,
            pointRadius: 3
        },
        {
            id: "3R",
            label: "3R (kg)",
            data: data3R,
            borderColor: "#F97316",
            backgroundColor: gradient3R,
            fill: true,
            tension: 0.4,
            borderWidth: 3,
            pointRadius: 3
        }
    ];

    // === CREATE CHART ===
    const chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: ["Jan","Feb","Mac","Apr","Mei","Jun","Jul","Ogos","Sep","Okt","Nov","Dis"],
            datasets: allDatasets
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
        }
    });

    // === FUNCTION UPDATE DATASET BERDASARKAN DROPDOWN ===
    function updateChart(filterValue) {
        if (filterValue === "") {
            chart.data.datasets = allDatasets; // semua jenis
        } else {
            chart.data.datasets = allDatasets.filter(ds => ds.id === filterValue);
        }
        chart.update();
    }

    // === EVENT LISTENER DROPDOWN ===
    if (dropdown) {
        dropdown.addEventListener("change", (e) => {
            updateChart(e.target.value);
        });
    }
});
