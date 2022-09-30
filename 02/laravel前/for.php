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
        for($i = 0;$i < 10;$i ++){
            echo($i.",");
        }
    ?><br>

    <?php
        $names = ["山田","田中","鈴木"];
        foreach($names as $name){
            echo("こんにちは".$name."さん<br>");
        }
    ?><br>

    <?php
        $names = ["山田","田中","鈴木"];
        for($i = 0;$i < count($names); $i ++){
            echo("こんにちは".$names[$i]."さん<br>");
        }
    ?><br>

    <?php
        $action = "継続";
        while($action == "継続"){
            echo("繰り返します。");
            $action="終了";
        }
    ?><br>

</body>
</html>