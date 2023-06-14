<!DOCTYPE html>
<html lang="en">

<?php
	require('config/config.php');
	require('config/db.php');

	// Check For Submit
	if(isset($_POST['submit'])){
		// Get form data
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $concern = mysqli_real_escape_string($conn,$_POST['message']);

		$query = "INSERT INTO org_webfinal.concern(username, email, concern) VALUES ( '$username', '$email','$concern')";

        if(mysqli_query($conn, $query)){
            header('Location: contact us.php');
        } else {
            echo 'ERROR: '. mysqli_error($conn);
        }
    }
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Association of Computer Scientist Organization</title>
  <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
  <header>
    <div class="hero">
    <img src="img/cd.png" alt="Logo" class="logo">
      <div class="row">
        <div class="hero-info">
          <h1> ASSOCIATION OF COMPUTER SCIENTIST</h1>
          
    <nav>
      <ul>
        <b>
        <li><a href="index.php">Home</a></li>
        <li><a href="contact us.php">Contact Us</a></li>
        <li><a href="account.php">Account</a></li>
        </b>
      </ul>
      <br>  
    </nav>
  </header>
<body>
    <div class="contact-container">
        <h1>Contact Us</h1>
        <div class="contact-form">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <label for="name"><b>Name</b></label>
              <input type="text" id="username" name="username" placeholder="Username" autofocus="">
      
              <label for="email"><b>Email</b></label>
              <input type="text" id="email" name="email" placeholder="Your Email"  autofocus="">
      
              <label for="concern"><b>Concern</b></label>
              <textarea id="concern" name="concern" placeholder="Your concern" autofocus=""></textarea>
      
              <div class="submit-button">
              <button type="submit" onclick="mesFunc()" name="submit" value="Submit">Submit</button>
              </div>
            </form>
        <script>
          function mesFunc() {
            var user = document.getElementById('username').value;
            var email = document.getElementById('email').value;
            var message = document.getElementById('message').value;

            if (user.trim() === '') {
                alert("Please enter username!");
            } else if (email.trim() === '') {
                alert("Please enter email");
            } else if (message.trim() === '') {
                alert("Please enter message");    
            } else {
                alert("Message sent");
            }
        }
    </script>
        </div>
      </div>


</html>
