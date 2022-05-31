<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watread Premium</title>
<link rel="stylesheet" src="faqs_style.css" type="text/css">
</head>
<body>
    <div class="container1">
        <h1> How much To Avail Watread Premium?</h1>
        <br>
                <p>Check your Discounts now!</p>
    <div class="form">
        <form action="premium.php" method="post">
        <p>How many premium books you want to Avail?:</p>
        <input class="total1" type="text" name="total"> <br>
        <br>
        <p>For how many years will you rent it?:</p>
        <input class="year1" type="text" name="years">
        <div>
        <br>
        <br>
        <button class="button" type="submit" name="button">ENTER</button>
        </div>
        <br>
        </form>    
    </div>
        </div>
    <div class="container2">
        <div class="year">
            <?php
            echo"<h2>Years</h2><br>";
            if(isset($_POST["button"])){
                $TotalBooks = $_POST["total"];
                $YearsNumber = $_POST["years"];
                for ($a=1; $a<=$YearsNumber; $a++)
                {
                    echo (2022 + $a);
                    echo"<br>";
                }
            }
            ?>
        </div>

        <div class="total">
            <?php
            echo '<div><h2>Amount Yearly </h2></div><br>';
            if(isset($_POST["button"])){
                for($b=1; $b<=$YearsNumber; $b++)
                {
                    if(($b%1) == 0){
                        $TotalBooks = (1 + 2) * $TotalBooks;
                    }
                    if(($b%2) !=0){
                        $TotalBooks = (1 + 5) * $TotalBooks;
                    }
                    echo (round($TotalBooks, 2));
                    echo "<br>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>