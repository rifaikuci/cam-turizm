<section class="content">
    <?php statusAlert(); ?>

    <?php $data = getAllData("tblFAQ",'', $db);
    $isVisibleColumn = ["counter","question", "answer"];
    $columnName = [ "#", "Soru", "Cevap"];

    ?>
    <?php getTable($data, $isVisibleColumn, $columnName,
        true,false, true, true,
        "S.S.S. Listesi",
        "",
        "",
        "",
        "",
        "",
        ""); ?>
</section>


