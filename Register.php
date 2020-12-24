<?php include 'funnction.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
  <title>Landing Page</title>
</head>
<body>

<?php echo $miniNav; ?>



<div class="container my-4">
<form method ='post' action = "regesterValdtion.php">
              <p class="h4 mb-4">Sign up</p>
         
              <div class="form-row mb-4">
                <div class="col">
                  <!-- User name -->
                  <input type="text" required name="name" id="defaultRegisterFormFirstName" class="form-control" placeholder="User Name" required>
                </div>
              </div>
  
              <!-- Password -->
              <input type="password" name="password" required id="defaultRegisterFormPassword" class="form-control" placeholder="password" aria-describedby="defaultRegisterFormPasswordHelpBlock" required>
              <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                At least 8 characters and 1 digit
              </small>

              <!-- RePassword -->
              <input type="password" name="repassword" required id="defaultRegisterFormPassword" class="form-control" placeholder="RePassword" aria-describedby="defaultRegisterFormPasswordHelpBlock" required>
              <small id="defaultRegisterFormPasswordHelpBlock" required class="form-text text-muted mb-4">
                At least 8 characters and 1 digit
            
              </small>
    
              <!-- Phone number -->
              <input type="text" name="phonenumber" id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock" required>
              <small id="defaultRegisterFormPhoneHelpBlock"  class="form-text text-muted mb-4">
                
              </small>
    
              <!-- Sign up button -->
              <button class="btn btn-info my-4 btn-block waves-effect waves-light" type="submit">Sign in</button>




<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</body>
</html>