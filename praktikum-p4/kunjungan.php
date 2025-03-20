<?php
require_once('bukutamu.php');
session_start();

date_default_timezone_set('Asia/Jakarta');

if (!isset($_SESSION['bukutamu'])) {
    $_SESSION['bukutamu'] = [];
}

if (isset($_POST['submit'])) {
    $bukutamu = new Bukutamu();
    $bukutamu->timestamp = date("Y-m-d H:i:s");
    $bukutamu->fullname = $_POST['nama_kita'];
    $bukutamu->email = $_POST['email'];
    $bukutamu->keterangan = $_POST['keperluan'];

    $_SESSION['bukutamu'][] = $bukutamu;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
</head>

<body>
    <center>
        <h2>Daftar Buku Tamu</h2>
        <table border="1" cellpadding="5" cellspacing="3">
            <thead>
                <tr>
                    <th>Waktu</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Keperluan</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($_SESSION['bukutamu'])): ?>
                    <?php foreach ($_SESSION['bukutamu'] as $entry): ?>
                        <tr>
                            <td><?= htmlspecialchars($entry->timestamp); ?></td>
                            <td><?= htmlspecialchars($entry->fullname); ?></td>
                            <td><?= htmlspecialchars($entry->email); ?></td>
                            <td><?= htmlspecialchars($entry->keterangan); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" style="text-align: center;">Belum ada data tamu</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </center>
</body>

</html>
