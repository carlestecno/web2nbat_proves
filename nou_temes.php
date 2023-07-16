<?php
$title = 'Tecno2nBAT';
require_once'include/header.php';
require_once'db/connect.php';
require_once'db/crud.php';
$crud = new crud($pdo);
$results = $crud->getvalues();
$temes = $crud->gettemes();
?>
<?php while($row = $results->fetch(PDO::FETCH_ASSOC)) : ?>
    <tr>
        <td><?php echo $row['id_temes']; ?></td>
    </tr>
</br>
<?php endwhile; ?>

<?php while ($row = $results->fetch(PDO::FETCH_ASSOC)) : ?>
    <table>
        <tr>
            <td><?php echo $row['id_temes']; ?></td>
        </tr>
    </table>
    <br>
<?php endwhile; ?>
<?php
$categories = [];
$temes->execute();
while ($row = $temes->fetch(PDO::FETCH_ASSOC)) {
    $categories[] = $row;
}
$count_temes = 0;
echo '<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">';
foreach ($categories as $index => $category) {
    echo '<div class="col">';
    echo '<div class="card mb-4 shadow-sm">';
    echo '<div class="card-body">';
    echo '<a href="exercicis.php?id=' . $category['id_temes'] . '" class="w-100 btn btn-lg btn-primary">';
    echo $category['temes'];
    echo '</a>';
    echo '<div class="d-flex justify-content-between align-items-center">';
    echo '<div class="btn-group mt-2">';
    echo '<a href="' . $category['link_teoria'] . '" type="button" class="btn btn-sm btn-outline-secondary">Teoria</a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    if (($index + 1) % 3 === 0 && ($index + 1) !== count($categories)) {
        echo '</div>';
        echo '<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">';
    }
    $count_temes++;
}
echo '</div>';

?>

<?php require_once 'include/footer.php'; ?>

