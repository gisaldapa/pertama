// Ambil semua dropdown
const selects = document.querySelectorAll("select");

// Ambil tombol
const tombolSimpan = document.getElementById("btn-simpan");

// Fungsi hitung kehadiran
function hitungKehadiran() {
    let hadir = 0;
    let izin = 0;
    let sakit = 0;
    let alpa = 0;

    selects.forEach(select => {
        if (select.value === "Hadir") hadir++;
        else if (select.value === "Izin") izin++;
        else if (select.value === "Sakit") sakit++;
        else if (select.value === "Alpa") alpa++;
    });

    // Tampilkan hasil
    document.getElementById("hasil").innerHTML = `
        Hadir: ${hadir} | 
        Izin: ${izin} | 
        Sakit: ${sakit} | 
        Alpa: ${alpa}
    `;
}

// Event tombol simpan
tombolSimpan.addEventListener("click", () => {
    hitungKehadiran();
    alert("Data kehadiran berhasil disimpan!");
});