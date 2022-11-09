<?php

session_start();
require 'dbcon.php';

// Delete
if(isset($_POST['delete_jadwal']))
{
    $jadwal_id = mysqli_real_escape_string($con, $_POST['delete_jadwal']);

    $query = "DELETE FROM jadwal WHERE id='$jadwal_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Data Jadwal berhasil Dihapus";
        header("Location: jadwal.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data Jadwal Gagal Dihapus";
        header("Location: jadwal.php");
        exit(0);
    }
}

// Update
if(isset($_POST['update_jadwal']))
{
    $jadwal_id = mysqli_real_escape_string($con, $_POST['jadwal_id']);

    $mataKuliah = mysqli_real_escape_string($con, $_POST['mataKuliah']);
    $ruang = mysqli_real_escape_string($con, $_POST['ruang']);
    $hari = mysqli_real_escape_string($con, $_POST['hari']);
    $jam = mysqli_real_escape_string($con, $_POST['jam']);

    $query = "UPDATE jadwal SET mataKuliah='$mataKuliah', ruang='$ruang', hari='$hari', jam='$jam' WHERE id='$jadwal_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Data Jadwal berhasil Diupdate";
        header("Location: jadwal.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data Jadwal Gagal Diupdate";
        header("Location: jadwal.php");
        exit(0);
    }

}


// Create
if(isset($_POST['simpan_data']))
{
    $jadwal_id = mysqli_real_escape_string($con, $_POST['jadwal_id']);

    $mataKuliah = mysqli_real_escape_string($con, $_POST['mataKuliah']);
    $ruang = mysqli_real_escape_string($con, $_POST['ruang']);
    $hari = mysqli_real_escape_string($con, $_POST['hari']);
    $jam = mysqli_real_escape_string($con, $_POST['jam']);

    $query = "INSERT INTO jadwal (mataKuliah,ruang,hari,jam) VALUES ('$mataKuliah','$ruang','$hari','$jam')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Data Jadwal berhasil Ditambahkan";
        header("Location: tambah_jadwal.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data Jadwal Gagal Ditambahkan";
        header("Location: tambah_jadwal.php");
        exit(0);
    }
}
