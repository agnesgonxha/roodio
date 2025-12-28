<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Threads</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <a href="{{ route('thread.create') }}">Add thread</a>
    @forelse($threads as $thread)
    <div class="">
        <div class="">
            <span>Title: </span>{{ $thread->title }}
            <p>{{ $thread->content }}</p>
        </div>
        <div class="">
            @session('succes')
            <strong>Success! {{ $value }}</strong>
            @endsession
            @forelse($thread->replies as $reply)
                <p>{{ $reply->content }}</p>
            @empty
            @endforelse
            <div class="">
                <p>Reaction</p>
            </div>
            <div class="">
                <form action="{{ route('thread.reply', $thread) }}" method="POST">
                    @csrf
                    <label for="content">Reply:</label>
                    <textarea name="content" class="border"></textarea>
                    <button type="submit">send</button>
                </form>
                @error('content')
                    {{ $message }}
                @enderror
            </div>
            <div class="mt-10">
                <a href="{{route('thread.index')}}">Back</a>
            </div>
        </div>
    </div>
    @empty
    @endforelse
</body>
</html>
