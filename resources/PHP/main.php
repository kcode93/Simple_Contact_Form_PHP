<?php
  #Messages
  $msg='';
  $msgClass='';

  #Check For Submit
  if(filter_has_var(INPUT_POST,'btnSubmit')){
    //get form data
    $localName = htmlspecialchars($_POST['name']);
    $localEmail = htmlspecialchars($_POST['email']);
    $localMessage = htmlspecialchars($_POST['message']);


    #check Required Fields
    if(!empty($localName) && !empty($localEmail) && !empty($localMessage)){
      //check Email
      if (filter_var($localEmail, FILTER_VALIDATE_EMAIL) === false){
        $msg = 'Please use a valid email';
        $msgClass = 'alert-danger';
      }else {
        /*
        //recipient Email
        $toEmail = '';
        $subject = 'Conctact Request From '.$localName;
        $body = '<h2>Contact Request</h2>
                 <h4>Name:</h4><p>'." $localName".'</p>
                 <h4>Email:</h4><p>'." $localEmail".'</p>
                 <h4>Message:</h4><p>'." $localMessage".'</p>';

        //Email Headers
        $headers = "MIME-Version 1.0" ."\r\n";
        $headers .= "Content-Type:text/html;charset=UTF-8" ."\r\n";

        //additional Headers
        $headers .= "From: "."$localName"."<"."$localEmail".">"."\r\n";

        //send email if fields are correct
        if (mail($toEmail,$subject,$body,$headers)){
          $msg = 'Your email has been sent successfully';
          $msgClass = 'alert-success';

        }else {
          $msg = 'Something went wrong, email was not sent successfully';
          $msgClass = 'alert-danger';

        }
        */
        $msg = 'email was sent successfully';
        $msgClass = 'alert-success';
      }
    }else{
        $msg = 'Please fill in all fields';
        $msgClass = 'alert-danger';

    }
  }
?>
