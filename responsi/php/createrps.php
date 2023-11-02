<?php
include('dbconfig.php');

if (isset($_POST['daftar'])) {
    // Sanitize user inputs to prevent SQL injection
    $matkul = mysqli_real_escape_string($connect, $_POST['matkul']);
    $deskripsi = mysqli_real_escape_string($connect, $_POST['deskripsi']);
    $materi1 = mysqli_real_escape_string($connect, $_POST['materi1']);
    $materi2 = mysqli_real_escape_string($connect, $_POST['materi2']);
    $materi3 = mysqli_real_escape_string($connect, $_POST['materi3']);
    $materi4 = mysqli_real_escape_string($connect, $_POST['materi4']);
    $materi5 = mysqli_real_escape_string($connect, $_POST['materi5']);
    $materi6 = mysqli_real_escape_string($connect, $_POST['materi6']);
    $materi7 = mysqli_real_escape_string($connect, $_POST['materi7']);
    $materi8 = mysqli_real_escape_string($connect, $_POST['materi8']);
    $materi9 = mysqli_real_escape_string($connect, $_POST['materi9']);
    $materi10 = mysqli_real_escape_string($connect, $_POST['materi10']);
    $materi11 = mysqli_real_escape_string($connect, $_POST['materi11']);
    $materi12 = mysqli_real_escape_string($connect, $_POST['materi12']);
    $materi13 = mysqli_real_escape_string($connect, $_POST['materi13']);
    $materi14 = mysqli_real_escape_string($connect, $_POST['materi14']);

    if (empty($matkul) || empty($deskripsi)) {
        header('location:../create.php?status=kosong');
        exit;
    }

    // Check if a record with the same 'matkul' already exists
    $checkSql = "SELECT COUNT(*) FROM matkuldb WHERE matkul = '$matkul'";
    $checkResult = mysqli_query($connect, $checkSql);
    $count = mysqli_fetch_array($checkResult);

    if ($count[0] == 0) {
        // 'matkul' does not exist, insert the record
        $sql = "INSERT INTO matkuldb (matkul, deskripsi, materi1, materi2, materi3, materi4, materi5, materi6, materi7, materi8, materi9, materi10, materi11, materi12, materi13, materi14) 
        VALUES ('$matkul','$deskripsi', '$materi1', '$materi2', '$materi3', '$materi4','$materi5', '$materi6', '$materi7', '$materi8', '$materi9', '$materi10', '$materi11', '$materi12', '$materi13', '$materi14')";
        $query = mysqli_query($connect, $sql);

        if ($query) {
            header('location: ../create.php?status=sukses');
            exit; // Exit to prevent further execution
        } else {
            header('location: ../create.php?status=gagal');
            exit; // Exit to prevent further execution
        }
    } else {
        header('location: ../create.php?status=sudahdipakai');
        exit; // Exit to prevent further execution
    }
} else {
    die("Access Denied");
}
?>
