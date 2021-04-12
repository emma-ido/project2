<?php
include_once("book.php");
include_once("employee.php");
include_once("cardholder.php");

if(session_status() != 2) {
    session_start();
    $currentEmployee = new Employee(1, "bart.simpson@gmail.com", "Bart", "Simpson");
    $_SESSION["Employee"] = serialize($currentEmployee);
    $book1 = new Book("e3", "Moonlight");
    $book2 = new Book("r5", "Sunlight");
    $book3 = new Book("u7", "Sunshine");
    $book4 = new Book("f5", "Moonshine");
    $holder1 = new CardHolder("1", "Emma", "Ukpong", "emmankelam@gmail.com");
    $holder2 = new CardHolder("2", "Mary", "Johnson", "maryjohnson@gmail.com");
    $holder3 = new CardHolder("3", "Luca", "Thomas", "luca-thomas@gmail.com");
    $holder4 = new CardHolder("4", "Florence", "Nightingale", "florence.night@gmail.com");
    $holder1->requestLoan($book1);
    $holder2->requestLoan($book2);
    $holder3->requestLoan($book3);
    $holder4->requestLoan($book4);
    
    $books = array("e3"=>$book1, "r5"=>$book2, "u7"=>$book3, "f5"=>$book4);
    $cardHolders = array("1"=>$holder1, "2"=>$holder2, "3"=>$holder3, "4"=>$holder4);

    $cardHolderJSON = json_encode($cardHolders);
    $_SESSION["cardholder"] = $cardHolderJSON;
    $booksJSON = json_encode($books);
    $_SESSION["books"];

    //$cardholder1 = $_SESSION["cardholder"]["2"]->getFirstName();
    //echo $cardholder1;
    //$bookie1 = $_SESSION["books"]["u7"]->bookName;
    //echo $bookie1;
}


?>
<html>
    <head>
        <title>Public Library</title>
        <style>
            .bar a:hover {
                background-color: red;
            }
        </style>
    </head>
    <body style="background-color: rgb(189, 79, 79);">
    
        <h1 style="color: black; position: absolute; top: 35%; left: 45%; transform: translate(-30%, -45%);">Hello, <?php echo $currentEmployee->getFirstName(); ?> </h1>
        <div class="bar" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
        background-color: black;padding: 14px 16px;">
            
            <a href="#" style="padding: 14px 16px; font-size: 16px; text-decoration: none; color: white;">ADD CARD HOLDER</a>
            <a href="loan.php" style="padding: 14px 16px; font-size: 16px; text-decoration: none; color: white;">LOAN OUT BOOK</a>
            <a href="#" style="padding: 14px 16px; font-size: 16px; text-decoration: none; color: white;">EDIT CARD HOLDER</a>
        </div>

    </body>
</html>