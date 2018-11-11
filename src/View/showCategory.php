<?php
namespace View;
?>


<!DOCTYPE html>
<html>
<head> MVC </head>
<body>
<main>
    <h1><?= $category['title'] ?></h1>
    <ul>
        <li>Id : <?= $category['id'] ?></li>
    </ul>
    <a href='/categories'>Back to list</a>
</main>
</body>
</html>