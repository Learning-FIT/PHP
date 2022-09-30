<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" >
        <input type="text" name="data" id="data">
        <input type="submit" value="送信">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            echo($_POST["data"]."が送信されました。");
        }
    ?>
</body>
</html>