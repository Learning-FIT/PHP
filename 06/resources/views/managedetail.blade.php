<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>書籍編集</title>
</head>
<body>
    <h1>書籍編集</h1>
    <div>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                {{ $error }}<br />
            @endforeach
        @endif
    </div>
    <div class="mainContent">
        <a href="/manage">一覧へ戻る</a>
        <div>
            <form action="" method="post">
                <table>
                    <tr>
                        <td>書籍名</td>
                        <td><input type="text" name="name" id="" value="{{$book->name}}"></td>
                    </tr>
                    <tr>
                        <td>著者</td>
                        <td><input type="text" name="author" id="" value="{{$book->author}}"></td>
                    </tr>
                    <tr>
                        <td>概要</td>
                        <td><textarea name="overview" id="" cols="60" rows="5">{{$book->overview}}</textarea></td>
                    </tr>
                </table>
                <div class="center">
                <input type="submit" class="button" name="submit" value="更新">
                <input type="submit" class="button" name="submit" value="キャンセル">
                </div>
            </form>
        </div>
    </div>
</body>
</html>