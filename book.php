<?php include('./includes/header.php'); ?>

<?php
if (!isset($_SESSION['name'])) {
  header('Location: login.php');
}

include('./class/bookClass.php');

$message = "";
$returnMessage = "";

if(isset($_POST['lend'])) {
  $reserve = new Book();
  $message = $reserve->reserveBook($_GET['id'], $_SESSION['id']);
}

if(isset($_POST['return'])) {
  $return = new Book();
  $returnMessage = $return->returnBook($_GET['id']);
}

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $fetchBook = new Book();
  $book = $fetchBook->getSingleBook($id);
} else {
  header('Location: books.php');
}

?>

<div class="container single-book">
  <?php if (!$book) : ?>
    <div class="book-error">
      <h1>Sorry, there is no book with that id :(</h1>
      <a href="books.php">Return to books list</a>
    </div>
  <?php else : ?>
    <div class="reserved-message">
      <h1><?php echo $message; ?></h1>
    </div>
    <div class="reserved-message">
      <h1><?php echo $returnMessage; ?></h1>
    </div>
    <div class="single-book-card">
      <div class="single-book-text">
        <div class="single-book-title">
          <h1><?php echo $book['title'] ?></h1>
        </div>
        <div class="single-book-description">
          <?php echo $book['description'] ?>
        </div>
        <div class="single-book-footer">
          <?php if(!$book['available'] && $_SESSION['id'] == $book['user_id']): ?>
            <form action="book.php?id=<?php echo $book['id'] ?>" method="POST">
              <button type="submit" name="return">Return the book</button>
            </form>
          <?php elseif($book['available']): ?>
            <form action="book.php?id=<?php echo $book['id'] ?>" method="POST">
              <button type="submit" name="lend">Lend now!</button>
            </form>
          <?php else: ?>
            <p class="book-lended-error">Sorry, the book is already lended :(</p>
          <?php endif; ?>
        </div>
      </div>
      <div class="single-book-img">
        <img src="<?php echo $book['image_url'] ?>" alt="Book">
      </div>
    </div>
  <?php endif; ?>
</div>

<?php include('./includes/footer.php'); ?>