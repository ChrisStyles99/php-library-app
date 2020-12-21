<?php 

  include('./class/bookClass.php');

  $fetchBooks = new Book();
  $books = $fetchBooks->getBooks();
?>

<?php include('./includes/header.php'); ?>

<div class="container books">
  <h1>BOOKS</h1>
  <div class="books-grid">
    <?php foreach($books as $book): ?>
    <div class="book-card">
      <div class="book-card-information">
        <div class="book-card-title">
          <h1><?php echo $book['title'] ?></h1>
        </div>
        <div class="book-card-desc">
          <!-- <p><?php echo substr($book['description'], 0, 75) ?></p> -->
          <p><?php echo $book['description'] ?></p>
        </div>
        <div class="book-card-footer">
          <a href="book.php?id=<?php echo $book['id'] ?>">Lend now!</a>
        </div>
      </div>
      <div class="book-card-img">
        <img src="<?php echo $book['image_url'] ?>" alt="Book cover">
      </div> 
    </div>
    <?php endforeach; ?>
  </div>
</div>

<?php include('./includes/footer.php'); ?>