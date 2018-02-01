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
        <h1>Information & Technology</h1>
<!--         <p style="font-size: 15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent lobortis mollis nunc.</p>
        <p style="font-size: 15px;">Donec nec metus nec nisl rutrum dignissim a vel ex.</p> -->
        <p><button class="btn btn-info" data-target="#myModal" data-toggle="modal">GET IN TOUCH</button></p>
        <ul class="custom-button">
          <li><a href="#sec"><button type="button" class="btn btn-default">Security Installation</button></a></li>
          <li><a href="#dab"><button type="button" class="btn btn-default">Digital Attendance Biometrics</button></a></li>
          <li><a href="#ts"><button type="button" class="btn btn-default">Technical Support</button></a></li>
          <li><a href="#ii"><button type="button" class="btn btn-default">Internet/Intranet</button></a></li>
          <li><a href="#nd"><button type="button" class="btn btn-default">Network Design</button></a></li>    
          <li><a href="#hp"><button type="button" class="btn btn-default">Hotspot</button></a></li> 
        </ul>       
    </div> 
    <img src="images/solutions/IT.png" class="img-responsive">

    <div id="sec" class="container-fluid container-body">
      <!-- START THE FEATURETTES -->

      <div class="row featurette">
      <br><br>
        <div class="col-md-7">
          <h2 class="featurette-heading">Security Installation </h2>
          <p class="lead"> Security should be uncompromised and we know it better than anyone. We have professional security installation facility with professionals fixing it. They know how to check all the blind corners to provide maximum security coverage. And all this at a very appropriate price.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="images/IT/_005.png" alt="Generic placeholder image">
        </div>

      </div>
      <span id="dab"></span>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Digital Attendance Biometrics </h2>
          <p class="lead">Digitally entering data is much more efficient and useful than doing it manually. Taking that into consideration, digital attendance system is one of our prioritized service. We have a range of options and packages for digital attendance, all of which you’ll find tailored and suitable to your needs.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="images/IT/_002.png" alt="Generic placeholder image">
        </div>
      </div>
      <span id="ts"></span>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Technical Support <!-- <span class="text-muted">Checkmate.</span> --></h2>
          <p class="lead">We have a team of dedicated IT personnel who will be at your service at your beck and call. We prioritize your needs and demands above anything and are concerned about the business. Our team provides their expertise and technical support in the most efficient way. We leave no room for complaints and are open to suggestions.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="images/IT/_001.png" alt="Generic placeholder image">
        </div>
      </div>
      <span id="ii"></span>      

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Internet/Intranet </h2>
          <p class="lead">We help you find the right ISP for your company needs and assist with the entire setup

          Whether you are a startup or an established company looking for a better way to connect, we can help you find a way to set it. We offer great deals for internet and intranet setup and we offer it in a reasonable price.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="images/IT/_006.png" alt="Generic placeholder image">
        </div>
      </div>
      <span id="nd"></span>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Network Design </h2>
          <p class="lead">Choosing the right layout and systems is crucial for effective networking that boosts the overall efficiency. Planning for an effective network system that’s easy for operation and maintenance is nothing short of a challenge. But we like challenges like these and are good at delivering smart solutions. We want our clients to get the maximum out of these services so that they can do their work without any hesitation and difficulties.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="images/IT/_003.png" alt="Generic placeholder image">
        </div>
      </div>   
      <span id="hp"></span>   
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Hotspot </h2>
          <p class="lead">Hotspot is a great option if you want to control who accesses your internet and you can add in features like bandwidth restriction, duration of access, content restriction and coupon management. So it gives you more control over the normal wifi access. We help you find the right ISP for your company needs and assist with the entire setup. Whether you are a startup or an established company looking for a better way to connect, we can help you find a way to set it. We offer great deals for internet and intranet setup at reasonable pricing.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="images/IT/_004.png" alt="Generic placeholder image">
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