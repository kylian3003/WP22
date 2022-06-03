<?php
require_once 'tpl/head.php';
require_once 'tpl/body_start.php';

$get_json_data = file_get_contents("data/articles.json");
$json_data =array_reverse(json_decode($get_json_data, true));


?>

<h1 class="text-center">News Updates</h1>

<div class="">
          <?php foreach ($json_data as $key):?>
          <div class="card my-4">
                    <div class="card-header  d-flex justify-content-between">
                              <h5 class="card-title "><?php echo $key['title'] ?></h5>
                              <h6><?php echo $key['date'] ?></h6>
                    </div>
                    <div class="card-body">
                              <p class="card-text"><?php echo $key['content'] ?></p>
                              <div class="float-right">
                                                  <button class="btn btn-danger" onclick="deleteNews(<?php echo $key['id'] ?>)">Delete</button>
                                                  <a href="news_edit.php?id=<?php echo $key['id'] ?>" class="btn btn-primary">Edit</a>
                                        </div>
                    </div>
          </div>
          <?php endforeach; ?>
</div>
<script src="scripts/delete_news.js"></script>
<?php
require_once 'tpl/body_end.php';
?>