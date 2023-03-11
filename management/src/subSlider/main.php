<section class="content">
    <?php statusAlert(); ?>

    <?php $data = getAllData("tblSubSlider",'', $db);
    $isVisibleColumn = ["counter","title"];
    $columnName = [ "#", "Başlık"];

    ?>
    <?php getTable($data, $isVisibleColumn, $columnName,
        true,false, true, true,
        "Alt Slider Listesi",
        "",
        "",
        "",
        "",
        "",
        ""); ?>
</section>


