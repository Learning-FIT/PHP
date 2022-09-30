<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>ログイン</title>
</head>
<body>
    <h1 class="titleArea">ログイン</h1>
    <div class="mainContent">
        <div>
            <a href="/">トップページへ戻る</a>
        </div>
        <div>
            <form action="" method="post">
                <table>
                    <tr>
                        <td>ユーザーID</td>
                        <td>
                            ：<input type="text" name="id" id="id">
                        </td>
                    </tr>
                    <tr>
                        <td>パスワード</td>
                        <td>
                            ：<input type="password" name="password" id="password">
                        </td>
                    </tr>
                </table>
                <input class="submitDefault" type="submit" value="ログイン">
            </form>
            <div>
                <?= $message ?>
            </div>
        </div>
    </div>
</body>
</html>