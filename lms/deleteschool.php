<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <h1>Delete School</h1>
    <hr>
    <div>
        <?php include ('nav.php'); ?>
    </div>
    <hr>
    <div>

    <?php
        require('connect.php');

        if(isset($_POST['id'])){
            $id = $_POST['id'];
            $query = "DELETE FROM schools WHERE id = '$id'";
            $school = mysqli_query($connect, $query);

            if($school){
            echo 'School was deleted successfully!';
            header('Location: index.php');
            }else{
            echo "Failed: " . mysqli_error($connect);
            }

        }else{
            echo "Not Authorized";
        }

    ?>