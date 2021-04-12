<?php
include_once("book.php");

class CardHolder {
    private $cardHolderId;
    private $firstName;
    private $lastName;
    private $fullName;
    private $email;
    public $borrowedBooks = array();

    function __construct($cardHolderID, $firstName, $lastName, $email) {
        $this->cardHolderID = $cardHolderID;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->fullName = $firstName. " " .$lastName;
        $this->email = $email;
    }

    // Allows a card holder to borrow a book
    // Records are added to the borroweBooks variable
    function requestLoan($book) {
        //$borrowedBooks = array("A1"=>"overdue", "A2"=>"ontime", "A3"=>"returned");
        foreach($this->borrowedBooks as $x => $x_value) {
            if(strcmp($x_value, "overdue") == 0) {
                echo "<br>Cannot borrow book a new book when you have one overdue";
                return false;
            }
        }

        $this->borrowedBooks += array($book->bookId => "ontime");
        $book->decrementCopiesAvailable();
    }

    // Sets the status of a book ("overdue", "returned", "ontime")
    function setBookStatus($book, $newStatus) {
        $this->borrowedBooks[$book->bookId] = $newStatus;
    }


    // Prints out the books this user has borrowed and their status ("overdue", "returned", "ontime")
    function getBorrowedBookStatus() {
        if($this->borrowedBooks != null) {
            print_r($this->borrowedBooks);
        }
        else {
            echo "Card holder has no borrowed books";
        }
    }

    // Allows card holder to return book and updates book status to "returned"
    function returnBook($bookId) {
        foreach($this->borrowedBooks as $x) {
            if(strcmp($x, $bookId) == 0) {
                $this->borrowedBooks[$bookId] = "return";
                echo "<br>Book returned successfully";
                return false;
            }
        }
    }

    function getFirstName() {
        return $this->firstName;
    }

    function getId() {
        return $this->cardHolderId;
    }
}


?>