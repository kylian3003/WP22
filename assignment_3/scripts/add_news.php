<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $title = $_POST['title'];
          $content = $_POST['content'];
          $date = date('Y-m-d H:i:s');
          $json_data = file_get_contents("../data/articles.json");
          $json_data = json_decode($json_data, true);
          $last_item = end($json_data);
          $id = $last_item['id'] + 1;
          $json_data[] = array(
                    'id' => $id,
                    'title' => $title,
                    'content' => $content,
                    'date' => $date
          );
          $json_data = json_encode($json_data);
          file_put_contents("../data/articles.json", $json_data);
          // header('Location: index.php');
          echo "success";
}
?>