<?php

class Book {
    public $bookId;
    public $bookName;
    public $publisher;
    public $author;
    public $pubYear;
    public $copiesAvailable;

    function __construct($bookId, $bookName) {
        $this->bookId = $bookId;
        $this->bookName = $bookName;
    }

    function newBook($bookId, $bookName, $publisher, $author, $pubYear) {
        $this->bookId = $bookId;
        $this->bookName = $bookName;
        $this->publisher = $publisher;
        $this->author = $author;
        $this->pubYear = $pubYear;
    }

    function setCopiesAvailable($num) {
        $this->copiesAvailable = $num;
    }

    function decrementCopiesAvailable() {
        $this->copiesAvailable = $this->copiesAvailable-1;
    }

    function incrementCopiesAvailable() {
        $this->copiesAvailable = $this->copiesAvailable+1;
    }
}
?>