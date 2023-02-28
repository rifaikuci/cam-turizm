<section class="content">
    <?php statusAlert(); ?>

    <?php $data = getAllData("tblServices",'', $db);
    $isVisibleColumn = ["counter","title"];
    $columnName = [ "#", "Başlık"];

    ?>
    <?php getTable($data, $isVisibleColumn, $columnName,
        true,false, true, true,
        "Servisler Listesi",
        "",
        "",
        "",
        "",
        "",
        ""); ?>
</section>


