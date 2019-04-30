<?php
  session_start();
  $count = 0;
  // connecto database
  
  $title = "The Online Book Shop";
  require_once "./template/header.php";
  require_once "./functions/database.php";
  $conn = db_connect();
  $row = select6LatestBook($conn);
?>
      <!-- Example row of columns -->
      <p class="lead text-center text-muted">Latest books</p>
      <div class="row">
        <?php foreach($row as $book) { ?>
      	<div class="col-md-2">
      		<a href="book.php?bookisbn=<?php echo $book['book_isbn']; ?>">
           <img class="img-responsive img-thumbnail" src="./media/img/<?php echo $book['book_image']; ?>">
          </a>
      	</div>
        <?php } ?>
      </div>
      <div class="row">
        <?php foreach($row as $book) { ?>
        <div class="col-md-2">
          <a href="book.php?bookisbn=<?php echo $book['book_isbn']; ?>">
           <img class="img-responsive img-thumbnail" src="./media/img/<?php echo $book['book_image']; ?>">
          </a>
        </div>
        <?php } ?>
      </div>
<?php
  if(isset($conn)) {mysqli_close($conn);}
  require_once "./template/footer.php";
?>