<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The PHP Practitioner Course</title>
    <style>
        header {
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>
            Task of the day
        </h1>
    </header>

    <?php /** @var array $tasks */
    foreach ($tasks as $task) : ?>
        <section>
            <ul>
                <li>
                    <strong>Title : </strong><?= ucfirst($task->title) ?>
                </li>
                <li>
                    <strong>Completion : </strong><?= $task->completed ? 'Complete' : 'Incomplete' ?>
                </li>
            </ul>
        </section>
    <?php endforeach; ?>
</body>
</html>
