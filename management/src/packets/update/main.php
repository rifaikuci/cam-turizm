<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $row = getDataRow($id, 'tblPackets', $db);

}
?>


<section class="content">

    <form method="post" action="<?php echo base_url_back() . 'kusva/index.php' ?>"
          enctype="multipart/form-data">

        <?php
        getTextHidden("packetsUpdate", $id);
        getTextHidden("deleteFile", $row['image']);
        ?>
        <div class="card card-dark">

            <div class="card-header">
                <?php expandable_header(); ?>
                <h3 class="card-title">Paket Listesi (Türkçe)</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <?php
                    getTextInput(4, "Başlık", "", "title", $row['title'], false, false);
                    getTextInput(8, "Alt Başlık", "", "subTitle", $row['subTitle'], false, false);
                    getTextArea(12, "Açıklama", "", "description", 3, $row['description'], false, false);
                    getNumberInput(3, "Fiyat", "0", "price", $row['price'], 1, "", "", false, false);
                    getTextInput(12, "Meta Anahtar Kelimeler", "", "metaKeywords", $row['metaKeywords'], false, false);
                    getTextArea(12, "Meta Açıklama", "Açıklama", "metaDescription", 3, $row['metaDescription'], false, false);

                    ?>

                </div>
                <div class="row">

                </div>
            </div>
        </div>

        <div class="card card-dark">

            <div class="card-header">
                <?php expandable_header(); ?>
                <h3 class="card-title">Paket Listesi (İngilizce)</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <?php
                    getTextInput(4, "Başlık", "", "titleE", $row['titleE'], false, false);
                    getTextInput(8, "Alt Başlık", "", "subTitleE", $row['subTitleE'], false, false);
                    getTextArea(12, "Açıklama", "", "descriptionE", 3, $row['descriptionE'], false, false);
                    getNumberInput(3, "Fiyat", "0", "priceE", $row['priceE'], 1, "", "", false, false);
                    getTextInput(12, "Meta Anahtar Kelimeler", "", "metaKeywordsE", $row['metaKeywordsE'], false, false);
                    getTextArea(12, "Meta Açıklama", "Açıklama", "metaDescriptionE", 3, $row['metaDescriptionE'], false, false);

                    ?>

                </div>
                <div class="row">

                </div>
            </div>
        </div>

        <div class="card card-dark">

            <div class="card-header">
                <?php expandable_header(); ?>
                <h3 class="card-title">Paket Listesi (Almanca)</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <?php
                    getTextInput(4, "Başlık", "", "titleA", $row['titleA'], false, false);
                    getTextInput(8, "Alt Başlık", "", "subTitleA", $row['subTitleA'], false, false);
                    getTextArea(12, "Açıklama", "", "descriptionA", 3, $row['descriptionA'], false, false);
                    getNumberInput(3, "Fiyat", "0", "priceA", $row['priceA'], 1, "", "", false, false);
                    getTextInput(12, "Meta Anahtar Kelimeler", "", "metaKeywordsA", $row['metaKeywordsA'], false, false);
                    getTextArea(12, "Meta Açıklama", "Açıklama", "metaDescriptionA", 3, $row['metaDescriptionA'], false, false);

                    ?>

                </div>
                <div class="row">

                </div>
            </div>
        </div>




        <div class="row">
            <?php
            getTextInput(4, "Video Linki", "", "videoLink", $row['videoLink'], false, false);
            getDatetime(3,"Başlangıç Tarihi","startDate",$row['startDate'],false,false);
            getDatetime(3,"Bitiş Tarihi","finishDate",$row['finishDate'],false,false);
            getInputFile(3, "image", "Resim", false, false, false);
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


