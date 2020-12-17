<?php 

  include('dbClass.php');

  class Book extends DB {
    public function getBooks() {
      $sql = 'SELECT * FROM books';
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
      $books = $stmt->fetchAll();
      return $books;
    }

    public function getProfileBooks($user_id) {
      $sql = 'SELECT * FROM books WHERE user_id = ?';
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute(array($user_id));
      $books = $stmt->fetchAll();
      return $books;
    }

    public function getSingleBook($id) {
      $sql = 'SELECT * FROM books where id = ?';
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute(array($id));
      $book = $stmt->fetch();
      return $book;
    }

    public function reserveBook($id, $user_id) {
      $sql = 'UPDATE books SET available = 0, user_id = ? WHERE id = ?';
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute(array($user_id, $id));
      return "You lended the book!";
    }

    public function returnBook($id) {
      $sql = 'UPDATE books SET available = 1, user_id = NULL WHERE id = ?';
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute(array($id));
      return "You successfully returned the book!";
    }
  }