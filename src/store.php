<?php
$poster = filter_input(INPUT_POST, 'poster');
$book_name = filter_input(INPUT_POST, 'book_name');
$review = filter_input(INPUT_POST, 'review');

$dbh = new PDO(
    'mysql:dbname=book_review;host=mysql;charset=utf8',
    'root',
    'password'
);

$query = "INSERT INTO `review` (`poster`, `book_name`, `review`) VALUES ('$poster', '$book_name', '$review')";
$dbh->query($query);
header("Location: ./index.php");
?>