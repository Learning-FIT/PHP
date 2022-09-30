<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/css/style.css">
        <title>レビュー編集</title>
    </head>
    <body>
        <h1>レビュー編集</h1>
@include('messagearea')
        <div class="mainContent">
            <a href="/managereview/{{$review->book_id}}">一覧へ</a><br>
            <form action="" method="post">
                <table>
                    <tbody>
                        <tr>
                            <th>投稿者名</th>
                            <td><input type="hidden" name="review_id" value="{{$review->id}}">
                                <input type="hidden" name="book_id" value="{{$review->book_id}}">
                                <input type="text" name="post_name" value="{{old('post_name',$review->post_name)}}"></td>
                        </tr>
                        <tr>
                            <th>レビュー内容</th>
                            <td>
                                <textarea rows="4" name="review" cols="60">{{old('review',$review->review)}}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: center;">
                                <input class="button" type="submit" value="更新">
                                <a href="/managereview/{{$review->book_id}}"><button class="button" type="button">キャンセル</button></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </0div>
    </body>
</html>