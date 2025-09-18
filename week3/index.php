<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>challenge 2</title>
</head>
<body>
    <?php
        echo "Challenge 2: PHP Control Structure - The Magic Number Game<br>";
        $number = rand(1, 100);
        echo "The input number is: ".$number."<br>";
        if(($number % 3 == 0) && ($number % 5 == 0))
        {
            echo "The magic number is Fizzbuzz";
        }
        elseif($number % 3 == 0)
        {
            echo "The magic number is Fizz";
        }
        elseif($number % 5 == 0)
        {
            echo "The magic number is Buzz";
        }
        else
        {
            echo "The magic number is ". $number; 
        }
    ?>
</body>
</html>