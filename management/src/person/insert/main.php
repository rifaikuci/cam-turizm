

<section class="content">

    <form method="post" action="<?php echo base_url_back() . 'kusva/index.php' ?>"
          enctype="multipart/form-data">

        <?php
        getTextHidden("personInsert","personInsert");
        ?>
        <div class="card card-dark">

            <div class="card-header">
                <?php expandable_header(); ?>
                <h3 class="card-title">Personel Ekleme (Türkçe)</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <?php
                    getTextInput(3, "Ad", "", "name", '', false, false);
                    getTextInput(3, "Soyad", "", "surname", '', false, false);
                    getTextInput(3, "Telefon", "", "phone", '', false, false);
                    getTextInput(3, "Mail", "", "mail", '', false, false);
                    getTextInput(3, "Şifre", "", "password", '', false, false);
                    getTextInput(6, "Adres", "", "address", '', false, false);
                    getTextArea(12, "Açıklama", "", "description", '', false, false,false);
                    ?>

                </div>
                <div class="row">

                </div>
            </div>
        </div>


        <div class="row">
            <?php
            getInputFile(3, "image", "Resim", false, false, false);
            ?>
        </div>

        <div class="card-footer">
            <?php getButton("btn btn-warning", 'left', "Vazgeç", "", false); ?>
            <?php getButton("btn btn-success", 'right', "Ekle", "", false); ?>
        </div>
    </form>
</section>


