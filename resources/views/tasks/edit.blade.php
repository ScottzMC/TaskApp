<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<br>
<br>

<div class="container">
    <a href="{{ route('tasks.index') }}" class="btn btn-primary mb-3">Task List</a>
    <h1>Create Task</h1>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $task->title }}" required>
        </div>
        <div class="form-group">
            <label for="title">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ $task->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="title">Priority</label>
            <select class="form-control" id="priority" name="priority">
                <option value="low" @if($task->priority == 'low') selected @endif>Low</option>
                <option value="medium" @if($task->priority == 'medium') selected @endif>Medium</option>
                <option value="high" @if($task->priority == 'high') selected @endif>High</option>
            </select>
        </div>
        <div class="form-group">
            <label for="due_date">Due Date</label>
            <input type="date" class="form-control" id="due_date" name="due_date" value="{{ $task->due_date }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudfare.com/ajax/libs/pooper.js/1.16.0/umd/pooper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
