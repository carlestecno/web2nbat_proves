<?php
$title = 'Tecno2nBAT';
require_once'include/header.php';
require_once'db/connect.php';
require_once'db/crud.php';
$tema_titol = $_GET['tema_titol'];
$id_ex = $_GET['id'];
$crud = new crud($pdo);
$results = $crud->getvalues();
$temes = $crud->gettemes();
$getexercici = $crud->getexercici($id_ex);
?>


<div class="row">
    <div class="col-sm">
    </div>
    <div class="col-sm">
    <?php $i = $getexercici->fetch(PDO::FETCH_ASSOC) ; ?>
        <h5><?php echo $i['any']. " " .$tema_titol; ?></h5>
        <div class="mr-auto p-1">
        <img src="data:image/png;base64,<?php echo base64_encode($i['imatge']); ?>" alt="My image" width="700px">
        </div>
        <div class="mb-auto p-2">
        <a href="<?php echo 'exercicis.php?id=' . $i['id_temes']. '&tema_titol=' . urlencode($i['temes']); ?>" class="btn btn-primary">
                    Tornar <?php echo  $tema_titol; ?>
        </a>
        </div>
    </div>
    <div class="col-sm">
    </div>
</div>

<?php require_once 'include/footer.php'; ?>