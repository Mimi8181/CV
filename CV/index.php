<?php
//gunakan file config.php
include_once("config.php");

//ambil data dan simpan kedalam variabel result
$result = mysqli_query($conn, "SELECT * FROM cv_data ORDER BY nama ASC");
?>


<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <style>

  </style>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <title>CRUD PHP</title>
</head>

<body class="p-3">


  <h1>A. Tamimi Nurrohman</h1>
  <a class="btn btn-success" href="edit.php">Update CV</a>

  <img src="blank-foto-people.jpg" alt="">

  <h2><?php echo $nama ?></h2>
</body>

</html> -->





<!DOCTYPE html>
<html>
<head>
    <title>Curriculum Vitae</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
      <img src="Foto _saya.jpg" alt="">
        <h1><?php echo $nama ?></h1>
        <a style="color: white;" href="admin.php">Update CV</a>
    </header>

    <div class="container">
        <section class="left-column">
            <section class="contact">
                <h2>Kontak</h2>
                <p>Alamat: <?php echo $alamat ?></p>
                <p>Email: <?php echo $email ?></p>
                <p>Telepon: <?php echo $telepon ?></p>
            </section>

            <section class="education">
                <h2>Pendidikan</h2>
                <p>SMAN 2 Pandeglang<br>2021</p>
            </section>
        </section>

        <section class="right-column">
            <section class="experience">
                <h2>Pengalaman Kerja</h2>
                <p><?php echo $pengalaman_kerja ?></p>
            </section>

            <section class="skills">
                <h2>Keterampilan</h2>
                <p><?php echo $keterampilan ?></p>
            </section>
        </section>
    </div>
</body>
</html>

