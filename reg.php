<?php
	require('config/config.php');
	require('config/db.php');

	// Check For Submit
	if(isset($_POST['submit'])){
		// Get form data
        $idaccount = mysqli_real_escape_string($conn,$_POST['idaccount']);
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);

		$query = "INSERT INTO org_webfinal.account (idaccount, username, email, password) VALUES ('$idaccount', '$username', '$email', '$password')";

        if(mysqli_query($conn, $query)){
            header('Location: account.php');
        } else {
            echo 'ERROR: '. mysqli_error($conn);
        }
    }
?>


  <br/>
  <div style="width:30%; margin: auto; text-align: center;  padding-top:7% ;  font-family: 'Times New Roman', Times, serif ;  padding-bottom: 8%;">
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <h1>SIGN UP</h1>
      <input type="text" id="idaccount" name="idaccount" placeholder="Enter Id" required="" autofocus="">
      <input type="text" id="username" name="username" placeholder="Username" required="" autofocus="">
      <input type="text" id="email" name="email" placeholder="Email" required="" autofocus="">
      <input type="password" id="password" name="password" placeholder="Password" required="">  
      <button type="submit" class="btn" onclick="registerFunc()" name="submit" value="Submit">Submit</button>
    <button type="button" class="btn" onclick="document.location='account.php'">LOGIN</button>
    
  </form>
  
  <script>
        function registerFunc() {
                alert("Register successfully!");
            
        }
    </script>

  </div>
