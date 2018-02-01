<nav class="navbar-fixed-top navbar-custom navbar ">
  <div class="container-fluid col-md-offset-1 col-md-10 col-md-offset-1" >
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="button-navbar navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="bar icon-bar"></span>
        <span class="bar icon-bar"></span>
        <span class="bar icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="#" style="font-family: 'Audiowide', cursive;"><strong style="color: #cc6363">JYASHAA :</strong></a> --> 
      <a href="http://www.jyashaa.com"><img src="images/Logo_Jyashaa.png" class="img-responsive" width="120px" style="padding-top: 12px;padding-left:10px;"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav-anchor nav navbar-nav">
        <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span><span class="sr-only">(current)</span></a></li>
        <li class="dropdown"> 
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Solutions <b class="caret"></b></a>

          <ul class="dropdown-menu nav-drop">
              <li><a href="info_tech.php" class="">Information & Technology</a></li>
              <li><a href="web_solution.php" class="">Web Design</a></li>
              <li><a href="graphics_design.php" class="">Graphics Design</a></li>
              <li><a href="printing_marketing.php" class="">Printing & Marketing</a></li>
          </ul>
        </li>        
        <li><a href="showcase.php">Showcase </a></li>
    <li id="nav-nobold"><a href="request.php">
    <button type="button" id ="nav-button" class="btn btn-success">
 Quote</button></a></li>
      </ul>

      <ul class=" nav-anchor nav navbar-nav navbar-right">
      <li>
          <a href="#" data-target="#ebook" data-toggle="modal">
            <i class="fa fa-book" aria-hidden="true" style="font-size: 20px;"></i>
          </a>
      </li>      
        <li><a href="about.php">About </a></li>
		<li id="nav-nobold"><a href="#">
    <button type="button" id ="nav-button" class="btn btn-primary" data-target="#myModal" data-toggle="modal">
    <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Contact Us</button></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class=" modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="custom-modal modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: crimson;">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel"><b>GET IN TOUCH</b></h3>
      </div>
      <div class="custom-modal modal-body">
            <h5><b>DROP US A LINE...</b></h5>
            <div class="row">
            <div class="col-md-6">
            <br>
              <form action="<?php echo $_SERVER['SCRIPT_NAME'] ;?>" method="POST">
                <div class="custom-in input-group">
                  <span class="input-group-addon" id="basic-addon1">Name*</span>
                  <input type="text" class="custom-input form-control" placeholder="Name" aria-describedby="basic-addon1" name="name" maxlength="30">
                </div>
                <div class="custom-in input-group">
                  <span class="input-group-addon" id="basic-addon1">E-mail&nbsp</span>
                  <input type="email" class="custom-input form-control" placeholder="E-mail" aria-describedby="basic-addon1" name="email" maxlength="30">
                </div>  
                <div class="custom-in input-group">
                  <span class="input-group-addon" id="basic-addon1">Phone</span>
                  <input type="tel" class="custom-input form-control" placeholder="Phone" aria-describedby="basic-addon1" name="phone" maxlength="20">
                </div>  
                <div class="form-group">
                  <label for="comment">Message:</label>
                  <textarea class="custom-input form-control" rows="5" id="comment" name="message" maxlength="200"></textarea>
                </div>             
              </div>
              <div class="details col-md-5">
                  <p>
                    <h4><i>DETAILS</i></h4>
                    <hr>
                   <p class="_info"> 
      <ul class="custom_ul contact">
        <li><span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span><strong style="color: #cc6363">JYASHAA</strong> CorporatroniX Nepal</li>        
        <li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Lalitpur ,Kathmandu , Nepal</li>
        <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> 9841471328, 9803240488 </li>
        <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@jyashaa.com">info@jyashaa.com</a></li>
        <li><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span><a href="http://www.jyashaa.com" target="new">www.jyashaa.com</a></li>
        <li>
          <ul class="social-list">
            <li class="facebook"><a href="https://www.facebook.com/Jyashaa-323970851382435/" target="new"><img src="images/social/facebook.png"></a></li>
            <li class="instagram"><a href="#"><img src="images/social/instagram.png"></a></li>
            <li class="twitter"><a href="#"><img src="images/social/twitter.png"></a></li>
            <li class="google"><a href="#"><img src="images/social/google.png"></a></li>
          </ul>
        </li>
      </ul><br><br>
                  </p>
                </p>
              </div>
            </div>  
      </div>
      <div class="custom-modal modal-footer">
        <button type="submit" class="btn btn-primary">Send</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['phone'])&&isset($_POST['message'])){
?>
      <script type="text/javascript">  
        $(window).load(function()
      {
          $('#my_Modal').modal('show');
      });
      </script>

<?php

  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $message=$_POST['message'];
  if (!empty($name)&&!empty($email)&&!empty($phone)&&!empty($message)){
    if(mail('info@jyashaa.com',$email,$phone.$message)){
      $mail_status='<div class="alert alert-success" role="alert">Your message has been sent successfully. Thank you for your enquiry.</div>';
      }else{
      $mail_status='<div class="alert alert-warning" role="alert">An error occured while processing your request. Please try submitting again.</div>';
      }
  }
  else{
      $mail_status='<div class="alert alert-danger" role="alert">Oh snap! one or more required fields were missing!
      Please fill up all field and try submitting again.
      </div>';
  }
}

?>

<div class="container">
  <!-- Modal -->
  <div class=" modal fade" id="my_Modal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="custom-modal-message modal-content">
        <div class="modal-body">
          <p><?php echo $mail_status; ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


  <!-- Modal -->
   <div class="container-fluid modal fade" id="ebook" role="dialog">
    <div class="modal-dialog modal-custom" role="document"> 
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body" style="padding: 0px;">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <!-- Wrapper for slides -->
                   <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="images/others/brochure_back.jpg">
                    </div>
                    <!--<div class="item">
                      <img src="images/others/front.jpg">
                    </div>-->
                  </div>
                  <!-- Controls -->
                  <!--<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>-->
                </div>

                <div class="download">
                    <a href="images/others/jyashaa-E-brochure.pdf" target="new">
                      <button type="button" class="center-block btn btn-danger">Download</button>
                    </a>
                </div>
        </div>
      </div>
    </div>
  </div>