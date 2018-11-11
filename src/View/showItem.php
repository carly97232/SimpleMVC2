<?php
namespace View;
?>


<!DOCTYPE html>
<html>
<head> MVC </head>
<body>
<main>
    <h1><?= $item['title'] ?></h1>
    <ul>
        <li>Id : <?= $item['id'] ?></li>
    </ul>
    <a href='/'>Back to list</a>
</main>
</body>
</html>