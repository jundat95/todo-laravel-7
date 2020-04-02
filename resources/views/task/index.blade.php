<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>List Tasks</h1>
    <ul class="list-group">
        @foreach($tasks as $task)
        <li class="list-group-item">
            {{$task->name}}
        </li>
        @endforeach
    </ul>
    <div class="form-group">
        <a class="btn btn-success btn-submit" href="/task/create">Create Task</a>
    </div>
</body>
</html>
