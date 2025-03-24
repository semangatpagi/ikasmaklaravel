document.addEventListener('DOMContentLoaded', function() {
    // Pastikan elemen ada sebelum memanipulasi
    const angkatanSelect = document.getElementById('angkatan');
    const tahunMasukInput = document.getElementById('tahun_masuk');
    const tahunLulusSelect = document.getElementById('tahun_lulus');
    
    // Tambahkan pengecekan null
    if(!angkatanSelect || !tahunMasukInput || !tahunLulusSelect) {
        console.error('Elemen form tidak ditemukan!');
        return;
    }

    // Mendapatkan tahun sekarang
    const currentYear = new Date().getFullYear();
    
    // Menghitung angkatan pertama (1964) sampai sekarang
    const firstBatch = 1;
    const firstYear = 1964;
    const currentBatch = firstBatch + (currentYear - firstYear - 4);

    // Mengisi opsi angkatan
    for(let i = firstBatch; i <= currentBatch; i++) {
        let year = firstYear + (i - 1);
        
        // Skip tahun 1978
        if(year >= 1978) {
            year += 1;
        }
        
        const option = document.createElement('option');
        option.value = i;
        option.textContent = `Angkatan ${i} - ${year}`;
        option.dataset.batch = i;
        option.dataset.year = year;
        angkatanSelect.appendChild(option);
    }

    // Event listener untuk perubahan angkatan
    angkatanSelect.addEventListener('change', function() {
        const selectedOption = this.options[this.selectedIndex];
        if(selectedOption.value && tahunMasukInput) {
            const tahunMasuk = selectedOption.dataset.year;
            tahunMasukInput.value = tahunMasuk;
            updateTahunLulusOptions(parseInt(tahunMasuk));
        } else if(tahunMasukInput) {
            tahunMasukInput.value = '';
            tahunLulusSelect.innerHTML = '<option value="">Pilih Tahun Lulus</option>';
        }
    });

    // Function untuk update opsi tahun lulus
    function updateTahunLulusOptions(tahunMasuk) {
        tahunLulusSelect.innerHTML = '<option value="">Pilih Tahun Lulus</option>';
        
        const minLulus = tahunMasuk + 4;
        const maxLulus = tahunMasuk + 6;
        
        for(let tahun = minLulus; tahun <= maxLulus; tahun++) {
            const option = document.createElement('option');
            option.value = tahun;
            option.textContent = tahun;
            if(tahun === minLulus) {
                option.selected = true;
            }
            tahunLulusSelect.appendChild(option);
        }
    }

    // Handle nilai old() jika ada
    const oldAngkatan = "{{ old('angkatan') }}";
    if(oldAngkatan) {
        // Cari option berdasarkan value bukan index
        const options = angkatanSelect.options;
        for(let i = 0; i < options.length; i++) {
            if(options[i].value === oldAngkatan) {
                angkatanSelect.selectedIndex = i;
                const selectedOption = options[i];
                tahunMasukInput.value = selectedOption.dataset.year;
                updateTahunLulusOptions(parseInt(selectedOption.dataset.year));
                break;
            }
        }
        
        // Handle old tahun lulus
        const oldTahunLulus = "{{ old('tahun_lulus') }}";
        if(oldTahunLulus) {
            tahunLulusSelect.value = oldTahunLulus;
        }
    }
});

// Di dalam event listener submit form
requiredInputs.forEach(input => {
    // Validasi semua required kecuali angkatan
    if(input.id === 'angkatan') return;
    
    // ... kode validasi yang ada ...
}); 