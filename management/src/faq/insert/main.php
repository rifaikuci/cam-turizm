<section class="content">

    <form method="post" action="<?php echo base_url_back() . 'kusva/index.php' ?>"
          enctype="multipart/form-data">

        <?php
        getTextHidden("faqInsert", "faqInsert");
        ?>
        <div class="card card-dark">

            <div class="card-header">
                <?php expandable_header(); ?>
                <h3 class="card-title">S.S.S. (Türkçe)</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <?php
                    getTextArea(12, "Soru", "", "question", 3, "", false, false);
                    getTextArea(12, "Cevap", "", "answer", 3, "", false, false);
                    ?>

                </div>
            </div>
        </div>

        <div class="card card-dark">

            <div class="card-header">
                <?php expandable_header(); ?>
                <h3 class="card-title">S.S.S. (İngilizce)</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <?php
                    getTextArea(12, "Soru", "", "questionE", 3, "", false, false);
                    getTextArea(12, "Cevap", "", "answerE", 3, "", false, false);
                    ?>

                </div>
            </div>
        </div>

        <div class="card card-dark">

            <div class="card-header">
                <?php expandable_header(); ?>
                <h3 class="card-title">S.S.S. (Almanca)</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <?php
                    getTextArea(12, "Soru", "", "questionA", 3, "", false, false);
                    getTextArea(12, "Cevap", "", "answerA", 3, "", false, false);
                    ?>

                </div>
            </div>
        </div>


        <div class="row">
            <?php
            getTextInput(3, "Video Linki", "", "videoLink", '', false, false);
            getInputFile(3, "image", "Resim", false, false, false);
            ?>
        </div>

        <div class="card-footer">
            <?php getButton("btn btn-warning", 'left', "Vazgeç", "", false); ?>
            <?php getButton("btn btn-success", 'right', "Ekle", "", false); ?>
        </div>
    </form>
</section>


