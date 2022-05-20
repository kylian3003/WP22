
<?php

$page_title = 'Webprogramming Assignment 2';
$navigation = array(
          'active' => 'Home',
          'items' => array(
                    'Home' => '/assignment_2/index.php',
                    'Links' => '/assignment_2/links.php',
                    'News' => '/assignment_2/news.php',
                    'Future' => '/assignment_2/future.php'
          )
);
 include __DIR__ . '/tpl/head.php';?>
 <div class="col-md-12"> <h1>Welcome to my site!</h1> </div> 
 <h1 class="text-center">This is home page!</h1>
 <?php include __DIR__ . '/tpl/body-start.php';

 include __DIR__ . '/tpl/body-end.php';
 include __DIR__ . '/tpl/footer.php';

?>

