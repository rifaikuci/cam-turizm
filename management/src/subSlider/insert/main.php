<section class="content">

    <form method="post" action="<?php echo base_url_back() . 'kusva/index.php' ?>"
          enctype="multipart/form-data">

        <?php
        getTextHidden("subSliderInsert", "subSliderInsert");
        ?>
        <div class="card card-dark">

            <div class="card-header">
                <?php expandable_header(); ?>
                <h3 class="card-title">Alt Slider Bilgileri (Türkçe)</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <?php
                    getTextInput(4, "Başlık", "", "title", '', false, false);
                    getTextArea(12, "Açıklama", "", "description", 3, "", false, false);

                    ?>

                </div>
                <div class="row">

                </div>
            </div>
        </div>

        <div class="card card-dark">

            <div class="card-header">
                <?php expandable_header(); ?>
                <h3 class="card-title">Alt Slider Bilgileri (İngilizce)</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <?php
                    getTextInput(4, "Başlık", "", "titleE", '', false, false);
                    getTextArea(12, "Açıklama", "", "descriptionE", 3, "", false, false);
                    ?>

                </div>
                <div class="row">

                </div>
            </div>
        </div>

        <div class="card card-dark">

            <div class="card-header">
                <?php expandable_header(); ?>
                <h3 class="card-title">Alt Slider Bilgileri (Almanca)</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <?php
                    getTextInput(4, "Başlık", "", "titleA", '', false, false);
                    getTextArea(12, "Açıklama", "", "descriptionA", 3, "", false, false);

                    ?>

                </div>
                <div class="row">

                </div>
            </div>
        </div>



        <div class="row">
            <?php
            getTextInput(4, "Link", "", "link", '', false, false);
            getTextInput(4, "Class Adı", "", "className", '', false, false);
            getInputFile(3, "image", "Resim", false, false, false);
            ?>
        </div>

        <div class="card-footer">
            <?php getButton("btn btn-warning", 'left', "Vazgeç", "", false); ?>
            <?php getButton("btn btn-success", 'right', "Ekle", "", false); ?>
        </div>
    </form>
</section>


