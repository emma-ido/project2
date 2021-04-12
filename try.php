<?php
include_once("cardholder.php");
$borrowedBooks = array("A1"=>"overdue", "A2"=>"ontime", "A3"=>"returned");

print_r($borrowedBooks);

$book1 = new Book("e3", "Moonlight");
$book2 = new Book("r5", "Sunlight");
$book3 = new Book("u7", "Sunshine");
$book4 = new Book("f5", "Moonshine");

$borrowedBooks += array("B4" => "ontime");

print_r($borrowedBooks);
//($cardHolderID, $firstName, $lastName, $email
$david = new CardHolder(1, "Emma", "Ukpong", "emmankelam@gmail.com");
echo "\n";
$david->requestLoan($book1);
$david->requestLoan($book2);

print_r($david->borrowedBooks);
echo "\n";
$david->setBookStatus($book1, "overdue");



$david->requestLoan($book3);

$david->setBookStatus($book1, "returned");
$david->requestLoan($book3);
print_r($david->borrowedBooks);
?>