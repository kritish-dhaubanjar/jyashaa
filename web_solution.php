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
        <h1>Web Design & Development</h1>
<!--         <p style="font-size: 15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent lobortis mollis nunc.</p>
        <p style="font-size: 15px;">Donec nec metus nec nisl rutrum dignissim a vel ex.</p> -->
        <p><button class="btn btn-info" data-target="#myModal" data-toggle="modal">GET IN TOUCH</button></p>
        <ul class="custom-button">
          <li><a href="#wd"><button type="button" class="btn btn-default">Web Design</button></a></li>
          <li><a href="#rd"><button type="button" class="btn btn-default">Responsive Design</button></a></li> 
          <li><a href="#seo"><button type="button" class="btn btn-default">Search Engine Optimization</button></a></li>
        </ul>           
    </div> 
    <img src="images/solutions/webdesign_adj.jpg" class="img-responsive">
    <div class="container-fluid container-body">
      <!-- START THE FEATURETTES -->
      <br><br>
      <span id="wd"></span>
      <div class="row featurette">
        <div class="col-md-7">     
          <h2 class="featurette-heading">Web Design <!-- <span class="text-muted">It'll blow your mind.</span> --></h2>
          <p class="lead">Our creative team looks after this department and are very good with their job. Though common, new challenges arise every day and our team is more than ready to handle it. Our services will be according to your needs and we won’t hold back with our creative and professional output.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="images/webdesign/002.png" alt="Generic placeholder image">
        </div>
      </div>
      <span id="rd"></span>
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Responsive Design <!-- <span class="text-muted">See for yourself.</span> --></h2>
          <p class="lead">We are a professional website design company who offer website solutions for all kinds of businesses. Our services include building static and truly dynamic websites allowing our clients to unlock the site potential to quickly reach their target market. We can also help with e commerce solutions and web site design or redesign including logo design and business identity services.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="images/webdesign/001.png" alt="Generic placeholder image">
        </div>
      </div>
      <span id="seo"></span>
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">SEO <span class="text-muted">(Search Engine Optimization)</span></h2>
          <p class="lead">Search Engine Optimization & Internet Promotion is vital today, if you want your site to appear in search results. The foundation of a successful web promotion & optimization of the position of a web page in search engines list is the technical design which regarding the underlying code defines at once how friendly a web page is to the search engines and plays a vital role for the future of this page in search engines.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="images/webdesign/003.png" alt="Generic placeholder image">
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