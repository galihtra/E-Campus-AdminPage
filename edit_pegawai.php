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

    <title>Pegawai Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Pegawai Edit 
                            <a href="pegawai.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $pegawai_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM pegawai WHERE id='$pegawai_id ' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $pegawai = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code_pegawai.php" method="POST">
                                    <input type="hidden" name="pegawai_id" value="<?= $pegawai['id']; ?>">

                                    <div class="mb-3">
                                        <label>Nik</label>
                                        <input type="text" name="nik" value="<?=$pegawai['nik'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Nama</label>
                                        <input type="text" name="nama" value="<?=$pegawai['nama'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Bagian</label>
                                        <input type="text" name="bagian" value="<?=$pegawai['bagian'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_pegawai" class="btn btn-primary">
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