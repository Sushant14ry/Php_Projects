<?php
  include('config.php');
?>
<!DOCTYPE html>
  <html>
    <head>
        <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <style type="text/css">
        *{
          font-family: sans-serif;
        }
        section {
          width: 90%;
          margin: auto;
          margin-top: 90px;
        }
        .navb{
          background: #37517e;
          position: fixed;
          z-index: 8;
        }
        .top_pic{
          width: 100%;
          height: 80vh;
          background: #37517e;
        }
        .img-fluid{
          max-width: 100%;
          height: auto;
        }
        .animated{
          animation: up-down 2s ease-in-out infinite alternate-reverse both;
          margin-top: 16%;
        }
        .one h1{
          font-size: 3.4rem;
          color: white;
          font-weight: bold;
          font-family: sans-serif;
        }
        .one h2{
          font-size: 1.8rem;
          color: rgba(255, 255, 255, 0.6);
          font-weight: bold;
        }
        .btn-get-started {
          font-family: "Jost", sans-serif;
          font-weight: 500;
          font-size: 16px;
          letter-spacing: 1px;
          display: inline-block;
          padding: 10px 28px 11px 28px;
          border-radius: 50px;
          transition: 0.5s;
          margin: 10px 0 0 0;
          color: #fff;
          background: #47b2e4;
        }
        .btn-watch-video {
            font-size: 16px;
            display: inline-block;
            padding: 10px 28px 11px 28px;
            transition: 0.5s;
            margin: 10px 0 0 25px;
            color: #fff;
            position: relative;
            border: 1px solid blue;
            border-radius: 50px;
          
        }
        .header {
            text-align: center;
            font-size: 50px;
            text-transform: uppercase;
            font-weight: 700;
          }
          .header span {
            color: #c04848;
          }
          .sub-text {
            text-align: center;
            width: 50%;
            margin: 0 auto 5%;
          }
          .single-service {
            padding: 35px;
            transition: all .5s ease;
          }
          .img-area {
            width: 120px;
            height: 120px;
            overflow: hidden;
            display: inline-block;
            border-radius: 50%;
          }
          .img-area img {
            width: 100%;
          }
          .single-service h2 {
            font-size: 25px;
            font-weight: 500;
          }
          .single-service h4 {
            font-size: 16px;
            font-weight: 500;
          }
          .socials i {
            margin: 0 15px;
          }
          .single-service:hover {
            background: radial-gradient(circle, #c04848, #480048);
            color: #fff;
          }

      </style>
    </head>

    <body>
       <nav class=" navb">
          <div class="nav-wrapper container">
            <a href="ns.php" class="brand-logo">NsTech</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="ns.php">Home</a></li>
              <li><a href="sass.html">Team</a></li>
              <li><a href="#about_us">About</a></li>
              <li><a href="#our_service">Services</a></li>
              <li><a href="#contact_us">Contact</a></li>
            </ul>
          </div>
        </nav>

        <ul class="sidenav" id="mobile-demo">
          <li><a href="ns.php">Home</a></li>
          <li><a href="sass.html">Team</a></li>
          <li><a href="#about_us">About</a></li>
          <li><a href="#our_service">Services</a></li>
          <li><a href="#contact_us">Contact</a></li>
        </ul>
          
        <!-- navbar section End -->
        
        <!-- Start Banner Section -->

        <div class="top_pic">
          <div class="row container">
            <div class="col m6 s12">
              <div class=" one" style="margin-top: 30%;" >
                <h1>Better Solutions For Your Business</h1>
                <h2>We are team of talanted designers making websites with Bootstrap</h2>
                <div class="d-lg-flex">
                  <a href="" class="btn-get-started">Get Started</a>
                  <a href="" class="btn-watch-video">Watch Video</a>
                </div>
              </div>
            </div>
            <div class="col m6 s12">
              <img src="assets/img/hero-img.png" class="img-fluid animated">
            </div>
          </div>
        </div>

        <!-- End Banner Section -->


        <div class="container ">
        <!-- Start About Us Section -->
          <section>
            <h2 class="center blue-text" id="about_us">About Us</h2>
            <div class="row">
              <div class="col s4 m4 l4 offset-l4 m12 s12"> <hr></div>
            </div>
            <div class="row">
              <div class="col m12 s12">
                <p>NSTech Pvt Ltd. is a IT company specializing in creating websites, and providing a variety of services like domain, hosting, digital marketing and graphic designing. We possibly provide every technology solution for our clients. Our team of enthusiastic, energetic and dynamic designers and developers work together to deliver you the most powerful and innovative solution. We are a team of fully well experienced professionals who have never failed to provide an award-winning technology solution to our clients. The major reason to choose us is that we provide you all soutions here from website development to structural analysis ,architecture design and many other feature.</p>
                <a href="about.html" target="_blanck" class="waves-effect waves-light btn white-text col m3 s3 offset-m5">Learn More</a>
            </div>
          </section>
        </div>
    <!-- End About Us Section -->

           <!-- Start Our Services -->
          <div class="container-fluid">
          <section>
            <h2 class="center blue-text" id="our_service">Our Services</h2>
            <div class="row">
              <div class="col s4 m4 l4 offset-l4 m12 s12"> <hr></div>
            </div>
            <div class="row container">
               <?php
                  $show_servicess="SELECT * FROM `our_service` limit 8 ";
                  $result=mysqli_query($conn,$show_servicess);
                  while($ress=mysqli_fetch_assoc($result)){
                ?>
              <div class="col m3 s12">
                <div class="card hoverable">
                  <div class="card-image">
                    <!-- <img src=""  > -->
                    <img src="../Arsha/AdminTheme/<?php echo $ress['s_img']  ?>"  height="160px">
                    <span class="card-title center yellow-text"><?php echo $ress['s_name'] ?></span>
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                  </div>
                  <div class="card-content">
                    <p><?php echo substr($ress['s_desc'],0,120) ?></p>
                  </div>
                  <div class="card-action">
                    <a href="#" class=" blue-text btn blue white-text">Know More</a>
                  </div>
                </div>
              </div>
              <?php
                }
              ?>
              </div>
            </section>
          </div>
          <!-- End Our Services -->

          <!-- Start Team Section -->
        <div class="container-fluid grey lighten-2"><br>
            <h1 class="header">Our <span>Team</span></h1>
            <p class="sub-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, magnam recusandae nulla quasi fugit ea.</p>
            <div class="row container">
              <div class="col s12 m6 l4">
                <div class="single-service center-align">
                  <div class="img-area"><img alt="" src="assets/img/team/team-3.jpg"></div>
                  <h2>Jason Doe</h2>
                  <h4>Web Developer</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit nam, esse dignissimos. Illo, cum, reiciendis?</p>
                  <p class="socials"><i class="fa fa-instagram"></i> <i class="fa fa-dribbble"></i> <i class="fa fa-tumblr"></i> <i class="fa fa-youtube"></i></p>
                </div>
              </div>
              <div class="col s12 m6 l4">
                <div class="single-service center-align">
                  <div class="img-area"><img alt="" src="assets/img/team/team-3.jpg"></div>
                  <h2>Jason Holder</h2>
                  <h4>Graphics Designer</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit nam, esse dignissimos. Illo, cum, reiciendis?</p>
                  <p class="socials"><i class="fa fa-instagram"></i> <i class="fa fa-dribbble"></i> <i class="fa fa-tumblr"></i> <i class="fa fa-youtube"></i></p>
                </div>
              </div>
              <div class="col s12 m6 l4">
                <div class="single-service center-align">
                  <div class="img-area"><img alt="" src="assets/img/team/team-3.jpg"></div>
                  <h2>Malvin Jones</h2>
                  <h4>Digital Marketer</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit nam, esse dignissimos. Illo, cum, reiciendis?</p>
                  <p class="socials"><i class="fa fa-instagram"></i> <i class="fa fa-dribbble"></i> <i class="fa fa-tumblr"></i> <i class="fa fa-youtube"></i></p>
                </div>
              </div>
            </div>
          </div>

          <!-- End Team Section -->


          <!-- Start Contact Form -->

          <section>
            <h2 class="center blue-text" id="contact_us">Contact Form</h2>
            <div class="row">
              <div class="col s4 m4 l4 offset-l4 m12 s12"> <hr></div>
            </div>
            <div class="row">
              <div class="col m12 l12 s12">
                 <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    <div class="row">
                      <div class="input-field col s6">
                        <input id="first_name" type="text" name="fname" class="validate" required>
                        <label for="first_name">Full Name</label>
                      </div>
                      <div class="input-field col s6">
                        <input type="email" id="email" name="email" class="validate" required>
                        <label for="disabled">Email</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s6">
                        <input id="mobile" type="text" name="mobile"  class="validate" data-length="10" required>
                        <label for="mobile">Mobile</label>
                      </div>
                      <div class="input-field col s6">
                        <input id="mobile" type="text" name="subject"  class="validate" required>
                        <label for="mobile">Subject</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <textarea id="textarea1" name="message"  class="materialize-textarea" required></textarea>
                        <label for="textarea1">Write Your Query</label>
                      </div>
                    </div>
                   <!--  <div class="file-field input-field">
                      <div class="btn">
                        <span>File</span>
                        <input type="file">
                      </div>
                      <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                      </div>
                    </div> -->
                  <!--   <a onclick="M.toast({html: 'Query Send Sucessfull. I will be Call You Soon !!'})" class="waves-effect waves-light btn blue " name="save">Send Message<i class="material-icons right">send</i></a> -->
                    <div class="col m6 s6 offset-m5">
                    <input type="submit" class="btn btn-primary p-2 font-weight-bold" value="Send Message" name="save">
                  </div>
                  </form>
              </div>
            </div>
          </section>
        <!-- Start Contact Form -->

        <!-- Start Footer Section -->


        <footer class="page-footer blue">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">NsTech</h5>
                <p><b>Adress</b> : <span>Dillibazar , Kathmandu, 44600</span> </p>
                <p><b>Phone</b> : <span>9821224203</span> </p>
                <p><b>Email</b> : <span>csushant224@gmail.com</span> </p><br>
                <p><b>Adress</b> : <span>Dillibazar , Kathmandu, 44600</span> </p>
                <p><b>Phone</b> : <span>9821224203</span> </p>
                <p><b>Email</b> : <span>csushant224@gmail.com</span> </p>
              </div>
              <div class="col l4 offset-l2 s12">
                  <h4>Our Social Networks</h4>
              <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
              </div>
            </div>
          </div>
          <div class="footer-copyright black">
            <div id="credits" style="display: flex; justify-content: center; margin: auto;">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
          </div>
          </div>
        </footer>

        <!-- End Footer Section -->

      </div>

      <script>
          $(document).ready(function(){
            $('.sidenav').sidenav();

            $('.materialboxed').materialbox();

           $('input#mobile').characterCounter();

           $('.datepicker').datepicker();
          });
      </script>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">
        document.getElementById('credits').innerHTML='&copy; Copyright &nbsp<strong><span>NsTech</span></strong>. All Rights Reserved &nbsp;&nbsp;'+ "Designed By <b> &nbsp Sushant Chaudhary<b>";
      </script>
    </body>
  </html>

    <?php

      if(isset($_POST['save'])){
        $name = $_POST['fname'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $contact_us="INSERT INTO `contact`(`fullname`, `email_id`, `mobile`, `subject`, `message`) VALUES ('$name','$email','$mobile','$subject','$message')";
        $run_concat=mysqli_query($conn,$contact_us);
        

      }

    ?>