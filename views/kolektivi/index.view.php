<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
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
                <td><a href="/show-kol?id=<?= $post['id'] ?>"><?= $post["NAME"] ?></a></td>
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
<?php require "views/components/footer.php" ?>