<!DOCTYPE html>
<html>

<head>
    <title>MENGEDIT</title>
    <!-- Bootstrap CSS via CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Tailwind CSS via CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<style>
    .profile-picture {
        width: 50px;
        height: 50px;
        margin-right: 10px;
        border-radius: 50%;
    }
</style>
<body>

<header>
    <nav style="background-color: #3b82f6;">
        <div class="container mx-auto flex justify-between items-center p-4">
            <div class="flex items-center">
                <img src="putra.jpg" alt="Profile Picture" class="w-10 h-10 rounded-full mr-2">
                <h1 class="text-white text-2xl font-bold">Rahmat Dwi Saputra <strong>22.01.4833</strong></h1>
            </div>
            <ul class="flex space-x-4">
                <li><a href="create.php" class="text-white">Add</a></li>
                <li><a href="list.php" class="text-white">List</a></li>
                <li><a href="logout.php" class="text-white">Logout</a></li>
            </ul>
        </div>
    </nav>
</header>

    <main class="container mt-5">
        <h1 class="fs-1 text">EDIT DATA</h1>

        <?php
        include('php/dbconfig.php');

        if (isset($_GET['matkul'])) {
            $matkul = $_GET['matkul'];

            $sql = "SELECT * FROM matkuldb WHERE matkul = '$matkul'";
            $result = mysqli_query($connect, $sql);

            if ($result && $row = mysqli_fetch_assoc($result)) {
                $record_id = $row['matkul'];
            } else {
                echo "Record not found.";
            }
        }
        ?>

        <form action="php/edform.php" method="POST">
            <input type="hidden" name="matkul" value="<?php echo $record_id; ?>">
            <div class="mb-3">
                <label for="new_matkul" class="form-label">Matkul</label>
                <input type="text" name="new_matkul" class="form-control" value="<?php echo $record_id; ?>">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" value="<?php echo $row['deskripsi']; ?>">
            </div>
            <div class="mb-3">
                <label for="materi1" class="form-label">Materi pertemuan 1</label>
                <input type="text" name="materi1" class="form-control" value="<?php echo $row['materi1']; ?>">
            </div>
            <div class="mb-3">
                <label for="materi2" class="form-label">Materi pertemuan 2</label>
                <input type="text" name="materi2" class="form-control" value="<?php echo $row['materi2']; ?>">
            </div>
            <div class="mb-3">
                <label for="materi3" class="form-label">Materi pertemuan 3</label>
                <input type="text" name="materi3" class="form-control" value="<?php echo $row['materi3']; ?>">
            </div>
            <div class="mb-3">
                <label for="materi4" class="form-label">Materi pertemuan 4</label>
                <input type="text" name="materi4" class="form-control" value="<?php echo $row['materi4']; ?>">
            </div>
            <div class="mb-3">
                <label for="materi5" class="form-label">Materi pertemuan 5</label>
                <input type="text" name="materi5" class="form-control" value="<?php echo $row['materi5']; ?>">
            </div>
            <div class="mb-3">
                <label for="materi6" class="form-label">Materi pertemuan 6</label>
                <input type="text" name="materi6" class="form-control" value="<?php echo $row['materi6']; ?>">
            </div>
            <div class="mb-3">
                <label for="materi7" class="form-label">Materi pertemuan 7</label>
                <input type="text" name="materi7" class="form-control" value="<?php echo $row['materi7']; ?>">
            </div>
            <div class="mb-3">
                <label for="materi8" class="form-label">Materi pertemuan 8</label>
                <input type="text" name="materi8" class="form-control" value="<?php echo $row['materi8']; ?>">
            </div>
            <div class="mb-3">
                <label for="materi9" class="form-label">Materi pertemuan 9</label>
                <input type="text" name="materi9" class="form-control" value="<?php echo $row['materi9']; ?>">
            </div>
            <div class="mb-3">
                <label for="materi10" class="form-label">Materi pertemuan 10</label>
                <input type="text" name="materi10" class="form-control" value="<?php echo $row['materi10']; ?>">
            </div>
            <div class="mb-3">
                <label for="materi11" class="form-label">Materi pertemuan 11</label>
                <input type="text" name="materi11" class="form-control" value="<?php echo $row['materi11']; ?>">
            </div>
            <div class="mb-3">
                <label for="materi12" class="form-label">Materi pertemuan 12</label>
                <input type="text" name="materi12" class="form-control" value="<?php echo $row['materi12']; ?>">
            </div>
            <div class="mb-3">
                <label for="materi13" class="form-label">Materi pertemuan 13</label>
                <input type="text" name="materi13" class="form-control" value="<?php echo $row['materi13']; ?>">
            </div>
            <div class="mb-3">
                <label for="materi14" class="form-label">Materi pertemuan 14</label>
                <input type="text" name="materi14" class="form-control" value="<?php echo $row['materi14']; ?>">
            </div>
            <button name="update" type="submit" class="btn btn-primary">SUBMIT</i></button>
        </form>
    </main>

</body>

</html>
