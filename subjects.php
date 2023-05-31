<!-- Start Navigation Bar -->
<?php
include('./dbConnection.php');
include('./navbar.php')
?>
<!-- End Navigation Bar -->



<!-- start subjects section -->
<section id="subjectsection" class="features-section">
        <div class="container">
            <div class="features-header">
                <h2 class="features-heading-text">See all the subjects here...</h2>
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
                <img src="'.str_replace('..', '.', $row['course_img']).'" class="card-img-top" alt="Guitar" />
                <div class="card-body">
                  <h5 class="card-title">'.$row['course_name'].'</h5>
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
                    <img src="'.str_replace('..', '.', $row['course_img']).'" class="card-img-top" alt="Guitar" />
                    <div class="card-body">
                      <h5 class="card-title">'.$row['course_name'].'</h5>
                    </div>
                    <div class="card-footer">
                      <a class="btn btn-primary text-white font-weight-bolder float-right" href="subjectsdetails.php?course_id=">Enroll</a>
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
        </div>
    </section>
<!-- end subjects section -->



<!-- start fotter section -->
<?php
include('./footer.php')
?>
<!-- end footer section -->


<!-- start Modal section -->
<?php
include('./LogRegModal.php')
?>
<!-- end Modal section -->