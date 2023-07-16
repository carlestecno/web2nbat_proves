<?php
$title = 'Tecno2nBAT';
require_once'include/header.php';
require_once'db/connect.php';
require_once'db/crud.php';
$id_temes = $_GET['id'];
$crud = new crud($pdo);
$results = $crud->getvalues();
$temes = $crud->gettemes();
$getexercici = $crud->getexercici($id_temes);
?>

<div class="row">
    <div class="col-sm">
    </div>
    <div class="col-sm">
        <h5><?php echo $show_exercici['any']; ?></h5>
        <div class="mr-auto p-1">
            <img src="<?php echo $show_exercici['imatge']; ?>" alt="My image" width="700px">
        </div>
        <div class="mb-auto p-2">
            <a href="<?php echo url('temes:exercicis', $show_exercici['category_id']); ?>" class="btn btn-primary">
                Tornar
            </a>
        </div>
    </div>
    <div class="col-sm">
    </div>
</div>
