<?php	

$username = "";
$email    = "";
$errors = array(); 


$db = mysqli_connect('localhost', 'root', 'root', 'project');


if (isset($_POST['reg_user'])) { 

  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);


  if (empty($username)) { 
    array_push($errors, "Username is required"); 
  }

  if (empty($email)) { 
    array_push($errors, "Email is required"); 
  }

  if (empty($password_1)) { 
    array_push($errors, "Password is required"); 
  }

  if ($password_1 != $password_2) { 
	array_push($errors, "The two passwords do not match");
  }

  

  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "User already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors);
    }
  }

 
  if (count($errors) == 0) {
  	$password = md5($password_1);

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: main.php');
  }
}


if (isset($_POST['login_user'])) { 
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) { 
    array_push($errors, "Email is required");
  }

  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) { 
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);

  if (mysqli_num_rows($results) == 1) {
      $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: main.php');
  }

    if ($_SESSION['email'] == "Javlon@alatoo.edu.kg") {
      header('location: main/python/downloads.php');
  }

    if ($_SESSION['email'] == "Nurmuhammed@alatoo.edu.kg") {
      header('location: main/c++/downloads.php');
  }
    if ($_SESSION['email'] == "Ruslan@alatoo.edu.kg") {
      header('location: main/html/downloads.php');
  }
    if ($_SESSION['email'] == "Azamat@alatoo.edu.kg") {
            header('location: main/java/downloads.php');
        }else{ 
  		array_push($errors, "Wrong email or password combination");
  }
 }
}

?>