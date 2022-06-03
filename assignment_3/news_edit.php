

<?php

$title = "";
$content = '';
$id = $_GET['id'];
$json_data = file_get_contents("data/articles.json");
$json_data = json_decode($json_data, true);
foreach ($json_data as $key => $value) {
      if($value['id'] == $id){
            $title = $value['title'];
            $content = $value['content'];
      }
}

?>
<?php
require_once 'tpl/head.php';
require_once 'tpl/body_start.php';

// $get_json_data = file_get_contents("data/articles.json");
// $json_data = json_decode($get_json_data, true);


?>

<h1 class="text-center">Edit news</h1>

<form autocomplete="off" id="edit_news_form">
          <div class="mb-3">
                    <label for="" class="form-label">News Title</label>
                    <input type="text" name="title" class="form-control" value="<?php echo $title ?>" id="title"  required placeholder="Enter news title">
          </div>
          <div class="mb-3">
                    <label for="" class="form-label">News  content</label>
                    <input type="text" name="content" class="form-control" value="<?php echo $content ?>" id="content" required  placeholder="Enter news content">
          </div>
          <input type=hidden id="id" name="id" value="<?php echo $id ?>">
          <button type="submit" class="btn btn-primary float-end" id="submit_btn">Add News!</button>
</form>

<script src="scripts/update.js"></script>
<?php
require_once 'tpl/body_end.php';
?>
