<!-- header Section Start -->
<?php
	include('top.php');
?>

<!-- header Section End -->

<!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          
            <p>
              NSTech Pvt Ltd. is a  IT company specializing in creating websites, and providing a variety of services like domain, hosting, digital marketing and graphic designing. We possibly provide every technology solution for our clients.

              Our team of enthusiastic, energetic and dynamic designers and developers work together to deliver you the most powerful and innovative solution. We are a team of fully  well experienced professionals who have never failed to provide an award-winning technology solution to our clients. 

              The major reason to choose us is that we provide you all soutions here from website development to structural analysis ,architecture design and many other feature. 
            </p><br>
            <a href="#" class="btn-learn-more m-auto">Learn More</a>
        </div>

      </div>
    </section><!-- End About Us Section -->

     <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <?php
            $show_servicess="SELECT * FROM `our_service` limit 8 ";
            $result=mysqli_query($conn,$show_servicess);
            while($ress=mysqli_fetch_assoc($result)){
          ?>
          <div class="col-xl-3 col-md-6 d-flex mb-4 text-center align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href=""><?php echo $ress['s_name'] ?></a></h4>
              <p><?php echo substr($ress['s_desc'],0,120) ?></p>
            </div>
          </div>
          <?php
            }
          ?>
        </div>

      </div>
    </section><!-- End Services Section -->

     <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3>Call To Action</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

      <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <?php
            $show_team="SELECT t.name,t.img,t.about,t.num,t.address,t.email_id,p.p_name FROM team t INNER JOIN position p WHERE t.position = p.id ";
            $run_team=mysqli_query($conn,$show_team);
            while($row=mysqli_fetch_assoc($run_team)){
          ?>
          <div class="col-lg-6 mt-4 mb-4 mt-lg-0">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
              <!-- <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div> -->
              <div class="pic"><img src="<?php echo $row['img'] ?>" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4><?php echo $row['name']; ?></h4>
                <span><?php echo $row['p_name']; ?></span>
                <address>Address:- <?php echo $row['address']; ?> </address>
                <p>Gmail:- <?php echo $row['email_id']; ?></p>
                <p>Phone:- <?php echo $row['num']; ?></p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>
          <?php
            }
          ?>
        </div>

      </div>
    </section><!-- End Team Section -->

  

  <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

        <div class="row">
          
          <div class="container text-center ">
            <table class="table">

              <tr>
                <th><i class="bx bx-map"></i> Our Adress</th>
                <th><i class="bx bx-envelope"></i> Email Us</th>
                <th><i class="bx bx-phone-call"></i> Contact Us</th>
              </tr>
               <?php
                  $show_swtting="SELECT * FROM `setting` ";
                  $run_swtting=mysqli_query($conn,$show_swtting);
                  while($roews=mysqli_fetch_assoc($run_swtting)){

                ?>
              <tbody>
              <tr>
                <td><?php echo $roews['o_address']; ?></td>
                <td><?php echo $roews['o_email']; ?></td>
                <td><?php echo $roews['o_number']; ?></td>
              </tr>
              </tbody>
              <?php
                }
              ?>
            </table>
          </div>
          
           <div class="col-lg-12">
        	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        		<div class="row p-3">
        			<div class="col-lg-6">
        				<div class="form-group">
		        			<input type="text" class="form-control" name="fname" placeholder="Your Name" required>
		        		</div>
        			</div>
        			<div class="col-lg-6">
        				<div class="form-group">
		        			<input type="email" class="form-control" name="email" placeholder="Your Email" required>
		        		</div>
        			</div>
        			<div class="col-lg-12">
        				<div class="form-group">
		        			<input type="text" class="form-control" name="subject" placeholder="Subject" required>
		        		</div>
        			</div>
        			<div class="col-lg-12">
        				<div class="form-group">
		        			<textarea class="form-control" rows="5" name="message"  required></textarea>
		        		</div>
        			</div>
        			<div class="col-lg-3 m-auto">
        				<input type="submit" class="btn btn-primary p-2 font-weight-bold" value="Send Message" name="save">
        			</div>
        		</div>
        	</form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->


    <?php

    	if(isset($_POST['save'])){
    		$name = $_POST['fname'];
    		$email = $_POST['email'];
    		$subject = $_POST['subject'];
    		$message = $_POST['message'];

    		$contact_us="INSERT INTO `contact`(`fullname`, `email_id`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";
    		$run_concat=mysqli_query($conn,$contact_us);
    		

    	}

    ?>


<?php
	include('foot.php');
?>