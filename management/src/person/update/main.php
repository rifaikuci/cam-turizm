<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $row = getDataRow($id, 'tblPerson', $db);

}
?>


<section class="content">

    <form method="post" action="<?php echo base_url_back() . 'kusva/index.php' ?>"
          enctype="multipart/form-data">

        <?php
        getTextHidden("personUpdate", $id);
        getTextHidden("deleteFile", $row['image']);

        ?>
        <div class="card card-dark">

            <div class="card-header">
                <?php expandable_header(); ?>
                <h3 class="card-title">Personel Güncelleme (Türkçe)</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <?php

                    getTextInput(3, "Ad", "", "name", $row['name'], false, false);
                    getTextInput(3, "Soyad", "", "surname", $row['surname'], false, false);
                    getTextInput(3, "Telefon", "", "phone", $row['phone'], false, false);
                    getTextInput(3, "Mail", "", "mail", $row['mail'], false, false);
                    getTextInput(6, "Adres", "", "address", $row['address'], false, false);
                    ?>

                </div>
                <div class="row">

                </div>
            </div>
        </div>


        <div class="row">
            <?php
            getInputFile(3, "image", "Resim", true, false, false);

            if ($row['image'])
                getViewFile(3, "Resim", $row['image']);
            ?>
        </div>

        <div class="card-footer">
            <?php getButton("btn btn-warning", 'left', "Vazgeç", "", false); ?>
            <?php getButton("btn btn-success", 'right', "Güncelle", "", false); ?>
        </div>
    </form>
</section>


