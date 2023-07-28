<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>

<body>
    <h1>This is the home page</h1>
    <a href="<?=route('page',['id'=>1,'type'=>'first']) ?>">first page</a><br>
    <a href="<?= route('page', ['id' => 1, 'type' => 'number']) ?>">Number page</a><br>
    <a href="<?= route('page', ['id' => 1, 'type' => null]) ?>">First something</a>

</body>

</html>
