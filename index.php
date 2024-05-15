<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="public/style.css">
</head>
<body>
    <div class="container mt-4">
        <h3 class="text-center">Rental Motor</h3>
        <form action="" method="post" class="form-control">
        <div class="row">
            <div class="col-sm-4">
                <label for="nama" class="form-label">Nama Pelanggan:</label>
            </div>
            <div class="col-sm-8">
                <input class="form-control" type="text" name="nama" id="nama">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-sm-4">
                <label for="waktu" class="form-label">Lama Waktu Rental (Per Hari):</label>
            </div>
            <div class="col-sm-8">
                <input class="form-control" type="text" name="waktu" id="waktu">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-sm-4">
                <label for="motor" class="form-label">Jenis Motor</label>
            </div>
            <div class="col-sm-8">
                <select name="motor" id="motor" class="form-select">
                    <option value="bebek">Bebek</option>
                    <option value="beat">Beat</option>
                    <option value="sport">Sport</option>
                    <option value="listrik">Listrik</option>
                </select>
                <button type="submit" class="btn btn-success mt-2"><i class="bi bi-plus-circle"></i> Submit</button>
            </div>
        </div>
        </form>
        <!-- Ouput -->
        <div class="output form-control text-center mt-2 p-4">
        <?php
        include ('proses.php');
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST["nama"];
            $waktu = $_POST["waktu"];
            $motor = $_POST["motor"];

            $rental = new RentalMotor($nama, $waktu, $motor);
            $rental->prosesForm();
        }
        ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
