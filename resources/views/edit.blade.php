<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <title>CURD | DWIT-INTERNSHIP</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter&family=Merriweather:ital,wght@1,700&family=Playpen+Sans:wght@300&family=Poppins:wght@200;300;500&display=swap');

        body {
            font-family: 'Playpen Sans', cursive;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            padding: 12px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        h1 {
            text-align: center;
        }
    </style>
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
        <input type="text" name="title" id="tile" placeholder="Title" value="{{ $note->title }}"><br>
        <label for="tag">Tag</label>
        <input type="text" name="tag" id="tag" placeholder="Tag" value="{{ $note->tag }}"><br>
        <label for="description">Description</label>
        <input type="text" name="description" id="description" placeholder="Description"
            value="{{ $note->description }}"><br>
        <input type="submit" value="Edit Note">
    </form>
</body>

</html>
