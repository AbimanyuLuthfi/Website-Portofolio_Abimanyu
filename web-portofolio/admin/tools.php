<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tools</title>
  </head>
  <body data-bs-spy="scroll" data-bs-target=".navbar">
    
  <?php
        require_once "mainmenu.php";
    ?>

    <div id="content-wrapper">
  
      <!-- Tools -->
      <section id="tools" class="full-height px-lg-5">
        <div class="container">
        <?php
          if (!koneksi()){
              die("Koneksi Error");
          }
          $querySQL = "SELECT * FROM tools";
          $execQuerySQL = mysqli_query(koneksi(),$querySQL);

          if(mysqli_num_rows($execQuerySQL) > 0){
              while($row = mysqli_fetch_assoc($execQuerySQL)){
          ?>
          <div class="row pb-4" data-aos="fade-up">
            <div class="col-lg-8">
              <h6 class="text-brand">Tools</h6>
              <h1>Tools That I Used</h1>
            </div>
          </div>
  
          <div class="row gy-4">
            <div class="col-md-4" data-aos="fade-up">
              <div class="service p-4 bg-base rounded-4 shadow-effect">
                <div class="iconbox rounded-4">
                  <img class="rounded-4" src="../assets/images/<?= $row['gambar1'] ?>">
                </div>
                <h5 class="mt-4 mb-2"><?= $row['judul1'] ?></h5>
                <p>Visual Studio Code is a code editor redefined and optimized for building and debugging modern web.</p>
                <a href="https://code.visualstudio.com/" class="link-custom">Read More</a>
              </div>
            </div>
  
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
              <div class="service p-4 bg-base rounded-4 shadow-effect">
                <div class="iconbox rounded-4">
                <img class="rounded-4" src="../assets/images/<?= $row['gambar2'] ?>">
                </div>
                <h5 class="mt-4 mb-2"><?= $row['judul2'] ?></h5>
                <p>IntelliJ IDEA has been designed to maximize developer productivity, intelligent coding assistance and ergonomic design.</p>
                <a href="https://www.jetbrains.com/idea/" class="link-custom">Read More</a>
              </div>
            </div>
  
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
              <div class="service p-4 bg-base rounded-4 shadow-effect">
                <div class="iconbox rounded-4">
                <img class="rounded-4" src="../assets/images/<?= $row['gambar3'] ?>">
                </div>
                <h5 class="mt-4 mb-2"><?= $row['judul3'] ?></h5>
                <p>Code::Blocks is a free, open-source, cross-platform IDE. Using a plugin architecture, its capabilities and features are defined.</p>
                <a href="https://www.codeblocks.org/downloads/" class="link-custom">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- tools -->

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
                <?php
                  }
                }
                ?>
            </div>
        </footer>
        <!-- //FOOTER -->
    </div>
    
  </body>
</html>
