<?php include("resources/PHP/main.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="php Contact Form">
    <meta name="keywords" content="php, server name, client info">
    <meta name="author" content="Kenneth Garcia">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--BOOTSWATCH Flatly CDN-->
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/flatly/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T5jhQKMh96HMkXwqVMSjF3CmLcL1nT9//tCqu9By5XSdj7CwR0r+F3LTzUdfkkQf" crossorigin="anonymous">
    <title>Contact Us</title>
  </head><!--end of head-->
  <body>
    <nav class="navbar navbar-dark bg-primary">
      <div class="container">
        <div class="navbar-header">
          <a href="index.php" class="navbar-brand">MY Website</a>
        </div>
      </div><!--end of container-->
    </nav><!--end of nav-->
    <div class="container">
      <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" class="form-control">
        </div><!--end of form-group-->

        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" class="form-control">
        </div><!--end of form-group-->

        <div class="form-group">
          <label>Message</label>
          <input type="text" name="messge" class="form-control">
        </div><!--end of form-group-->
        <br>
        <button type="submit" name="btnSubmit" class="btn btn-primary">Submit</button>
      </form><!--end of form-->
    </div><!--end of container-->
  </body>
</html>
