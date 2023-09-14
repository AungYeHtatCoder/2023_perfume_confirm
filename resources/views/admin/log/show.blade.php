<!DOCTYPE html>
<html>
<head>
    <title>Log Entries</title>
</head>
<body>
    <h1>Log Entries</h1>

    <ul>
        @foreach ($logEntries as $entry)
            <li>{{ $entry }}</li>
        @endforeach
    </ul>
</body>
</html>
