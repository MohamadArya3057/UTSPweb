<h2>Daftar Peserta Terdaftar</h2>

<?php if (empty($pendaftar)): ?>
    <p>Belum ada peserta yang mendaftar.</p>
<?php else: ?>
    <table class="pendaftar-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>Nomor Telepon</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pendaftar as $index => $item): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= htmlspecialchars($item['nama']) ?></td>
                    <td><?= htmlspecialchars($item['email']) ?></td>
                    <td><?= htmlspecialchars($item['telepon']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>