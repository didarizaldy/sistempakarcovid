<?php

function jawab($id)
{
    if ($id == '1') {
        echo "<a href='pertanyaan.php?id=2' class='btn btn-success' style='width: 4rem;'>Iya</a>";
        echo "<div class='d-inline py-1'> </div>";
        echo "<a href='kesimpulan.php?id=2' class='btn btn-danger' style='width: 4rem;'>Tidak</a>";
    }
    if ($id == '2') {
        echo "<a href='pertanyaan.php?id=3' class='btn btn-success' style='width: 4rem;'>Iya</a>";
        echo "<div class='d-inline py-1'> </div>";
        echo "<a href='kesimpulan.php?id=2' class='btn btn-danger' style='width: 4rem;'>Tidak</a>";
    }
    if ($id == '3') {
        echo "<a href='pertanyaan.php?id=4' class='btn btn-success' style='width: 4rem;'>Iya</a>";
        echo "<div class='d-inline py-1'> </div>";
        echo "<a href='kesimpulan.php?id=2' class='btn btn-danger' style='width: 4rem;'>Tidak</a>";
    }
    if ($id == '4') {
        echo "<a href='pertanyaan.php?id=5' class='btn btn-success' style='width: 4rem;'>Iya</a>";
        echo "<div class='d-inline py-1'> </div>";
        echo "<a href='kesimpulan.php?id=2' class='btn btn-danger' style='width: 4rem;'>Tidak</a>";
    }
    if ($id == '5') {
        echo "<a href='pertanyaan.php?id=6' class='btn btn-success' style='width: 4rem;'>Iya</a>";
        echo "<div class='d-inline py-1'> </div>";
        echo "<a href='kesimpulan.php?id=2' class='btn btn-danger' style='width: 4rem;'>Tidak</a>";
    }
    if ($id == '6') {
        echo "<a href='pertanyaan.php?id=7' class='btn btn-success' style='width: 4rem;'>Iya</a>";
        echo "<div class='d-inline py-1'> </div>";
        echo "<a href='kesimpulan.php?id=2' class='btn btn-danger' style='width: 4rem;'>Tidak</a>";
    }
    if ($id == '7') {
        echo "<a href='pertanyaan.php?id=8' class='btn btn-success' style='width: 4rem;'>Iya</a>";
        echo "<div class='d-inline py-1'> </div>";
        echo "<a href='kesimpulan.php?id=2' class='btn btn-danger' style='width: 4rem;'>Tidak</a>";
    }
    if ($id == '8') {
        echo "<a href='pertanyaan.php?id=9' class='btn btn-success' style='width: 4rem;'>Iya</a>";
        echo "<div class='d-inline py-1'> </div>";
        echo "<a href='kesimpulan.php?id=2' class='btn btn-danger' style='width: 4rem;'>Tidak</a>";
    }
    if ($id == '9') {
        echo "<a href='pertanyaan.php?id=10' class='btn btn-success' style='width: 4rem;'>Iya</a>";
        echo "<div class='d-inline py-1'> </div>";
        echo "<a href='kesimpulan.php?id=2' class='btn btn-danger' style='width: 4rem;'>Tidak</a>";
    }
    if ($id == '10') {
        echo "<a href='kesimpulan.php?id=1' class='btn btn-success' style='width: 4rem;'>Iya</a>";
        echo "<div class='d-inline py-1'> </div>";
        echo "<a href='kesimpulan.php?id=2' class='btn btn-danger' style='width: 4rem;'>Tidak</a>";
    }
}

function kesimpulan($hasil)
{
    include 'conn.php';
    $sql = "SELECT * from tb_kesimpulan WHERE hasil='$hasil'";
    $data = mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_assoc($data)) {
        echo '<p>-' . $row['solusi'] . '</p>';
    }
}

function solusi($id)
{
    if ($id == '1') {
        $hasil = "Positive";
        kesimpulan($hasil);
    }
    if ($id == '2') {
        $hasil = "Negative";
        kesimpulan($hasil);
    }
}
