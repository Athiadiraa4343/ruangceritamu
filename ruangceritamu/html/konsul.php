<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/navbar.css" />
    <title>Konsul</title>
  </head>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      text-align: center;
      font-family: "poppins", sans-serif;
      background-position: 100%;
      background-color: rgb(178, 146, 231);
    }
    form {
      max-width: 400px;
      margin: 20px auto;
    }
    table {
      margin: 0 auto;
    }

    td {
      padding: 5px;
    }
    input[type="text"], .konsul-textarea {
      padding: 5px;
      margin-bottom: 10px;
    }
    button {
      background-color: rgb(85, 55, 110);
      color: white;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
      border-radius: 5px;
    }
    #riwayat-list {
      margin-top: 20px;
    }
  </style>

  <body>
    <!--navbar-->
    <nav class="navbar navbar-expand-sm">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img
            src="image/logo rc.png"
            alt="Logo ruang ceritamu"
            style="height: 70px"
          />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapsibleNavbar"
        >
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
              <a
                class="nav-link active"
                href="http://localhost/ruangceritamu/html/feedback1.php"
                >Feedback</a
              >
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <img
                  src="image/user.png"
                  alt="User Icon"
                  style="height: 20px"
                />
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a
                    class="dropdown-item"
                    href="http://localhost/ruangceritamu/html/register.php"
                    >Register</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item"
                    href="http://localhost/ruangceritamu/html/delete.php"
                    >Delete Account</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item"
                    href="http://localhost/ruangceritamu/html/logout.php"
                    >Log Out</a
                  >
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--akhir navbar-->

    <form method="post" id="konsulForm" action="submit_konsul.php">
      <h2>Konsultasi</h2>
      <p>Silahkan utarakan perasaanmu ^^</p>
      <table>
        <tr>
          <td>Username</td>
          <td>:</td>
          <td>
          <input type="text" name="username" id="username" size="45" required />
          </td>
        </tr>
        <tr>
          <td>Keluhan</td>
          <td>:</td>
          <td>
          <textarea id="keluhan" name="keluhan" rows="4" cols="50" class="konsul-textarea"></textarea>
          </td>
        </tr>
      </table>
      <button type="submit">Submit</button>
    </form>
  </body>
</html>
