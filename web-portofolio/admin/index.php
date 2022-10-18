<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abimanyu Luthfi | Portofolio</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/aos.css">
    <link rel="stylesheet" href="../assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar">
<?php
        require_once "mainmenu.php";
    ?>
<!-- CONTENT WRAPPER -->
<div id="content-wrapper">
    <!-- HOME -->
    <section id="home" class="full-height px-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <?php
                    if (!koneksi()){
                        die("Koneksi Error");
                    }
                    $querySQL = "SELECT * FROM homepage";
                    $execQuerySQL = mysqli_query(koneksi(),$querySQL);

                    if(mysqli_num_rows($execQuerySQL) > 0){
                        while($row = mysqli_fetch_assoc($execQuerySQL)){
                    ?>
                    <h1 class="display-4 fw-bold" data-aos="fade-up">I'M A <span class="text-brand">WEB DEVELOPER
                            </span> FROM TANGERANG, INDONESIA</h1>
                    <p class="lead mt-2 mb-4" data-aos="fade-up" data-aos-delay="300"><?= $row['deskripsi'] ?></p>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <a href="projects.php" class="btn btn-brand me-3">Explore My Projects</a>
                        <a href="#" class="link-custom">Call: 0821 8167 7382</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- //HOME -->

    <!-- FOOTER -->
    <footer class="py-5 px-lg-5">
            <div class="container">
                <div class="row gy-4 justify-content-between">
                    <div class="col-auto">
                        <p class="mb-0">Created With Love By <a href="#" class="fw-bold">Abimanyu Luthfi</a></p>
                    </div>
                    <div class="col-auto">
                        <div class="social-icons">
                            <a href="https://wa.me/6282181677382?text=Hi%20I'am%20Abimanyu%20Luthfi%20Rizq%20Ramadhan,%20Junior%20Programmer%20From%20Pembangunan%20Jaya%20University,%20You%20Have%20Any%20Question?%20Let's%20Talk%20To%20Me%20:)"><i class="lab la-whatsapp"></i></a>
                            <a href="https://www.instagram.com/abimanyuluthfi25/"><i class="lab la-instagram"></i></a>
                            <a href="https://github.com/AbimanyuLuthfi"><i class="lab la-github"></i></a>
                            <a href="#"><i class="lab la-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- //FOOTER -->
</div>

    
</body>
</html>