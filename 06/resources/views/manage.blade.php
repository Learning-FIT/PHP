<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/css/style.css">
        <title>書籍管理</title>
    </head>
    <body>
        <h1>書籍管理</h1>
        <div>
            <?= $message ?>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    {{ $error }}<br />
                @endforeach
            @endif
            @if (session('flash_message'))
                {{ session('flash_message') }}
            @endif
        </div>
        <div class="mainContent">
            <a href="/">トップに戻る</a><br />
            <form action="" method="post">
                <table>
                    <tbody>
                        <tr>
                            <th>書籍名</th>
                            <td><input type="text" name="name" value="{{old('name')}}"></td>
                        </tr>
                        <tr>
                            <th>著者</th>
                            <td><input type="text" name="author" value="{{old('author')}}" ></td>
                        </tr>
                        <tr>
                            <th>概要</th>
                            <td>
                                <input type="hidden" name="test" value="1">
                                <textarea rows="4" cols="60" name="overview">{{old('overview')}}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: center;">
                                <input class="button" name="submit" type="submit" value="新規登録">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <table class="mainTable">
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
                        <td>
                            <a href="/managedetail/{{$book->id}}">
                                <button class="button">編集</button></a>
                                <form action="" method="post">
                                    <input type="hidden" name="_method" value="delete">
                                    <input type="hidden" name="book_id" value="{{$book->id}}">
                                    <input type="submit" class="button" value="削除">
                                </form>
                                <a href="/managereview/{{$book->id}}">
                                <button class="button">レビュー</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>