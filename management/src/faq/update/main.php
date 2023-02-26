<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $row = getDataRow($id, 'tblFAQ', $db);

}
?>


<section class="content">

    <form method="post" action="<?php echo base_url_back() . 'kusva/index.php' ?>"
          enctype="multipart/form-data">

        <?php
        getTextHidden("faqUpdate", $id);
        getTextHidden("deleteFile", $row['image']);
        ?>
        <div class="card card-dark">

            <div class="card-header">
                <?php expandable_header(); ?>
                <h3 class="card-title">S.S.S. Listesi (Türkçe)</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <?php
                    getTextArea(12, "Soru", "", "question", 3, $row['question'], false, false);
                    getTextArea(12, "Cevap", "", "answer", 3, $row['answer'], false, false);
                    ?>

                </div>
                <div class="row">

                </div>
            </div>
        </div>

        <div class="card card-dark">

            <div class="card-header">
                <?php expandable_header(); ?>
                <h3 class="card-title">S.S.S. Listesi (İngilizce)</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <?php
                    getTextArea(12, "Soru", "", "questionE", 3, $row['questionE'], false, false);
                    getTextArea(12, "Cevap", "", "answerE", 3, $row['answerE'], false, false);
                    ?>

                </div>
                <div class="row">

                </div>
            </div>
        </div>


        <div class="card card-dark">

            <div class="card-header">
                <?php expandable_header(); ?>
                <h3 class="card-title">S.S.S. Listesi (Almanca)</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <?php
                    getTextArea(12, "Soru", "", "questionA", 3, $row['questionA'], false, false);
                    getTextArea(12, "Cevap", "", "answerA", 3, $row['answerA'], false, false);
                    ?>

                </div>
                <div class="row">

                </div>
            </div>
        </div>

        <div class="row">
            <?php
            getTextInput(3, "Video Linki", "", "videoLink", $row['videoLink'], false, false);

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


