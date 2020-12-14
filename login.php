<?php

include('./class/userClass.php');

$errors = array('email' => '', 'password' => '');
$loginError = '';

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

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
    $user = new User();
    $error = $user->loginUser($email, $password);
    if ($error) {
      $loginError = $error;
    } else {
      header('Location: index.php');
    }
  }
}

?>

<?php include('./includes/header.php'); ?>

<div class="container login">
  <div class="user-error-msg">
    <?php echo $loginError; ?>
  </div>
  <div class="login-card">
    <div class="login-form">
      <h1>Login</h1>
      <form action="login.php" method="POST">
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
        <button type="submit" name="submit">Login!</button>
      </form>
      <p>Don't have an account yet? <a href="register.php">Register now</a></p>
    </div>
    <div class="login-img">
      <img src="https://images.pexels.com/photos/3747505/pexels-photo-3747505.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Library photo">
    </div>
  </div>
</div>

<?php include('./includes/footer.php'); ?>