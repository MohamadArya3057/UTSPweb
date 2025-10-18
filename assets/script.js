document.addEventListener('DOMContentLoaded', function() {

    const content = document.querySelector('.content');
    if (content) {
        setTimeout(() => {
            content.classList.add('visible');
        }, 100); 
    }

    const registrationForm = document.querySelector('.registration-form');
    if (registrationForm) {
        registrationForm.addEventListener('submit', function(event) {
            event.preventDefault();

            const nama = document.getElementById('nama').value.trim();
            const email = document.getElementById('email').value.trim();
            const telepon = document.getElementById('telepon').value.trim();

            if (nama === '' || email === '' || telepon === '') {
                alert('Semua kolom wajib diisi!');
                return;
            }

            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                alert('Format email tidak valid!');
                return; 
            }

            registrationForm.submit();
        });
    }
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('status') === 'success') {
        alert('Pendaftaran berhasil ditambahkan!');
        window.history.replaceState({}, document.title, window.location.pathname + '?page=list');
    }

});