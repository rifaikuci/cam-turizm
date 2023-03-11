<?php
$row = getDataRow(1, 'tblAbout', $db);

?>

<section class="content">
    <?php statusAlert(); ?>


    <form method="post" action="<?php echo base_url_back() . 'kusva/index.php' ?>"
          enctype="multipart/form-data">

        <?php
            getTextHidden("aboutUpdate", 1);
            getTextHidden("deleteFile", $row['image']);
        ?>

        <div class="card card-dark">
            <div class="card-header">
                <?php expandable_header(); ?>
                <h3 class="card-title">Hakkımda (Türkçe)</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <?php
                    getCKEditor(12, "Açıklama", '', "about", $row['about'], false, false);
                    getCKEditor(12, "Misyon", '', "mission", $row['mission'], false, false);
                    getCKEditor(12, "Vizyon", '', "vision", $row['vision'], false, false);
                    getCKEditor(12, "Planlarımız", '', "plan", $row['plan'], false, false);
                    getTextInput(6, "Video Linki", "", "videoLink", $row['videoLink'], false, false);
                    getTextInput(12, "Meta Anahtar Kelimeler", "", "metaKeywords", $row['metaKeywords'], false, false);
                    getTextArea(12, "Meta Açıklama", "Açıklama", "metaDescription", 3, $row['metaDescription'], false, false);
                    ?>
                </div>
            </div>
        </div>

        <div class="card card-dark">
            <div class="card-header">
                <?php expandable_header(); ?>
                <h3 class="card-title">Hakkımda (İngilizce)</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <?php
                    getCKEditor(12, "Açıklama", '', "aboutE", $row['aboutE'], false, false);
                    getCKEditor(12, "Misyon", '', "missionE", $row['missionE'], false, false);
                    getCKEditor(12, "Vizyon", '', "visionE", $row['visionE'], false, false);
                    getCKEditor(12, "Planlarımız", '', "planE", $row['planE'], false, false);
                    getTextInput(6, "Video Linki", "", "videoLinkE", $row['videoLinkE'], false, false);
                    getTextInput(12, "Meta Anahtar Kelimeler", "", "metaKeywordsE", $row['metaKeywordsE'], false, false);
                    getTextArea(12, "Meta Açıklama", "Açıklama", "metaDescriptionE", 3, $row['metaDescriptionE'], false, false);
                    ?>
                </div>
            </div>
        </div>
        <div class="card card-dark">
            <div class="card-header">
                <?php expandable_header(); ?>
                <h3 class="card-title">Hakkımda (Almanca)</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <?php
                    getCKEditor(12, "Açıklama", '', "aboutA", $row['aboutA'], false, false);
                    getCKEditor(12, "Misyon", '', "missionA", $row['missionA'], false, false);
                    getCKEditor(12, "Vizyon", '', "visionA", $row['visionA'], false, false);
                    getCKEditor(12, "Planlarımız", '', "planA", $row['planA'], false, false);
                    getTextInput(6, "Video Linki", "", "videoLinkA", $row['videoLinkA'], false, false);
                    getTextInput(12, "Meta Anahtar Kelimeler", "", "metaKeywordsA", $row['metaKeywordsA'], false, false);
                    getTextArea(12, "Meta Açıklama", "Açıklama", "metaDescriptionA", 3, $row['metaDescriptionA'], false, false);
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            getTextInput(4, "Plan ClassName", "", "classNamePlan", $row['classNamePlan'], false, false);
            getTextInput(4, "Misyon ClassName", "", "classNameMission", $row['classNameMission'], false, false);
            getTextInput(4, "Vizyon ClassName", "", "classNameVision", $row['classNameVision'], false, false);

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

