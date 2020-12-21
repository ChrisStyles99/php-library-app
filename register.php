<?php

include('./class/userClass.php');

$registerError = '';

$errors = array('name' => '', 'email' => '', 'password' => '');
$regMessage = '';

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  if (empty($name)) {
    $errors['name'] = 'Name can not be empty';
  }

  if (empty($email)) {
    $errors['email'] = 'Email can not be empty';
  } else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors['email'] = 'Email must be valid';
    }
  }

  if (empty($password)) {
    $errors['password'] = 'Password can not be empty';
  }

  if (!array_filter($errors)) {
    $newUser = new User();
    $error = $newUser->registerUser($name, $email, $password);
    if ($error) {
      $regMessage = $error;
    } else {
      header('Location: login.php');
    }
  }
}

?>

<?php include('./includes/header.php'); ?>

<?php 
  if(isset($_SESSION['name'])) {
    header('Location: profile.php');
  }
?>

<div class="container login">
  <div class="user-error-msg">
    <?php echo $regMessage; ?>
  </div>
  <div class="login-card">
    <div class="login-img">
      <img src="https://images.pexels.com/photos/2925304/pexels-photo-2925304.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Library photo">
    </div>
    <div class="login-form">
      <h1>Register</h1>
      <form action="register.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <div class="error-msg">
          <?php echo $errors['name'] ?>
        </div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <div class="error-msg">
          <?php echo $errors['email'] ?>
        </div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <div class="error-msg">
          <?php echo $errors['password'] ?>
        </div>
        <button type="submit" name="submit">Register!</button>
      </form>
      <p>Already have an account? <a href="login.php">Login now</a></p>
    </div>
  </div>
</div>

<?php include('./includes/footer.php'); ?>