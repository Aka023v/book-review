<?php
$id = filter_input(INPUT_POST, 'id');
$poster = filter_input(INPUT_POST, 'poster');
$book_name = filter_input(INPUT_POST, 'book_name');
$review = filter_input(INPUT_POST, 'review');

$dbh = new PDO(
  'mysql:dbname=book_review;host=mysql;charset=utf8',
  'root',
  'password'
);
$query = "UPDATE review SET poster='$poster', book_name='$book_name', review='$review' WHERE id = '$id'";
$dbh->query($query);

header('Location: ./index.php');
exit;
?>