<?php

session_start();
require 'dbcon.php';

// Delete
if(isset($_POST['delete_dosen']))
{
    $dosen_id = mysqli_real_escape_string($con, $_POST['delete_dosen']);

    $query = "DELETE FROM dosen WHERE id='$dosen_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Data Dosen berhasil Dihapus";
        header("Location: dosen.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data Dosen Gagal Dihapus";
        header("Location: dosen.php");
        exit(0);
    }
}

// Update
if(isset($_POST['update_dosen']))
{
    $dosen_id = mysqli_real_escape_string($con, $_POST['dosen_id']);

    $nidn = mysqli_real_escape_string($con, $_POST['nidn']);
    $nama = mysqli_real_escape_string($con, $_POST['nama']);
    $alamat = mysqli_real_escape_string($con, $_POST['alamat']);
    $jabatan = mysqli_real_escape_string($con, $_POST['jabatan']);

    $query = "UPDATE dosen SET nidn='$nidn', nama='$nama', alamat='$alamat', jabatan='$jabatan' WHERE id='$dosen_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Data Dosen berhasil Diupdate";
        header("Location: dosen.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data Dosen Gagal Diupdate";
        header("Location: dosen.php");
        exit(0);
    }

}


// Create
if(isset($_POST['simpan_data']))
{
    $nidn = mysqli_real_escape_string($con, $_POST['nidn']);
    $nama = mysqli_real_escape_string($con, $_POST['nama']);
    $alamat = mysqli_real_escape_string($con, $_POST['alamat']);
    $jabatan = mysqli_real_escape_string($con, $_POST['jabatan']);

    $query = "INSERT INTO dosen (nidn,nama,alamat,jabatan) VALUES ('$nidn','$nama','$alamat','$jabatan')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Data Dosen berhasil Ditambahkan";
        header("Location: tambah_dosen.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data Dosen Gagal Ditambahkan";
        header("Location: tambah_dosen.php");
        exit(0);
    }
}
