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
    <title>N+1 Theory</title>
</head>
<body>
    <h1>N+1 Theory</h1>
    <form action="./" method="POST">
        <label for="number">Input a number</label>
        <input type="number" name="number" id="number">
        <button type="submit" style="color: red;">Compute</button>
    </form>
</body>
</html>