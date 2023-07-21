<?php
$title = 'Tecno2nBAT';
require_once'include/header.php';
require_once'db/connect.php';
require_once'db/crud.php';
$id_temes = $_GET['id'];
$crud = new crud($pdo);
$results = $crud->getvalues();
$temes = $crud->gettemes();
$getexercicis = $crud->getexercicis($id_temes);
$tema_titol = $_GET['tema_titol'];
?>
<div class="row">
    <div class="col-sm"></div>
    <div class="col-sm">
        <?php 
        $exercicis = [];
        $getexercicis->execute();
        while ($row = $getexercicis->fetch(PDO::FETCH_ASSOC)){
            $exercicis[] = $row;
        }
        ?>
        <?php foreach (array_reverse($exercicis) as $i) : ?>
            <div class="mb-auto p-2">
                <h5><?php echo $i['any'] . " " .$tema_titol; ?></h5>
            </div>
            <div class="mb-auto p-2">
                <img src="data:image/png;base64,<?php echo base64_encode($i['imatge']); ?>" alt="My image" width="600px">
            </div>
            <div class="mb-auto p-2">
                <a href="<?php echo 'exercici_gran.php?id=' . $i['id_numero_exercici']. '&tema_titol='. $i['temes']; ?>" class="btn btn-primary">
                    Exercici <?php echo $i['numero_exercici']; ?>
                </a>
            </div>
            <div class="card mb-4 shadow-sm"></div>
        <?php endforeach; ?>
    </div>
    <div class="col-sm"></div>
</div>


<?php require_once 'include/footer.php'; ?>

