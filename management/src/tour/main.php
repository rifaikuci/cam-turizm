<section class="content">
    <?php statusAlert(); ?>

    <?php $data = getAllData("tblTour",'', $db);
    $isVisibleColumn = ["counter","title"];
    $columnName = [ "#", "Başlık"];

    ?>
    <?php getTable($data, $isVisibleColumn, $columnName,
        true,false, true, true,
        "Turlar Listesi",
        "",
        "",
        "",
        "",
        "",
        ""); ?>
</section>


