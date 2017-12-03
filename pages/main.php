<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP to-do</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>

<?php $users = Users::getAll();?>

<table class="table-bordered table-striped">
    <thead class="thead-dark">
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Отчество</th>
            <th>Дата Рождение</th>
            <th><a class="addButton btn btn-primary">+</a></th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($users as $user): ?>
        <tr data-value= <?=$user->id?> >
            <td> <?=$user->f_name ?> </td>
            <td> <?=$user->s_name ?> </td>
            <td> <?=$user->l_name ?> </td>
            <td> <?=$user->date ?> </td>
            <td>
                <div class="btn-group">
                    <a class="btn btn-warning">Edit</a>
                    <a class="btn btn-danger">Delete</a>
                </div>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<form action="main.php" method="post">
    <input type="text" name="name">
</form>

<script src="../js/index.js"></script>
</body>
</html>