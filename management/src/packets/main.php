<section class="content">
    <?php statusAlert(); ?>

    <?php $data = getAllData("tblPackets",'', $db);
    $isVisibleColumn = ["counter","title", "subTitle"];
    $columnName = [ "#", "Başlık", "Alt Başlık"];

    ?>
    <?php getTable($data, $isVisibleColumn, $columnName,
        true,false, true, true,
        "Paketler Listesi",
        "",
        "",
        "",
        "",
        "",
        ""); ?>
</section>


