<!DOCTYPE html>
<html lang="en">
    <style>
/* Background halaman */
body {
    background-color: #fac0fa;
}
/* Judul */
h1 {
    color: #f154e4;
}
/* Header tabel */
.table-dark {
    background-color: #fdc7f0 !important;
}
/* Warna baris tabel */
.table-striped tbody tr:nth-of-type(odd) {
    background-color: #df8ff3;
}
/* Hover tabel */
.table-hover tbody tr:hover {
    background-color: #fab7fa;
}
/* Tombol */
.btn-primary {
    background-color: #f67bfa;
    border-color: #d697e9;
}
.btn-primary:hover {
    background-color: #f158f7;
    border-color: #fd97d3;
}
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Data Tabel</h1>
        
        <table class="table table-striped table-hover table-bordered">
            <thead class="table- success">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Kota</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Ilham Nur</td>
                    <td>ilham@email.com</td>
                    <td>Jakarta</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Siti Rahanddika</td>
                    <td>siti@email.com</td>
                    <td>Bandung</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Rania Zania</td>
                    <td>rania@email.com</td>
                    <td>Surabaya</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Rina Wijaya</td>
                    <td>rina@email.com</td>
                    <td>Semarang</td>
                </tr>
            </tbody>
        </table>
        <a href="form.php" class="btn btn-primary mt-3">Input Form</a>
        <a href="belajar.php" class="btn btn-primary mt-3">Kembali ke Halaman Belajar</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
