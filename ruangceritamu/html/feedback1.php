<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/navbar.css" />
    <title>FEEDBACK FORM</title>
    <style>
      body {
    text-align: center;
    font-family:'poppins', sans-serif;
    background-position: 100%;
    background-image: linear-gradient(rgb(178, 146, 231), rgb(222 183 239));
  }
      button[type="submit"],
      button[type="reset"] {
        background-color: rgb(85, 55, 110);
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
      }

      .btn-primary {
    --bs-btn-hover-bg: rgb(117, 109, 126);
      }

      .card {
        background-color: white;
        background: rgba(255, 255, 255, 0.5);
        padding: 20px;
        border-radius: 10px;
        margin: 20px;
      }

      form {
        margin-top: 20px;
      }

      .form-group {
        margin: 10px 0;
      }

      input[type="radio"] {
        margin-right: 5px;
        cursor: pointer;
      }

      textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
      }
    </style>
  </head>
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

    <div class="card">
      <h2 class="mb-4">Berikan Feedback</h2>
      <p>Bagaimana Penilaianmu Tentang Web Ini?</p>

      <form method="post" action="submit_feedback1.php">
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="rating"
            value="jeban"
            id="jeban"
          />
          <label class="form-check-label" for="jeban"
            ><img
              src="icons/terrible.png"
              width="25"
              height="25"
              alt="jelek banget"
            />
            Jelek Banget</label
          >
        </div>

        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="rating"
            value="jelek"
            id="jelek"
          />
          <label class="form-check-label" for="jelek"
            ><img src="icons/bad.png" width="25" height="25" alt="jelek" />
            Jelek</label
          >
        </div>

        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="rating"
            value="lumayan"
            id="lumayan"
          />
          <label class="form-check-label" for="lumayan"
            ><img src="icons/okay.png" width="25" height="25" alt="lumayan" />
            Lumayan</label
          >
        </div>

        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="rating"
            value="bagus"
            id="bagus"
          />
          <label class="form-check-label" for="bagus"
            ><img src="icons/good.png" width="25" height="25" alt="bagus" />
            Bagus</label
          >
        </div>

        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="rating"
            value="lubar"
            id="lubar"
          />
          <label class="form-check-label" for="lubar"
            ><img
              src="icons/amazing.png"
              width="25"
              height="25"
              alt="luar biasa"
            />
            Luar Biasa</label
          >
        </div>

        <div class="mb-3">
          <label for="reasons" class="form-label"
            >Mengapa kamu memberi penilaian tersebut?</label
          >
          <textarea
            class="form-control"
            name="reasons"
            id="reasons"
            cols="40"
            rows="5"
          ></textarea>
        </div>

        <div class="mb-4">
          <button type="submit" class="btn btn-primary">Kirim</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form>
    </div>
    <script>
    // Define the submitFeedback function separately
    function submitFeedback(rating, reasons) {
      return new Promise((resolve, reject) => {
        setTimeout(() => {
          if (Math.random() < 0.8) {
            resolve();
          } else {
            reject("Gagal mengirim feedback. Silakan coba lagi nanti.");
          }
        }, 1000);
      });
    }

    // script.js
    document.addEventListener("DOMContentLoaded", function () {
      const feedbackForm = document.getElementById("feedbackForm");

      feedbackForm.addEventListener("submit", function (e) {
        e.preventDefault();

        const formData = new FormData(feedbackForm);
        const rating = formData.get("rating");
        const reasons = formData.get("reasons");

        submitFeedback(rating, reasons)
          .then(() => {
            alert("Feedback berhasil dikirim!");
            window.location = "home.html";
            feedbackForm.reset();
          })
          .catch((error) => {
            alert(`Terjadi kesalahan: ${error}`);
          });
      });
    });
 </script>

  </body>
</html>
