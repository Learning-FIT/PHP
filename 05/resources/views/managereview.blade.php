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
    <h1>レビュー管理</h1>
    <div>
        <?=$message ?>
    </div>
    <div class="mainContent">
        <a href="/manage">一覧へ</a>
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
        <p>【レビュー一覧】</p>
        @foreach ($reviews as $review)
        <div class="comment">
            <div class="">
                <div>
                    <form action="" method="post">
                        <input type="hidden" name="review_id" value="{{$review->id}}">
                        <a href="/managereviewdetail/{{$review->id}}"><button class="button" type="button">編集</button></a>&nbsp;<input class="button" type="submit" value="削除">
                    </form>
                </div>
                <div class="">{{$review->post_name}}</div>
                <div class="">{{$review->post_time}}</div>
            </div>
            <div class=""><p>{{$review->review}}</p></div>
        </div>
        @endforeach
    </div>
</body>
</html>