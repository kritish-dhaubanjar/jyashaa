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
  <body>
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
    <!--NAVBAR-->  
    <?php
      include 'resources/templates/navbar.php';
    ?>
    <!-- Jumbotron-->   
    <div id ="custom-head" class="jumbotron">
        <h1>Graphics Design</h1>
<!--         <p style="font-size: 15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent lobortis mollis nunc.</p>
        <p style="font-size: 15px;">Donec nec metus nec nisl rutrum dignissim a vel ex.</p> -->
        <p><button class="btn btn-info" data-target="#myModal" data-toggle="modal">GET IN TOUCH</button></p>
        <ul class="custom-button">
          <li><a href="#gd"><button type="button" class="btn btn-default">Graphics Design</button></a></li>
          <li><a href="#ld"><button type="button" class="btn btn-default">Logo Design</button></a></li> 
          <li><a href="#si"><button type="button" class="btn btn-default">Shape to Ideas</button></a></li>
        </ul>          
    </div> 
    <img src="images/solutions/graphics.png" class="img-responsive">
      <span id="gd"></span>
    <div class="container-fluid container-body">
      <!-- START THE FEATURETTES -->
      <br><br>
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Graphics Design </h2>
          <p class="lead">Graphic design is a creative process that combines art and technology to communicate ideas. The designer works with a variety of communication tools in order to convey a message from a client to a particular audience. The main tools are image and typography.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="images/graphics/001.png" alt="Generic placeholder image">
        </div>
      </div>
      <span id="ld"></span>
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Logo Design <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Jyashaa is a creative logo design company in Kathmandu, Nepal. We specialize in professional and custom made Company Logo Design services in Nepal. Our Team specializes in designing effective, high impact custom logos for all kinds of businesses. Let our logo design team guide you through the process of creating your company logo, whether you're starting a new business or want to make changes in your current one, Jyashaa is ready to help you.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="images/graphics/002.png" alt="Generic placeholder image">
        </div>
      </div>
      <span id="si"></span>
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Giving Shape to Ideas</h2>
          <p class="lead">Every great project/business starts with an idea. Our team at Jyashaa strongly believes in the power of ideas; so we are ready to take in your simple to wackiest ideas and turn them into reality. From brainstorming ideas to defining, developing and implementing them into real projects and directing them to the direction of explosive profits, we will process each step with focused attention to details, quality and customer satisfaction.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="images/graphics/003.png" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->
    </div>


    <!--FOOTER-->
    <?php
      include 'resources/templates/footer.php';
    ?>
  </body>
</html>