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
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE username='$username'";
    $result = mysqli_query($conn, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $row['password'])) {
            $query = "DELETE FROM user WHERE username='$username'";
            if (mysqli_query($conn, $query)) {
                echo '<script type="text/javascript">
                alert("Akun berhasil dihapus.");
                window.location = "register.php";
                </script>';
                exit();
            } else {
                $message = "";
                echo '<script type="text/javascript">
                alert("Tidak terdapat akun.");
                window.location = "delete.php";
                </script>';
            }
        } else {
            $message = "";
            echo '<script type="text/javascript">
            alert("Hapus akun gagal. Nama pengguna atau kata sandi salah.");
            window.location = "delete.php";
            </script>';
        }
    } else {
        $message = "";
        echo '<script type="text/javascript">
        alert("Tidak terdapat akun.");
        window.location = "delete.php";
        </script>';
    }
}

mysqli_close($conn);
?>
