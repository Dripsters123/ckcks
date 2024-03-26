<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>

<h1>Pievieno jaunu Pasākumu</h1>

<form method="POST">
    <label>Laiks:
        <input name="date_time" />
    </label>
    <label>Nosaukums:
        <input name="nosaukums" />
    </label>
    <label>Norises vieta:
        <input name="norises_vieta" />
    </label>

    <button>Pievienot</button>
</form>

<?php require "components/footer.php" ?>