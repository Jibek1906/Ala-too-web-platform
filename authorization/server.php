<?php	
// переменные
$username = "";
$email    = "";
$errors = array(); 

// подключение к db
$db = mysqli_connect('localhost', 'root', 'root', 'project');

// регистрация
if (isset($_POST['reg_user'])) { // соединенно с register.php isset=Определяет, установлена ли переменная, и не имеет ли она значение NULL
  // здесь сохраняются все данные из register.php
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);//проверяет похлжи ли пароли между собой
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  //если поле будет пустым запустит error.php
  if (empty($username)) { 
    array_push($errors, "Username is required"); 
  }

  if (empty($email)) { 
    array_push($errors, "Email is required"); 
  }

  if (empty($password_1)) { 
    array_push($errors, "Password is required"); 
  }

  if ($password_1 != $password_2) { //сверяет два пароля
	array_push($errors, "The two passwords do not match");
  }

  // для начаал проверяет db
  // если нет создает новый
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // если существует то выведет ошибку
    if ($user['username'] === $username) {
      array_push($errors, "User already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors);
    }
  }

  // регестрирует если не вышло ошибок
  if (count($errors) == 0) {
  	$password = md5($password_1);

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: main.html');
  }
}

// логин
if (isset($_POST['login_user'])) { // соединенно с login.php
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) { // если поля будут пустыми
    array_push($errors, "Email is required");
  }

  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) { // если все будет верно то переведет на main.html
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
      $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: main.html');
  	}else { // если нет выведет error
  		array_push($errors, "Wrong email or password combination");
  	}
  }
}

?>