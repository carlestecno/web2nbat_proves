<?php
$title = 'Tecno2nBAT';
require_once'include/header.php';
require_once'db/connect.php';
require_once'db/crud.php';
$crud = new crud($pdo);
$results = $crud->getvalues();

?>
<h1></h1>
<?php while($row = $results->fetch(PDO::FETCH_ASSOC)) : ?>
    <tr>
        <td><?php echo $row['id_temes']; ?></td>
    </tr>
</br>
    <?php endwhile; ?>

<?php 
require_once'include/footer.php';
?>