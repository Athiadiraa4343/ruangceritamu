<!DOCTYPE html>
<?php
require('delete_proses.php');
?>

<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/navbar.css" />
  <link rel="stylesheet" href="css/login.css" />
  <title>LOGIN FORM</title>
</head>
<style>
  body {
    font-family:'poppins', sans-serif;
    background-position: 100%;
    background-color: rgb(178, 146, 231);
  }
  form {
    text-align: default;
    color: rgb(0, 0, 0);
  }

  table {
    margin: 0 auto;
  }

  td {
    padding: 5px;
  }

  input[type="text"],
  input[type="password"] {
    padding: 5px;
    margin-bottom: 10px;
  }

  input[type="submit"],
  input[type="reset"] {
    background-color: rgb(85, 55, 110);
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
  }

  input[type="reset"]:active {
    background-color: #756d7e;
  }

  input[type="submit"]:active {
    background-color: #756d7e;
  }

  .register-link-container {
    text-align: center;
    margin-top: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .register-link {
    text-decoration: none;
    font-weight: bold;
    padding-left: 5px;
    color: rgb(85, 55, 110);
  }
</style>

<body>
  <!--navbar-->
  <nav class="navbar navbar-expand-sm">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="image/logo rc.png" alt="Logo ruang ceritamu" style="height: 70px" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ms-auto mb-2 mb-sm-0">
          <li class="nav-item">
            <a class="nav-link active" href="home1.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="http://localhost/ruangceritamu/html/konsul.php">Konsul</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="http://localhost/ruangceritamu/html/feedback1.php">Feedback</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="image/user.png" alt="User Icon" style="height: 20px" />
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="http://localhost/ruangceritamu/html/register.php">Register</a></li>
              <li><a class="dropdown-item" href="http://localhost/ruangceritamu/html/delete.php">Delete Account</a></li>
              <li><a class="dropdown-item" href="http://localhost/ruangceritamu/html/logout.php">Log Out</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--akhir navbar-->
  <h2 align="center">Hapus akun</h2>
  <form method="post">
    <table>
      <tr>
        <td>Username</td>
        <td>:</td>
        <td><input type="text" name="username" id="username" size="20" /></td>
      </tr>
      <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="password" name="password" id="password" size="20" /></td>
      </tr>
      <tr>
        <td>
          <input type="submit" value="Kirim" />
          <input type="reset" value="Reset" />
        </td>
      </tr>
    </table>
  </form>
  
  <?php if (isset($message) && !empty($message)) { ?>
        <p style="color: red;"><?php echo $message; ?></p>
      <?php } ?>
</body>

</html>