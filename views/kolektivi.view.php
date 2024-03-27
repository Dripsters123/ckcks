<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>
<h1>CKC Kolektīvi</h1>
<div class="center-div">
    <table>
        <tr>
            <th>Kolektīvs</th>
            <th>Apraksts</th>
            <th>Dzēst</th>
        </tr>
        <?php foreach ($posts as $post) { ?>
            <tr>
                <td><?= $post["NAME"] ?> </td>
                <td><?= $post["DESCRIPTION"] ?> </td>
                <td>
                    <form method="POST" action="/delete-kolektivi">
                        <input type="hidden" name="id" value="<?= $post['id'] ?>">
                        <button>Dzēst</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
<?php require "components/footer.php" ?>