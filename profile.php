<?php include('./includes/header.php'); ?>

<div class="container profile">
  <div class="information">
    <h1>Profile information</h1>
    <p>Name: <?php echo $_SESSION['name'] ?></p>
    <p>Email: <?php echo $_SESSION['email'] ?></p>
  </div>
  <div class="my-books">
    <h1>My books</h1>
    <!-- <div class="books-grid">
      <div class="book-card">
        <div class="book-card-information">
          <div class="book-card-title">
            <h1>Lord of the rings</h1>
          </div>
          <div class="book-card-desc">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, odit.</p>
          </div>
          <div class="book-card-footer">
            <a href="#">Lend now!</a>
          </div>
        </div>
        <div class="book-card-img">
          <img src="https://images-na.ssl-images-amazon.com/images/I/51EstVXM1UL._SX331_BO1,204,203,200_.jpg" alt="Book cover">
        </div>
      </div>
    </div> -->
  </div>
</div>

<?php include('./includes/footer.php'); ?>