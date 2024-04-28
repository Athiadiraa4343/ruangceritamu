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
    if (isset($_POST["rating"]) && isset($_POST["reasons"])) {
        $rating = mysqli_real_escape_string($conn, $_POST["rating"]);
        $reasons = mysqli_real_escape_string($conn, $_POST["reasons"]);

        if (empty($rating) || empty($reasons)) {
            $message = "";
            echo '<script type="text/javascript">
            alert("Harap isi kedua kolom rating dan reasons.");
            window.location = "feedback.php";
            </script>';
        } else {

            $query = "INSERT INTO feedback (rating, reasons) VALUES ('$rating', '$reasons')";

            if ($conn->query($query) === TRUE) {
                echo '<script type="text/javascript">
            alert("Terima kasih telah memberi feedback ^^");
            window.location = "home.html";
            </script>';
            exit();
            } else {
                echo "Error: " . $query . "<br>" . $conn->error;
            }
        }
    } else {
        $message = "";
        echo '<script type="text/javascript">
        alert("Harap isi kedua kolom rating dan reasons.");
        window.location = "feedback.php";
        </script>';
    }
}

mysqli_close($conn);
?>
