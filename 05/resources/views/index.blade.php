<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">

    <title>書籍一覧</title>
</head>

<body>
    <h1>書籍一覧</h1>
    <div class="loginArea">
        <a href="/login"><button>ログイン</button></a>
    </div>
    <div class="searchArea">
        <form action="" method="post">
            <span>絞り込み：</span>
            <input type="text" name="search" value="<?=$search ?>">&nbsp;
            <input type="submit" class="button" value="絞り込み">
        </form>
    </div>
    <div class="mainContent">
        <table  class="mainTable">
            <thead>
                <tr>
                    <th>書籍名</th>
                    <th>著者</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                <tr>
                    <td>{{$book->name}}</td>
                    <td>{{$book->author}}</td>
                    <td><a href="/detail/{{$book->id}}">詳細へ</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>