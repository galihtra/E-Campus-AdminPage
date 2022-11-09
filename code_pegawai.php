<?php

session_start();
require 'dbcon.php';

// Delete
if(isset($_POST['delete_pegawai']))
{
    $pegawai_id = mysqli_real_escape_string($con, $_POST['delete_pegawai']);

    $query = "DELETE FROM pegawai WHERE id='$pegawai_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Data Pegawai berhasil Dihapus";
        header("Location: pegawai.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data Pegawai Gagal Dihapus";
        header("Location: pegawai.php");
        exit(0);
    }
}

// Update
if(isset($_POST['update_pegawai']))
{
    $pegawai_id = mysqli_real_escape_string($con, $_POST['pegawai_id']);

    $nik = mysqli_real_escape_string($con, $_POST['nik']);
    $nama = mysqli_real_escape_string($con, $_POST['nama']);
    $bagian = mysqli_real_escape_string($con, $_POST['bagian']);

    $query = "UPDATE pegawai SET nik='$nik', nama='$nama', bagian='$bagian' WHERE id='$pegawai_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Data Pegawai berhasil Diupdate";
        header("Location: pegawai.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data Pegawai Gagal Diupdate";
        header("Location: pegawai.php");
        exit(0);
    }

}


// Create
if(isset($_POST['simpan_data']))
{
    $nik = mysqli_real_escape_string($con, $_POST['nik']);
    $nama = mysqli_real_escape_string($con, $_POST['nama']);
    $bagian = mysqli_real_escape_string($con, $_POST['bagian']);

    $query = "INSERT INTO pegawai (nik,nama,bagian) VALUES ('$nik','$nama','$bagian')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Data Pegawai berhasil Ditambahkan";
        header("Location: tambah_pegawai.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data Pegawai Gagal Ditambahkan";
        header("Location: tambah_pegawai.php");
        exit(0);
    }
}
