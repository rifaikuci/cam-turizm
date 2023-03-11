<?php $data = getAllData("tblSubSlider", "", $db); ?>

<section id="featured-services">
    <div class="container">
        <div class="row">
            <?php for ($i = 0; $i < count($data); $i++) { ?>

            <div class="col-lg-4 box">
                <i class="<?php echo $data[$i]['className'] ?>"></i>
                <h4 class="title">
                    <a href="<?php echo $data[$i]['link'] ? $data[$i]['link'] : "#" ?>">
                        <?php echo $data[$i]['title'.$langCharacter]?>
                    </a>
                </h4>
                <p class="description">
                    <?php echo $data[$i]['description'.$langCharacter]?>
                </p>
            </div>
            <?php } ?>

        </div>
    </div>
</section>
