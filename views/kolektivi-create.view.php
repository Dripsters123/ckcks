<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>

<h1>Pievieno jaunu Pasākumu</h1>

<form method="POST">
    <label>Nosaukums:
        <input name="name" />
    </label>
    <label>Apraksts:
        <input name="description" />
    </label>


    <button>Pievienot</button>
</form>

<?php require "components/footer.php" ?>