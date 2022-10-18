<?php

require_once "mainmenu.php";

if(isset($_POST['kirim'])){

   $namaclient = mysqli_real_escape_string(koneksi(), $_POST['namaclient']);
   $emailclient = mysqli_real_escape_string(koneksi(), $_POST['emailclient']);
   $subject = mysqli_real_escape_string(koneksi(), $_POST['subject']);
   $msg = mysqli_real_escape_string(koneksi(), $_POST['message']);

   $select_message = mysqli_query(koneksi(), "SELECT * FROM `contactme` WHERE namaclient = '$namaclient' AND emailclient = '$emailclient' AND subject = '$subject' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'Successfully Send Your Message!';
   }else{
      mysqli_query(koneksi(), "INSERT INTO `contactme`(namaclient, emailclient, subject, message) VALUES('$namaclient', '$emailclient', '$subject', '$msg')") or die('query failed');
      $message[] = 'Ohh Sorry Failed To Send Your Message!';
   }

}

?>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div id="content-wrapper" class="ms-3">
      <div class="message" data-aos="zoom-out">
         <h4><strong>'.$message.'</strong></h4>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      </div>
      ';
   }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
  </head>
  <body data-bs-spy="scroll" data-bs-target=".navbar">

    <div id="content-wrapper">
  
      <!-- CONTACT -->
      <section id="contact" class="full-height px-lg-5">
            <div class="container">

                <div class="row justify-content-center text-center">
                    <div class="col-lg-8 pb-4" data-aos="fade-up">
                        <h6 class="text-brand">CONTACT</h6>
                        <h1>You Have Any Question? Let's Talk To Me
                        </h1>
                    </div>

                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="300">
                        <form action="#" class="row g-lg-3 gy-3" method="post">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="namaclient" placeholder="Enter your name">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="emailclient" placeholder="Enter your email">
                            </div>
                            <div class="form-group col-12">
                                <input type="text" class="form-control" name="subject" placeholder="Enter subject">
                            </div>
                            <div class="form-group col-12">
                                <textarea rows="4" class="form-control" name="message" placeholder="Enter your message"></textarea>
                            </div>
                            <div class="form-group col-12 d-grid">
                                <button type="submit" class="btn btn-brand" name="kirim">Contact me</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </section>
        <!-- //CONTACT -->

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
