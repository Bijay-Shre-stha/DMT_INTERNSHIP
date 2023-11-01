<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Note</title>
    <link rel="stylesheet" href="css/index.css">

</head>

<body>
    <h1>Edit Note</h1>
    <div>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        @endif
    </div>
    <form method="POST" action="{{ route('update', ['id' => $note->id]) }}">
        @csrf
        @method('PUT')
        <label for="title">Title</label>
        <input type="text" name="title" id="tile" placeholder="Title" value="{{$note->title}}"><br>
        <label for="tag">Tag</label>
        <input type="text" name="tag" id="tag" placeholder="Tag" value="{{$note->tag}}"><br>
        <label for="description">Description</label>
        <input type="text" name="description" id="description" placeholder="Description" value="{{$note->description}}"><br>
        <input type="submit" value="Edit Note">
    </form>
</body>

</html>
