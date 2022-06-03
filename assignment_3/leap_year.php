<?php




$output = "";
$name = "";
$place = "";
$text = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $user_name = $_POST['name'];
          $user_ema = $_POST['email'];
          (int)$age = $_POST['age'];
          $user_place = $_POST['place'];

          $name = "Welcome, $user_name!";
          $text = "The next 5 leap years, this will be your age.";
          if($user_place == "Amsterdam"){
                    $place = "Nice, you are from the capital of Netherlands!";
          }else{
                    $place = "Nice, you are living in  $user_place!";
          }



          $datetime = new \DateTime("now");
          $interval = new \DateInterval('P1Y');
          $period = new \DatePeriod($datetime, $interval, 20);
          foreach ($period as $date) {
                    if ((bool)$date->format('L')) {
                              (int)$age_in_next_leap =  $date->format('Y') - date('Y');
                              $leap =  $date->format('Y') ;
                              
                              $output .=   '
                                        <tr>
                                                  <td>'. $age_in_next_leap + $age .'</td>
                                                  <td  style="text-align:right">'.$leap.'</td>
                                        </tr>
                                        ';
                    }
          }








}

require_once 'tpl/head.php';
require_once 'tpl/body_start.php';

?>
<div class="row">
          <div class="col-lg-12">
                    <div style="width:50%;margin:10px auto;">
                              <h1><?php echo $name ?></h1>
                              <p><?php echo $text ?></p>
                              <h6><?php echo $place ?></h6>


                              <?php 
                              if(!empty($output)){
                                        echo '<table class="table">
                                        <thead>
                                                  <tr>
                                                            <th>Age</th>
                                                            <th style="text-align:right">Year</th>
                                                  </tr>
                                        </thead>
                                        <tbody>'.
                                                  $output 
                                        .'</tbody>
                                        </table>';
                              }
                    ?>
                    </div>



                    <form autocomplete="off" action="" method="POST" id="my_form">
                              <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                                  placeholder="Name">
                                        <div class="invalid-feedback name_error"></div>
                              </div>
                              <div class="mb-3">
                                        <label for="name" class="form-label">Age</label>
                                        <input type="text" name="age" class="form-control" id="age" placeholder="Age">
                                        <div class="invalid-feedback age_error "></div>
                              </div>
                              <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="text" class="form-control" name="email" id="email"
                                                  placeholder="Email">
                                        <div class="invalid-feedback email_error"></div>
                              </div>
                              <div class="mb-3">
                                        <label for="place" class="form-label">Place/residence</label>
                                        <input type="text" name="place" class="form-control" id="place"
                                                  placeholder="Place">
                                        <div class="invalid-feedback place_error"></div>
                              </div>
                              <div type="submit" class="btn btn-primary" id="submit_btn">Show me!</div>
                    </form>
          </div>
</div>


<script src="scripts/leapyears.js"></script>
<?php

require_once 'tpl/body_end.php';
?>