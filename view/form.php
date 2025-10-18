<h2>Formulir Pendaftaran</h2>
<p>Silakan isi data pendaftar di bawah ini.</p>

<form action="index.php" method="POST" class="registration-form">
    <div class="form-group">
        <label for="nama">Nama Lengkap</label>
        <input type="text" id="nama" name="nama" required>
    </div>
    <div class="form-group">
        <label for="email">Alamat Email</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="telepon">Nomor Telepon</label>
        <input type="tel" id="telepon" name="telepon" required>
    </div>
    <div class="form-group">
        <button type="submit">Daftarkan</button>
    </div>
</form>