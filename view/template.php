<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran EXC</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

    <div class="container">
        <aside class="sidebar">
            <div class="logo">EXC</div>
            <nav>
                <ul>
                    <li class="<?= ($page === 'form') ? 'active' : '' ?>">
                        <a href="index.php?page=form">Form Pendaftaran</a>
                    </li>
                    <li class="<?= ($page === 'list') ? 'active' : '' ?>">
                        <a href="index.php?page=list">Daftar Peserta</a>
                    </li>
                </ul>
            </nav>
        </aside>

        <main class="content">
            <?php
            if ($page === 'form') {
                include 'form.php';
            } elseif ($page === 'list') {
                $pendaftar = $dataView['pendaftar'];
                include 'list.php';
            }
            ?>
        </main>
    </div>

    <script src="assets/script.js"></script> </body>
</html>