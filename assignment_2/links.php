<?php
$page_title = 'Webprogramming Assignment 2';
$navigation = array(
          'active' => 'Links',
          'items' => array(
                    'Home' => '/assignment_2/index.php',
                    'Links' => '/assignment_2/links.php',
                    'News' => '/assignment_2/news.php',
                    'Future' => '/assignment_2/future.php'
          )
);

include __DIR__ . '/tpl/head.php'; ?>

<h1 class="text-center">This is Links page!</h1>
<br>
<br>
<div class="container">
          <div>
                    <ul class="fade_list">
                              <li class='list-group-item'><a href="https://www.lipsum.com/">lipsum</a></li>
                              <li class='list-group-item'><a href="https://getbootstrap.com/">Bootstrap</a></li>
                              <li class='list-group-item'> <a href="https://stackoverflow.com/">Stackoverflow</a></li>
                              <li class='list-group-item'><a href="https://www.w3schools.com/">W3Schools</a></li>
                    </ul>
                    <button class="btn btn-success" id="btn_for_fade_list">Click here!</button>
          </div>


          <hr>

          <div>
                    <form style="width:30%" id="add_link_form">
                              <div class="form-group">
                                        <label for="Link_name">Link name:</label>
                                        <input class="form-control" type="text" name="Link_name" id="link_name">
                                        <p class="help-block text-danger  name_error text-right"></p> 
                              </div>
                              <div class="form-group">
                                        <label for="link_url">Link URL:</label>
                                        <input class="form-control" type="text" name="link_url" id="link_url">
                                        <p class="help-block text-danger url_error text-right"></p>
                              </div>

                              <div class="form-group text-right">
                                        <button type="submit" class="btn btn-success" id="btn_for_add_link">Add link</button>
                              </div>
                    </form>
          </div>

          <hr>

          <div>
                    <style>
                            #delete_mode2{
                                        display: none;
                            }
                    </style>
                    <button data-id="1" type="button" class="btn btn-danger" id="delete_mode">Active delete mode</button>
                    <button data-id="0" type="button" class=" btn btn-danger" id="delete_mode2">Stop delete mode</button>
          </div>

</div>









<?php
include __DIR__ . '/tpl/body-start.php';

include __DIR__ . '/tpl/body-end.php';
include __DIR__ . '/tpl/footer.php';

?>