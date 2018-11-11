<?php
namespace View;
?>

<!DOCTYPE html>
<html>
<head> MVC </head>
<body>
<section>
    <h1>Categories</h1>
    <ul>
        <?php foreach ($categories as $category) : ?>
            <li><?= $category['title'] ?></li>
        <?php endforeach ?>
    </ul>
</section>
</body>
</html>

