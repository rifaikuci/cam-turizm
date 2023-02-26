<section class="content">
    <?php statusAlert(); ?>

    <?php $data = getAllData("tblCustomer",'', $db);
    $isVisibleColumn = ["counter","name", "surname","phone","mail"];
    $columnName = [ "#", "Ad", "Soyad", "Telefon", "Mail"];

    ?>
    <?php getTable($data, $isVisibleColumn, $columnName,
        true,false, true, true,
        "Personel Listesi",
        "",
        "",
        "",
        "",
        "",
        ""); ?>
</section>


