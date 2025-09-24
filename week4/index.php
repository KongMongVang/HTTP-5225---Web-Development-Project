<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 5</title>
</head>
<body>
    <?php
        $connect = mysqli_connect(
            'localhost', 
            'root', // your database username
            '', // you database password - root or empty
            'CSV_DB 16');
            if (!$connect){
                die("Connection Failed " . mysqli_connect_error());
            };

            $query = "SELECT * FROM colors";
            $colors = mysqli_query($connect, $query);

            // echo "<pre>" . print_r($colors) . "</pre>";

            foreach($colors as $color){
                // echo $color['Name'] . "<br>";
                echo "<div class='color' style='background: " . $color['Hex'] . "; width: 100%; height: 100px; text-align: center; color: white;'>".$color['Name']."</div><br>";
            }
    ?>
</body>
</html>