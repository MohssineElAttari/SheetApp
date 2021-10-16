<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google sheet</title>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <?php
    $rp = json_decode(file_get_contents('php://input'), true);


    ?>
    <!-- <form action="" method="post"> -->
    Name: <input type="text" name="name" value="" id="nom">
    <button onclick="showData()">Show data</button> <!-- </form> -->

</body>

</html>