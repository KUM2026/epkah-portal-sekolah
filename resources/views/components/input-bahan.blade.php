<div class="d-flex gap-3 flex-wrap">

    <select id="jenisInput" class="form-select w-auto">
        <option value="" selected disabled>Pilih Jenis Sisa</option>
        <option value="UCO">Minyak Masak Terpakai (UCO)</option>
        <option value="3R">Barang Kitar Semula (3R)</option>
        <option value="E-Waste">Sisa Elektronik (e-waste)</option>
        <option value="Pakaian">Pakaian Terpakai</option>
        <option value="Makanan">Sisa Makanan</option>
    </select>

    <select id="kategoriInput" class="form-select w-auto" disabled>
        <option value="" selected disabled>Pilih Kategori</option>
    </select>

    <input type="number" id="beratInput" class="form-control w-15" placeholder="Kg" min="0">
    <input type="number" id="hargaInput" class="form-control w-15" placeholder="RM per unit" min="0">

    <button id="addRow" class="btn btn-success">
        <i class="fa fa-plus"></i> Tambah
    </button>

</div>
