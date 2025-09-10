<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        let fname = 'KONG';
        console.log(fname);
        document.write('Welcome back, + ' + fname + '<br>');
    </script>

    <?php
        $fname = 'Kong';
        echo 'Welcome back, ' . $fname;
        echo '<h1 style='\'\>' . $fname . '</h1>'
    ?>

</body>
</html>