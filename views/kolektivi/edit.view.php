<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>


<form action="/edit-kol" method="POST">
   <label>Kolektīvs:
        <input name="NAME" value="<?= $post["NAME"] ?? "" ?>" />
        <?php if (isset($errors["NAME"])) { ?>
            <p class="invalid-data"><?= $errors["NAME"] ?></p>
        <?php } ?>
    </label>
    <label>Apraksts:</label>
    <input name="DESCRIPTION" value="<?= $post["DESCRIPTION"] ?? "" ?>" />
        <?php if (isset($errors["DESCRIPTION"])) { ?>
            <p class="invalid-data"><?= $errors["DESCRIPTION"] ?></p>
        <?php } ?>

    <input name="id" value="<?= $post["id"] ?>" type="hidden" />
    <button name="id" value="<?= $post['id'] ?>">Edit</button>
</form>
<?php require "views/components/footer.php" ?>
