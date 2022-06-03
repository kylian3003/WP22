<?php  
if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $id = $_POST['id'];
          
          $json_data = file_get_contents("../data/articles.json");
          $json_data = json_decode($json_data, true);
          foreach ($json_data as $key => $value) {
                    if($value['id'] == $id){
                              unset($json_data[$key]);
                    }
          }
          $json_data = json_encode($json_data);
          file_put_contents("../data/articles.json", $json_data);
          echo "success";  
}

?>