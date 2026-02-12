<!DOCTYPE html>
<html lang="en">
    <style>
/* Background halaman */
body {
    background-color: #fab4d5;
}
/* Header card (mengganti bg-primary Bootstrap) */
.bg-primary {
    background-color: #f896d7 !important;
}
/* Tombol utama */
.btn-primary {
    background-color: #ee63d7;
    border-color: #f150cf;
}
.btn-primary:hover {
    background-color: #d844d1;
    border-color: #e59bcf;
}
/* Tombol reset */
.btn-secondary {
    background-color: #f3a0d0;
}
/* Input form saat aktif */
.form-control:focus {
    border-color: #f56fcd;
    box-shadow: 0 0 5px rgba(241, 27, 152, 0.5);
}
/* Tombol kembali */
.btn-outline-primary {
    color: #f1b5cc;
    border-color: #f8b9e5;
}
.btn-outline-primary:hover {
    background-color: #f077c1;
    color: white;
}
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Pekerja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title mb-0">Form Input Data Pekerja</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Pekerja</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama Pekerja" required>
                            </div>

                            <div class="mb-3">
                                <label for="nim" class="form-label">NIK Pekerja</label>
                                <input type="text" class="form-control" id="nik name="nim" placeholder="Masukkan nomor induk keterangan" required>
                            </div>

                            <div class="mb-3">
                                <label for="Divisi" class="form-label">Divisi</label>
                                <select class="form-select" id="divisi" name="divisi" required>
                                    <option value="">-- Pilih departermen --</option>
                                    <option value="HRD">HRD</option>
                                    <option value="Keuangan">Keuangan</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Customer Service">Customer Service</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Masukkan alamat lengkap" required></textarea>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Simpan Data</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="mt-3">
                    <a href="belajar.php" class="btn btn-outline-primary">Kembali ke Halaman Belajar</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
// Cek apakah form sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama   = $_POST['nama'];
    $nim    = $_POST['nik'];
    $prodi  = $_POST['divisi'];
    $alamat = $_POST['alamat'];

    echo "<h3>Data Pekerja</h3>";
    echo "Nama : $nama <br>";
    echo "NIK: $nik <br>";
    echo "Divisi : $divisi <br>";
    echo "Alamat : $alamat <br><hr>";
