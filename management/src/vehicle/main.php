<section class="content">
    <?php statusAlert(); ?>

    <?php $data = getAllData("tblVehicle",'', $db);
    $isVisibleColumn = ["counter","title","numberPlate"];
    $columnName = [ "#", "Başlık","Plaka"];

    ?>
    <?php getTable($data, $isVisibleColumn, $columnName,
        true,false, true, true,
        "Araçlar Listesi",
        "",
        "",
        "",
        "",
        "",
        ""); ?>
</section>


