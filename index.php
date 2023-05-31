<!-- Start Navigation Bar -->
<?php
 include('./dbConnection.php');
include('./navbar.php')
?>

<!-- End Navigation Bar -->



 <!-- start header section -->
 <header>
        <div class="container header-section flex">
            <div class="header-left">
                <h1>Study Smarter</h1>
                <p>iStudy is an E-Learning platform specially curated for our freshers who always have confusion of where to study from. This website contains all the resources related to all the subjects they need for their curriculum.</p>
                <?php 
                if(isset($_SESSION['is_login'])){
                    echo '<button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="studentProfile.php">My Profile</a>';
                }
                else{
                    echo '<button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#stuRegModalCenter">Get Started</a>';
                }
                ?>
            </div>
            <div class="header-right">
                <img src=".\img\Happy students or pupils watching study webinar.jpg" alt="hero image">
            </div>
        </div>
    </header>
<!-- end header section -->


<!-- Start companies section -->
<section class="companies-section">
        <div class="container">
            <div class="small-bold-text companies-header">The world’s best companies rely on UsabilityHub to make better design decisions.</div>
            <div class="logos flex">
                <img class="logo" src="img\codewitharry.jpg" alt="">
                <img class="logo" src="img\gfglogo.png" alt="">
                <img class="logo" src="img\c++.png" alt="">
                <img class="logo" src="img\css.png" alt="">
                <img class="logo" src="img\php.png" alt="">
                <img class="logo" src="img\python.png" alt="">
                <img class="logo" src="img\Codechef(new)_logo.svg.png" alt="">
            </div>
        </div>
    </section>
<!-- End companies section -->



<!-- start subjects section -->
<section id="subjectsection" class="features-section">
        <div class="container">
            <div class="features-header">
                <h2 class="features-heading-text">See some of the subjects here...</h2>
                <a href="subjects.php" class="secondary-button">See all subjects <i class="fa-solid fa-right-long"></i></a>
            </div>
            <div class="features-area flex">
            <div class="card-deck mt-4 flex features-card"> <!-- Start Most Popular Course 1st Card Deck -->
        <?php
        $sql = "SELECT * FROM course LIMIT 3";
        $result = $conn->query($sql);
        if($result->num_rows > 0){ 
          while($row = $result->fetch_assoc()){
            $course_id = $row['course_id'];
            echo '
            <a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align: left; padding:0px; margin:0px;">
              <div class="card">
                <div class="imgcard">
                <img src="'.str_replace('..', '.', $row['course_img']).'" class="card-img-top" alt="Guitar" />
                <div class="card-body">
                <h5 class="card-title">'.$row['course_name'].'</h5>
                </div>
                </div>
                <div class="card-footer">
                  <a class="btn btn-primary text-white font-weight-bolder float-right" href="subjectsdetails.php?course_id='.$course_id.'">Enroll</a>
                </div>
              </div>
            </a>  ';
          }
        }
        ?>   
      </div>
      <div class="card-deck mt-4 flex features-card"> <!-- Start Most Popular Course 2nd Card Deck -->
        <?php
          $sql = "SELECT * FROM course LIMIT 3,3";
          $result = $conn->query($sql);
          if($result->num_rows > 0){ 
            while($row = $result->fetch_assoc()){
              $course_id = $row['course_id'];
              echo '
                <a href="coursedetails.php?course_id='.$course_id.'"  class="btn" style="text-align: left; padding:0px;">
                  <div class="card">
                  <div class="imgcard">
                    <img src="'.str_replace('..', '.', $row['course_img']).'" class="card-img-top" alt="Guitar" />
                    <div class="card-body">
                      <h5 class="card-title">'.$row['course_name'].'</h5>
                    </div>
                    </div>
                    <div class="card-footer">
                      <a class="btn btn-primary text-white font-weight-bolder float-right" href="subjectsdetails.php?course_id='.$course_id.'">Enroll</a>
                    </div>
                  </div>
                </a>  ';
            }
          }
        ?>
        </div>
      
    </div>  <!-- End Most Popular Course -->

    </section>
<!-- end subjects section -->



<!-- start contact section -->
<?php
include('./contact.php')
?>
<!-- end contact section -->


<?php
include('footer.php')
?>


<!-- start Modal section -->
<?php
include('./LogRegModal.php')
?>
<!-- end Modal section -->