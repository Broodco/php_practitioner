<?php require 'views/partials/head.view.php' ?>

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

<h2>Submit your name</h2>

<form method="POST" action="/names">
    <label>Name
        <input type="text" name="name"/>
    </label>
    <button type="submit">Submit</button>
</form>

<?php require 'views/partials/footer.view.php' ?>
