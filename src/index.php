<?php 
    if (isset($_POST["number"])) {
        $number = $_POST["number"];
        $counter = 1;
        do {
            $number = ($number % 2 === 0 ? $number / 2 : $number * 3 + 1);
            echo $counter++ . ".) " , $number . "</br>";
        } while ((int)$number !== 1);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./" method="POST">
        <label for="number">Input a number</label>
        <input type="number" name="number" id="number">
        <button type="submit">Compute</button>
    </form>
</body>
</html>