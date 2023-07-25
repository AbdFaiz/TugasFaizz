<?php

include_once('connect.php');

$sql = "SELECT * FROM scores, students WHERE scores.student_id = students.id;";
$result = $conn->query($sql);
$data = $result->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ranking XI RPL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  </head>
  <body>
    <!-- Nav -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-3">
      <div class="container">
        <a class="navbar-brand fw-bold" href="#">XI RPL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Input</a>
            </li>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Input -->

    <div class="container">
      <div class="row">
        <div class="col-4">
          <h2 class="text-center text-primary">Input</h2>
          <form class="p-4">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" aria-describedby="namaHelp" placeholder="Enter Name" />
            <div class="mb-3">
              <label for="nilai" class="form-label">Nilai</label>
              <input type="number" class="form-control" id="nilai" placeholder="Enter Nilai" />
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
          </form>
        </div>
        <br />

        <!-- Table -->

        <div class="col-8">
          <h2 class="text-center text-primary">Daftar Ranking</h2>
          <table border="1" class="table text-center">
            <tr>
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Nilai</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($data as $key => $d): ?>
                <tr>
                  <td><?= $key + 1 ?></td>
                  <td><?= $d['name'] ?></td>
                  <td><?= $d['score'] ?></td>
                </tr>
                <?php endforeach ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Nilai</th>
                </tr>
              </tfoot>
            </tr>
          </table>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="text-center text-white bg-primary p-2">
      <p>ⓒ CopyHitam by Abang Warkop</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
