<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>Pievieno jaunu Pasākumu</h1>

<form method="POST">
    <label>Nosaukums:
        <input name="NAME" />
    </label>
    <label>Apraksts:
        <input name="DESCRIPTION" />
    </label>

    <button>Pievienot</button>
</form>

<?php require "views/components/footer.php" ?>