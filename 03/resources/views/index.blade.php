@foreach($books as $book)
    {{ $book->name }}
    {{ $book->author }}
    {{ $book->overview }}
@endforeach
<div>
    <a href="/login">ログインページへ</a>
</div>
