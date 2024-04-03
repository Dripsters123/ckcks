<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>Pasākums</h1>

<form action="/edit-pas" method="POST">
    <label for="date_time">Datums un laiks:</label>
    <input type="datetime-local" id="date_time" name="date_time" value="<?= date('Y-m-d\TH:i', strtotime($post['date_time'])) ?>"><br>

    <label for="nosaukums">Nosaukums:</label>
    <input type="text" id="nosaukums" name="nosaukums" value="<?= $post['nosaukums'] ?>"><br>

    <label for="norises_vieta">Norises Vieta:</label>
    <input type="text" id="norises_vieta" name="norises_vieta" value="<?= $post['norises_vieta'] ?>"><br>
    <button name="id" value="<?= $post['id'] ?>">Edit</button>
</form>

<?php require "views/components/footer.php" ?>