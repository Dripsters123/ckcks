<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>Pasākums</h1>

<?= htmlspecialchars($post["date_time"]) . " / " . htmlspecialchars($post["nosaukums"]) . " / " . htmlspecialchars($post["norises_vieta"]) ?>



<a href="/edit-pas?id=<?= $post["id"] ?>">Edit</a>

<?php require "views/components/footer.php" ?>