<div>
    <?=isset($message) ? $message : ''?>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{ $error }}<br />
        @endforeach
    @endif
    @if (session('flash_message'))
        {{ session('flash_message') }}
    @endif
</div>