<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projects</title>
  </head>
  <body data-bs-spy="scroll" data-bs-target=".navbar">
    
  <?php
        require_once "mainmenu.php";
    ?>

    <div id="content-wrapper">
    <!-- Project -->
    <section id="project" class="full-height px-lg-5">
      <div class="container">
        <?php
          if (!koneksi()){
              die("Koneksi Error");
          }
          $querySQL = "SELECT * FROM project";
          $execQuerySQL = mysqli_query(koneksi(),$querySQL);

          if(mysqli_num_rows($execQuerySQL) > 0){
              while($row = mysqli_fetch_assoc($execQuerySQL)){
          ?>
        <div class="row pb-4" data-aos="fade-up">
          <div class="col-lg-8">
            <h6 class="text-brand">Projects</h6>
            <h1>My Recent Projects</h1>
          </div>
        </div>

        <div class="row gy-4">
          <div class="col-md-6" data-aos="fade-up">
            <div class="card-custom rounded-4 bg-base shadow-effect">
                <div class="card-custom-image rounded-4">
                  <img class="rounded-4" src="../assets/images/<?= $row['gambar1'] ?>" alt="project1">
                </div>
                <div class="card-custom-content p-4">
                  <h4><?= $row['judul1'] ?></h4>
                  <p>Innovation that exceeds expectations. Astra is a true template equiqed with all the elements you could ever need to put together</p>
                  <a href="https://github.com/AbimanyuLuthfi/Project_Tokobuku_Java" class="link-custom">Go To Github</a>
                </div>
            </div>
          </div>

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card-custom rounded-4 bg-base shadow-effect">
                <div class="card-custom-image rounded-4">
                    <img class="rounded-4" src="../assets/images/<?= $row['gambar2'] ?>" alt="project2">
                </div>
                <div class="card-custom-content p-4">
                    <h4><?= $row['judul2'] ?></h4>
                    <p>Innovation that exceeds expectations. Astra is a true template equiqed with all the elements you could ever need to put together</p>
                    <a href="https://www.figma.com/proto/wpnjTatrebktlKZdrqm8XC/UI-SISEHAT?node-id=0%3A1&scaling=min-zoom&page-id=0%3A1&starting-point-node-id=2%3A901" class="link-custom">Go To Prototype</a>
                </div>
            </div>
          </div>

          <div class="col-md-6" data-aos="fade-up">
              <div class="card-custom rounded-4 bg-base shadow-effect">
                  <div class="card-custom-image rounded-4">
                      <img class="rounded-4" src="../assets/images/<?= $row['gambar3'] ?>" alt="project3">
                  </div>
                  <div class="card-custom-content p-4">
                      <h4><?= $row['judul3'] ?></h4>
                      <p>Innovation that exceeds expectations. Astra is a true template equiqed with all the elements you could ever need to put together</p>
                      <a href="https://github.com/AbimanyuLuthfi/ArcillaPresent" class="link-custom">Go To Github</a>
                  </div>
              </div>
          </div>

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="card-custom rounded-4 bg-base shadow-effect">
                  <div class="card-custom-image rounded-4">
                      <img class="rounded-4" src="../assets/images/<?= $row['gambar4'] ?>" alt="project4">
                  </div>
                  <div class="card-custom-content p-4">
                      <h4><?= $row['judul4'] ?></h4>
                      <p>Innovation that exceeds expectations. Astra is a true template equiqed with all the elements you could ever need to put together</p>
                      <a href="https://github.com/AbimanyuLuthfi/BookShelfAPI" class="link-custom">Go To Github</a>
                  </div>
              </div>
          </div>
          <?php
              }
            }
          ?>
      </div>

      </div>
  </section>
  <!-- //Project -->

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
