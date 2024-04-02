<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>Pievieno jaunu Pasākumu</h1>

<form method="POST">

    <label>Laiks:
        <input name="date_time" />
        <?php if (isset($errors["date_time"])) { ?>
            <p class="invalid-data"><?= $errors["date_time"] ?></p>
        <?php } ?>
    </label>
    <label>Nosaukums:
        <input name="nosaukums" />
        <?php if (isset($errors["nosaukums"])) { ?>
            <p class="invalid-data"><?= $errors["nosaukums"] ?></p>
        <?php } ?>
    </label>
    <label>Norises vieta:
        <input name="norises_vieta" />
        <?php if (isset($errors["norises_vieta"])) { ?>
            <p class="invalid-data"><?= $errors["norises_vieta"] ?></p>
        <?php } ?>
    </label>

    <button>Pievienot</button>
</form>

<?php require "views/components/footer.php" ?>