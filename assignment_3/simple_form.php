<?php
$name = "";
$place = "";

if(isset($_GET['name']) && isset($_GET['place'])){
          $user_name = $_GET['name'];
          $user_place = $_GET['place'];
          $name = "Welcome $user_name!";
          if($user_place == "Amsterdam"){
                    $place = "You are from the capital of Netherlands!";
          }else{
                    $place = "You are from $user_place!";
          }
};




require_once 'tpl/head.php';
require_once 'tpl/body_start.php';
?>
<div class="row">
          <div class="col-lg-12">
                    <h1><?php echo $name ?></h1>
                    <p><?php echo $place ?></p>
                    <form class="my-5" autocomplete="off" method="GET" action="<?php echo $_SERVER["PHP_SELF"];?>">
                              <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Name</label>
                                        <input type="text" name="name"  class="form-control" placeholder="Name">
                              </div>
                              <div class="mb-3">
                                        <label for="place" class="form-label">Place/residence</label>
                                        <input type="text" name="place" class="form-control"  placeholder="Place" >
                              </div>
                              <button type="submit"  class="btn btn-primary">Submit</button>
                    </form>
          </div>
</div>




<?php
require_once 'tpl/body_end.php';
?>