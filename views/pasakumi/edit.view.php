<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>


<form method="POST">
    <input name="id" value="<?= $post["id"] ?>" type="hidden" />
    <label>Date time:
        <input name="date_time" value="<?= $_POST["date_time"] ?? $post["date_time"] ?>" />
        <?php if (isset($errors["date_time"])) { ?>
            <p class="invalid-data"><?= $errors["date_time"] ?></p>
        <?php } ?>
    </label>

    <label>Nosaukums:
        <input name="nosaukums" value="<?= $_POST["nosaukums"] ?? $post["nosaukums"] ?>" />
        <?php if (isset($errors["nosaukums"])) { ?>
            <p class="invalid-data"><?= $errors["nosaukums"] ?></p>
        <?php } ?>
    </label>
    <label>norises vieta:
        <input name="norises_vieta" value="<?= $_POST["norises_vieta"] ?? $post["norises_vieta"] ?>" />
        <?php if (isset($errors["norises_vieta"])) { ?>
            <p class="invalid-data"><?= $errors["norises_vieta"] ?></p>
        <?php } ?>
        <button>Saglabāt</button>
    </label>
</form>
<?php require "views/components/footer.php" ?>