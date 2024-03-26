<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>
<h1>Pasākumi Cēsīs</h1>
<ul>
    <?php foreach ($posts as $post) { ?>
        <li>
            <?= $post["date_time"] . " /" . $post["nosaukums"] . " /" . $post["norises_vieta"] ?>
            <form method="POST" action="/delete">
                <input type="hidden" name="id" value="<?= $post['id'] ?>">
                <button>Dzēst</button>
            </form>
        </li>
    <?php } ?>
</ul>
<?php require "components/footer.php" ?>