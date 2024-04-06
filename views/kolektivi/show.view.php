<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>Kolektīvi</h1>

<?= htmlspecialchars($post["NAME"]) . " | " . htmlspecialchars($post["DESCRIPTION"]) ?>



<a href="/edit-kol?id=<?= $post["id"] ?>">Edit</a>

<?php require "views/components/footer.php" ?>