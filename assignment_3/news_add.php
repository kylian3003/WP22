<?php
require_once 'tpl/head.php';
require_once 'tpl/body_start.php';

// $get_json_data = file_get_contents("data/articles.json");
// $json_data = json_decode($get_json_data, true);


?>

<h1 class="text-center">Add News</h1>

<form autocomplete="off" id="add_news_form">
          <div class="mb-3">
                    <label for="" class="form-label">News Title</label>
                    <input type="text" class="form-control" id="title"  required placeholder="Enter news title">
          </div>
          <div class="mb-3">
                    <label for="" class="form-label">News  content</label>
                    <input type="text" class="form-control" id="content" required  placeholder="Enter news content">
          </div>
          <button type="submit" class="btn btn-primary float-end" id="submit_btn">Add News!</button>
</form>

<script src="scripts/add_news.js"></script>
<?php
require_once 'tpl/body_end.php';
?>