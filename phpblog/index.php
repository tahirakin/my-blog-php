<?php
require_once "manager.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <?php include "navbar.php"?>
    <div class="container mt-3">
      <div class="row">
      <div class="col-md-8 mx-auto">
        <?php
          foreach($bloginfo as $blog)
          {
            $numberofcharacters = strlen($blog["blogtext"]);
            ?>
            
              <div class="card mt-1">
              <div class="card-body">
                <a href="blog/blog.php?blogid=<?php echo $blog["blogid"];?>"><h5 class="card-title text-dark"><?php echo $blog["blogtitle"]?></h5></a>
                <?php
                 if($numberofcharacters > 200)
                 {
                      echo substr($blog["blogtext"],0,350) ."...";
                    ?>
                    <form method="get">
                      <a href="blog/blog.php?blogid=<?php echo $blog["blogid"];?>">Read more</a>
                    </form>
                    <?php
                 }
                 else
                 {
                  ?>
                    <p class="card-text"><?php echo $blog["blogtext"]?></p>
                  <?php
                 }
                ?>
              </div>
              <div class="card-footer">
                Submitted by: <a class="text-secondary "><?php echo $blog["user"]?></a>
                Add Date: <a class="text-secondary "><?php echo $blog["time"]?></a>
              </div>
              </div>
            <?php
          }
        ?>
      </div>
      </div>
      <div class="icon">
      <a href="https://instagram.com/tahir.64" target="blank"><i class='bx bxl-instagram'></i></a>
      <a href="https://twitter.com/tahirakin_" target="blank"><i class='bx bxl-twitter'></i></a>
      <a href="https://www.linkedin.com/in/tahir-ak%C4%B1n-6b0b80258/"  target="blank"><i class='bx bxl-linkedin'></i></a>
      <a href="https://github.com/tahirakin"  target="blank"><i class='bx bxl-github'",></i></a>
        </div>
    </div>
</body>
</html>