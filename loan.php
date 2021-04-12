<?php
session_start();
if(isset($_POST["CardHolderId"])) {

    
    header("Location: success.html");
}

?>

<html>
    <head>
        <title>Loan out a book</title>
    </head>
    <body style="background-color: rgb(189, 79, 79);">

        <div class="Log-in" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
            <form method="POST" action="loan.php">
                <h1>Loan out a book</h1>
                <input name="CardHolderId" type="text" placeholder="Card Holder Id" required><br>
                <input name="BookId" type="text" placeholder="Book Id" required><br>
                <button type="submit" class="submit" align="center">Submit</button>
            </form>

        </div>

    </body>
</html>