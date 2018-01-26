<?php
 require_once 'config.php';
 $redirect="http://easyit.rs/test/fb-callback.php";
 $permissions=['email'];
  $loginUrl=$helper->getLoginUrl($redirect,$permissions);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>FaceBook SDK Login example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Login form</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    
    <button type="submit" onclick="window.location='<?php echo $loginUrl;?>'" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
