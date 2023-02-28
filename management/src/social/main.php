<section class="content">
    <?php statusAlert(); ?>

    <?php $data = getAllData("tblSocial",'', $db);
    $isVisibleColumn = ["counter","title"];
    $columnName = [ "#", "Başlık"];

    ?>
    <?php getTable($data, $isVisibleColumn, $columnName,
        true,false, true, true,
        "Sosyal Medyalar Listesi",
        "",
        "",
        "",
        "",
        "",
        ""); ?>
</section>


