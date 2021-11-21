<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="./assets/img/logo.png" sizes="96x96">
    <link rel="icon" type="image/png" href="./assets/img/logo.png" sizes="32x32">
    <link rel="icon" type="image/png" href="./assets/img/logo.png" sizes="16x16">

    <title>Sistem Pakar | Cek Gejala Covid</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light rounded" aria-label="Eleventh navbar example">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    Dida Rizaldy
                </a>

                <!-- hamburger -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- navbar -->
                <div class="collapse navbar-collapse" id="navbarsExample09">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Cek Gejala</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="https://www.google.com/maps/search/rumah+sakit+rujukan+covid+terdekat">Daftar Rumah Sakit Terdekat</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-body text-center">
                <h5 class="card-header">Hasil Diagnosis</h5>
                <p class="card-text">

                <form action="kesimpulan.php" method="post" enctype="multipart/form-data" role="form">
                    <?php
                    include('conn.php');
                    // $id = '1';
                    session_start();
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                    }
                    ?>
                    <hr>

                    <p>Hasil yang didapatkan bahwa anda :</p>

                    <?php
                    include "function.php";
                    solusi($id);
                    ?>

                    <!-- <hr> -->
                    <?php
                    $sql = "SELECT * from tb_hasil WHERE id_hasil='$id'";
                    $data = mysqli_query($connect, $sql);
                    $row = mysqli_fetch_assoc($data);
                    echo "<strong>" . $row['fakta'] . "</strong>"
                    ?>
                    <br>
                    <br>
                    <?php
                    $sql = "SELECT * from tb_kesimpulan WHERE id_kesimpulan='$id'";
                    $data = mysqli_query($connect, $sql);
                    $row = mysqli_fetch_assoc($data);

                    echo "<h6>" . $row['solusi'] . "</h6>"
                    ?>
                </form>
                <br>
                <div class="text-center">
                    <a href="index.php" class="btn btn-outline-dark">Akhiri</a>
                </div>
            </div>
            </p>
        </div>
    </div>



    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>