document.addEventListener("DOMContentLoaded", () => {
    // Contoh: alert bila klik "Hantar Kitar Semula"
    const btn = document.querySelector(".btn-yellow");
    if (btn) {
        btn.addEventListener("click", () => {
            alert("Fungsi Hantar Kitar Semula akan datang!");
        });
    }
});
