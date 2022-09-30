<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo(1+1);
    ?>
    <br>
    <?php
        echo("こんにちは、"."田中さん");
    ?>
    <br>
    <?php
        echo( mb_substr("こんにちは、田中さん！",0,5));
    ?>
    <br>
    <?php
        echo( "こんにちは<br>田中さん！");
    ?>
    <br>
    <?php
        $message = "こんにちは！";
        echo($message);
    ?>
    <br>
    <?php
        $height = 1.8;
        $weight = 70;
        $bmi = $weight / ($height * $height);
        echo("BMIは".$bmi."です。");
    ?>
    <br>

    <?php
        //配列
        $names = ["山田","田中","鈴木"];
        echo($names[1]);
    ?>
    <br>
    <?php
        $names = ["山田","田中","鈴木"];
        array_push($names,"池田");
        echo($names[3]);
    ?>
    <br>
    <?php
        $names = ["山田","田中","鈴木"];
        $number = count($names);
        echo("配列の要素数は".$number."です。");
    ?>
    <br>
    <?php
        $names = ["山田","田中","鈴木","池田"];
        $target = array_slice($names,1,2);
        print_r($target);
    ?>
    <br>

    <?php
        echo(date("Y/m/d H:i:s"));
    ?>
    <br>

</body>
</html>