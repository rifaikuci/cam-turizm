<?php
$row = getDataRow(1, 'tblSetting', $db);

?>

<section class="content">
    <?php statusAlert(); ?>


    <form method="post" action="<?php echo base_url_back() . 'kusva/index.php' ?>"
          enctype="multipart/form-data">

        <?php
            getTextHidden("settingUpdate", 1);
            getTextHidden("deleteFile", $row['image']);
        ?>
        <div class="card card-dark">

            <div class="card-header">
                <?php expandable_header(); ?>
                <h3 class="card-title">Genel Ayarlar (Türkçe)</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <?php
                    getTextInput(4, "Başlık", "", "title", $row['title'], false, false);
                    getCKEditor(12, "Açıklama", '', "description", $row['description'], false, false);
                    getTextInput(6, "Adres", "", "address", $row['address'], false, false);
                    getTextInput(6, "Harita (link)", "", "maps", $row['maps'], false, false);
                    getTextInput(3, "Cep Tel", "", "phone", $row['phone'], false, false);
                    getTextInput(3, "Whatsapp Tel", "", "whatsappPhone", $row['whatsappPhone'], false, false);
                    getTextInput(3, "Fax", "", "fax", $row['fax'], false, false);
                    getTextInput(3, "Mail", "", "mail", $row['mail'], false, false);
                    getTextInput(3, "Çalışma Zamanları", "", "workTime", $row['workTime'], false, false);
                    getTextInput(12, "Meta Anahtar Kelimeler", "", "metaKeywords", $row['metaKeywords'], false, false);
                    getTextArea(12, "Meta Açıklama", "Açıklama", "metaDescription", 3, $row['metaDescription'], false, false);
                    ?>
                </div>
            </div>
        </div>

        <div class="card card-dark">

            <div class="card-header">
                <?php expandable_header(); ?>
                <h3 class="card-title">Genel Ayarlar (İngilizce)</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <?php
                    getTextInput(4, "Başlık", "", "titleE", $row['titleE'], false, false);
                    getCKEditor(12, "Açıklama", '', "descriptionE", $row['descriptionE'], false, false);
                    getTextInput(6, "Adres", "", "addressE", $row['addressE'], false, false);
                    getTextInput(6, "Harita (link)", "", "mapsE", $row['mapsE'], false, false);
                    getTextInput(3, "Cep Tel", "", "phoneE", $row['phoneE'], false, false);
                    getTextInput(3, "Whatsapp Tel", "", "whatsappPhoneE", $row['whatsappPhoneE'], false, false);
                    getTextInput(3, "Fax", "", "faxE", $row['faxE'], false, false);
                    getTextInput(3, "Mail", "", "mailE", $row['mailE'], false, false);
                    getTextInput(3, "Çalışma Zamanları", "", "workTimeE", $row['workTimeE'], false, false);
                    getTextInput(12, "Meta Anahtar Kelimeler", "", "metaKeywordsE", $row['metaKeywordsE'], false, false);
                    getTextArea(12, "Meta Açıklama", "Açıklama", "metaDescriptionE", 3, $row['metaDescriptionE'], false, false);
                    ?>
                </div>
            </div>
        </div>

        <div class="card card-dark">

            <div class="card-header">
                <?php expandable_header(); ?>
                <h3 class="card-title">Genel Ayarlar (Almanca)</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <?php
                    getTextInput(4, "Başlık", "", "titleA", $row['titleA'], false, false);
                    getCKEditor(12, "Açıklama", '', "descriptionA", $row['descriptionA'], false, false);
                    getTextInput(6, "Adres", "", "addressA", $row['addressA'], false, false);
                    getTextInput(6, "Harita (link)", "", "mapsA", $row['mapsA'], false, false);
                    getTextInput(3, "Cep Tel", "", "phoneA", $row['phoneA'], false, false);
                    getTextInput(3, "Whatsapp Tel", "", "whatsappPhoneA", $row['whatsappPhoneA'], false, false);
                    getTextInput(3, "Fax", "", "faxA", $row['faxA'], false, false);
                    getTextInput(3, "Mail", "", "mailA", $row['mailA'], false, false);
                    getTextInput(3, "Çalışma Zamanları", "", "workTimeA", $row['workTimeA'], false, false);
                    getTextInput(12, "Meta Anahtar Kelimeler", "", "metaKeywordsA", $row['metaKeywordsA'], false, false);
                    getTextArea(12, "Meta Açıklama", "Açıklama", "metaDescriptionA", 3, $row['metaDescriptionA'], false, false);
                    ?>
                </div>
            </div>
        </div>


        <div class="row">
            <?php
            getInputFile(5, "image", "Profil Resmi", true, false, false);
            if ($row['image'])
                getViewFile(5, "Resim", $row['image']);

            ?>
        </div>


        <div class="card-footer">
            <?php getButton("btn btn-warning", 'right', "Güncelle", "", false); ?>
        </div>
    </form>
</section>

