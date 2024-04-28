<?php
$sname = "localhost";
$uname = "rc123@unm.com";
$password = "ptika22";
$db_name = "ruangcerita";
$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (mysqli_connect_errno()) {
    echo "Gagal terhubung ke MySQL: " . mysqli_connect_error();
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $keluhan = mysqli_real_escape_string($conn, $_POST['keluhan']);

    $query = "INSERT INTO riwayat_konsul (username, keluhan) VALUES ('$username', '$keluhan')";

    if (mysqli_query($conn, $query)) {
        echo '<script type="text/javascript">
        alert("Konsultasi berhasil disimpan.");
        window.location = "feedback1.php";
        </script>';
        exit();
    } else {
        echo '<script type="text/javascript">
        alert("Gagal menyimpan konsultasi.");
        window.location = "konsul.php";
        </script>';
    }
}

mysqli_close($conn);
?>
