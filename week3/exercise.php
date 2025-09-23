<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 3 - Challenge 2</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            background: #00de29ff;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #ff0000ff;
        }

    </style>
    
</head>
<body>
    <h1>Directory</h1>
    <?php
        // Function to fetch user data from the JSONPlaceholder API
        function getUsers() {
            $url = "https://jsonplaceholder.typicode.com/users";
            $data = file_get_contents($url);
            return json_decode($data, true);
        }

        // Get the list of users
        $users = getUsers();

        for ($i = 0; $i < count($users); $i++) {
            $user = $users[$i];
            $name = $user['name'];
            $email = $user['email'];
            $address = $user['address']['street'] . ", " . $user['address']['suite'] . ", " . $user['address']['city'] . " - " . $user['address']['zipcode'];
            ?>
            <div class="contact">
                <h2><?php echo $name; ?></h2>
                <p id="email">Email: <?php echo $email; ?></p>
                <p id="address" class="address">Address: <?php echo $address; ?></p>
            </div>
            <?php
        }
    ?>
</body>
</html>