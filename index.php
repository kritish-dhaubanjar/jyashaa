<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Corporatronix Nepal</title>
<!--     <link rel="stylesheet" type="text/css" href="css/carousel.css"> -->
    <!--CSS BOOTSTRAP JAVASCRIPT-->   
  
    <?php
      include 'resources/library/setup.php';
    ?>         
  </head>
  <body>
    <!--NAVBAR-->  
    <?php
      include 'resources/templates/navbar.php';
    ?>

<div class="top">
    <div id="carousel-example" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example" data-slide-to="1"></li>
        <li data-target="#carousel-example" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="images/001.jpg" alt="Not Found">
          <div class="carousel-caption">
            <!-- Lorem ipsum dolor sit amet, amet consectetur adipiscing elit. -->
          </div>
        </div>
        <div class="item">
          <img src="images/002.jpg" alt="Not Found">
          <div class="carousel-caption">
            <!-- Lorem ipsum dolor sit amet, amet consectetur adipiscing elit. -->
          </div>
        </div>
        <div class="item">
          <img src="images/003.jpg" alt="Not Found">
          <div class="carousel-caption">
            <!-- Lorem ipsum dolor sit amet, amet consectetur adipiscing elit. -->
          </div>
        </div>
        <div class="item">
          <img src="images/004.jpg" alt="Not Found">
          <div class="carousel-caption">
            <!-- Lorem ipsum dolor sit amet, amet consectetur adipiscing elit. -->
          </div>
        </div>        
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>
    <!--FOOTER-->
    <?php
      include 'resources/templates/footer.php';
      include 'resources/library/script.php';
    ?>
  </body>
</html> 


