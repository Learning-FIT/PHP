<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>
</head>
<body>
    <h1>書籍詳細</h1>
    <div class="<?= $messageClass ?>">
        <?= $message ?>
    </div>
    <div class="mainContent">
        <a href="/">トップに戻る</a>
        <table>
            <thead></thead>
            <tbody>
                <tr>
                    <td><span class="bold">書籍名：</span>{{$book->name}}</td>
                </tr>
                <tr>
                    <td><span class="bold">著者：</span>{{$book->author}}</td>
                </tr>
                <tr>
                    <td><span class="bold">概要：</span>{{$book->overview}}</td>
                </tr>
            </tbody>
        </table>
        <div style="border: 1px solid #000;">
            <form action="" method="post">
                レビュー投稿<br>
                <table>
                    <tr>
                        <td>名前</td>
                        <td><input type="text" name="post_name"></td>
                    </tr>
                    <tr>
                        <td>レビュー</td>
                        <td><textarea cols="60" name="review" rows="6"></textarea></td>
                    </tr>
                </table>
                <input class="button" type="submit" value="レビューを投稿">
            </form>
        </div>
        <p>【レビュー一覧】</p>
        @foreach ($reviews as $review)
        <div class="comment">
            <div class="">
                <div class="">
                    {{$review->post_name}}
                </div>
                <div class="">
                    {{$review->post_time}}
                </div>
            </div>
            <div class="">
                <p>{{$review->review}}</p>
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>