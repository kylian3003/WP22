
<!doctype html>
<html lang="en">

<head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <title><?php echo $page_title; ?></title>
          <!-- bootstrap css  -->
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
          
          <!-- jquery file link -->
          <!-- <script src="jquery-3.6.0.js"></script> -->

          <!-- jquery cdn link -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
          <!-- our js file -->
          <script src="js/main.js"></script>
          <script src="js/links.js"></script>
</head>

<body>

          <header>
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                              <a class="navbar-brand" href="#">Navbar</a>
                              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                              </button>

                              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav mx-auto">
                                                  
                                                  <?php
                                                  foreach ($navigation['items'] as $key => $value) {
                                                            if($navigation['active'] == $key){
                                                                      echo '<li class="nav-item active">';
                                                                      echo '<a class="nav-link" href="' . $value . '">' . $key . '</a>';
                                                                      echo '</li>';
                                                            }else{
                                                                      echo '<li class="nav-item">';
                                                                      echo '<a class="nav-link" href="' . $value . '">' . $key . '</a>';
                                                                      echo '</li>';
                                                            }
                                                           
                                                            
                                                  }
                                                  ?>
                                                  
                                        </ul>
                                        <form class="form-inline my-2 my-lg-0">
                                                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                        </form>
                              </div>
                    </nav>
          </header>
