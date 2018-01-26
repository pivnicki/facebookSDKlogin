<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Your profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<a href="logout.php">Logout</a>
<div class="col-sm-12 text-center">
<img src="<?php echo $_SESSION['userdata']['picture']['url'];?>"/>
</div>
  <h2>Your data</h2>           
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $_SESSION['userdata']['first_name'];?></td>
        <td><?php echo $_SESSION['userdata']['last_name'];?></td>
        <td><?php echo $_SESSION['userdata']['email'];?></td> 
      </tr>
    </tbody>
  </table>
  
  
  
</div>

</body>
</html>
