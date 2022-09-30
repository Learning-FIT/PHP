<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST">
        <?php
            session_start();
            $height = "";
            $weight = "";
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                //初回にエラー表示されてしまうのを回避するためには、以下のように「countがセットされていなかったら0を入れる」という処理が必要になる。
                if(!isset($_SESSION["count"])){
                    $_SESSION["count"] = 0;
                }
                $count = $_SESSION["count"];
                $count ++;
                $_SESSION["count"] = $count;
                $height = $_POST["height"];
                $weight = $_POST["weight"];
                $bmi = $weight / ($height * $height);
                $bmi = number_format($bmi,2);
            }
        ?>
        身長<input type="text" name="height" 
            value="<?=$height ?>"><br />
        体重<input type="text" name="weight" 
            value="<?=$weight ?>">
        <input type="submit" value="送信"><br />
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                echo( $count."回目：");
                echo( "BMIは".$bmi."です。");
            }
        ?>
    </form>

</body>
</html>