<?php require 'app/views/partials/head.view.php' ?>

<header>
    <h1>
        Users
    </h1>
</header>

<?php /** @var array $users */
foreach ($users as $user) : ?>
    <section>
        <ul>
            <li>
                <strong>User : </strong><?= ucfirst($user->name) ?>
            </li>
        </ul>
    </section>
<?php endforeach; ?>

<h2>Submit your name</h2>

<form method="POST" action="/users">
    <label>Name
        <input type="text" name="name"/>
    </label>
    <button type="submit">Submit</button>
</form>

<?php require 'app/views/partials/footer.view.php' ?>
