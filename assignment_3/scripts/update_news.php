<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $title = $_POST['title'];
          $content = $_POST['content'];
          $id = $_POST['id'];
          $date = date('Y-m-d H:i:s');
          $json_data_arr = file_get_contents("../data/articles.json");
          $json_data = json_decode($json_data_arr, true);
          foreach ($json_data as $key => $value) {
                    if($value['id'] == $id){
                          $json_data[$key]['title'] = $title;
                          $json_data[$key]['content'] = $content;
                          $json_data[$key]['date'] = $date;
                    }
          }
          $json_data = json_encode($json_data);
          file_put_contents("../data/articles.json", $json_data);
          echo "success";
}
