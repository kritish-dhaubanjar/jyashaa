<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Corporatronix Nepal</title>
    <!--CSS BOOTSTRAP JAVASCRIPT-->
    <?php
      include 'resources/library/setup.php';
      include 'resources/library/script.php';
    ?>
  </head>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 700, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>

  <body>
    <!--NAVBAR-->  
    <?php
      include 'resources/templates/navbar.php';
    ?>
    <!-- Jumbotron-->       
    <div id ="custom-head" class="jumbotron">
        <h1>Printing & Marketing</h1>
<!--         <p style="font-size: 15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent lobortis mollis nunc.</p>
        <p style="font-size: 15px;">Donec nec metus nec nisl rutrum dignissim a vel ex.</p> -->
        <p><button class="btn btn-info" data-target="#myModal" data-toggle="modal">GET IN TOUCH</button></p>
        <ul class="custom-button">
          <li><a href="#pb"><button type="button" class="btn btn-default">Printing & Branding</button></a></li>
          <li><a href="#pv"><button type="button" class="btn btn-default">Personal Visiting Cards</button></a></li> 
        </ul>          
    </div> 
    <img src="images/solutions/printing.png" class="img-responsive">

    <div class="container-fluid container-body">
      <!-- START THE FEATURETTES -->
      <br><br>
      <span id="pb"></span>
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Printing & Branding</h2>
          <p class="lead">Though a very basic job, it’s equally important. What’s more, there are so many ways it can go wrong. Whether you want printing in bulk or in small amount, we do it in swiftly, easily, and without any hassle. If not printing, then we deal with printers, providing you with qualitative and price-efficient products.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="images/printing/001.png" alt="Generic placeholder image">
        </div>
      </div>
      <span id="pv"></span>
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Personal Visiting Cards</h2>
          <p class="lead">There are so many ways to leave an impression on the clients regarding your business and services. What better way than visiting cards? Whether you are a freelance or a big corporate company, we specialize in making personal visiting cards that looks smart, impressionable, and direct clients your way.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="images/printing/002.png" alt="Generic placeholder image">
        </div>
      </div>

<!--       <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="images/showcase/003.png" alt="Generic placeholder image">
        </div>
      </div> -->

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->
    </div>


    <!--FOOTER-->
    <?php
      include 'resources/templates/footer.php';
    ?>
  </body>
</html>