<!DOCTYPE html>
<html>
<head>
    <title>LIST</title>

    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Optional: Add Bootstrap JavaScript and jQuery for interactive components -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container">
            <ul class="navbar-nav">
            <li class="nav-item">
                        <img src="putra.jpg" alt="Profile Picture" class="profile-picture">
                    </li>
                    <li class="nav-item"><a class="nav-link text-white text-2xl font-bold" href="dashboard.php"><strong>22.01.4833</strong></a></li>
                    <li class="nav-item"><a class="nav-link text-white text-2xl font-bold" href="dashboard.php">Rahmat Dwi Saputra</a></li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link text-white text-2xl font-bold" href="create.php">Add</a></li>
                <li class="nav-item"><a class="nav-link text-white text-2xl font-bold" href="list.php">List</a></li>
                <li class="nav-item"><a class="nav-link text-white text-2xl font-bold" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>
</header>

<main>
    <h1>LIST</h1>
    <div class="card container-fluid p-2">

    <h5 class="px-2 pt-2 pb-2 fw-bold container">LIST DATA </h5>
    <table class="table container">
        <thead class="table">
            <tr>
                <th>No</th>
                <th>Matkul</th>
                <th>deskripsi</th>
                <th>Materi 1</th>
                <th>Materi 2</th>
                <th>Materi 3</th>
                <th>Materi 4</th>
                <th>Materi 5</th>
                <th>Materi 6</th>
                <th>Materi 7</th>
                <th>Materi 8</th>
                <th>Materi 9</th>
                <th>Materi 10</th>
                <th>Materi 11</th>
                <th>Materi 12</th>
                <th>Materi 13</th>
                <th>Materi 14</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('php/dbconfig.php');

            // Fetch data from the database
            $sql = "SELECT * FROM matkuldb";
            $result = mysqli_query($connect, $sql);
            $nomor = 1;

            if (!$result) {
                die("Query failed: " . mysqli_error($connect));
            }

            while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $nomor; ?></td>
                    <td><?php echo $row['matkul']; ?></td>
                    <td><?php echo $row['deskripsi']; ?></td>
                    <td><?php echo $row['materi1']; ?></td>
                    <td><?php echo $row['materi2']; ?></td>
                    <td><?php echo $row['materi3']; ?></td>
                    <td><?php echo $row['materi4']; ?></td>
                    <td><?php echo $row['materi5']; ?></td>
                    <td><?php echo $row['materi6']; ?></td>
                    <td><?php echo $row['materi7']; ?></td>
                    <td><?php echo $row['materi8']; ?></td>
                    <td><?php echo $row['materi9']; ?></td>
                    <td><?php echo $row['materi10']; ?></td>
                    <td><?php echo $row['materi11']; ?></td>
                    <td><?php echo $row['materi12']; ?></td>
                    <td><?php echo $row['materi13']; ?></td>
                    <td><?php echo $row['materi14']; ?></td>
                    <?php
                    echo "<td>";
                    echo "<a href='edit.php?matkul=" . $row['matkul'] . "'><button class='btn btn-primary'>Edit</button></a>";

                    echo "<a href='php/delform.php?matkul=" . $row['matkul'] . "'><button class='btn btn-danger'>Delete</button></a>";

                    echo "</td>";
                    ?>
                </tr>
            <?php
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>
</main>

</body>
</html>