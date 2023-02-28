<section class="content">
    <?php statusAlert(); ?>

    <?php $data = getAllData("tblSlider",'', $db);
    $isVisibleColumn = ["counter","title", "subTitle"];
    $columnName = [ "#", "Başlık", "Alt Başlık"];

    ?>
    <?php getTable($data, $isVisibleColumn, $columnName,
        true,false, true, true,
        "Sliderlar Listesi",
        "",
        "",
        "",
        "",
        "",
        ""); ?>
</section>


