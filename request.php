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
    ?>
  </head>
  <body>
    <!--NAVBAR-->  
    <?php
      include 'resources/templates/navbar.php';
    ?>
    <div class="parallax"></div>
      <div class="get col-md-12">
        <h1>GET A QUOTE</h1>
      </div> 
      <div class="quote jumbotron">
        <div class="container">
          <p class="info-quote" style="font-size: 15px;">
            If you would like us involved in your project, don’t forget to read our Terms & Conditions.<br><br>

            Please note, fields marked with a * are mandatory.
            <hr style="border-top-color : #2e353b;">
            <h3>Business Details</h3>
          </p>
          <p class="quote-form"  style="font-size: 15px;">
          Please include details about your business along with the main contact for this project.<hr style="border-top-color : #080808;">

          <form method="POST" action="request.php">
          <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Name*</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" name="qname">
            </div>          
            <div class="form-group">
              <label for="exampleInputEmail1">Email address*</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="qemail">
            </div> 
              <div class="form-group">
                <label for="exampleInputPassword1">Phone*</label>
                <input type="tel" class="form-control" id="exampleInputPassword1" placeholder="Phone" name="qphone">
              </div>            
              <div class="form-group">
                <label for="exampleInputPassword1">Business Name*</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Business Name" name="qbusiness">
              </div>                   
            </div>


            <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Do you currently have a website? Please enter the entire URL</label>
              <input type="URL" class="form-control" id="exampleInputEmail1" placeholder="http://www.example.com" name="qurl">
            </div>                
            <div class="form-group">
              <label for="exampleInputEmail1">Solution</label>
                <select class="form-control" name="qtype">
                  <option value="1">Information & Technology</option>
                  <option value="2">Web Designing</option>
                  <option value="3">Graphics Design</option>
                  <option value="4">Printing & Marketing</option>
                </select>
            </div>    
            <div class="form-group">
              <label for="exampleInputEmail1">Please provide some information on what your business does*</label>
              <textarea class="form-control" rows="3" name="qtext"></textarea>  
            </div>    
            </div>
            </div>
            <div class="row">
              <div class="col-md-6">
               <button type="submit" class="btn btn-success">Submit</button>
              </div> 
            </div>
          </form>
          </p>
        </div>
      </div>
    <!--FOOTER-->
    <?php
      include 'resources/templates/footer.php';
      include 'resources/library/script.php';
    ?>
  </body>
</html>

<?php
  if(isset($_POST['qname'])&&isset($_POST['qemail'])&&isset($_POST['qphone'])&&isset($_POST['qbusiness'])&&isset($_POST['qurl'])&&isset($_POST['qtype'])&&isset($_POST['qtext']) ){ 
?>
      <script type="text/javascript">  
        $(window).load(function()
      {
          $('#quote_Modal').modal('show');
      });
      </script>
<?php  
       $name=htmlentities($_POST['qname']);
       $email=htmlentities($_POST['qemail']);
       $phone=htmlentities($_POST['qphone']);
       $business=htmlentities($_POST['qbusiness']);
       $url=htmlentities($_POST['qurl']);
       $type=htmlentities($_POST['qtype']);
       $text=htmlentities($_POST['qtext']);
        
        switch($type){
            case 1:
                $service='Information and Technology';
                break;
            case 2:
                $service='Web Design';
                break; 
            case 3:
                $service='Graphics Design';
                break;   
            case 4:
                $service='Printing and Marketing';
                break;                                            
        }
    if(!empty($name)&&!empty($email)&&!empty($phone)&&!empty($business)&&!empty($text)){
  //    $message=$name.' '.$email.' '.$url.' '.$phone.' '.$type.' '.$text;
      $message="NAME:\t$name \n Email:\t$email \n URL:\t$url \n Phone:\t$phone \n Type:\t$service \n Info:\t$text";      
       if(mail('info@jyashaa.com', $business, $message)){
      $mail_status='<div class="alert alert-success" role="alert">Your message has been sent successfully. Thank you for your enquiry.</div>';
       }else{
      $mail_status='<div class="alert alert-warning" role="alert">An error occured while processing your request. Please try submitting again.</div>';
       }
    }else{
      $mail_status='<div class="alert alert-danger" role="alert">Oh snap! one or more required fields were missing!
      Please fill up all field and try submitting again.
      </div>';      
    }   
  }
?>

<div class="container">
  <!-- Modal -->
  <div class=" modal fade" id="quote_Modal" role="dialog">
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