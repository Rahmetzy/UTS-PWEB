<?php
include('dbconfig.php');

if (isset($_GET['matkul'])) {
    $matkul = $_GET['matkul'];

    // Use prepared statements to avoid SQL injection
    $sql = "DELETE FROM matkuldb WHERE matkul = ?";
    $stmt = mysqli_prepare($connect, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $matkul);

        if (mysqli_stmt_execute($stmt)) {
            // Data deleted successfully
            header('location: ../list.php'); // Redirect to the view page
        } else {
            echo "Delete operation failed: " . mysqli_error($connect);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error in preparing the SQL statement: " . mysqli_error($connect);
    }
} else {
    die("Access Denied");
}
?>