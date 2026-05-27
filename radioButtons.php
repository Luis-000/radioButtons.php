<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="radioButtons.php" method="POST">
        <input type="radio" value="Visa" name="creditcard">
        Visa<br>
        <input type="radio" value="Mastercard" name="creditcard">
        Mastercard<br>
        <input type="radio" value="American Express" name="creditcard">
        American Express<br>
        <input type="submit" name="confirm" value="confirm">

    </form>
</body>

</html>


<?php

if (isset($_POST["confirm"])) {

    $credit_card = null;

    if (isset($_POST["creditcard"])) {

        $credit_card = $_POST["creditcard"];
    }

    switch ($credit_card) {
        case "Visa":
            echo "You've selected Visa!";
            break;
        case "Mastercard":
            echo "You've selected Mastercard!";
            break;
        case "American Express":
            echo "You've selected American Express!";
            break;
        default:
            echo "Please select an option!";
    }

    /* //Using if as a beginner :_:
    if ($credit_card == "Visa") {
        echo "You've selected Visa!";
    } else if ($credit_card == "Mastercard") {
        echo "You've selected Mastercard!";
    } else if ($credit_card == "American Express") {
        echo "You've selected American Express!";
    } else {
        echo "Please select an option!";
    }

     */
}
?>