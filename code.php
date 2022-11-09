<?php

session_start();
require 'dbcon.php';

// Delete
if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM mahasiswa WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Data Mahasiswa berhasil Dihapus";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data Mahasiswa Gagal Dihapus";
        header("Location: index.php");
        exit(0);
    }
}

// Update
if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $nim = mysqli_real_escape_string($con, $_POST['nim']);
    $nama = mysqli_real_escape_string($con, $_POST['nama']);
    $alamat = mysqli_real_escape_string($con, $_POST['alamat']);
    $jurusan = mysqli_real_escape_string($con, $_POST['jurusan']);

    $query = "UPDATE mahasiswa SET nim='$nim', nama='$nama', alamat='$alamat', jurusan='$jurusan' WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Data Mahasiswa berhasil Diupdate";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data Mahasiswa Gagal Diupdate";
        header("Location: index.php");
        exit(0);
    }

}


// Create
if(isset($_POST['simpan_data']))
{
    $nim = mysqli_real_escape_string($con, $_POST['nim']);
    $nama = mysqli_real_escape_string($con, $_POST['nama']);
    $alamat = mysqli_real_escape_string($con, $_POST['alamat']);
    $jurusan = mysqli_real_escape_string($con, $_POST['jurusan']);

    $query = "INSERT INTO mahasiswa (nim,nama,alamat,jurusan) VALUES ('$nim','$nama','$alamat','$jurusan')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Data Mahasiswa berhasil Ditambahkan";
        header("Location: tambah_mhs.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data Mahasiswa Gagal Ditambahkan";
        header("Location: tambah_mhs.php");
        exit(0);
    }
}
