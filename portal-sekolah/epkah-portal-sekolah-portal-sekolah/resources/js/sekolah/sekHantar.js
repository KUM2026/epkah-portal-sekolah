document.addEventListener("DOMContentLoaded", () => {
    const addRowBtn     = document.getElementById("addRow");
    const jenisInput    = document.getElementById("jenisInput");
    const kategoriInput = document.getElementById("kategoriInput");
    const beratInput    = document.getElementById("beratInput");
    const hargaInput    = document.getElementById("hargaInput");
    const tableBody     = document.getElementById("dataTableBody");
    const totalAmount   = document.getElementById("totalAmount");

    const kategoriOptions = {
        "3R": [
            "Botol Plastik",
            "Kertas",
            "Kotak",
            "Tin Aluminium",
            "Besi",
            "Botol Kaca",
            "Lain-Lain"
        ],
        "E-Waste": [
            "Telefon Bimbit",
            "Komputer",
            "Bateri Kereta",
            "Peralatan Elektrik",
            "Lain-Lain"
        ],
        "UCO": [
            "Botol Minyak Masak Terpakai"
        ],
        "Pakaian": [
            "Baju",
            "Seluar",
            "Kain",
            "Lain-Lain"
        ],
        "Makanan": [
            "Sisa Makanan"
        ]
    };

    // Update kategori ikut jenis sisa
    jenisInput.addEventListener("change", () => {
        const jenis = jenisInput.value;
        kategoriInput.innerHTML = '<option value="" selected disabled>Pilih Kategori</option>';

        if (kategoriOptions[jenis]) {
            kategoriOptions[jenis].forEach(kat => {
                const option = document.createElement("option");
                option.value = kat;
                option.textContent = kat;
                kategoriInput.appendChild(option);
            });
            kategoriInput.disabled = false;
        } else {
            kategoriInput.disabled = true;
        }
    });

    // Tambah row
    addRowBtn.addEventListener("click", (e) => {
        e.preventDefault();

        const jenis    = jenisInput.value;
        const kategori = kategoriInput.value;
        const berat    = parseFloat(beratInput.value) || 0;
        const harga    = parseFloat(hargaInput.value) || 0;
        const jumlah   = berat * harga;

        if (!jenis || !kategori || berat <= 0 || harga <= 0) {
            alert("Sila isi semua maklumat dengan betul.");
            return;
        }

        const row = document.createElement("tr");
        row.innerHTML = `
            <td>${jenis}</td>
            <td>${kategori}</td>
            <td>${berat.toFixed(2)}</td>
            <td>${harga.toFixed(2)}</td>
            <td class="jumlah">${jumlah.toFixed(2)}</td>
            <td>
                <button class="btn btn-sm btn-outline-danger deleteRow">Padam</button>
            </td>
        `;
        tableBody.appendChild(row);

        updateTotal();

        resetInputs();

        // Delete row
        row.querySelector(".deleteRow").addEventListener("click", () => {
            row.remove();
            updateTotal();
        });
    });

    // Reset input
    function resetInputs() {
        jenisInput.selectedIndex = 0;
        kategoriInput.innerHTML = '<option value="" selected disabled>Pilih Kategori</option>';
        kategoriInput.disabled = true;
        beratInput.value = "";
        hargaInput.value = "";
    }

    // Kira jumlah semula
    function updateTotal() {
        let total = 0;
        document.querySelectorAll("#dataTableBody .jumlah").forEach(cell => {
            total += parseFloat(cell.textContent) || 0;
        });
        totalAmount.textContent = total.toFixed(2);
    }
});
