<?php ob_start(); ?>
<div>
    <h2><?= htmlspecialchars($fieldsOptions[0]['fieldName']) ?></h2>
    <p>Field ID: <?= htmlspecialchars($fieldsOptions[0]['fieldId']) ?></p>
    <p>Tarif per Hour (HT): <?= htmlspecialchars($fieldsOptions[0]['fieldTarifHourHT']) ?></p>
    <p>Tarif per Day (HT): <?= htmlspecialchars($fieldsOptions[0]['fieldTarifDayHT']) ?></p>
</div>
<div class="container mt-5">
    <div class="row">
        <?php foreach ($fieldsOptions as $fieldsOption) : ?>
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $fieldsOption['optionName']; ?></h5>
                        <img src="<?php echo $fieldsOption['imageURL']; ?>" class="card-img-top" alt="Image Placeholder"> -->
                        <p class="card-text"><?php echo $fieldsOption['description']; ?></p> -->
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck<?php echo $fieldsOption['optionId']; ?>">
                            <label class="form-check-label" for="exampleCheck<?php echo $fieldsOption['optionId']; ?>">Selectionner l'option</label>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<?php $content = ob_get_clean();
require('src/template/Layout.php');
?>