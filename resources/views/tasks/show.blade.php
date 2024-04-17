<!Doctype html>
<html>
<head>
    <title>Task App</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<br>
<br>
<div class="container text-center">
    <h1>Completed Task</h1>
</div>

<div class="container">
    <a href="{{ route('tasks.index') }}" class="btn btn-primary mb-3">Task List</a>

    <table class="table table-bothered">
        <thead class="thead-dark">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Priority</th>
            <th>Completion Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach($completedTask as $task)
            <tr>
                <td>{{ $task->title }}</td>
                <td>{{ $task->description }}</td>
                <td>{{ $task->priority }}</td>
                <td>{{ $task->completed_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudfare.com/ajax/libs/pooper.js/1.16.0/umd/pooper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
