<!DOCTYPE html>
<html>
<head>
    <title>CREATE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css">
    <!-- Tailwind CSS via CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">

    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Optional: Add Bootstrap JavaScript and jQuery for interactive components -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
    <style>
         /* Custom CSS for the sticky footer */
         html {
            height: 100%;
        }
        body {
            min-height: 100%;
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1;
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

<main> 
        <form action="php/createrps.php" method="POST">
            <h5 class="px-2 pt-2 fw-bold">Buat RPS Baru</h5>
            <div class="d-flex flex-row">
                <div class="form-group p-2">
                    <label for="matkul" class="form-label">Nama Matkul</label>
                    <input type="text" name="matkul" id="matkul" class="form-control mb-2" placeholder="Masukkan Nama Matkul">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" name="deskripsi" id="deskripsi" class="form-control mb-2" placeholder="Masukkan deskripsi">
                    <label for="materi1" class="form-label">Meteri 1</label>
                    <input type="text" name="materi1" id="materi1" class="form-control mb-2" placeholder="Masukkan nama materi">
                    <label for="materi2" class="form-label">Meteri 2</label>
                    <input type="text" name="materi2" id="materi2" class="form-control mb-2" placeholder="Masukkan nama materi">
                    <label for="materi3" class="form-label">Meteri 3</label>
                    <input type="text" name="materi3" id="materi3" class="form-control mb-2" placeholder="Masukkan nama materi">
                    <label for="materi4" class="form-label">Meteri 4</label>
                    <input type="text" name="materi4" id="materi4" class="form-control mb-2" placeholder="Masukkan nama materi">
                    <label for="materi5" class="form-label">Meteri 5</label>
                    <input type="text" name="materi5" id="materi5" class="form-control mb-2" placeholder="Masukkan nama materi">
                    <label for="materi6" class="form-label">Meteri 6</label>
                    <input type="text" name="materi6" id="materi6" class="form-control mb-2" placeholder="Masukkan nama materi">
                    <label for="materi7" class="form-label">Meteri 7</label>
                    <input type="text" name="materi7" id="materi7" class="form-control mb-2" placeholder="Masukkan nama materi">
                    <label for="materi8" class="form-label">Meteri 8</label>
                    <input type="text" name="materi8" id="materi8" class="form-control mb-2" placeholder="Masukkan nama materi">
                    <label for="materi9" class="form-label">Meteri 9</label>
                    <input type="text" name="materi9" id="materi9" class="form-control mb-2" placeholder="Masukkan nama materi">
                    <label for="materi10" class="form-label">Meteri 10</label>
                    <input type="text" name="materi10" id="materi10" class="form-control mb-2" placeholder="Masukkan nama materi">
                    <label for="materi11" class="form-label">Meteri 11</label>
                    <input type="text" name="materi11" id="materi11" class="form-control mb-2" placeholder="Masukkan nama materi">
                    <label for="materi12" class="form-label">Meteri 12</label>
                    <input type="text" name="materi12" id="materi12" class="form-control mb-2" placeholder="Masukkan nama materi">
                    <label for="materi13" class="form-label">Meteri 13</label>
                    <input type="text" name="materi13" id="materi13" class="form-control mb-2" placeholder="Masukkan nama materi">
                    <label for="materi14" class="form-label">Meteri 14</label>
                    <input type="text" name="materi14" id="materi14" class="form-control mb-2" placeholder="Masukkan nama materi">
                   
                </div>
            </div>
            <button name="daftar" type="submit" class="btn btn-primary">SUBMIT</i></button>
        </form>
</main>

</body>
</html>