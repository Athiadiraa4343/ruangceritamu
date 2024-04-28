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

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $usia = $_POST['usia'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $telp = $_POST['telp'];
    $raw_password = $_POST['password'];

    // Memeriksa apakah ada biodata yang tidak terisi
    if (empty($username) || empty($usia) || empty($jenis_kelamin) || empty($telp) || empty($raw_password)) {
        echo '<script type="text/javascript">
        alert("Tolong isi biodata dengan lengkap");
        window.location = "register.php";
        </script>';
        exit();
    }

    $hashed_password = password_hash($raw_password, PASSWORD_DEFAULT);

    $query = "INSERT INTO user (username, usia, jenis_kelamin, telp, password) VALUES ('$username', '$usia', '$jenis_kelamin', '$telp', '$hashed_password')";

    if (mysqli_query($conn, $query)) {
        echo '<script type="text/javascript">
        alert("Pendaftaran berhasil. Silakan login dengan akun Anda.");
        window.location = "login.php";
        </script>';
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
