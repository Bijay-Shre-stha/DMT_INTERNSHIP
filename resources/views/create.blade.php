<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/index.css">
    <title>CURD | DWIT-INTERNSHIP</title>
</head>

<body>
    <div class="container">
        <h1>Create Note</h1>
        <form method="post" action="{{ route('store') }}">
            @csrf
            @method('post')
            <label for="title">Title</label>
            <input type="text" name="title" id="title" placeholder="Title" required>
            <label for="description">Description</label>
            <input type="text" name="description" id="description" placeholder="Description" required>
            <label for="tag">Tag</label>
            <input type="text" name="tag" id="tag" placeholder="Tag" required>
            <input type="submit" value="Save Note" onclick="{{route('index')}}">
        </form>

    </div>
</body>

</html>
