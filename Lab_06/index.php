
<?php require_once('_config.php') ?>
<?php include_once('_partials/_header.php') ?>
<?php include_once('_partials/_footer.php') ?>
<?php


  $conn = mysqli_connect("localhost", "root", null, "lesson_03");

  $result = mysqli_query($conn, "SELECT * FROM products ORDER BY RAND() LIMIT 1");

  $row = mysqli_fetch_assoc($result);
?>


    <h1>My favourite country is <?= $row['name'] ?>.</h1>

    <div>
      <a href="./table.php">View all countries...</a>
    </div>
  