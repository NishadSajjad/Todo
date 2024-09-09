<!DOCTYPE html>
<html>
<head>
    <title>Todo List</title>
</head>
<body>
    <h1>Todo List</h1>
    <ul>
        @foreach($todos as $key => $todo)
            <li>
                {{ $todo['title'] }}
                <a href="{{ route('todos.edit', $key) }}">Edit</a>
                <form action="{{ route('todos.destroy', $key) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

    <form action="{{ route('todos.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="New Todo">
        <button type="submit">Add Todo</button>
    </form>
</body>
</html>
