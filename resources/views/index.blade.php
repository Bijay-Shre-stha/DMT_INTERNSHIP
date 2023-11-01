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
            {{-- Cross-site request forgeries --}}
            @csrf
            @method('post')
            <label for="title">Title</label>
            <input type="text" name="title" id="title" placeholder="Title" required>
            <label for="description">Description</label>
            <input type="text" name="description" id="description" placeholder="Description" required>
            <label for="tag">Tag</label>
            <input type="text" name="tag" id="tag" placeholder="Tag" required>
            <input type="submit" value="Save Note">
        </form>

        <h1>Note List</h1>
        @if (session()->has('success'))
            <div class="alert">
                {{ session()->get('success') }}
            </div>
        @endif
        @if (session()->has('error'))
            <div class="alert">
                {{ session()->get('error') }}
            </div>
        @endif
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Tag</th>
                        <th>Action</th>
                        <th>Created Time</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($notes as $note)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $note->title }}</td>
                            <td>{{ $note->description }}</td>
                            <td>{{ $note->tag }}</td>
                            <td class="action">
                                <a class="text-success" href="{{ route('edit', $note->id) }}">Edit</a>
                                <a class="text-danger" href="{{ route('delete', $note->id) }}">Delete</a>
                            </td>
                            <td>{{ $note->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<script>
    setTimeout(() => {
        document.querySelector('.alert').style.display = 'none';
    }, 2000);
</script>

</html>
