<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>
<h1>CKC Kolektīvi</h1>
<div class="center-div">
    <table>
        <tr>
            <th>Kolektīvs</th>
            <th>Apraksts</th>
        </tr>
        <ul>
            <?php foreach ($posts as $post) { ?>
            <tr>
                <td><?= $post["NAME"] ?> </td>
                <td><?= $post["DESCRIPTION"] ?> </td> 
            <?php } ?>
        </tr>
        </ul>
    </table>
</div>
<?php require "components/footer.php" ?>
