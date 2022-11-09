<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Jadwal Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Jadwal Edit 
                            <a href="jadwal.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $jadwal_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM jadwal WHERE id='$jadwal_id ' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $jadwal = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code_jadwal.php" method="POST">
                                    <input type="hidden" name="jadwal_id" value="<?= $jadwal['id']; ?>">

                                    <div class="mb-3">
                                        <label>Mata Kuliah</label>
                                        <input type="text" name="mataKuliah" value="<?=$jadwal['mataKuliah'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Ruang</label>
                                        <input type="text" name="ruang" value="<?=$jadwal['ruang'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Hari</label>
                                        <input type="text" name="hari" value="<?=$jadwal['hari'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Jam</label>
                                        <input type="text" name="jam" value="<?=$jadwal['jam'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_jadwal" class="btn btn-primary">
                                            Update Data
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>