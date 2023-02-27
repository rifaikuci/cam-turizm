<section class="content">
    <?php statusAlert(); ?>

    <?php $data = getAllData("tblReferences",'', $db);
    $isVisibleColumn = ["counter","name", "title"];
    $columnName = [ "#", "Yetkili", "Referans"];

    ?>
    <?php getTable($data, $isVisibleColumn, $columnName,
        true,false, true, true,
        "Referans Listesi",
        "",
        "",
        "",
        "",
        "",
        ""); ?>
</section>


