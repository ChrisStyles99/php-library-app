<?php include('./includes/header.php'); ?>

<?php
if (!isset($_SESSION['name'])) {
  header('Location: login.php');
}

include('./class/bookClass.php');

$fetchBooks = new Book();
$books = $fetchBooks->getProfileBooks($_SESSION['id']);

?>

<div class="container profile">
  <div class="information">
    <h1>Profile information</h1>
    <p>Name: <?php echo $_SESSION['name'] ?></p>
    <p>Email: <?php echo $_SESSION['email'] ?></p>
  </div>
  <div class="my-books">
    <h1>My books</h1>
    <div class="books-grid">
      <?php if (!$books) : ?>
        <p>Sorry, you don't have any reserved books</p>
      <?php else : ?>
        <?php foreach ($books as $book) : ?>
          <div class="book-card">
            <div class="book-card-information">
              <div class="book-card-title">
                <h1><?php echo $book['title'] ?></h1>
              </div>
              <div class="book-card-desc">
                <p><?php echo $book['description'] ?></p>
              </div>
              <div class="book-card-footer">
                <a href="book.php?id=<?php echo $book['id'] ?>">See book</a>
              </div>
            </div>
            <div class="book-card-img">
              <img src="<?php echo $book['image_url'] ?>" alt="Book cover">
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php include('./includes/footer.php'); ?>