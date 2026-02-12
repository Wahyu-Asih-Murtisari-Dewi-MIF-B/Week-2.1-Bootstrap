<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Absensi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-info text-white text-center">
            <h3>Form Absensi</h3>
        </div>
        <div class="card-body">

            <form action="table.php" method="POST">

                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>NIM</label>
                    <input type="text" name="nim" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Angkatan</label><br>
                    <input type="radio" name="angkatan" value="2025" required> 2025
                    <input type="radio" name="angkatan" value="2026"> 2026
                </div>

                <div class="form-group">
                    <label>Status Kehadiran</label><br>
                    <input type="radio" name="absen" value="Hadir" required> Hadir
                    <input type="radio" name="absen" value="Izin"> Izin
                    <input type="radio" name="absen" value="Sakit"> Sakit
                </div>

                <button type="submit" class="btn btn-primary">Kirim</button>

            </form>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

</body>
</html>
