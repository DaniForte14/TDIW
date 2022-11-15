<?php
$conn = connectaBD();
$sql = 'SELECT id, nom FROM categoria';
$consult_categories = pg_query($conn, $sql);
$categories = pg_fetch_all($consult_categories);

?>
<ul>
    <?php foreach ($categories as $category): ?>
        <li>
            <h3><?php echo $category['nom']?></h3>
        </li>
    <?php endforeach; ?>
</ul>