<?php
if (
    isset($_POST["name"], $_POST["nim"], $_POST["Rombel"], $_POST["matkul"], $_POST["uts"], $_POST["Uas"], $_POST["praktikum"]) &&
    !empty($_POST["name"]) && !empty($_POST["nim"]) && !empty($_POST["Rombel"]) && !empty($_POST["matkul"]) &&
    is_numeric($_POST["uts"]) && is_numeric($_POST["Uas"]) && is_numeric($_POST["praktikum"])
) {
    $nilai_uts = $_POST["uts"] * (30/100);
    $nilai_uas = $_POST["Uas"] * (30/100);
    $nilai_tugas = $_POST["praktikum"] * (35/100);
    $nilai_akhir = $nilai_uts + $nilai_uas + $nilai_tugas;

    if ($nilai_akhir <= 35) {
        $grade = "E";
    } elseif ($nilai_akhir <= 55) {
        $grade = "D";
    } elseif ($nilai_akhir <= 69) {
        $grade = "C";
    } elseif ($nilai_akhir <= 84) {
        $grade = "B";
    } elseif ($nilai_akhir <= 100) {
        $grade = "A";
    } else {
        $grade = "Undefined";
    }

    switch ($grade) {
        case "A":
            $keterangan = "Sangat bagus, nilai mu bagus";
            break;
        case "B":
            $keterangan = "Sudah bagus, pertahankan";
            break;
        case "C":
            $keterangan = "Usahakan setelah ini dapat B";
            break;
        case "D":
            $keterangan = "Tolong kurangi mainnya";
            break;
        case "E":
            $keterangan = "Sudah tidak ada harapan";
            break;
        default:
            $keterangan = "Data tidak valid";
            break;
    }
} else {
    die("<h3 style='color:red; text-align:center;'>Data tidak lengkap atau tidak valid!</h3>");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card p-4">
            <div class="d-flex justify-content-between align-items-start">
                <h2>Data Mahasiswa</h2>
                <div class="text-end">
                    <h4>Predikat: <span class="badge bg-primary"> <?= $grade ?> </span></h4>
                    <p><strong>Keterangan:</strong> <?= $keterangan ?></p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <p><strong>Nama:</strong> <?= htmlspecialchars($_POST["name"]) ?></p>
                    <p><strong>NIM:</strong> <?= htmlspecialchars($_POST["nim"]) ?></p>
                    <p><strong>Rombel:</strong> <?= htmlspecialchars($_POST["Rombel"]) ?></p>
                </div>
            </div>
            <table class="table table-bordered text-center">
                <thead class="table-primary">
                    <tr>
                        <th>Mata Kuliah</th>
                        <th>Nilai UTS</th>
                        <th>Nilai UAS</th>
                        <th>Nilai Praktikum</th>
                        <th>Nilai Akhir</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= htmlspecialchars($_POST["matkul"]) ?></td>
                        <td><?= htmlspecialchars($_POST["uts"]) ?></td>
                        <td><?= htmlspecialchars($_POST["Uas"]) ?></td>
                        <td><?= htmlspecialchars($_POST["praktikum"]) ?></td>
                        <td><?= number_format($nilai_akhir, 2) ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

