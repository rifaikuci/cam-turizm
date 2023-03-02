<section class="content">

    <form method="post" action="<?php echo base_url_back() . 'kusva/index.php' ?>"
          enctype="multipart/form-data">

        <?php
        getTextHidden("tourInsert", "tourInsert");
        ?>
        <div class="card card-dark">

            <div class="card-header">
                <?php expandable_header(); ?>
                <h3 class="card-title">Tur Bilgileri (Türkçe)</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <?php
                    getTextInput(4, "Başlık", "", "title", '', false, false);
                    getTextArea(12, "Açıklama", "", "description", 3, "", false, false);
                    getNumberInput(3, "Fiyat", "0", "price", '', 1, "","",false,false);
                    getTextInput(12, "Meta Anahtar Kelimeler", "", "metaKeywords", "", false, false);
                    getTextArea(12, "Meta Açıklama", "Açıklama", "metaDescription", 3, "", false, false);
                    ?>

                </div>
                <div class="row">

                </div>
            </div>
        </div>

        <div class="card card-dark">

            <div class="card-header">
                <?php expandable_header(); ?>
                <h3 class="card-title">Tur Bilgileri (İngilizce)</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <?php
                    getTextInput(4, "Başlık", "", "titleE", '', false, false);
                    getTextArea(12, "Açıklama", "", "descriptionE", 3, "", false, false);
                    getNumberInput(3, "Fiyat", "0", "priceE", '', 1, "","",false,false);
                    getTextInput(12, "Meta Anahtar Kelimeler", "", "metaKeywordsE", "", false, false);
                    getTextArea(12, "Meta Açıklama", "Açıklama", "metaDescriptionE", 3, "", false, false);
                    ?>

                </div>
                <div class="row">

                </div>
            </div>
        </div>

        <div class="card card-dark">

            <div class="card-header">
                <?php expandable_header(); ?>
                <h3 class="card-title">Tur Bilgileri (Almanca)</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <?php
                    getTextInput(4, "Başlık", "", "titleA", '', false, false);
                    getTextArea(12, "Açıklama", "", "descriptionA", 3, "", false, false);
                    getNumberInput(3, "Fiyat", "0", "priceA", '', 1, "","",false,false);
                    getTextInput(12, "Meta Anahtar Kelimeler", "", "metaKeywordsA", "", false, false);
                    getTextArea(12, "Meta Açıklama", "Açıklama", "metaDescriptionA", 3, "", false, false);
                    ?>

                </div>
                <div class="row">

                </div>
            </div>
        </div>



        <div class="row">
            <?php
            getTextInput(4, "Video Linki", "", "videoLink", '', false, false);
            getDatetime(3,"Başlangıç Tarihi","startDate","",false,false);
            getDatetime(3,"Bitiş Tarihi","finishDate","",false,false);
            getInputFile(3, "image", "Resim", false, false, false);
            ?>
        </div>

        <div class="card-footer">
            <?php getButton("btn btn-warning", 'left', "Vazgeç", "", false); ?>
            <?php getButton("btn btn-success", 'right', "Ekle", "", false); ?>
        </div>
    </form>
</section>


