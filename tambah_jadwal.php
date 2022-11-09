<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Jadwal Create</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Penambahan Data Jadwal
                            <a href="jadwal.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code_jadwal.php" method="POST">

                            <div class="mb-3">
                                <label>Mata Kuliah</label>
                                <input type="text" name="mataKuliah" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Ruang</label>
                                <input type="text" name="ruang" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Hari</label>
                                <input type="text" name="hari" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Jam</label>
                                <input type="text" name="jam" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="simpan_data" class="btn btn-primary">Simpan Data</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>